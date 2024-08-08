<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateFlashcardSeeder extends Seeder
{
    public function run()
    {
        $decks = DB::table('template_decks')->pluck('id', 'name');

        $flashcards = [
            'Programming' => [
                ['question' => 'Алгоритм', 'answer' => 'Algorithm', 'weight' => 0],
                ['question' => 'Переменная', 'answer' => 'Variable', 'weight' => 0],
                ['question' => 'Функция', 'answer' => 'Function', 'weight' => 0],
                ['question' => 'Массив', 'answer' => 'Array', 'weight' => 0],
                ['question' => 'Объект', 'answer' => 'Object', 'weight' => 0],
                ['question' => 'Класс', 'answer' => 'Class', 'weight' => 0],
                ['question' => 'Интерфейс', 'answer' => 'Interface', 'weight' => 0],
                ['question' => 'Наследование', 'answer' => 'Inheritance', 'weight' => 0],
                ['question' => 'Полиморфизм', 'answer' => 'Polymorphism', 'weight' => 0],
                ['question' => 'Инкапсуляция', 'answer' => 'Encapsulation', 'weight' => 0],
                ['question' => 'Абстракция', 'answer' => 'Abstraction', 'weight' => 0],
                ['question' => 'Синтаксис', 'answer' => 'Syntax', 'weight' => 0],
                ['question' => 'Компилятор', 'answer' => 'Compiler', 'weight' => 0],
                ['question' => 'Интерпретатор', 'answer' => 'Interpreter', 'weight' => 0],
                ['question' => 'Библиотека', 'answer' => 'Library', 'weight' => 0],
                ['question' => 'Фреймворк', 'answer' => 'Framework', 'weight' => 0],
                ['question' => 'Модуль', 'answer' => 'Module', 'weight' => 0],
                ['question' => 'Пакет', 'answer' => 'Package', 'weight' => 0],
                ['question' => 'Сборка', 'answer' => 'Build', 'weight' => 0],
                ['question' => 'Отладка', 'answer' => 'Debugging', 'weight' => 0],
                ['question' => 'Рефакторинг', 'answer' => 'Refactoring', 'weight' => 0],
                ['question' => 'Тестирование', 'answer' => 'Testing', 'weight' => 0],
                ['question' => 'Версия', 'answer' => 'Version', 'weight' => 0],
                ['question' => 'Репозиторий', 'answer' => 'Repository', 'weight' => 0],
                ['question' => 'Пулл-реквест', 'answer' => 'Pull Request', 'weight' => 0],
                ['question' => 'Контейнеризация', 'answer' => 'Containerization', 'weight' => 0],
                ['question' => 'Виртуализация', 'answer' => 'Virtualization', 'weight' => 0],
                ['question' => 'Микросервис', 'answer' => 'Microservice', 'weight' => 0],
                ['question' => 'Архитектура', 'answer' => 'Architecture', 'weight' => 0],
                ['question' => 'Разработка', 'answer' => 'Development', 'weight' => 0],
            ],
            'Medicine' => [
                ['question' => 'Диагноз', 'answer' => 'Diagnosis', 'weight' => 0],
                ['question' => 'Лекарство', 'answer' => 'Medicine', 'weight' => 0],
                ['question' => 'Врач', 'answer' => 'Doctor', 'weight' => 0],
                ['question' => 'Пациент', 'answer' => 'Patient', 'weight' => 0],
                ['question' => 'Терапия', 'answer' => 'Therapy', 'weight' => 0],
                ['question' => 'Хирургия', 'answer' => 'Surgery', 'weight' => 0],
                ['question' => 'Анализ крови', 'answer' => 'Blood Test', 'weight' => 0],
                ['question' => 'УЗИ', 'answer' => 'Ultrasound', 'weight' => 0],
                ['question' => 'Рентген', 'answer' => 'X-ray', 'weight' => 0],
                ['question' => 'Терапевт', 'answer' => 'Therapist', 'weight' => 0],
                ['question' => 'Операция', 'answer' => 'Operation', 'weight' => 0],
                ['question' => 'Вакцина', 'answer' => 'Vaccine', 'weight' => 0],
                ['question' => 'Иммунитет', 'answer' => 'Immunity', 'weight' => 0],
                ['question' => 'Эпидемия', 'answer' => 'Epidemic', 'weight' => 0],
                ['question' => 'Пандемия', 'answer' => 'Pandemic', 'weight' => 0],
                ['question' => 'Симптом', 'answer' => 'Symptom', 'weight' => 0],
                ['question' => 'Диета', 'answer' => 'Diet', 'weight' => 0],
                ['question' => 'Аллергия', 'answer' => 'Allergy', 'weight' => 0],
                ['question' => 'Инфекция', 'answer' => 'Infection', 'weight' => 0],
                ['question' => 'Воспаление', 'answer' => 'Inflammation', 'weight' => 0],
                ['question' => 'Онкология', 'answer' => 'Oncology', 'weight' => 0],
                ['question' => 'Кардиология', 'answer' => 'Cardiology', 'weight' => 0],
                ['question' => 'Неврология', 'answer' => 'Neurology', 'weight' => 0],
                ['question' => 'Дерматология', 'answer' => 'Dermatology', 'weight' => 0],
                ['question' => 'Педиатрия', 'answer' => 'Pediatrics', 'weight' => 0],
                ['question' => 'Психиатрия', 'answer' => 'Psychiatry', 'weight' => 0],
                ['question' => 'Гинекология', 'answer' => 'Gynecology', 'weight' => 0],
                ['question' => 'Урология', 'answer' => 'Urology', 'weight' => 0],
                ['question' => 'Ревматология', 'answer' => 'Rheumatology', 'weight' => 0],
                ['question' => 'Гастроэнтерология', 'answer' => 'Gastroenterology', 'weight' => 0],
                ['question' => 'Эндокринология', 'answer' => 'Endocrinology', 'weight' => 0],
            ],

            'Technical' => [
                ['question' => 'Розетка', 'answer' => 'Socket', 'weight' => 0],
                ['question' => 'Провод', 'answer' => 'Wire', 'weight' => 0],
                ['question' => 'Аккумулятор', 'answer' => 'Battery', 'weight' => 0],
                ['question' => 'Электричество', 'answer' => 'Electricity', 'weight' => 0],
                ['question' => 'Заземление', 'answer' => 'Grounding', 'weight' => 0],
                ['question' => 'Напряжение', 'answer' => 'Voltage', 'weight' => 0],
                ['question' => 'Ток', 'answer' => 'Current', 'weight' => 0],
                ['question' => 'Сопротивление', 'answer' => 'Resistance', 'weight' => 0],
                ['question' => 'Осциллограф', 'answer' => 'Oscilloscope', 'weight' => 0],
                ['question' => 'Трансформатор', 'answer' => 'Transformer', 'weight' => 0],
                ['question' => 'Конденсатор', 'answer' => 'Capacitor', 'weight' => 0],
                ['question' => 'Резистор', 'answer' => 'Resistor', 'weight' => 0],
                ['question' => 'Диод', 'answer' => 'Diode', 'weight' => 0],
                ['question' => 'Транзистор', 'answer' => 'Transistor', 'weight' => 0],
                ['question' => 'Инвертор', 'answer' => 'Inverter', 'weight' => 0],
                ['question' => 'Преобразователь', 'answer' => 'Converter', 'weight' => 0],
                ['question' => 'Электродвигатель', 'answer' => 'Electric Motor', 'weight' => 0],
                ['question' => 'Генератор', 'answer' => 'Generator', 'weight' => 0],
                ['question' => 'Мультиметр', 'answer' => 'Multimeter', 'weight' => 0],
                ['question' => 'Светодиод', 'answer' => 'LED', 'weight' => 0],
                ['question' => 'Паяльник', 'answer' => 'Soldering Iron', 'weight' => 0],
                ['question' => 'Схема', 'answer' => 'Circuit', 'weight' => 0],
                ['question' => 'Плата', 'answer' => 'Board', 'weight' => 0],
                ['question' => 'Контактор', 'answer' => 'Contactor', 'weight' => 0],
                ['question' => 'Реле', 'answer' => 'Relay', 'weight' => 0],
                ['question' => 'Панель управления', 'answer' => 'Control Panel', 'weight' => 0],
                ['question' => 'Защитное устройство', 'answer' => 'Protective Device', 'weight' => 0],
                ['question' => 'Частотный преобразователь', 'answer' => 'Frequency Converter', 'weight' => 0],
                ['question' => 'Автоматический выключатель', 'answer' => 'Circuit Breaker', 'weight' => 0],
                ['question' => 'Предохранитель', 'answer' => 'Fuse', 'weight' => 0],
                ['question' => 'Стабилизатор напряжения', 'answer' => 'Voltage Stabilizer', 'weight' => 0],
            ],
        ];

        foreach ($flashcards as $deckName => $cards) {
            foreach ($cards as $card) {
                DB::table('template_flashcards')->insert([
                    'deck_id' => $decks[$deckName],
                    'question' => $card['question'],
                    'answer' => $card['answer'],
                    'weight' => $card['weight'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
