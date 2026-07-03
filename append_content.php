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

// Idioms
$idioms = <<<PHP
        // --- Popular Idioms ---
        ['q' => 'Скрепя сердце (сделать то, что не хочется)', 'a' => 'Bite the bullet'],
        ['q' => 'Проболтаться (выдать секрет)', 'a' => 'Spill the beans / Let the cat out of the bag'],
        ['q' => 'Нездоровиться (чувствовать себя плохо)', 'a' => 'Be under the weather'],
        ['q' => 'Проще простого / Пара пустяков', 'a' => 'A piece of cake'],
        ['q' => 'Ни пуха ни пера! (Удачи!)', 'a' => 'Break a leg!'],
        ['q' => 'Попасть в точку (сказать абсолютно верно)', 'a' => 'Hit the nail on the head'],
        ['q' => 'Раз в сто лет (очень редко)', 'a' => 'Once in a blue moon'],
        ['q' => 'Относиться скептически (не принимать на веру)', 'a' => 'Take it with a grain of salt'],
        ['q' => 'Перетянуть одеяло на себя (украсть славу)', 'a' => 'Steal someone\'s thunder'],
        ['q' => 'Идти по ложному следу (ошибаться)', 'a' => 'Bark up the wrong tree'],
        ['q' => 'Работать до поздней ночи', 'a' => 'Burn the midnight oil'],
        ['q' => 'Халтурить (экономить на качестве)', 'a' => 'Cut corners'],
        ['q' => 'Слон в комнате (очевидная проблема, о которой молчат)', 'a' => 'The elephant in the room'],
        ['q' => 'Присоединиться к большинству (поддаться моде)', 'a' => 'Jump on the bandwagon'],
        ['q' => 'Упустить шанс', 'a' => 'Miss the boat'],
        ['q' => 'Быть начеку / Схватывать на лету', 'a' => 'Be on the ball'],
        ['q' => 'Разыгрывать кого-то (вешать лапшу на уши)', 'a' => 'Pull someone\'s leg'],
        ['q' => 'Эмпирическое правило (золотое правило)', 'a' => 'Rule of thumb'],
        ['q' => 'Уложить в голове (осознать, понять)', 'a' => 'Wrap your head around something'],
PHP;
appendCards('english_idioms.php', $idioms);

// A1 Vocab
$a1_voc = <<<PHP
        // --- Basic Verbs ---
        ['q' => 'Бегать / Прыгать', 'a' => 'Run / Jump'],
        ['q' => 'Плавать / Летать', 'a' => 'Swim / Fly'],
        ['q' => 'Водить машину / Ездить верхом (на велосипеде)', 'a' => 'Drive / Ride'],
        // --- Colors ---
        ['q' => 'Красный / Синий / Зеленый', 'a' => 'Red / Blue / Green'],
        ['q' => 'Желтый / Черный / Белый', 'a' => 'Yellow / Black / White'],
        ['q' => 'Серый / Розовый / Оранжевый', 'a' => 'Gray / Pink / Orange'],
        // --- Days & Months ---
        ['q' => 'Понедельник / Вторник / Среда', 'a' => 'Monday / Tuesday / Wednesday'],
        ['q' => 'Четверг / Пятница', 'a' => 'Thursday / Friday'],
        ['q' => 'Суббота / Воскресенье', 'a' => 'Saturday / Sunday'],
        ['q' => 'Январь / Февраль / Март', 'a' => 'January / February / March'],
        // --- Feelings ---
        ['q' => 'Счастливый / Грустный', 'a' => 'Happy / Sad'],
        ['q' => 'Злой / Уставший', 'a' => 'Angry / Tired'],
        ['q' => 'Голодный / Испытывающий жажду', 'a' => 'Hungry / Thirsty'],
        ['q' => 'Напуганный', 'a' => 'Scared'],
PHP;
appendCards('english_a1_vocabulary.php', $a1_voc);

