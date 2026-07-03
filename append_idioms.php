<?php

$dir = '/home/artem/mf_new/database/seeders/seeds_data/ru/languages/english/';

function appendCards($filename, $newCardsStr) {
    global $dir;
    $file = $dir . $filename;
    if (!file_exists($file)) return;
    $content = file_get_contents($file);
    // find the last array closer
    $search = "    ],\n];";
    if (strpos($content, $search) !== false) {
        $content = str_replace($search, $newCardsStr . "\n" . $search, $content);
        file_put_contents($file, $content);
    }
}

// Idioms part 2
$idioms = <<<PHP
        // --- Massive Idioms Expansion ---
        ['q' => 'Нет худа без добра', 'a' => 'A blessing in disguise'],
        ['q' => 'Пруд пруди (очень распространенное, копеечное дело)', 'a' => 'A dime a dozen'],
        ['q' => 'Ходить вокруг да около', 'a' => 'Beat around the bush'],
        ['q' => 'Лучше поздно, чем никогда', 'a' => 'Better late than never'],
        ['q' => 'Закругляться (заканчивать работу на сегодня)', 'a' => 'Call it a day'],
        ['q' => 'Дать кому-то поблажку / Не судить строго', 'a' => 'Cut somebody some slack'],
        ['q' => 'Тише едешь, дальше будешь / Полегче!', 'a' => 'Easy does it'],
        ['q' => 'Выйти из-под контроля', 'a' => 'Get out of hand'],
        ['q' => 'Выпустить пар (сделать то, что давно хотелось)', 'a' => 'Get something out of your system'],
        ['q' => 'Держись / Не сдавайся', 'a' => 'Hang in there'],
        ['q' => 'Отправиться на боковую (идти спать)', 'a' => 'Hit the sack / Hit the hay'],
        ['q' => 'Это не высшая математика (это не сложно)', 'a' => 'It\'s not rocket science'],
        ['q' => 'Избавить кого-то от ответственности (отпустить с крючка)', 'a' => 'Let someone off the hook'],
        ['q' => 'Короче говоря', 'a' => 'Make a long story short / Long story short'],
        ['q' => 'Без труда не выловишь и рыбку из пруда', 'a' => 'No pain, no gain'],
        ['q' => 'Возьми себя в руки', 'a' => 'Pull yourself together'],
        ['q' => 'Легок на помине', 'a' => 'Speak of the devil'],
        ['q' => 'Это последняя капля', 'a' => 'That\'s the last straw'],
        ['q' => 'Идеальная ситуация (лучшее из двух миров)', 'a' => 'The best of both worlds'],
        ['q' => 'Время летит незаметно', 'a' => 'Time flies when you\'re having fun'],
        ['q' => 'Разозлиться из-за пустяка', 'a' => 'Get bent out of shape'],
        ['q' => 'В довершение ко всему (хуже того)', 'a' => 'To make matters worse'],
        ['q' => 'Сквозь огонь и воду (и в горе, и в радости)', 'a' => 'Through thick and thin'],
        ['q' => 'Буря в стакане воды (много шума из ничего)', 'a' => 'A storm in a teacup'],
        ['q' => 'В полном порядке (здоров, как огурчик)', 'a' => 'As right as rain'],
        ['q' => 'Сжигать мосты', 'a' => 'Burn bridges'],
        ['q' => 'Здоров как бык', 'a' => 'Fit as a fiddle'],
        ['q' => 'С треском провалиться', 'a' => 'Go down in flames'],
        ['q' => 'Сделать всё возможное (перевернуть каждый камень)', 'a' => 'Leave no stone unturned'],
        ['q' => 'Быть заваленным работой (как снегом)', 'a' => 'Be snowed under'],
        ['q' => 'Отложить на потом (давай в другой раз)', 'a' => 'Take a rain check'],
        ['q' => 'Отбросить осторожность (рискнуть)', 'a' => 'Throw caution to the wind'],
        ['q' => 'Дела давно минувших дней (что было, то прошло)', 'a' => 'Water under the bridge'],
PHP;
appendCards('english_idioms.php', $idioms);

echo "Idioms added";
