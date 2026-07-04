<?php

return [
    'name' => '🟡 🇬🇧 Английский A2+: Грамматика перед B1',
    'description' => 'Продвинутые грамматические темы для перехода на уровень B1: пассивный залог, разделительные вопросы, краткие согласия so/neither, порядок прилагательных, echo questions и устойчивые структуры.',
    'cards' => [
        // --- Order of Adjectives ---
        ['q' => 'I bought a (red / beautiful / big) car.', 'a' => "✅ **beautiful big red**\n\n*💡 Правило: Порядок прилагательных: мнение -> размер -> цвет + существительное.*"],
        ['q' => 'She has a (wooden / old / nice) table.', 'a' => "✅ **nice old wooden**\n\n*💡 Правило: Мнение -> возраст -> материал + существительное.*"],
        ['q' => 'He lives in a (small / old / lovely) house.', 'a' => "✅ **lovely old small**\n\n*💡 Правило: Мнение обычно идет перед фактическими характеристиками: lovely -> old -> small.*"],
        ['q' => 'She bought a (Italian / new / leather) bag.', 'a' => "✅ **new Italian leather**\n\n*💡 Правило: Возраст -> происхождение -> материал.*"],
        ['q' => 'I saw a (black / big / strange) dog.', 'a' => "✅ **strange big black**\n\n*💡 Правило: Мнение -> размер -> цвет.*"],
        ['q' => 'He has a (round / small / metal) table.', 'a' => "✅ **small round metal**\n\n*💡 Правило: Размер -> форма -> материал.*"],
        ['q' => 'She wore a (long / beautiful / blue) dress.', 'a' => "✅ **beautiful long blue**\n\n*💡 Правило: Мнение -> размер/длина -> цвет.*"],
        ['q' => 'They live in a (modern / large / glass) building.', 'a' => "✅ **large modern glass**\n\n*💡 Правило: Размер -> возраст/стиль -> материал.*"],

        // --- Passive Voice: Present Simple ---
        ['q' => 'These cars ___ (производятся) in Germany.', 'a' => "✅ **are made**\n\n*💡 Правило: Present Simple Passive. Формула: am/is/are + V3.*"],
        ['q' => 'English ___ (говорят) in many countries.', 'a' => "✅ **is spoken**\n\n*💡 Правило: Если важен факт, а не исполнитель, используем пассив.*"],
        ['q' => 'Coffee ___ (выращивается) in Brazil.', 'a' => "✅ **is grown**\n\n*💡 Правило: Present Simple Passive для общих фактов: is/are + V3.*"],
        ['q' => 'The rooms ___ (убираются) every day.', 'a' => "✅ **are cleaned**\n\n*💡 Правило: Every day показывает регулярное действие, но в пассиве: are cleaned.*"],
        ['q' => 'This app ___ (используется) by many students.', 'a' => "✅ **is used**\n\n*💡 Правило: by показывает, кем выполняется действие.*"],

        // --- Passive Voice: Past Simple ---
        ['q' => 'This book ___ (была написана) by Stephen King.', 'a' => "✅ **was written**\n\n*💡 Правило: Past Simple Passive. Формула: was/were + V3.*"],
        ['q' => 'The window ___ (было разбито) yesterday.', 'a' => "✅ **was broken**\n\n*💡 Правило: Если предмет получил действие в прошлом: was/were + V3.*"],
        ['q' => 'The letters ___ (были отправлены) last week.', 'a' => "✅ **were sent**\n\n*💡 Правило: Letters — множественное число, поэтому were + V3.*"],
        ['q' => 'The house ___ (был построен) in 1990.', 'a' => "✅ **was built**\n\n*💡 Правило: Год в прошлом -> Past Simple Passive.*"],
        ['q' => 'The Mona Lisa ___ (была нарисована) by Leonardo da Vinci.', 'a' => "✅ **was painted**\n\n*💡 Правило: В пассиве исполнитель может быть указан через by.*"],

        // --- Passive Voice: Future Simple ---
        ['q' => 'The project ___ (будет завершен) next week.', 'a' => "✅ **will be finished**\n\n*💡 Правило: Future Simple Passive. Формула: will be + V3.*"],
        ['q' => 'The tickets ___ (будут отправлены) tomorrow.', 'a' => "✅ **will be sent**\n\n*💡 Правило: Если действие будет сделано с объектом: will be + V3.*"],
        ['q' => 'The new shop ___ (будет открыт) next month.', 'a' => "✅ **will be opened**\n\n*💡 Правило: Next month указывает на будущее, пассив: will be opened.*"],
        ['q' => 'Dinner ___ (будет подан) at 8 p.m.', 'a' => "✅ **will be served**\n\n*💡 Правило: Dinner получает действие, поэтому используем пассив.*"],

        // --- Passive Voice: Questions and Negatives ---
        ['q' => '___ (Сделан ли) this phone made in China?', 'a' => "✅ **Is**\n\n*💡 Правило: В вопросе пассива am/is/are или was/were ставится перед подлежащим.*"],
        ['q' => '___ (Сделаны ли) these cars made in Germany?', 'a' => "✅ **Are**\n\n*💡 Правило: These cars — множественное число, поэтому Are.*"],
        ['q' => 'When ___ (был) this house built?', 'a' => "✅ **was**\n\n*💡 Правило: Вопрос в Past Simple Passive: question word + was/were + subject + V3?*"],
        ['q' => 'The room ___ (не была) cleaned yesterday.', 'a' => "✅ **was not / wasn't**\n\n*💡 Правило: Отрицание в Past Simple Passive: was/were + not + V3.*"],
        ['q' => 'These shoes ___ (не сделаны) made of leather.', 'a' => "✅ **are not / aren't**\n\n*💡 Правило: Отрицание в Present Simple Passive: am/is/are + not + V3.*"],

        // --- By vs With in Passive ---
        ['q' => 'The window was broken ___ (кем: Томом) Tom.', 'a' => "✅ **by**\n\n*💡 Правило: by указывает на исполнителя действия: by Tom.*"],
        ['q' => 'The cake was cut ___ (чем: ножом) a knife.', 'a' => "✅ **with**\n\n*💡 Правило: with указывает на инструмент: with a knife.*"],
        ['q' => 'The picture was painted ___ (кем) a famous artist.', 'a' => "✅ **by**\n\n*💡 Правило: by + человек/исполнитель.*"],
        ['q' => 'The door was opened ___ (чем) a key.', 'a' => "✅ **with**\n\n*💡 Правило: with + инструмент или предмет, с помощью которого выполняют действие.*"],

        // --- Active to Passive ---
        ['q' => 'Tom broke the window. -> The window ___ (было разбито) by Tom.', 'a' => "✅ **was broken**\n\n*💡 Правило: Объект активного предложения становится подлежащим в пассиве.*"],
        ['q' => 'People speak English here. -> English ___ (говорят) here.', 'a' => "✅ **is spoken**\n\n*💡 Правило: People часто опускается в пассиве, если исполнитель не важен.*"],
        ['q' => 'They clean the office every day. -> The office ___ (убирают) every day.', 'a' => "✅ **is cleaned**\n\n*💡 Правило: Present Simple Active -> Present Simple Passive: am/is/are + V3.*"],
        ['q' => 'They sent the email yesterday. -> The email ___ (было отправлено) yesterday.', 'a' => "✅ **was sent**\n\n*💡 Правило: Past Simple Active -> Past Simple Passive: was/were + V3.*"],

        // --- So / Neither ---
        ['q' => '- I love pizza. - ___ (Я тоже) do I.', 'a' => "✅ **So**\n\n*💡 Правило: So do I = Я тоже. Используем после утвердительного предложения.*"],
        ['q' => '- I don\'t like snakes. - ___ (Я тоже нет) do I.', 'a' => "✅ **Neither**\n\n*💡 Правило: Neither do I = Я тоже нет. Используем после отрицательного предложения.*"],
        ['q' => '- I am tired. - So ___ I.', 'a' => "✅ **am**\n\n*💡 Правило: Вспомогательный глагол копируется из первого предложения.*"],
        ['q' => '- I can swim. - So ___ I.', 'a' => "✅ **can**\n\n*💡 Правило: Если в первой фразе can, в ответе тоже can.*"],
        ['q' => '- I was late. - So ___ I.', 'a' => "✅ **was**\n\n*💡 Правило: С was используем So was I.*"],
        ['q' => '- I have been to London. - So ___ I.', 'a' => "✅ **have**\n\n*💡 Правило: В Present Perfect копируем have/has.*"],
        ['q' => '- She likes coffee. - So ___ he.', 'a' => "✅ **does**\n\n*💡 Правило: Likes = Present Simple для he/she/it, поэтому в ответе does.*"],
        ['q' => '- They went home. - So ___ we.', 'a' => "✅ **did**\n\n*💡 Правило: Past Simple в кратком согласии передается через did.*"],
        ['q' => '- I am not hungry. - Neither ___ I.', 'a' => "✅ **am**\n\n*💡 Правило: После отрицания используем Neither + auxiliary + subject.*"],
        ['q' => '- He cannot drive. - Neither ___ she.', 'a' => "✅ **can**\n\n*💡 Правило: В neither-конструкции используем вспомогательный/модальный глагол из первой фразы.*"],
        ['q' => '- I didn\'t understand. - Neither ___ I.', 'a' => "✅ **did**\n\n*💡 Правило: Past Simple отрицание -> Neither did I.*"],
        ['q' => '- She hasn\'t finished. - Neither ___ he.', 'a' => "✅ **has**\n\n*💡 Правило: Present Perfect отрицание -> Neither has he.*"],

        // --- Me too / Me neither ---
        ['q' => '- I like this song. - ___ (Меня/Мне) too.', 'a' => "✅ **Me**\n\n*💡 Разговорный вариант: Me too = Я тоже.*"],
        ['q' => '- I don\'t like this song. - Me ___ (тоже нет).', 'a' => "✅ **neither**\n\n*💡 Разговорный вариант: Me neither = Я тоже нет.*"],
        ['q' => '- I am tired. - ___ (Я) too.', 'a' => "✅ **Me**\n\n*💡 Me too проще и разговорнее, чем So am I.*"],

        // --- Question Tags: To Be ---
        ['q' => 'You are tired, ___ (не так ли) you?', 'a' => "✅ **aren't**\n\n*💡 Правило: Утверждение -> отрицательный хвостик.*"],
        ['q' => 'She isn\'t here, ___ (так ведь) she?', 'a' => "✅ **is**\n\n*💡 Правило: Отрицание -> положительный хвостик.*"],
        ['q' => 'They were late, ___ (не так ли) they?', 'a' => "✅ **weren't**\n\n*💡 Правило: Were в основной части -> weren't в хвостике.*"],
        ['q' => 'He wasn\'t angry, ___ (так ведь) he?', 'a' => "✅ **was**\n\n*💡 Правило: Отрицательная основная часть -> положительный хвостик.*"],
        ['q' => 'I am right, ___ (не так ли) I?', 'a' => "✅ **aren't**\n\n*💡 Правило: Исключение: I am right, aren't I?*"],

        // --- Question Tags: Present Simple ---
        ['q' => 'You like pizza, ___ (не так ли) you?', 'a' => "✅ **don't**\n\n*💡 Правило: Present Simple без вспомогательного глагола -> используем do/does.*"],
        ['q' => 'She likes coffee, ___ (не так ли) she?', 'a' => "✅ **doesn't**\n\n*💡 Правило: She likes -> doesn't she?*"],
        ['q' => 'They don\'t live here, ___ (так ведь) they?', 'a' => "✅ **do**\n\n*💡 Правило: Отрицание с don't -> положительный хвостик do they?*"],
        ['q' => 'He doesn\'t work on Sundays, ___ (так ведь) he?', 'a' => "✅ **does**\n\n*💡 Правило: Doesn't в основной части -> does в хвостике.*"],

        // --- Question Tags: Past Simple ---
        ['q' => 'He went to the cinema, ___ (не так ли) he?', 'a' => "✅ **didn't**\n\n*💡 Правило: Past Simple -> didn't в хвостике.*"],
        ['q' => 'They arrived late, ___ (не так ли) they?', 'a' => "✅ **didn't**\n\n*💡 Правило: Arrived — Past Simple, значит хвостик didn't they?*"],
        ['q' => 'She didn\'t call you, ___ (так ведь) she?', 'a' => "✅ **did**\n\n*💡 Правило: Отрицание в Past Simple -> положительный хвостик did she?*"],

        // --- Question Tags: Modals and Perfect ---
        ['q' => 'You can swim, ___ (не так ли) you?', 'a' => "✅ **can't**\n\n*💡 Правило: Can в основной части -> can't в хвостике.*"],
        ['q' => 'He can\'t drive, ___ (так ведь) he?', 'a' => "✅ **can**\n\n*💡 Правило: Отрицание с can't -> положительный хвостик can he?*"],
        ['q' => 'You should see a doctor, ___ (не так ли) you?', 'a' => "✅ **shouldn't**\n\n*💡 Правило: Should -> shouldn't в хвостике.*"],
        ['q' => 'They have finished, ___ (не так ли) they?', 'a' => "✅ **haven't**\n\n*💡 Правило: Present Perfect -> have/has в хвостике.*"],
        ['q' => 'She has been there, ___ (не так ли) she?', 'a' => "✅ **hasn't**\n\n*💡 Правило: Has в Present Perfect -> hasn't she?*"],

        // --- Echo Questions ---
        ['q' => '- I met Tom yesterday. - You met ___ (кого)?', 'a' => "✅ **who**\n\n*💡 Echo question используется, когда мы удивлены или хотим переспросить.*"],
        ['q' => '- I paid 500 euros. - You paid ___ (сколько)?', 'a' => "✅ **how much**\n\n*💡 Повторяем часть фразы и добавляем вопросительное слово.*"],
        ['q' => '- She is moving to Canada. - She is moving ___ (куда)?', 'a' => "✅ **where**\n\n*💡 Echo questions часто повторяют порядок слов как в обычном предложении.*"],
        ['q' => '- I lost my passport. - You lost ___ (что)?', 'a' => "✅ **what**\n\n*💡 Echo question: You lost what? — Ты потерял что?*"],
        ['q' => '- They arrived at midnight. - They arrived ___ (когда)?', 'a' => "✅ **when**\n\n*💡 Так можно переспросить конкретную часть информации.*"],

        // --- Such / So ---
        ['q' => 'She is ___ (такая) beautiful!', 'a' => "✅ **so**\n\n*💡 Правило: so + adjective/adverb.*"],
        ['q' => 'She is ___ (такая) beautiful girl!', 'a' => "✅ **such a**\n\n*💡 Правило: such a/an + adjective + singular noun.*"],
        ['q' => 'They are ___ (такие) nice people.', 'a' => "✅ **such**\n\n*💡 Правило: such + adjective + plural noun. Артикль a не нужен во множественном числе.*"],
        ['q' => 'It was ___ (такая) bad weather.', 'a' => "✅ **such**\n\n*💡 Правило: weather неисчисляемое, поэтому such bad weather без a.*"],
        ['q' => 'The test was ___ (таким) difficult.', 'a' => "✅ **so**\n\n*💡 Правило: so ставим перед прилагательным без существительного после него.*"],

        // --- Both / Either / Neither ---
        ['q' => '___ (Оба) my parents are doctors.', 'a' => "✅ **Both**\n\n*💡 Both = оба. Используем для двух людей или предметов.*"],
        ['q' => 'You can take ___ (любой) bus. Both go to the station.', 'a' => "✅ **either**\n\n*💡 Either = любой из двух вариантов.*"],
        ['q' => '___ (Ни один) answer is correct. Both are wrong.', 'a' => "✅ **Neither**\n\n*💡 Neither = ни один из двух.*"],
        ['q' => 'Neither of my brothers ___ (is/are) married.', 'a' => "✅ **is**\n\n*💡 После neither of часто используется глагол в единственном числе.*"],
        ['q' => 'Both of them ___ (is/are) very kind.', 'a' => "✅ **are**\n\n*💡 Both of them = они оба, поэтому are.*"],
    ],
];