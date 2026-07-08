<?php

return [
    'name' => '🟣 🇬🇧 Английский: Грамматика C1 (Продвинутая)',
    'description' => 'Абсолютный грамматический топ C1. Сложные инверсии, номинализация, эмфаза, продвинутые условные (But for), As/Though инверсия, Future in the past, и сложные предложные связки.',
    'question_lang' => 'ru',
    'answer_lang' => 'en',
    'cards' => [
        // --- Advanced Inversion (Продвинутая инверсия) ---
        ['q' => '___ ___ (Ни при каких обстоятельствах) should you open this door.', 'a' => "✅ **Under no circumstances**\n\n*💡 Правило: Инверсия с предложными фразами. Порядок слов вопросительный (should you).*"],
        ['q' => '___ ___ (Только после) I had left the house did I realize I forgot my keys.', 'a' => "✅ **Only after**\n\n*💡 Правило: С Only after инверсия происходит во ВТОРОЙ части предложения (did I realize).*"],
        ['q' => '___ ___ (Не раньше чем) I got home did it start raining.', 'a' => "✅ **Not until**\n\n*💡 Правило: С Not until инверсия тоже идет во второй (главной) части предложения.*"],
        ['q' => '___ ___ (Ни в коем случае) are you to leave this room.', 'a' => "✅ **On no account**\n\n*💡 Правило: Синоним Under no circumstances. Инверсия (are you).*"],
        ['q' => '___ ___ ___ (Никоим образом не) is this my fault.', 'a' => "✅ **By no means**\n\n*💡 Правило: Используется в начале предложения для эмфатического отрицания с инверсией.*"],
        ['q' => '___ ___ ___ (Редко когда) does one see such a beautiful sunset.', 'a' => "✅ **Seldom if ever / Rarely**\n\n*💡 Правило: Сильные ограничительные наречия в начале предложения требуют инверсии.*"],
        ['q' => '___ (Нигде больше) will you find such good food.', 'a' => "✅ **Nowhere else**\n\n*💡 Правило: Инверсия после nowhere.*"],
        ['q' => '___ ___ (Мало того, что) did he arrive late, but he also forgot the tickets.', 'a' => "✅ **Not only**\n\n*💡 Правило: Классическая инверсия для C1.*"],

        // --- So & Such Inversion (Инверсия с So и Such) ---
        ['q' => '___ devastating was the news that everyone cried.', 'a' => "✅ **So**\n\n*💡 Правило: So + Прилагательное + Вспомогательный глагол + Подлежащее (Настолько разрушительной была новость...)*"],
        ['q' => '___ was his anger that he broke the window.', 'a' => "✅ **Such**\n\n*💡 Правило: Such + Вспомогательный глагол + Подлежащее (Таким был его гнев...)*"],

        // --- Advanced Conditionals (Продвинутые условные) ---
        ['q' => '___ ___ (Если бы не) your help, I would have failed.', 'a' => "✅ **But for / Were it not for (в настоящем) / Had it not been for (в прошлом)**\n\n*💡 Правило: Это продвинутая форма \"If you hadn\'t helped me\". После But for всегда идет существительное.*"],
        ['q' => '___ (Случись так, что) you need more information, please contact us.', 'a' => "✅ **Should**\n\n*💡 Правило: Инверсия в 1-м типе условных предложений. (Should you need = If you should need).*"],
        ['q' => '___ (Будь я) in charge, I would do things differently.', 'a' => "✅ **Were I**\n\n*💡 Правило: Инверсия во 2-м типе (Were I in charge = If I were in charge).*"],
        ['q' => '___ (Если бы я) known earlier, I wouldn\'t have come.', 'a' => "✅ **Had I**\n\n*💡 Правило: Инверсия в 3-м типе (Had I known = If I had known).*"],
        ['q' => 'I\'ll lend you the money, ___ ___ (при условии что) you pay me back.', 'a' => "✅ **on condition that / provided that**\n\n*💡 Правило: Формальные синонимы if.*"],
        ['q' => '___ ___ (В случае, если) you should change your mind, let me know.', 'a' => "✅ **In the event that / In the event of (+ noun)**\n\n*💡 Правило: Более формально, чем if.*"],

        // --- Nominalisation (Номинализация - превращение в существительные) ---
        ['q' => 'We decided to close the project. -> ___ ___ to close the project was difficult.', 'a' => "✅ **The decision**\n\n*💡 Правило: В C1 глаголы часто превращают в существительные, чтобы речь звучала более формально и академично.*"],
        ['q' => 'They failed to reach an agreement. -> Their ___ to reach an agreement caused problems.', 'a' => "✅ **failure**\n\n*💡 Правило: Номинализация (They failed -> Their failure).*"],
        ['q' => 'She refused to answer. -> Her ___ to answer was suspicious.', 'a' => "✅ **refusal**\n\n*💡 Правило: refuse -> refusal.*"],
        ['q' => 'He was criticized because he managed the team poorly. -> He was criticized for his poor ___ of the team.', 'a' => "✅ **management**\n\n*💡 Правило: manage poorly -> poor management.*"],

        // --- Emphatic Structures & Cleft Sentences (Эмфаза - усиление) ---
        ['q' => '___ ___ ___ (Что произошло, так это то, что) he lost his passport.', 'a' => "✅ **What happened was that**\n\n*💡 Правило: Эмфатическая конструкция для выделения события.*"],
        ['q' => '___ ___ ___ (Причина, по которой) I called is to invite you.', 'a' => "✅ **The reason why**\n\n*💡 Правило: Классическая эмфатическая связка в C1.*"],
        ['q' => 'I ___ ___ (действительно верю) that we can win.', 'a' => "✅ **do believe**\n\n*💡 Правило: Emphatic \"do\" для сильного подчеркивания действия в настоящем.*"],
        ['q' => '___ ___ ___ ___ (Именно тогда) I realized my mistake.', 'a' => "✅ **It was not until**\n\n*💡 Правило: Конструкция It was not until + время/событие + that + результат.*"],
        ['q' => '___ was ___ (Именно он) who told me the truth.', 'a' => "✅ **It / he**\n\n*💡 Правило: It was he (formal) / It was him (informal).*"],

        // --- Distancing (Дистанцирование - вежливые/осторожные заявления) ---
        ['q' => '___ ___ ___ (Казалось бы, что) the problem is solved.', 'a' => "✅ **It would seem that / It appears that**\n\n*💡 Правило: Вместо \"Я думаю\" или \"Это так\" в академическом английском используют безличные обороты.*"],
        ['q' => 'The economy is ___ (считается) to be recovering.', 'a' => "✅ **thought / considered**\n\n*💡 Правило: Пассивное дистанцирование (is thought to be, is said to be).*"],
        ['q' => '___ ___ (Ходят слухи, что) he is resigning.', 'a' => "✅ **It is rumoured that**\n\n*💡 Правило: Распространенный способ передать непроверенную информацию.*"],
        ['q' => 'The project ___ ___ ___ (ожидается, что будет завершен) by May.', 'a' => "✅ **is expected to be completed**\n\n*💡 Правило: Двойной пассив (is expected + to be completed).*"],

        // --- Subjunctive (Сослагательное наклонение - продвинутое) ---
        ['q' => 'It is absolutely imperative that he ___ (stop) smoking.', 'a' => "✅ **stop**\n\n*💡 Правило: После imperative, crucial, vital глагол идет БЕЗ окончания s (Subjunctive mood) или с should (should stop).*"],
        ['q' => 'I would rather you ___ (not / tell) them my secret.', 'a' => "✅ **didn\'t tell**\n\n*💡 Правило: Would rather + кто-то другой = действие в Past Simple (Я бы предпочел, чтобы ты этого не делал).*"],
        ['q' => 'It\'s high time we ___ (leave).', 'a' => "✅ **left**\n\n*💡 Правило: It\'s high time + Past Simple (Давно пора).*"],
        ['q' => 'He acts as if he ___ (владел) the place.', 'a' => "✅ **owned**\n\n*💡 Правило: as if / as though + Past Simple = нереальное условие в настоящем (как если бы).*"],

        // --- Advanced Comparisons (Продвинутые сравнения) ---
        ['q' => 'This is ___ ___ (безусловно) the best movie I have ever seen.', 'a' => "✅ **by far**\n\n*💡 Правило: by far используется для усиления превосходной степени.*"],
        ['q' => 'The sequel is ___ ___ ___ ___ (и близко не так хорош, как) the original.', 'a' => "✅ **nowhere near as good as**\n\n*💡 Правило: nowhere near = даже близко не (огромная разница).*"],
        ['q' => 'Her second book is ___ ___ ___ (чуть-чуть лучше) her first one.', 'a' => "✅ **marginally better than / slightly better than**\n\n*💡 Правило: marginally/slightly = незначительно (усиление для сравнительной степени).*"],
        ['q' => 'The prices are ___ ___ (значительно выше) this year.', 'a' => "✅ **considerably higher / significantly higher**\n\n*💡 Правило: Академические усилители.*"],
        ['q' => 'He is ___ ___ ___ (нимало не / ничуть не) interested in politics.', 'a' => "✅ **not in the least**\n\n*💡 Правило: not in the least = completely not.*"],

        // --- Complex Conjunctions & Connectors (Сложные союзы) ---
        ['q' => '___ (Несмотря на) the harsh weather, the team continued their expedition.', 'a' => "✅ **Notwithstanding**\n\n*💡 Правило: Формальный академический синоним despite / in spite of.*"],
        ['q' => 'He accepted the job, ___ (хотя и) with some hesitation.', 'a' => "✅ **albeit**\n\n*💡 Правило: Albeit [ɔːlˈbiːɪt] = although (хотя и).*"],
        ['q' => 'I didn\'t tell her ___ ___ ___ (из страха, что) she might panic.', 'a' => "✅ **for fear that / for fear of**\n\n*💡 Правило: For fear that + clause, или For fear of + V-ing.*"],
        ['q' => '___ ___ (Учитывая, что) he is only 15, his achievements are remarkable.', 'a' => "✅ **Given that**\n\n*💡 Правило: Given that = taking into consideration.*"],
        ['q' => '___ ___ (Поскольку / Ввиду того что) you are here, let\'s start the meeting.', 'a' => "✅ **Seeing that / Inasmuch as**\n\n*💡 Правило: Формальные способы выразить причину (так как).*"],
        
        // --- As & Though Inversion (Уступительная инверсия) ---
        ['q' => 'Hard ___ I tried, I couldn\'t open the jar.', 'a' => "✅ **as / though**\n\n*💡 Правило: Прилагательное/Наречие + as/though + подлежащее + сказуемое (Как бы сильно я ни старался...)*"],
        ['q' => '___ (Как бы сильно) I like you, I can\'t help you.', 'a' => "✅ **Much as**\n\n*💡 Правило: Much as = Even though (Хотя я и очень люблю тебя...)*"],
        ['q' => 'Strange ___ it may seem, I actually enjoy working late.', 'a' => "✅ **as / though**\n\n*💡 Правило: Strange as it may seem = Как ни странно.*"],

        // --- Advanced Relative Clauses & Pronouns ---
        ['q' => 'He got angry, ___ ___ ___ (в этот момент) I decided to leave.', 'a' => "✅ **at which point**\n\n*💡 Правило: Продвинутая замена \"and then\".*"],
        ['q' => 'The flight might be cancelled, ___ ___ ___ (в этом случае) we will take a train.', 'a' => "✅ **in which case**\n\n*💡 Правило: Продвинутая связка вариантов развития событий.*"],
        ['q' => 'I bought two cars: a Ford and a Honda. ___ ___ (Первый) is fast, ___ ___ (второй) is reliable.', 'a' => "✅ **The former / the latter**\n\n*💡 Правило: Указание на первый и последний упомянутый объект в тексте.*"],
        ['q' => 'The company, ___ ___ (директор которой) was arrested, is bankrupt.', 'a' => "✅ **the director of which / whose director**\n\n*💡 Правило: Формальная притяжательная конструкция.*"],
        ['q' => '___ ___ (Что бы ни) happens, stay calm.', 'a' => "✅ **No matter what / Whatever**\n\n*💡 Правило: Уступительные формы с wh- словами.*"],
        ['q' => '___ ___ ___ (Где бы ни) you go, I will find you.', 'a' => "✅ **No matter where / Wherever**\n\n*💡 Правило: Wherever = No matter where.*"],

        // --- Advanced Infinitive Phrases & Future Forms ---
        ['q' => '___ ___ ___ ___ (Мягко говоря), the dinner was terrible.', 'a' => "✅ **To put it mildly**\n\n*💡 Правило: Устойчивая инфинитивная фраза.*"],
        ['q' => '___ ___ ___ ___ (Что еще хуже), it started to rain.', 'a' => "✅ **To make matters worse**\n\n*💡 Правило: Идеальная фраза для связки в эссе (C1/C2).*"],
        ['q' => 'I was ___ ___ ___ ___ (на грани / собирался) leaving when she called.', 'a' => "✅ **on the point of / on the verge of**\n\n*💡 Правило: on the point of + V-ing (собирался вот-вот сделать).*"],
        ['q' => 'The train is ___ ___ (вот-вот) arrive.', 'a' => "✅ **due to**\n\n*💡 Правило: due to + V = ожидается по расписанию.*"],
        ['q' => 'They are ___ ___ (обязательно / наверняка) win the match.', 'a' => "✅ **bound to**\n\n*💡 Правило: be bound to do something = высокая вероятность, почти 100%.*"],

        // --- Advanced Fixed Phrases ---
        ['q' => '___ ___ ___ ___ (Как бы то ни было / Пусть будет так), we must continue.', 'a' => "✅ **Be that as it may**\n\n*💡 Правило: Формальная уступительная фраза.*"],
        ['q' => '___ ___ ___ (Будь что будет), I will stand by your side.', 'a' => "✅ **Come what may**\n\n*💡 Правило: Идиоматическая C1 фраза (независимо от того, что произойдет).*"],
        ['q' => '___ ___ ___ ___ (Само собой разумеется, что) health is more important than wealth.', 'a' => "✅ **It goes without saying that**\n\n*💡 Правило: C1 идиоматическое выражение.*"],
    ],
];
