<?php

return [
  'name' => '💻 Dart & Flutter Basics',
  'description' => 'Core syntax and concepts of Dart & Flutter',
  'question_lang' => 'en',
  'answer_lang' => 'en',
  'cards' => [
    0 => [
      'q' => 'What is the entry point function in a Dart application?',
      'a' => 'main()',
    ],
    1 => [
      'q' => 'How do you declare a read-only variable that is initialized at runtime?',
      'a' => 'final',
    ],
    2 => [
      'q' => 'How do you declare a compile-time constant variable?',
      'a' => 'const',
    ],
    3 => [
      'q' => 'What keyword is used to handle null safety by declaring a variable can be null?',
      'a' => '? (e.g. String?)',
    ],
    4 => [
      'q' => 'What is the base class for all widgets in Flutter?',
      'a' => 'Widget',
    ],
    5 => [
      'q' => 'Which widget type has no mutable state?',
      'a' => 'StatelessWidget',
    ],
    6 => [
      'q' => 'Which widget type can rebuild when its internal state changes?',
      'a' => 'StatefulWidget',
    ],
    7 => [
      'q' => 'What method is called to trigger a rebuild of a StatefulWidget?',
      'a' => 'setState()',
    ],
    8 => [
      'q' => 'What is the default layout widget for stacking widgets vertically?',
      'a' => 'Column',
    ],
    9 => [
      'q' => 'What is the default layout widget for stacking widgets horizontally?',
      'a' => 'Row',
    ],
    10 => [
      'q' => 'Which widget is used to apply padding around its child?',
      'a' => 'Padding',
    ],
    11 => [
      'q' => 'Which widget allows scrollable linear lists of widgets?',
      'a' => 'ListView',
    ],
    12 => [
      'q' => 'What class provides visual structure templates like AppBar, Drawer, and SnackBar?',
      'a' => 'Scaffold',
    ],
    13 => [
      'q' => 'How do you print a message to the console in Dart?',
      'a' => 'print(\'message\');',
    ],
    14 => [
      'q' => 'What symbol is used for string interpolation in Dart?',
      'a' => '$ (e.g., "Hello $name")',
    ],
    15 => [
      'q' => 'What structure is used to run asynchronous operations in Dart?',
      'a' => 'Future',
    ],
    16 => [
      'q' => 'What keywords are used to write asynchronous code looking like synchronous code?',
      'a' => 'async and await',
    ],
    17 => [
      'q' => 'What function is called when a stateful widget is inserted into the widget tree?',
      'a' => 'initState()',
    ],
    18 => [
      'q' => 'What function is called when a stateful widget is removed from the widget tree permanently?',
      'a' => 'dispose()',
    ],
    19 => [
      'q' => 'What is the name of Flutters package manager command-line tool?',
      'a' => 'flutter pub',
    ],
  ],
];