// A1 Grammar
$a1_gram = <<<PHP
        // --- Prepositions of Place ---
        ['q' => 'The cat is ___ (в) the box.', 'a' => "✅ **in**\n\n*💡 Правило: in = внутри.*"],
        ['q' => 'The book is ___ (на) the table.', 'a' => "✅ **on**\n\n*💡 Правило: on = на поверхности.*"],
        ['q' => 'The dog is ___ (под) the bed.', 'a' => "✅ **under**\n\n*💡 Правило: under = под чем-то.*"],
        ['q' => 'The park is ___ ___ (рядом с) my house.', 'a' => "✅ **next to**\n\n*💡 Правило: next to = рядом с.*"],
        // --- Demonstratives ---
        ['q' => '___ (Этот) book is mine.', 'a' => "✅ **This**\n\n*💡 Правило: This - этот (единственное число, рядом).*"],
        ['q' => '___ (Те) apples are green.', 'a' => "✅ **Those**\n\n*💡 Правило: Those - те (множественное число, далеко).*"],
        // --- Object Pronouns ---
        ['q' => 'Call ___ (меня) tomorrow.', 'a' => "✅ **me**\n\n*💡 Правило: me = меня/мне.*"],
        ['q' => 'I saw ___ (его) yesterday.', 'a' => "✅ **him**\n\n*💡 Правило: him = его/ему.*"],
PHP;
appendCards('english_a1_grammar.php', $a1_gram);

// A2 Vocab
$a2_voc = <<<PHP
        // --- Clothes ---
        ['q' => 'Рубашка / Брюки', 'a' => 'Shirt / Trousers (Pants)'],
        ['q' => 'Юбка / Платье', 'a' => 'Skirt / Dress'],
        ['q' => 'Пальто / Куртка', 'a' => 'Coat / Jacket'],
        ['q' => 'Обувь / Носки', 'a' => 'Shoes / Socks'],
        ['q' => 'Шапка / Шарф', 'a' => 'Hat / Scarf'],
        // --- Weather ---
        ['q' => 'Солнечно / Дождливо', 'a' => 'Sunny / Rainy'],
        ['q' => 'Облачно / Ветрено', 'a' => 'Cloudy / Windy'],
        ['q' => 'Снежно / Туманно', 'a' => 'Snowy / Foggy'],
        // --- Transport ---
        ['q' => 'Поезд / Самолет / Автобус', 'a' => 'Train / Plane / Bus'],
        ['q' => 'Велосипед / Мотоцикл', 'a' => 'Bicycle (Bike) / Motorcycle'],
        ['q' => 'Лодка / Корабль', 'a' => 'Boat / Ship'],
        // --- Health ---
        ['q' => 'Головная боль / Боль в животе', 'a' => 'Headache / Stomachache'],
        ['q' => 'Зубная боль / Кашель', 'a' => 'Toothache / Cough'],
        ['q' => 'Жар (температура) / Простуда', 'a' => 'Fever / Cold'],
PHP;
appendCards('english_a2_vocabulary.php', $a2_voc);

// A2 Grammar
$a2_gram = <<<PHP
        // --- Past Continuous & Used To ---
        ['q' => 'I ___ ___ (смотрел) TV when she called.', 'a' => "✅ **was watching**\n\n*💡 Правило: Past Continuous (was/were + V-ing) для длительного действия в прошлом.*"],
        ['q' => 'I ___ ___ (раньше играл) play tennis, but now I don\'t.', 'a' => "✅ **used to**\n\n*💡 Правило: used to + глагол = привычка в прошлом, которой больше нет.*"],
        // --- Modals (Must vs Have to vs Should) ---
        ['q' => 'You ___ (должен) wear a seatbelt. It\'s the law.', 'a' => "✅ **have to / must**\n\n*💡 Правило: have to - внешнее обязательство (закон).*"],
        ['q' => 'You ___ (следует) see a doctor.', 'a' => "✅ **should**\n\n*💡 Правило: should - совет.*"],
        // --- First Conditional ---
        ['q' => 'If it ___ (пойдет дождь), we will stay home.', 'a' => "✅ **rains**\n\n*💡 Правило: First Conditional. После If используем Present Simple (rains), а в главной части - Future (will).*"],
