<?php

return [
  'name' => '💻 Dart & Flutter Syntax',
  'description' => 'Програмирование на Dart и Flutter. Просто Код...',
  'question_lang' => 'ru',
  'answer_lang' => 'en',
  'cards' => [
    0 => [
      'q' => 'Переменная',
      'a' => 'var myVariable;',
    ],
    1 => [
      'q' => 'Константа',
      'a' => 'const myConst\\n = 42;',
    ],
    2 => [
      'q' => 'Тип данных',
      'a' => 'int, double,\\n String, bool',
    ],
    3 => [
      'q' => 'Список',
      'a' => 'List<int> numbers\\n = [1, 2, 3];',
    ],
    4 => [
      'q' => 'Карта',
      'a' => 'Map<String, int>\\n myMap = {\'one\': 1};',
    ],
    5 => [
      'q' => 'Цикл for',
      'a' => 'for (var i = 0;\\n i < 5; i++) {}',
    ],
    6 => [
      'q' => 'Цикл while',
      'a' => 'while (condition)\\n {}',
    ],
    7 => [
      'q' => 'Функция',
      'a' => 'void myFunction()\\n {}',
    ],
    8 => [
      'q' => 'Анонимная функция',
      'a' => '(int x) =>\\n x * 2;',
    ],
    9 => [
      'q' => 'Класс',
      'a' => 'class MyClass\\n {}',
    ],
    10 => [
      'q' => 'Конструктор',
      'a' => 'MyClass(this.value);',
    ],
    11 => [
      'q' => 'Наследование',
      'a' => 'class Child extends\\n Parent {}',
    ],
    12 => [
      'q' => 'Полиморфизм',
      'a' => 'Parent obj =\\n Child();',
    ],
    13 => [
      'q' => 'Интерфейс',
      'a' => 'abstract class\\n MyInterface {}',
    ],
    14 => [
      'q' => 'Миксин',
      'a' => 'mixin MyMixin\\n {}',
    ],
    15 => [
      'q' => 'Асинхронность',
      'a' => 'Future<void>\\n fetchData() async {}',
    ],
    16 => [
      'q' => 'Await',
      'a' => 'await\\n fetchData();',
    ],
    17 => [
      'q' => 'Замыкание',
      'a' => 'Function add(int x)\\n => (int y) => x + y;',
    ],
    18 => [
      'q' => 'Конечный автомат',
      'a' => 'switch (state)\\n { case ... }',
    ],
    19 => [
      'q' => 'Провайдер',
      'a' => 'ChangeNotifierProvider(create:\\n (_) => MyModel());',
    ],
    20 => [
      'q' => 'Навигация',
      'a' => 'Navigator.push(context,\\n route);',
    ],
    21 => [
      'q' => 'Стейт',
      'a' => 'class MyStatefulWidgetState\\n extends State<MyWidget> {}',
    ],
    22 => [
      'q' => 'Билд метод',
      'a' => 'Widget build(BuildContext\\n context) {}',
    ],
    23 => [
      'q' => 'Контейнер',
      'a' => 'Container(width: 100,\\n height: 100);',
    ],
    24 => [
      'q' => 'Стек',
      'a' => 'Stack(children:\\n [Widget1(], Widget2()]);',
    ],
    25 => [
      'q' => 'Стрим',
      'a' => 'Stream<int> myStream\\n = Stream.value(1);',
    ],
    26 => [
      'q' => 'Асинхронный генератор',
      'a' => 'Stream<int> async*\\n myGenerator() {}',
    ],
    27 => [
      'q' => 'Фьючи',
      'a' => 'Future<int> futureValue\\n = Future.value(10);',
    ],
    28 => [
      'q' => 'Контекст сборки',
      'a' => 'final context =\\n this.context;',
    ],
    29 => [
      'q' => 'Инициализация состояния',
      'a' => '@override void\\n initState() {}',
    ],
    30 => [
      'q' => 'Завершение состояния',
      'a' => '@override void\\n dispose() {}',
    ],
    31 => [
      'q' => 'Текстовый виджет',
      'a' => 'Text(\'Hello\\n World\');',
    ],
    32 => [
      'q' => 'Кнопка',
      'a' => 'ElevatedButton(onPressed:\\n () {}, child: Text(\'Press\'));',
    ],
    33 => [
      'q' => 'Диалог',
      'a' => 'showDialog(context:\\n context, builder: (_) =>\\n AlertDialog());',
    ],
    34 => [
      'q' => 'Локализация',
      'a' => 'MaterialApp(localizationsDelegates:\\n ...);',
    ],
    35 => [
      'q' => 'Анимация',
      'a' => 'AnimationController(vsync:\\n this, duration:\\n Duration(seconds: 1));',
    ],
    36 => [
      'q' => 'Тестирование',
      'a' => 'testWidgets(\'My Widget\\n Test\', (WidgetTester tester)\\n async {});',
    ],
    37 => [
      'q' => 'HTTP запрос',
      'a' => 'http.get(Uri.parse(\'https://\\n example.com\'));',
    ],
    38 => [
      'q' => 'JSON сериализация',
      'a' => 'jsonEncode(myObject);',
    ],
    39 => [
      'q' => 'Локальное хранилище',
      'a' => 'SharedPreferences prefs =\\n await SharedPreferences.getInstance();',
    ],
    40 => [
      'q' => 'Медиапроигрыватель',
      'a' => 'VideoPlayerController.network(\'https://\\n example.com/video.mp4\');',
    ],
    41 => [
      'q' => 'Пакет',
      'a' => 'import \'package:provider/\\n provider.dart\';',
    ],
    42 => [
      'q' => 'Библиотека',
      'a' => 'library\\n my_library;',
    ],
  ],
];
