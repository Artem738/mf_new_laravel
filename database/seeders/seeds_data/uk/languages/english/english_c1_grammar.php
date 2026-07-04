<?php

return [
    'name' => '🟣 🇬🇧 Англійська: Граматика C1 (Просунута)',
    'description' => 'Абсолютний граматичний топ C1. Складні інверсії, номіналізація, емфаза, просунуті умовні (But for), As/Though інверсія, Future in the past, та складні прийменникові зв\'язки.',
    'cards' => [
        // --- Advanced Inversion (Продвинутая инверсия) ---
        ['q' => '___ ___ (За жодних обставин) should you open this door.', 'a' => "✅ **Under no circumstances**\n\n*💡 Правило: Інверсія з прийменниковими фразами. Порядок слів запитальний (should you).*"],
        ['q' => '___ ___ (Тільки після) I had left the house did I realize I forgot my keys.', 'a' => "✅ **Only after**\n\n*💡 Правило: З Only after інверсія відбувається у ДРУГІЙ частині речення (did I realize).*"],
        ['q' => '___ ___ (Не раніше ніж) I got home did it start raining.', 'a' => "✅ **Not until**\n\n*💡 Правило: З Not until інверсія теж іде у другій (головній) частині речення.*"],
        ['q' => '___ ___ (У жодному разі) are you to leave this room.', 'a' => "✅ **On no account**\n\n*💡 Правило: Синонім Under no circumstances. Інверсія (are you).*"],
        ['q' => '___ ___ ___ (Жодним чином не) is this my fault.', 'a' => "✅ **By no means**\n\n*💡 Правило: Використовується на початку речення для емфатичного заперечення з інверсією.*"],
        ['q' => '___ ___ ___ (Рідко коли) does one see such a beautiful sunset.', 'a' => "✅ **Seldom if ever / Rarely**\n\n*💡 Правило: Сильні обмежувальні прислівники на початку речення вимагають інверсії.*"],
        ['q' => '___ (Ніде більше) will you find such good food.', 'a' => "✅ **Nowhere else**\n\n*💡 Правило: Інверсія після nowhere.*"],
        ['q' => '___ ___ (Мало того, що) did he arrive late, but he also forgot the tickets.', 'a' => "✅ **Not only**\n\n*💡 Правило: Класична інверсія для C1.*"],

        // --- So & Such Inversion (Инверсия с So и Such) ---
        ['q' => '___ devastating was the news that everyone cried.', 'a' => "✅ **So**\n\n*💡 Правило: So + Прикметник + Допоміжне дієслово + Підмет (Настільки руйнівною була новина...)*"],
        ['q' => '___ was his anger that he broke the window.', 'a' => "✅ **Such**\n\n*💡 Правило: Such + Допоміжне дієслово + Підмет (Таким був його гнів...)*"],

        // --- Advanced Conditionals (Просунуті умовні) ---
        ['q' => '___ ___ (Якби не) your help, I would have failed.', 'a' => "✅ **But for / Were it not for (у теперішньому) / Had it not been for (в минулому)**\n\n*💡 Правило: Це просунута форма \"If you hadn\'t helped me\". Після But for завжди йде іменник.*"],
        ['q' => '___ (Станься так, що) you need more information, please contact us.', 'a' => "✅ **Should**\n\n*💡 Правило: Інверсия в 1-му типі умовних речень. (Should you need = If you should need).*"],
        ['q' => '___ (Був би я) in charge, I would do things differently.', 'a' => "✅ **Were I**\n\n*💡 Правило: Інверсия у 2-му типі (Were I in charge = If I were in charge).*"],
        ['q' => '___ (Якби я) known earlier, I wouldn\'t have come.', 'a' => "✅ **Had I**\n\n*💡 Правило: Інверсия в 3-му типі (Had I known = If I had known).*"],
        ['q' => 'I\'ll lend you the money, ___ ___ (за умови що) you pay me back.', 'a' => "✅ **on condition that / provided that**\n\n*💡 Правило: Формальні синоніми if.*"],
        ['q' => '___ ___ (У разі, якщо) you should change your mind, let me know.', 'a' => "✅ **In the event that / In the event of (+ noun)**\n\n*💡 Правило: Більш формально, ніж if.*"],

        // --- Nominalisation (Номіналізація - перетворення на іменники) ---
        ['q' => 'We decided to close the project. -> ___ ___ to close the project was difficult.', 'a' => "✅ **The decision**\n\n*💡 Правило: У C1 дієслова часто перетворюють на іменники, щоб мовлення звучало більш формально і академічно.*"],
        ['q' => 'They failed to reach an agreement. -> Their ___ to reach an agreement caused problems.', 'a' => "✅ **failure**\n\n*💡 Правило: Номіналізація (They failed -> Their failure).*"],
        ['q' => 'She refused to answer. -> Her ___ to answer was suspicious.', 'a' => "✅ **refusal**\n\n*💡 Правило: refuse -> refusal.*"],
        ['q' => 'He was criticized because he managed the team poorly. -> He was criticized for his poor ___ of the team.', 'a' => "✅ **management**\n\n*💡 Правило: manage poorly -> poor management.*"],

        // --- Emphatic Structures & Cleft Sentences (Емфаза - посилення) ---
        ['q' => '___ ___ ___ (Що сталося, так це те, що) he lost his passport.', 'a' => "✅ **What happened was that**\n\n*💡 Правило: Емфатична конструкція для виділення події.*"],
        ['q' => '___ ___ ___ (Причина, з якої) I called is to invite you.', 'a' => "✅ **The reason why**\n\n*💡 Правило: Класична емфатична зв\'язка в C1.*"],
        ['q' => 'I ___ ___ (справді вірю) that we can win.', 'a' => "✅ **do believe**\n\n*💡 Правило: Emphatic \"do\" для сильного підкреслення дії в теперішньому часі.*"],
        ['q' => '___ ___ ___ ___ (Саме тоді) I realized my mistake.', 'a' => "✅ **It was not until**\n\n*💡 Правило: Конструкція It was not until + час/подія + that + результат.*"],
        ['q' => '___ was ___ (Саме він) who told me the truth.', 'a' => "✅ **It / he**\n\n*💡 Правило: It was he (formal) / It was him (informal).*"],

        // --- Distancing (Дистанціювання - ввічливі/обережні заяви) ---
        ['q' => '___ ___ ___ (Здавалося б, що) the problem is solved.', 'a' => "✅ **It would seem that / It appears that**\n\n*💡 Правило: Замість \"Я думаю\" або \"Це так\" в академічній англійській використовують безособові звороти.*"],
        ['q' => 'The economy is ___ (вважається) to be recovering.', 'a' => "✅ **thought / considered**\n\n*💡 Правило: Пасивне дистанціювання (is thought to be, is said to be).*"],
        ['q' => '___ ___ (Ходять чутки, що) he is resigning.', 'a' => "✅ **It is rumoured that**\n\n*💡 Правило: Поширений спосіб передати неперевірену інформацію.*"],
        ['q' => 'The project ___ ___ ___ (очікується, що буде завершений) by May.', 'a' => "✅ **is expected to be completed**\n\n*💡 Правило: Подвійний пасив (is expected + to be completed).*"],

        // --- Subjunctive (Умовний спосіб - просунутий) ---
        ['q' => 'It is absolutely imperative that he ___ (stop) smoking.', 'a' => "✅ **stop**\n\n*💡 Правило: Після imperative, crucial, vital дієслово йде БЕЗ закінчення s (Subjunctive mood) або зі should (should stop).*"],
        ['q' => 'I would rather you ___ (not / tell) them my secret.', 'a' => "✅ **didn\'t tell**\n\n*💡 Правило: Would rather + хтось інший = дія в Past Simple (Я б віддав перевагу, щоб ти цього не робив).*"],
        ['q' => 'It\'s high time we ___ (leave).', 'a' => "✅ **left**\n\n*💡 Правило: It\'s high time + Past Simple (Давно час).*"],
        ['q' => 'He acts as if he ___ (владел) the place.', 'a' => "✅ **owned**\n\n*💡 Правило: as if / as though + Past Simple = нереальна умова в теперішньому часі (нібито).*"],

        // --- Advanced Comparisons (Просунуті порівняння) ---
        ['q' => 'This is ___ ___ (безумовно) the best movie I have ever seen.', 'a' => "✅ **by far**\n\n*💡 Правило: by far використовується для посилення найвищого ступеня.*"],
        ['q' => 'The sequel is ___ ___ ___ ___ (і близько не такий хороший, як) the original.', 'a' => "✅ **nowhere near as good as**\n\n*💡 Правило: nowhere near = навіть близько не (величезна різниця).*"],
        ['q' => 'Her second book is ___ ___ ___ (трохи краща за) her first one.', 'a' => "✅ **marginally better than / slightly better than**\n\n*💡 Правило: marginally/slightly = незначно (посилення для вищого ступеня).*"],
        ['q' => 'The prices are ___ ___ (значно вищі) this year.', 'a' => "✅ **considerably higher / significantly higher**\n\n*💡 Правило: Академічні підсилювачі.*"],
        ['q' => 'He is ___ ___ ___ (анітрохи не) interested in politics.', 'a' => "✅ **not in the least**\n\n*💡 Правило: not in the least = completely not.*"],

        // --- Complex Conjunctions & Connectors (Складні сполучники) ---
        ['q' => '___ (Незважаючи на) the harsh weather, the team continued their expedition.', 'a' => "✅ **Notwithstanding**\n\n*💡 Правило: Формальний академічний синонім despite / in spite of.*"],
        ['q' => 'He accepted the job, ___ (хоча й) with some hesitation.', 'a' => "✅ **albeit**\n\n*💡 Правило: Albeit [ɔːlˈbiːɪt] = although (хоча й).*"],
        ['q' => 'I didn\'t tell her ___ ___ ___ (зі страху, що) she might panic.', 'a' => "✅ **for fear that / for fear of**\n\n*💡 Правило: For fear that + clause, або For fear of + V-ing.*"],
        ['q' => '___ ___ (З огляду на те, що / Враховуючи, що) he is only 15, his achievements are remarkable.', 'a' => "✅ **Given that**\n\n*💡 Правило: Given that = taking into consideration.*"],
        ['q' => '___ ___ (Оскільки / Зважаючи на те що) you are here, let\'s start the meeting.', 'a' => "✅ **Seeing that / Inasmuch as**\n\n*💡 Правило: Формальні способи виразити причину (через те що).*"],
        
        // --- As & Though Inversion (Уступительная инверсия) ---
        ['q' => 'Hard ___ I tried, I couldn\'t open the jar.', 'a' => "✅ **as / though**\n\n*💡 Правило: Прикметник/Прислівник + as/though + підмет + присудок (Хоч як би сильно я не старався...)*"],
        ['q' => '___ (Як би сильно) I like you, I can\'t help you.', 'a' => "✅ **Much as**\n\n*💡 Правило: Much as = Even though (Хоча я й дуже люблю тебе...)*"],
        ['q' => 'Strange ___ it may seem, I actually enjoy working late.', 'a' => "✅ **as / though**\n\n*💡 Правило: Strange as it may seem = Як не дивно.*"],

        // --- Advanced Relative Clauses & Pronouns ---
        ['q' => 'He got angry, ___ ___ ___ (в цей момент) I decided to leave.', 'a' => "✅ **at which point**\n\n*💡 Правило: Просунута заміна \"and then\".*"],
        ['q' => 'The flight might be cancelled, ___ ___ ___ (в цьому випадку) we will take a train.', 'a' => "✅ **in which case**\n\n*💡 Правило: Просунута зв\'язка варіантів розвитку подій.*"],
        ['q' => 'I bought two cars: a Ford and a Honda. ___ ___ (Перший) is fast, ___ ___ (другий) is reliable.', 'a' => "✅ **The former / the latter**\n\n*💡 Правило: Вказівка на перший і останній згаданий об\'єкт у тексті.*"],
        ['q' => 'The company, ___ ___ (директор якої) was arrested, is bankrupt.', 'a' => "✅ **the director of which / whose director**\n\n*💡 Правило: Формальна присвійна конструкція.*"],
        ['q' => '___ ___ (Що б не) happens, stay calm.', 'a' => "✅ **No matter what / Whatever**\n\n*💡 Правило: Допустові форми з wh- словами.*"],
        ['q' => '___ ___ ___ (Де б не) you go, I will find you.', 'a' => "✅ **No matter where / Wherever**\n\n*💡 Правило: Wherever = No matter where.*"],

        // --- Advanced Infinitive Phrases & Future Forms ---
        ['q' => '___ ___ ___ ___ (М\'яко кажучи), the dinner was terrible.', 'a' => "✅ **To put it mildly**\n\n*💡 Правило: Стійка інфінітивна фраза.*"],
        ['q' => '___ ___ ___ ___ (Що ще гірше), it started to rain.', 'a' => "✅ **To make matters worse**\n\n*💡 Правило: Ідеальна фраза для зв\'язки в есе (C1/C2).*"],
        ['q' => 'I was ___ ___ ___ ___ (на межі / збирався) leaving when she called.', 'a' => "✅ **on the point of / on the verge of**\n\n*💡 Правило: on the point of + V-ing (збирався ось-ось зробити).*"],
        ['q' => 'The train is ___ ___ (ось-ось) arrive.', 'a' => "✅ **due to**\n\n*💡 Правило: due to + V = очікується за розкладом.*"],
        ['q' => 'They are ___ ___ (обов\'язково / напевно) win the match.', 'a' => "✅ **bound to**\n\n*💡 Правило: be bound to do something = висока ймовірність, майже 100%.*"],

        // --- Advanced Fixed Phrases ---
        ['q' => '___ ___ ___ ___ (Як би там не було / Нехай буде так), we must continue.', 'a' => "✅ **Be that as it may**\n\n*💡 Правило: Формальна допустова фраза.*"],
        ['q' => '___ ___ ___ (Хай там що / Будь що буде), I will stand by your side.', 'a' => "✅ **Come what may**\n\n*💡 Правило: Ідіоматична C1 фраза (незалежно від того, що станеться).*"],
        ['q' => '___ ___ ___ ___ (Само собою зрозуміло, що) health is more important than wealth.', 'a' => "✅ **It goes without saying that**\n\n*💡 Правило: C1 ідіоматичний вираз.*"],
    ],
];
