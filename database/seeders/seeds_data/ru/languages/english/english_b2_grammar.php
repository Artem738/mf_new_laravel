<?php

return [
    'name' => '🔴 🇬🇧 Английский: Грамматика B2 (Продвинутая)',
    'description' => 'Максимальный набор грамматических структур уровня B2: Inversion, Participle Clauses, Alternatives to IF, Cleft sentences, Advanced Modals, The... the... comparatives, и нюансы исчисляемых/неисчисляемых существительных.',
    'cards' => [
        // --- Inversion (Инверсия) ---
        ['q' => '___ (Никогда раньше не видел я) such a terrible storm.', 'a' => "✅ **Never before have I seen**\n\n*💡 Правило: После отрицательных наречий (Never, Rarely, Seldom) в начале предложения происходит инверсия — вспомогательный глагол ставится перед подлежащим.*"],
        ['q' => '___ (Не только он опоздал), but he also forgot his passport.', 'a' => "✅ **Not only was he late**\n\n*💡 Правило: Инверсия с Not only... but also. В первой части порядок слов вопросительный.*"],
        ['q' => '___ (Едва я лег спать) when the phone rang.', 'a' => "✅ **Hardly had I gone to bed**\n\n*💡 Правило: Конструкция Hardly ... when (Едва ... как). Используется Past Perfect.*"],
        ['q' => '___ (Как только я вышел) than it started to rain.', 'a' => "✅ **No sooner had I left**\n\n*💡 Правило: Конструкция No sooner ... than (Как только ... так сразу).*"],
        ['q' => '___ (Мало я знал) about her real plans.', 'a' => "✅ **Little did I know**\n\n*💡 Правило: Инверсия со словом Little в значении \"почти не, вряд ли\".*"],

        // --- Participle Clauses (Причастные обороты) ---
        ['q' => '___ (Чувствуя) tired, I went to bed early.', 'a' => "✅ **Feeling**\n\n*💡 Правило: Present Participle (V-ing) заменяет \"Because I felt tired\". Действия происходят одновременно.*"],
        ['q' => '___ (Сделав) my homework, I went for a walk.', 'a' => "✅ **Having done**\n\n*💡 Правило: Perfect Participle (Having + V3) используется, чтобы показать, что одно действие ЗАВЕРШИЛОСЬ до начала второго.*"],
        ['q' => '___ (Будучи построенным) in 1890, the bridge is very old.', 'a' => "✅ **Built / Having been built**\n\n*💡 Правило: Past Participle (V3) имеет пассивное значение.*"],
        ['q' => '___ (Не зная) what to do, she started to cry.', 'a' => "✅ **Not knowing**\n\n*💡 Правило: Отрицание в причастных оборотах ставится ПЕРЕД причастием.*"],

        // --- Conditionals & Alternatives to IF (Замена If) ---
        ['q' => 'You can borrow my car ___ ___ ___ (при условии, что) you bring it back tomorrow.', 'a' => "✅ **as long as / provided that / on condition that**\n\n*💡 Правило: Это синонимы \"If\", но они делают условие более строгим (только если).*"],
        ['q' => '___ (Представь/Допустим) you won the lottery, what would you do?', 'a' => "✅ **Suppose / Supposing**\n\n*💡 Правило: Используется для гипотетических ситуаций вместо If (обычно с 2nd Conditional).*"],
        ['q' => 'I won\'t go to the party ___ (если не / пока не) you come with me.', 'a' => "✅ **unless**\n\n*💡 Правило: Unless = If not. После него глагол ставится в УТВЕРДИТЕЛЬНОЙ форме.*"],
        ['q' => '___ (В случае) fire, do not use the elevators.', 'a' => "✅ **In case of**\n\n*💡 Правило: \"In case of\" + существительное. Означает \"Если произойдет...\".*"],
        ['q' => 'If I ___ (не потерял) my keys yesterday, I ___ (не стоял бы) outside now.', 'a' => "✅ **hadn't lost / wouldn't be standing**\n\n*💡 Правило: Mixed Conditional (Past -> Present). Условие в прошлом, результат сейчас.*"],
        ['q' => 'If he ___ (был бы) a better driver, he ___ (не разбил бы) the car last week.', 'a' => "✅ **were / wouldn't have crashed**\n\n*💡 Правило: Mixed Conditional (Present -> Past). Свойство в настоящем, результат в прошлом.*"],

        // --- Passive with Reporting Verbs (Сложный пассив) ---
        ['q' => '___ (Говорят, что) he is a millionaire.', 'a' => "✅ **It is said that**\n\n*💡 Правило: Безличная пассивная конструкция.*"],
        ['q' => 'He is said ___ (что он миллионер).', 'a' => "✅ **to be a millionaire**\n\n*💡 Правило: Личная пассивная конструкция. Подлежащее + пассив + инфинитив.*"],
        ['q' => 'She is believed ___ (что она украла) the money.', 'a' => "✅ **to have stolen**\n\n*💡 Правило: Если действие произошло в ПРОШЛОМ, используется Perfect Infinitive (to have + V3).*"],
        ['q' => 'The company is reported ___ (что она теряет) money right now.', 'a' => "✅ **to be losing**\n\n*💡 Правило: Если процесс происходит прямо сейчас, используется Continuous Infinitive (to be + V-ing).*"],

        // --- Relative Clauses with Prepositions ---
        ['q' => 'The woman ___ I was talking ___ is my boss.', 'a' => "✅ **who(m) / to**\n\n*💡 Правило: В разговорной речи предлог (to) ставится в конец.*"],
        ['q' => 'The woman ___ ___ I was talking is my boss.', 'a' => "✅ **to whom**\n\n*💡 Правило: В официальной (formal) речи предлог ставится ПЕРЕД whom (никогда перед who).*"],
        ['q' => 'The house ___ ___ I grew up is very old.', 'a' => "✅ **in which / where**\n\n*💡 Правило: where = in/at which.*"],

        // --- Cleft Sentences (Эмфатические предложения) ---
        ['q' => '___ ___ John ___ broke the window. (Именно Джон разбил окно)', 'a' => "✅ **It was / who (that)**\n\n*💡 Правило: Cleft sentence (It was ... who/that) используется для выделения определенной части предложения.*"],
        ['q' => '___ I really need ___ a cup of tea. (То, что мне нужно - это чай)', 'a' => "✅ **What / is**\n\n*💡 Правило: Cleft sentence с What (То, что / Все, что).*"],
        ['q' => '___ ___ he did ___ call the police. (Все, что он сделал - это...)', 'a' => "✅ **All / was**\n\n*💡 Правило: Cleft sentence со словом All.*"],

        // --- Modals in the Past (Продвинутые формы) ---
        ['q' => 'I ___ (не должен был) shouted at you, I\'m sorry.', 'a' => "✅ **shouldn't have**\n\n*💡 Правило: Сожаление о совершенном действии в прошлом.*"],
        ['q' => 'You ___ (мог бы) told me you were going to be late!', 'a' => "✅ **could have**\n\n*💡 Правило: Упрек (ты мог бы и сказать).*"],
        ['q' => 'He ___ (возможно) missed the train, but I\'m not sure.', 'a' => "✅ **might have / may have / could have**\n\n*💡 Правило: Вероятность в прошлом (50/50).*"],
        ['q' => 'She ___ (не могла) stolen the money. She is too honest.', 'a' => "✅ **can't have / couldn't have**\n\n*💡 Правило: Логический вывод (100% уверенность в том, что этого НЕ было).*"],
        ['q' => 'You ___ (должно быть) been exhausted after that long flight.', 'a' => "✅ **must have**\n\n*💡 Правило: Логический вывод (100% уверенность в том, что это БЫЛО).*"],

        // --- Advanced Obligations ---
        ['q' => 'You ___ ___ ___ (предполагается, что) wear a suit, but it\'s not strict.', 'a' => "✅ **are supposed to**\n\n*💡 Правило: be supposed to - должен (ожидается, по правилам).*"],
        ['q' => 'Nobody ___ ___ ___ (не должен/не имеет права) leave the room.', 'a' => "✅ **is to**\n\n*💡 Правило: be to - формальный приказ/запрет (Nobody is to leave = Никто не должен покидать).*"],

        // --- Future in the Past ---
        ['q' => 'I ___ (собирался) call you, but I forgot.', 'a' => "✅ **was going to**\n\n*💡 Правило: План в прошлом, который не осуществился.*"],
        ['q' => 'I ___ ___ ___ (как раз собирался) leave when it started raining.', 'a' => "✅ **was about to**\n\n*💡 Правило: was/were about to do - собирался сделать что-то вот-вот (буквально в следующую секунду).*"],
        ['q' => 'He thought he ___ (станет) a great musician.', 'a' => "✅ **would become**\n\n*💡 Правило: will в прошлом меняется на would.*"],

        // --- Adjectives & Comparatives (Advanced) ---
        ['q' => 'I was ___ (очень) tired.', 'a' => "✅ **very / extremely**\n\n*💡 Правило: С обычными прилагательными (tired, cold, hot) используем very, extremely.*"],
        ['q' => 'I was ___ (абсолютно) exhausted.', 'a' => "✅ **absolutely / completely**\n\n*💡 Правило: Со \"строгими\"/крайними прилагательными (exhausted, freezing, boiling) нельзя ставить very! Мы ставим absolutely или completely.*"],
        ['q' => '___ (Чем больше) you read, ___ (тем умнее) you get.', 'a' => "✅ **The more / the smarter**\n\n*💡 Правило: Конструкция The ... the ... (Чем ..., тем ...). Требует артикля the перед сравнительной степенью!*"],

        // --- Uncountable Nouns (Трюки с неисчисляемыми) ---
        ['q' => 'I have some good ___ (новости). ___ (Они) are about your promotion.', 'a' => "✅ **news / It**\n\n*💡 Правило: Слово news (новости) всегда в ЕДИНСТВЕННОМ числе и требует местоимения It и глагола is.*"],
        ['q' => 'Let me give you ___ (один совет).', 'a' => "✅ **a piece of advice**\n\n*💡 Правило: Advice (совет) неисчисляемое. Нельзя сказать \"an advice\". Нужно \"a piece of advice\" или \"some advice\".*"],
        ['q' => 'Your luggage ___ (очень тяжелый).', 'a' => "✅ **is very heavy**\n\n*💡 Правило: Luggage/Baggage (багаж), Furniture (мебель), Accommodation (жилье) — всегда неисчисляемые (глагол в единственном числе: is, has, was).*"],

        // --- Subjunctive Mood (Сослагательное наклонение B2) ---
        ['q' => 'I suggest that he ___ (покинет) immediately.', 'a' => "✅ **leave / should leave**\n\n*💡 Правило: После глаголов suggest, recommend, insist, demand используется голый инфинитив (без s/es) даже для he/she/it! Либо should + V.*"],
        ['q' => 'It is vital that she ___ (не знает) the truth.', 'a' => "✅ **not know / shouldn't know**\n\n*💡 Правило: Отрицание в Subjunctive mood строится без don't/doesn't (просто not + глагол).*"],

        // --- Passive Voice (Advanced Tenses) ---
        ['q' => 'The house ___ ___ ___ (будет построен) by next year.', 'a' => "✅ **will have been built**\n\n*💡 Правило: Future Perfect Passive.*"],
        ['q' => 'The project ___ ___ ___ (должен быть закончен) tomorrow.', 'a' => "✅ **must be finished / should be finished**\n\n*💡 Правило: Modal Passive (Modal + be + V3).*"],

        // --- Unreal Past (I wish / If only B2) ---
        ['q' => 'I wish you ___ (прекратил) making that noise!', 'a' => "✅ **would stop**\n\n*💡 Правило: I wish + somebody + would = раздражение по поводу чужого поведения.*"],
    ],
];
