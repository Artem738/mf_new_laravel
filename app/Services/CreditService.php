<?php

namespace App\Services;

use App\Models\User;
use App\Models\CreditTransaction;
use Illuminate\Support\Facades\DB;
use Exception;

class CreditService
{
    /**
     * Изменяет баланс пользователя (amount может быть отрицательным или положительным)
     */
    public function adjust(User $user, int $amount, string $type, ?string $description = null, ?string $referenceId = null): CreditTransaction
    {
        return DB::transaction(function () use ($user, $amount, $type, $description, $referenceId) {
            // Блокируем строку пользователя для предотвращения race conditions
            $lockedUser = User::where('id', $user->id)->lockForUpdate()->first();
            
            if ($amount < 0 && $lockedUser->ai_credits < abs($amount)) {
                throw new Exception('Недостаточно кредитов');
            }

            $lockedUser->ai_credits += $amount;
            $lockedUser->save();

            // Синхронизируем инстанс пользователя в памяти
            $user->ai_credits = $lockedUser->ai_credits;

            return CreditTransaction::create([
                'user_id' => $lockedUser->id,
                'amount' => $amount,
                'balance_after' => $lockedUser->ai_credits,
                'type' => $type,
                'description' => $description,
                'reference_id' => $referenceId,
            ]);
        });
    }
}
