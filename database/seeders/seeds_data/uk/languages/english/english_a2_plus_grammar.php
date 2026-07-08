<?php

return [
    'name' => '🟡 🇬🇧 Англійська A2+: Граматика перед B1',
    'description' => 'Просунуті граматичні теми для переходу на рівень B1: пасивний стан, розділові питання, короткі згоди so/neither, порядок прикметників, echo questions та стійкі структури.',
    'question_lang' => 'uk',
    'answer_lang' => 'en',
    'cards' => [
        // --- Order of Adjectives ---
        ['q' => 'I bought a (red / beautiful / big) car.', 'a' => "✅ **beautiful big red**\n\n*💡 Правило: Порядок прикметників: думка -> розмір -> колір + іменник.*"],
        ['q' => 'She has a (wooden / old / nice) table.', 'a' => "✅ **nice old wooden**\n\n*💡 Правило: Думка -> вік -> матеріал + іменник.*"],
        ['q' => 'He lives in a (small / old / lovely) house.', 'a' => "✅ **lovely old small**\n\n*💡 Правило: Думка зазвичай йде перед фактичними характеристиками: lovely -> old -> small.*"],
        ['q' => 'She bought a (Italian / new / leather) bag.', 'a' => "✅ **new Italian leather**\n\n*💡 Правило: Вік -> походження -> матеріал.*"],
        ['q' => 'I saw a (black / big / strange) dog.', 'a' => "✅ **strange big black**\n\n*💡 Правило: Думка -> розмір -> колір.*"],
        ['q' => 'He has a (round / small / metal) table.', 'a' => "✅ **small round metal**\n\n*💡 Правило: Розмір -> форма -> матеріал.*"],
        ['q' => 'She wore a (long / beautiful / blue) dress.', 'a' => "✅ **beautiful long blue**\n\n*💡 Правило: Думка -> розмір/довжина -> колір.*"],
        ['q' => 'They live in a (modern / large / glass) building.', 'a' => "✅ **large modern glass**\n\n*💡 Правило: Розмір -> вік/стиль -> матеріал.*"],

        // --- Passive Voice: Present Simple ---
        ['q' => 'These cars ___ (виробляються) in Germany.', 'a' => "✅ **are made**\n\n*💡 Правило: Present Simple Passive. Формула: am/is/are + V3.*"],
        ['q' => 'English ___ (говорять) in many countries.', 'a' => "✅ **is spoken**\n\n*💡 Правило: Якщо важливий факт, а не виконавець, використовуємо пасивний стан.*"],
        ['q' => 'Coffee ___ (вирощується) in Brazil.', 'a' => "✅ **is grown**\n\n*💡 Правило: Present Simple Passive для загальних фактів: is/are + V3.*"],
        ['q' => 'The rooms ___ (прибираються) every day.', 'a' => "✅ **are cleaned**\n\n*💡 Правило: Every day показує регулярну дію, але в пасивному стані: are cleaned.*"],
        ['q' => 'This app ___ (використовується) by many students.', 'a' => "✅ **is used**\n\n*💡 Правило: by показує, ким виконується дія.*"],

        // --- Passive Voice: Past Simple ---
        ['q' => 'This book ___ (була написана) by Stephen King.', 'a' => "✅ **was written**\n\n*💡 Правило: Past Simple Passive. Формула: was/were + V3.*"],
        ['q' => 'The window ___ (було розбито) yesterday.', 'a' => "✅ **was broken**\n\n*💡 Правило: Якщо предмет отримав дію в минулому: was/were + V3.*"],
        ['q' => 'The letters ___ (були відправлені) last week.', 'a' => "✅ **were sent**\n\n*💡 Правило: Letters — множина, тому were + V3.*"],
        ['q' => 'The house ___ (був побудований) in 1990.', 'a' => "✅ **was built**\n\n*💡 Правило: Рік у минулому -> Past Simple Passive.*"],
        ['q' => 'The Mona Lisa ___ (була намальована) by Leonardo da Vinci.', 'a' => "✅ **was painted**\n\n*💡 Правило: У пасивному стані виконавець може бути вказаний через by.*"],

        // --- Passive Voice: Future Simple ---
        ['q' => 'The project ___ (буде завершено) next week.', 'a' => "✅ **will be finished**\n\n*💡 Правило: Future Simple Passive. Формула: will be + V3.*"],
        ['q' => 'The tickets ___ (будуть відправлені) tomorrow.', 'a' => "✅ **will be sent**\n\n*💡 Правило: Якщо дія буде зроблена з об'єктом: will be + V3.*"],
        ['q' => 'The new shop ___ (буде відкрито) next month.', 'a' => "✅ **will be opened**\n\n*💡 Правило: Next month вказує на майбутнє, пасив: will be opened.*"],
        ['q' => 'Dinner ___ (буде подано) at 8 p.m.', 'a' => "✅ **will be served**\n\n*💡 Правило: Dinner отримує дію, тому використовуємо пасивний стан.*"],

        // --- Passive Voice: Questions and Negatives ---
        ['q' => '___ (Чи зроблений) this phone made in China?', 'a' => "✅ **Is**\n\n*💡 Правило: У питанні пасивного стану am/is/are або was/were ставиться перед підметом.*"],
        ['q' => '___ (Чи зроблені) these cars made in Germany?', 'a' => "✅ **Are**\n\n*💡 Правило: These cars — множина, тому Are.*"],
        ['q' => 'When ___ (був) this house built?', 'a' => "✅ **was**\n\n*💡 Правило: Питання в Past Simple Passive: question word + was/were + subject + V3?*"],
        ['q' => 'The room ___ (не була) cleaned yesterday.', 'a' => "✅ **was not / wasn't**\n\n*💡 Правило: Заперечення в Past Simple Passive: was/were + not + V3.*"],
        ['q' => 'These shoes ___ (не зроблені) made of leather.', 'a' => "✅ **are not / aren't**\n\n*💡 Правило: Заперечення в Present Simple Passive: am/is/are + not + V3.*"],

        // --- By vs With in Passive ---
        ['q' => 'The window was broken ___ (ким: Томом) Tom.', 'a' => "✅ **by**\n\n*💡 Правило: by вказує на виконавця дії: by Tom.*"],
        ['q' => 'The cake was cut ___ (чим: ножем) a knife.', 'a' => "✅ **with**\n\n*💡 Правило: with вказує на інструмент: with a knife.*"],
        ['q' => 'The picture was painted ___ (ким) a famous artist.', 'a' => "✅ **by**\n\n*💡 Правило: by + людина/виконавець.*"],
        ['q' => 'The door was opened ___ (чим) a key.', 'a' => "✅ **with**\n\n*💡 Правило: with + інструмент або предмет, за допомогою якого виконують дію.*"],

        // --- Active to Passive ---
        ['q' => 'Tom broke the window. -> The window ___ (було розбито) by Tom.', 'a' => "✅ **was broken**\n\n*💡 Правило: Об\'єкт активного речення стає підметом у пасиві.*"],
        ['q' => 'People speak English here. -> English ___ (говорять) here.', 'a' => "✅ **is spoken**\n\n*💡 Правило: People часто опускається в пасиві, якщо виконавець не важливий.*"],
        ['q' => 'They clean the office every day. -> The office ___ (прибирають) every day.', 'a' => "✅ **is cleaned**\n\n*💡 Правило: Present Simple Active -> Present Simple Passive: am/is/are + V3.*"],
        ['q' => 'They sent the email yesterday. -> The email ___ (було відправлено) yesterday.', 'a' => "✅ **was sent**\n\n*💡 Правило: Past Simple Active -> Past Simple Passive: was/were + V3.*"],

        // --- So / Neither ---
        ['q' => '- I love pizza. - ___ (Я також) do I.', 'a' => "✅ **So**\n\n*💡 Правило: So do I = Я також. Використовуємо після стверджувального речення.*"],
        ['q' => '- I don\'t like snakes. - ___ (Я також ні) do I.', 'a' => "✅ **Neither**\n\n*💡 Правило: Neither do I = Я також ні. Використовуємо після заперечного речення.*"],
        ['q' => '- I am tired. - So ___ I.', 'a' => "✅ **am**\n\n*💡 Правило: Допоміжне дієслово копіюється з першого речення.*"],
        ['q' => '- I can swim. - So ___ I.', 'a' => "✅ **can**\n\n*💡 Правило: Якщо в першій фразі can, у відповіді також can.*"],
        ['q' => '- I was late. - So ___ I.', 'a' => "✅ **was**\n\n*💡 Правило: З was використовуємо So was I.*"],
        ['q' => '- I have been to London. - So ___ I.', 'a' => "✅ **have**\n\n*💡 Правило: У Present Perfect копіюємо have/has.*"],
        ['q' => '- She likes coffee. - So ___ he.', 'a' => "✅ **does**\n\n*💡 Правило: Likes = Present Simple для he/she/it, тому у відповіді does.*"],
        ['q' => '- They went home. - So ___ we.', 'a' => "✅ **did**\n\n*💡 Правило: Past Simple в короткій згоді передається через did.*"],
        ['q' => '- I am not hungry. - Neither ___ I.', 'a' => "✅ **am**\n\n*💡 Правило: Після заперечення використовуємо Neither + auxiliary + subject.*"],
        ['q' => '- He cannot drive. - Neither ___ she.', 'a' => "✅ **can**\n\n*💡 Правило: У neither-конструкції використовуємо допоміжне/модальне дієслово з першої фрази.*"],
        ['q' => '- I didn\'t understand. - Neither ___ I.', 'a' => "✅ **did**\n\n*💡 Правило: Past Simple заперечення -> Neither did I.*"],
        ['q' => '- She hasn\'t finished. - Neither ___ he.', 'a' => "✅ **has**\n\n*💡 Правило: Present Perfect заперечення -> Neither has he.*"],

        // --- Me too / Me neither ---
        ['q' => '- I like this song. - ___ (Мене/Мені) too.', 'a' => "✅ **Me**\n\n*💡 Розмовний варіант: Me too = Я також.*"],
        ['q' => '- I don\'t like this song. - Me ___ (також ні).', 'a' => "✅ **neither**\n\n*💡 Розмовний варіант: Me neither = Я також ні.*"],
        ['q' => '- I am tired. - ___ (Я) too.', 'a' => "✅ **Me**\n\n*💡 Me too простіше і розмовніше, ніж So am I.*"],

        // --- Question Tags: To Be ---
        ['q' => 'You are tired, ___ (чи не так) you?', 'a' => "✅ **aren't**\n\n*💡 Правило: Ствердження -> заперечний хвостик.*"],
        ['q' => 'She isn\'t here, ___ (чи не так) she?', 'a' => "✅ **is**\n\n*💡 Правило: Заперечення -> позитивний хвостик.*"],
        ['q' => 'They were late, ___ (чи не так) they?', 'a' => "✅ **weren't**\n\n*💡 Правило: Were в основній частині -> weren't у хвостику.*"],
        ['q' => 'He wasn\'t angry, ___ (чи не так) he?', 'a' => "✅ **was**\n\n*💡 Правило: Заперечна основна частина -> позитивний хвостик.*"],
        ['q' => 'I am right, ___ (чи не так) I?', 'a' => "✅ **aren't**\n\n*💡 Правило: Виняток: I am right, aren't I?*"],

        // --- Question Tags: Present Simple ---
        ['q' => 'You like pizza, ___ (чи не так) you?', 'a' => "✅ **don't**\n\n*💡 Правило: Present Simple без допоміжного дієслова -> використовуємо do/does.*"],
        ['q' => 'She likes coffee, ___ (чи не так) she?', 'a' => "✅ **doesn't**\n\n*💡 Правило: She likes -> doesn't she?*"],
        ['q' => 'They don\'t live here, ___ (чи не так) they?', 'a' => "✅ **do**\n\n*💡 Правило: Заперечення з don't -> позитивний хвостик do they?*"],
        ['q' => 'He doesn\'t work on Sundays, ___ (чи не так) he?', 'a' => "✅ **does**\n\n*💡 Правило: Doesn't в основній частині -> does у хвостику.*"],

        // --- Question Tags: Past Simple ---
        ['q' => 'He went to the cinema, ___ (чи не так) he?', 'a' => "✅ **didn't**\n\n*💡 Правило: Past Simple -> didn't у хвостику.*"],
        ['q' => 'They arrived late, ___ (чи не так) they?', 'a' => "✅ **didn't**\n\n*💡 Правило: Arrived — Past Simple, отже хвостик didn't they?*"],
        ['q' => 'She didn\'t call you, ___ (чи не так) she?', 'a' => "✅ **did**\n\n*💡 Правило: Заперечення в Past Simple -> позитивний хвостик did she?*"],

        // --- Question Tags: Modals and Perfect ---
        ['q' => 'You can swim, ___ (чи не так) you?', 'a' => "✅ **can't**\n\n*💡 Правило: Can в основній частині -> can't у хвостику.*"],
        ['q' => 'He can\'t drive, ___ (чи не так) he?', 'a' => "✅ **can**\n\n*💡 Правило: Заперечення з can't -> позитивний хвостик can he?*"],
        ['q' => 'You should see a doctor, ___ (чи не так) you?', 'a' => "✅ **shouldn't**\n\n*💡 Правило: Should -> shouldn't у хвостику.*"],
        ['q' => 'They have finished, ___ (чи не так) they?', 'a' => "✅ **haven't**\n\n*💡 Правило: Present Perfect -> have/has у хвостику.*"],
        ['q' => 'She has been there, ___ (чи не так) she?', 'a' => "✅ **hasn't**\n\n*💡 Правило: Has у Present Perfect -> hasn't she?*"],

        // --- Echo Questions ---
        ['q' => '- I met Tom yesterday. - You met ___ (кого)?', 'a' => "✅ **who**\n\n*💡 Echo question використовується, коли ми здивовані або хочемо перепитати.*"],
        ['q' => '- I paid 500 euros. - You paid ___ (скільки)?', 'a' => "✅ **how much**\n\n*💡 Повторюємо частину фрази і додаємо питальне слово.*"],
        ['q' => '- She is moving to Canada. - She is moving ___ (куди)?', 'a' => "✅ **where**\n\n*💡 Echo questions часто повторюють порядок слів як у звичайному реченні.*"],
        ['q' => '- I lost my passport. - You lost ___ (що)?', 'a' => "✅ **what**\n\n*💡 Echo question: You lost what? — Ти загубив що?*"],
        ['q' => '- They arrived at midnight. - They arrived ___ (коли)?', 'a' => "✅ **when**\n\n*💡 Так можна перепитати конкретну частину інформації.*"],

        // --- Such / So ---
        ['q' => 'She is ___ (така) beautiful!', 'a' => "✅ **so**\n\n*💡 Правило: so + adjective/adverb.*"],
        ['q' => 'She is ___ (така) beautiful girl!', 'a' => "✅ **such a**\n\n*💡 Правило: such a/an + adjective + singular noun.*"],
        ['q' => 'They are ___ (такі) nice people.', 'a' => "✅ **such**\n\n*💡 Правило: such + adjective + plural noun. Артикль a не потрібен у множині.*"],
        ['q' => 'It was ___ (така) bad weather.', 'a' => "✅ **such**\n\n*💡 Правило: weather незлічуване, тому such bad weather без a.*"],
        ['q' => 'The test was ___ (таким) difficult.', 'a' => "✅ **so**\n\n*💡 Правило: so ставимо перед прикметником без іменника після нього.*"],

        // --- Both / Either / Neither ---
        ['q' => '___ (Обидва) my parents are doctors.', 'a' => "✅ **Both**\n\n*💡 Both = обидва. Використовуємо для двох людей або предметів.*"],
        ['q' => 'You can take ___ (будь-який) bus. Both go to the station.', 'a' => "✅ **either**\n\n*💡 Either = будь-який з двох варіантів.*"],
        ['q' => '___ (Жоден) answer is correct. Both are wrong.', 'a' => "✅ **Neither**\n\n*💡 Neither = жоден з двох.*"],
        ['q' => 'Neither of my brothers ___ (is/are) married.', 'a' => "✅ **is**\n\n*💡 Після neither of часто використовується дієслово в однині.*"],
        ['q' => 'Both of them ___ (is/are) very kind.', 'a' => "✅ **are**\n\n*💡 Both of them = вони обидва, тому are.*"],
    ],
];
