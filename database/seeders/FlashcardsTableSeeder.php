<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlashcardsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('flashcards')->insert([
            [
                'deck_id' => 1,
                'question' => 'What is the powerhouse of the cell?',
                'answer' => 'Mitochondria',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 2,
                'question' => 'What is the chemical symbol for water?',
                'answer' => 'H2O',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 3,
                'question' => 'What is the atomic number of Carbon?',
                'answer' => '6',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'deck_id' => 4,
                'question' => 'Inheritance',
                'answer' => 'Наследование',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Encapsulation',
                'answer' => 'Инкапсуляция',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Polymorphism',
                'answer' => 'Полиморфизм',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Abstraction',
                'answer' => 'Абстракция',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Query',
                'answer' => 'Запрос',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'deck_id' => 4,
                'question' => 'Foreign Key',
                'answer' => 'Внешний ключ',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Constraint',
                'answer' => 'Ограничение',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'deck_id' => 4,
                'question' => 'Join',
                'answer' => 'Соединение',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'View',
                'answer' => 'Представление',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Deadlock',
                'answer' => 'Взаимная блокировка',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Design Pattern',
                'answer' => 'Шаблон проектирования',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Singleton Pattern',
                'answer' => 'Шаблон одиночка',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Factory Pattern',
                'answer' => 'Фабричный метод',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Observer Pattern',
                'answer' => 'Шаблон наблюдатель',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Decorator Pattern',
                'answer' => 'Шаблон декоратор',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Strategy Pattern',
                'answer' => 'Шаблон стратегия',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Repository Pattern',
                'answer' => 'Шаблон репозиторий',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Dependency Injection',
                'answer' => 'Внедрение зависимости',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Inversion of Control',
                'answer' => 'Инверсия управления',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'deck_id' => 4,
                'question' => 'Single Responsibility Principle',
                'answer' => 'Принцип единственной ответственности',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Open/Closed Principle',
                'answer' => 'Принцип открытости/закрытости',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Liskov Substitution Principle',
                'answer' => 'Принцип подстановки Лисков',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Interface Segregation Principle',
                'answer' => 'Принцип разделения интерфейсов',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deck_id' => 4,
                'question' => 'Dependency Inversion Principle',
                'answer' => 'Принцип инверсии зависимостей',
                'weight' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