PHP;
appendCards('english_a2_grammar.php', $a2_gram);

// B1 Vocab
$b1_voc = <<<PHP
        // --- Personality (B1) ---
        ['q' => 'Надежный / Заслуживающий доверия', 'a' => 'Reliable / Trustworthy'],
        ['q' => 'Упрямый', 'a' => 'Stubborn'],
        ['q' => 'Эгоистичный', 'a' => 'Selfish'],
        ['q' => 'Уверенный в себе', 'a' => 'Confident'],
        ['q' => 'Застенчивый', 'a' => 'Shy'],
        // --- Daily Routines & Chores ---
        ['q' => 'Гладить одежду', 'a' => 'Do the ironing'],
        ['q' => 'Мыть посуду', 'a' => 'Do the washing-up'],
        ['q' => 'Выносить мусор', 'a' => 'Take out the rubbish'],
        ['q' => 'Пылесосить', 'a' => 'Vacuum the floor'],
PHP;
appendCards('english_b1_vocabulary.php', $b1_voc);

// B1 Grammar
$b1_gram = <<<PHP
        // --- Present Perfect vs Past Simple ---
        ['q' => 'I ___ (know) him for 5 years.', 'a' => "✅ **have known**\n\n*💡 Правило: Действие началось в прошлом и длится до сих пор (Present Perfect).*"],
        ['q' => 'I ___ (meet) him in 2015.', 'a' => "✅ **met**\n\n*💡 Правило: Точное время в прошлом (Past Simple).*"],
        // --- Relative Clauses (who/which/that) ---
        ['q' => 'The man ___ (который) lives here is a doctor.', 'a' => "✅ **who / that**\n\n*💡 Правило: Для людей используем who или that.*"],
        ['q' => 'The car ___ (которую) I bought is fast.', 'a' => "✅ **which / that**\n\n*💡 Правило: Для вещей используем which или that.*"],
        ['q' => 'The city ___ (где) I live is big.', 'a' => "✅ **where**\n\n*💡 Правило: Для мест используем where.*"],
PHP;
appendCards('english_b1_grammar.php', $b1_gram);

// B2 Vocab
$b2_voc = <<<PHP
        // --- Feelings & Emotions (B2) ---
        ['q' => 'В восторге (очень рад)', 'a' => 'Thrilled / Delighted'],
        ['q' => 'Опустошенный (морально)', 'a' => 'Devastated'],
        ['q' => 'Ошеломленный', 'a' => 'Overwhelmed'],
        ['q' => 'Обиженный / Оскорбленный', 'a' => 'Offended / Insulted'],
        ['q' => 'Облегчение (чувствовать облегчение)', 'a' => 'Relieved'],
        // --- Technology & Internet ---
        ['q' => 'Транслировать в прямом эфире', 'a' => 'Live stream'],
        ['q' => 'Алгоритм поиска', 'a' => 'Search algorithm'],
        ['q' => 'Киберзапугивание', 'a' => 'Cyberbullying'],
        ['q' => 'Утечка данных', 'a' => 'Data breach'],
PHP;
appendCards('english_b2_vocabulary.php', $b2_voc);

// B2 Grammar
$b2_gram = <<<PHP
        // --- Passive Voice (Advanced Tenses) ---
        ['q' => 'The house ___ ___ ___ (будет построен) by next year.', 'a' => "✅ **will have been built**\n\n*💡 Правило: Future Perfect Passive.*"],
        ['q' => 'The project ___ ___ ___ (должен быть закончен) tomorrow.', 'a' => "✅ **must be finished / should be finished**\n\n*💡 Правило: Modal Passive (Modal + be + V3).*"],
        // --- Unreal Past (I wish / If only B2) ---
        ['q' => 'I wish you ___ (stop) making that noise!', 'a' => "✅ **would stop**\n\n*💡 Правило: I wish + somebody + would = раздражение по поводу чужого поведения.*"],
PHP;
appendCards('english_b2_grammar.php', $b2_gram);

// C1 Vocab
$c1_voc = <<<PHP
        // --- Advanced Nuances & Nouns ---
        ['q' => 'Предвзятое отношение (Склонность)', 'a' => 'Predisposition / Bias'],
        ['q' => 'Последствие (негативное)', 'a' => 'Repercussion / Ramification'],
        ['q' => 'Удерживать (останавливать от действия)', 'a' => 'Deter'],
        ['q' => 'Расшифровывать (понимать скрытый смысл)', 'a' => 'Decipher'],
        ['q' => 'Процветать', 'a' => 'Thrive / Flourish'],
        // --- Complex Idiomatic Phrases ---
        ['q' => 'Бросить на произвол судьбы', 'a' => 'Leave someone in the lurch'],
        ['q' => 'Смириться (принять горькую правду)', 'a' => 'Swallow a bitter pill'],
        ['q' => 'Смотреть сквозь пальцы (закрывать глаза на что-то)', 'a' => 'Turn a blind eye'],
        ['q' => 'Зайти слишком далеко (перегнуть палку)', 'a' => 'Cross the line'],
PHP;
appendCards('english_c1_vocabulary.php', $c1_voc);

// C1 Grammar
$c1_gram = <<<PHP
        // --- Advanced Relative Clauses & Connectors ---
        ['q' => 'The company, ___ ___ (директор которой) was arrested, is bankrupt.', 'a' => "✅ **the director of which / whose director**\n\n*💡 Правило: Формальная притяжательная конструкция.*"],
        ['q' => '___ ___ (Что бы ни) happens, stay calm.', 'a' => "✅ **No matter what / Whatever**\n\n*💡 Правило: Уступительные формы с wh- словами.*"],
        ['q' => '___ ___ ___ (Где бы ни) you go, I will find you.', 'a' => "✅ **No matter where / Wherever**\n\n*💡 Правило: Wherever = No matter where.*"],
PHP;
appendCards('english_c1_grammar.php', $c1_gram);

// C2 Vocab
$c2_voc = <<<PHP
        // --- Extreme Nuances (Proficiency) ---
        ['q' => 'Неопровержимый', 'a' => 'Irrefutable / Incontrovertible'],
        ['q' => 'Снисходительный (Высокомерный)', 'a' => 'Condescending / Patronizing'],
        ['q' => 'Неразрешимый (о проблеме)', 'a' => 'Intractable'],
        ['q' => 'Опрометчивый / Безрассудный', 'a' => 'Foolhardy / Temerarious'],
        ['q' => 'Хвастливый', 'a' => 'Boastful / Braggadocious'],
        ['q' => 'Скрытый (Латентный)', 'a' => 'Latent'],
        ['q' => 'Пагубный (Вредный)', 'a' => 'Detrimental / Pernicious'],
        ['q' => 'Жгучий / Язвительный (о критике)', 'a' => 'Scathing / Caustic'],
        ['q' => 'Красноречивый (Убедительный)', 'a' => 'Eloquent / Articulate'],
PHP;
appendCards('english_c2_vocabulary.php', $c2_voc);

// C2 Grammar
$c2_gram = <<<PHP
        // --- Extreme Edge Cases C2 ---
        ['q' => 'It was not the money, ___ ___ ___ (а принцип, который) mattered.', 'a' => "✅ **but the principle that**\n\n*💡 Правило: Продвинутые Cleft Sentences с противопоставлением (It was not X, but Y that...)*"],
        ['q' => 'She is ___ ___ (безусловно) the most talented musician here.', 'a' => "✅ **easily / arguably / undoubtedly**\n\n*💡 Правило: C2 усилители превосходной степени.*"],
        ['q' => '___ ___ ___ (Ни за что на свете) would I do that.', 'a' => "✅ **Not for anything / Under no circumstances**\n\n*💡 Правило: Эмфатическая инверсия.*"],
PHP;
appendCards('english_c2_grammar.php', $c2_gram);

echo "Success";
