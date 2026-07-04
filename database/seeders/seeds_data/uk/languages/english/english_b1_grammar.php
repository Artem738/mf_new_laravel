<?php

return [
    'name' => '🟠 🇬🇧 Англійська B1: Граматика (Включаючи просунуту)',
    'description' => 'Повна граматика рівня B1. Включає перфектні часи, умовні речення, непряму мову, а також просунуті теми (Causative, Inversion, Mixed Conditionals), які служать містком до B2.',
    'cards' => [
        // --- Present Perfect vs Past Simple ---
        ['q' => 'I ___ (знати) him for 5 years.', 'a' => "✅ **have known**\n\n*💡 Правило: Дія почалася в минулому і триває досі (Present Perfect).*"],
        ['q' => 'I ___ (зустріти) him in 2015.', 'a' => "✅ **met**\n\n*💡 Правило: Точний час у минулому (Past Simple).*"],

        // --- Present Perfect Continuous Basics ---
        ['q' => 'I ___ (написати) three emails today.', 'a' => "✅ **have written**\n\n*💡 Правило: Present Perfect Simple підкреслює результат: три листи вже написані.*"],
        ['q' => 'I ___ (писати) emails all morning.', 'a' => "✅ **have been writing**\n\n*💡 Правило: Present Perfect Continuous підкреслює тривалість процесу.*"],
        ['q' => 'I have ___ (знати) him since 2010.', 'a' => "✅ **known**\n\n*💡 Правило: Виняток! Дієслова стану (know, like, want, believe) НЕ використовуються в Continuous.*"],
        
        // --- Past Perfect Basics ---
        ['q' => 'When I arrived at the station, the train ___ (вже поїхав).', 'a' => "✅ **had already left**\n\n*💡 Правило: Past Perfect (передминулий час).*"],
        ['q' => 'She was nervous because she ___ (ніколи не літала) before.', 'a' => "✅ **had never flown**\n\n*💡 Правило: Past Perfect для досвіду до певного моменту в минулому.*"],

        // --- Used to / Be used to / Get used to ---
        ['q' => 'I ___ (раніше жив) in London, but now I live in Paris.', 'a' => "✅ **used to live**\n\n*💡 Правило: used to + інфінітив = стара звичка.*"],
        ['q' => 'I ___ (звик до) waking up early. It\'s normal for me now.', 'a' => "✅ **am used to**\n\n*💡 Правило: be used to + V-ing = мати звичку в теперішньому.*"],
        ['q' => 'I can\'t ___ (звикнути до) this cold weather.', 'a' => "✅ **get used to**\n\n*💡 Правило: get used to + V-ing = стати звиклим / звикати.*"],

        // --- Conditionals (1st, 2nd, 3rd basics) ---
        ['q' => 'If it ___ (дощ) tomorrow, we will stay at home.', 'a' => "✅ **rains**\n\n*💡 Правило: 1st Conditional. Умова (If) стоїть у Present Simple, результат у Future Simple.*"],
        ['q' => 'If I ___ (бути) you, I would study harder.', 'a' => "✅ **were**\n\n*💡 Правило: 2nd Conditional. У класичному 2nd Conditional зазвичай використовують were для всіх осіб: If I were you...*"],
        ['q' => 'If I had a million dollars, I ___ (купити) an island.', 'a' => "✅ **would buy**\n\n*💡 Правило: 2nd Conditional. Мрії в теперішньому/майбутньому.*"],
        ['q' => 'If I ___ (знати) you were in hospital, I would have visited you.', 'a' => "✅ **had known**\n\n*💡 Правило: 3rd Conditional (Жаль про минуле).*"],
        ['q' => 'If he had driven carefully, he ___ (не розбив би) the car.', 'a' => "✅ **wouldn't have crashed**\n\n*💡 Правило: 3rd Conditional. Дію в минулому не можна змінити.*"],

        // --- Reported Speech (Косвенная речь) ---
        ['q' => 'She said, "I am tired." -> She said that she ___ (була) tired.', 'a' => "✅ **was**\n\n*💡 Правило: Крок назад у минуле: Present Simple -> Past Simple.*"],
        ['q' => 'He said, "I have finished." -> He said that he ___ (закінчив).', 'a' => "✅ **had finished**\n\n*💡 Правило: Present Perfect -> Past Perfect.*"],
        ['q' => 'She said, "I will call you tomorrow." -> She said she ___ (зателефонує) me the next day.', 'a' => "✅ **would call**\n\n*💡 Правило: will -> would.*"],
        ['q' => 'He asked, "Where do you live?" -> He asked where I ___.', 'a' => "✅ **lived**\n\n*💡 Правило: У reported questions порядок слів прямий: where + subject + verb.*"],
        ['q' => 'She asked, "Are you tired?" -> She asked ___ I was tired.', 'a' => "✅ **if / whether**\n\n*💡 Правило: У yes/no questions використовуємо if або whether.*"],
        ['q' => 'He said, "Don\'t be late." -> He told me ___ late.', 'a' => "✅ **not to be**\n\n*💡 Правило: reported command: told + object + not to + verb.*"],
        ['q' => 'She said, "Please help me." -> She asked me ___ her.', 'a' => "✅ **to help**\n\n*💡 Правило: asked + object + to + verb.*"],

        // --- Indirect Questions (Косвенные вопросы) ---
        ['q' => 'Where is the station? -> Do you know where the station ___?', 'a' => "✅ **is**\n\n*💡 Правило: У непрямих питаннях прямий порядок слів! (where + subject + verb).*"],
        ['q' => 'Where does he live? -> Can you tell me where he ___ (жити)?', 'a' => "✅ **lives**\n\n*💡 Правило: Допоміжні дієслова do/does/did ЗНИКАЮТЬ.*"],
        ['q' => 'Did she pass the exam? -> I wonder ___ she passed the exam.', 'a' => "✅ **if / whether**\n\n*💡 Правило: Якщо немає питального слова, використовуємо if/whether (чи).*"],

        // --- Passive Voice Basics ---
        ['q' => 'The room ___ (прибирають) every day.', 'a' => "✅ **is cleaned**\n\n*💡 Правило: Present Simple Passive: am/is/are + V3.*"],
        ['q' => 'The letter ___ (було відправлено) yesterday.', 'a' => "✅ **was sent**\n\n*💡 Правило: Past Simple Passive: was/were + V3.*"],
        ['q' => 'The email will ___ (бути відправлено) tomorrow.', 'a' => "✅ **be sent**\n\n*💡 Правило: Future Passive: will be + V3.*"],

        // --- Gerund vs Infinitive (Разница смыслов) ---
        ['q' => 'Please remember ___ (зачинити) the door when you leave.', 'a' => "✅ **to lock**\n\n*💡 Правило: remember to do = не забудь щось зробити (майбутнє).*"],
        ['q' => 'I remember ___ (як відвідував) Paris when I was a child.', 'a' => "✅ **visiting**\n\n*💡 Правило: remember doing = згадувати про минуле.*"],
        ['q' => 'I stopped ___ (курити) last year.', 'a' => "✅ **smoking**\n\n*💡 Правило: stop doing = кинути звичку.*"],
        ['q' => 'I was walking, and I stopped ___ (щоб купити) a coffee.', 'a' => "✅ **to buy**\n\n*💡 Правило: stop to do = зупинитися, ЩОБ щось зробити.*"],
        ['q' => 'He apologized for ___ (за те, що спізнився).', 'a' => "✅ **being late**\n\n*💡 Правило: Дієслова з прийменниками (apologize for, insist on, succeed in) завжди вимагають герундія (-ing).*"],

        // --- Relative Clauses ---
        ['q' => 'The man ___ (який) lives here is a doctor.', 'a' => "✅ **who / that**\n\n*💡 Правило: Для людей використовуємо who або that.*"],
        ['q' => 'The car ___ (яку) I bought is fast.', 'a' => "✅ **which / that**\n\n*💡 Правило: Для речей використовуємо which або that.*"],
        ['q' => 'The city ___ (де) I live is big.', 'a' => "✅ **where**\n\n*💡 Правило: Для місць використовуємо where.*"],
        ['q' => 'The woman ___ lives next door is a doctor.', 'a' => "✅ **who / that**\n\n*💡 Правило: Якщо who/that є підметом, його не можна опустити.*"],
        ['q' => 'The book ___ I bought yesterday is interesting.', 'a' => "✅ **which / that / -**\n\n*💡 Правило: Якщо which/that є об\'єктом, його можна опустити.*"],
        ['q' => 'My brother, ___ lives in London, is a doctor.', 'a' => "✅ **who**\n\n*💡 Правило: В non-defining relative clauses використовуємо who/which, але не that.*"],

        // --- Quantifiers ---
        ['q' => 'I have ___ (кілька) friends, so I am not lonely.', 'a' => "✅ **a few**\n\n*💡 Правило: a few = кілька, достатньо. Використовується зі злічуваними іменниками.*"],
        ['q' => 'I have ___ (мало) friends, so I feel lonely.', 'a' => "✅ **few**\n\n*💡 Правило: few = мало, недостатньо. Використовується зі злічуваними іменниками.*"],
        ['q' => 'We have ___ (трохи) time, so we can have coffee.', 'a' => "✅ **a little**\n\n*💡 Правило: a little = трохи, але достатньо. Використовується з незлічуваними іменниками.*"],
        ['q' => 'We have ___ (мало) time, so hurry up!', 'a' => "✅ **little**\n\n*💡 Правило: little = мало, недостатньо. Використовується з незлічуваними іменниками.*"],
        ['q' => '___ (Кожен) student must do the homework.', 'a' => "✅ **Every**\n\n*💡 Правило: every дивиться на групу цілком: кожен з групи.*"],
        ['q' => 'There were two boys. ___ (Кожен) boy had a bag.', 'a' => "✅ **Each**\n\n*💡 Правило: each підкреслює кожного окремо, часто з невеликої групи.*"],
        ['q' => '___ (Обидва) my parents are doctors.', 'a' => "✅ **Both**\n\n*💡 Правило: Both = і той і інший.*"],
        ['q' => 'You can have ___ (або) tea or coffee.', 'a' => "✅ **either**\n\n*💡 Правило: Either ... or = або ... або.*"],
        ['q' => 'I like ___ (ні) tea nor coffee.', 'a' => "✅ **neither**\n\n*💡 Правило: Neither ... nor = ні ... ні.*"],

        // --- Articles B1 ---
        ['q' => 'I went to ___ school when I was six.', 'a' => "✅ **-**\n\n*💡 Правило: go to school = ходити до школи як учень, артикль не потрібен.*"],
        ['q' => 'My mother went to ___ school to talk to my teacher.', 'a' => "✅ **the**\n\n*💡 Правило: the school = конкретна будівля школи.*"],
        ['q' => 'He is in ___ hospital after the accident.', 'a' => "✅ **hospital / the hospital**\n\n*💡 Правило: British English часто: in hospital. American English: in the hospital.*"],
        ['q' => 'The rich should help ___ (бідних).', 'a' => "✅ **the poor**\n\n*💡 Правило: the + adjective може позначати групу людей: the rich, the poor, the young.*"],

        // --- Linking Words ---
        ['q' => '___ (Хоча) it was raining, we went for a walk.', 'a' => "✅ **Although**\n\n*💡 Правило: although = хоча. Після although йде ціле речення.*"],
        ['q' => 'It was raining. ___ (Однак), we went for a walk.', 'a' => "✅ **However**\n\n*💡 Правило: however = однак. Зазвичай стоїть на початку другого речення.*"],
        ['q' => '___ (Незважаючи на) the rain, we went for a walk.', 'a' => "✅ **Despite**\n\n*💡 Правило: despite + noun / V-ing. Не ставимо повноцінне речення відразу після despite.*"],
        ['q' => 'I stayed at home ___ (тому що) I was ill.', 'a' => "✅ **because**\n\n*💡 Правило: because показує причину.*"],
        ['q' => 'I was ill, ___ (тому) I stayed at home.', 'a' => "✅ **so**\n\n*💡 Правило: so показує результат.*"],
        ['q' => 'I am learning English ___ (щоб) get a better job.', 'a' => "✅ **in order to / to**\n\n*💡 Правило: in order to + verb показує мету.*"],

        // --- Modals: Advice, Obligation, Deduction ---
        ['q' => 'He has a Ferrari. He ___ (мабуть / напевно) be very rich.', 'a' => "✅ **must**\n\n*💡 Правило: must використовується, коли ми майже впевнені на основі фактів або логіки.*"],
        ['q' => 'She ___ (не може) be at home. I saw her 5 minutes ago.', 'a' => "✅ **can't**\n\n*💡 Правило: can\'t використовується, коли ми вважаємо щось практично неможливим.*"],

        // --- Future Continuous & Future Perfect ---
        ['q' => 'This time tomorrow, I ___ (буду лежати) on the beach.', 'a' => "✅ **will be lying**\n\n*💡 Правило: Future Continuous (процес у точний час у майбутньому).*"],
        ['q' => 'By the end of this year, I ___ (накопичу) $5000.', 'a' => "✅ **will have saved**\n\n*💡 Правило: Future Perfect (дія завершиться ДО певного моменту в майбутньому).*"],

        // --- Past Perfect Continuous ---
        ['q' => 'They ___ (вести машину) for 5 hours before they found a hotel.', 'a' => "✅ **had been driving**\n\n*💡 Правило: Past Perfect Continuous. Підкреслює тривалість процесу, ДО іншої дії в минулому.*"],

        // --- Mixed Conditionals ---
        ['q' => 'If I had won the lottery yesterday, I ___ (бути) rich now.', 'a' => "✅ **would be**\n\n*💡 Правило: Mixed Conditional (Умова в минулому, результат зараз).*"],

        // --- Needn't have done vs didn't need to ---
        ['q' => 'I bought milk, but we already had a lot. I ___ (дарма купив) it.', 'a' => "✅ **needn't have bought**\n\n*💡 Правило: needn't have done = дія БУЛА зроблена, але вона була не потрібна (дарма).*"],
        ['q' => 'I knew we had milk, so I ___ (не став купувати) it.', 'a' => "✅ **didn't need to buy**\n\n*💡 Правило: didn't need to do = дія НЕ БУЛА зроблена, тому що не була потрібна.*"],

        // --- Modal Deductions in the Past ---
        ['q' => 'The ground is wet. It ___ (мабуть, йшов дощ) in the night.', 'a' => "✅ **must have rained**\n\n*💡 Правило: Дедукція в МИНУЛОМУ: modal + have + V3.*"],
        ['q' => 'He failed the exam. He ___ (не міг вчитися) hard.', 'a' => "✅ **can't have studied / couldn't have studied**\n\n*💡 Правило: Впевненість у запереченні в минулому.*"],

        // --- Causative Form (Have something done) ---
        ['q' => 'I didn\'t cut my hair myself. I ___ (зробив стрижку - пасив).', 'a' => "✅ **had it cut / got it cut**\n\n*💡 Правило: have/get + об\'єкт + V3 (послугу зробили для вас).*"],
        ['q' => 'I will ___ (змушу / попрошу) my brother to fix the car.', 'a' => "✅ **get**\n\n*💡 Правило: get SOMEONE TO DO something (з часткою to).*"],
        ['q' => 'I will ___ (доручу) the mechanic fix the car.', 'a' => "✅ **have**\n\n*💡 Правило: have SOMEONE DO something (без частки to).*"],

        // --- Advanced Passive Voice ---
        ['q' => 'The room ___ (прибирають) right now.', 'a' => "✅ **is being cleaned**\n\n*💡 Правило: Present Continuous Passive (am/is/are + being + V3).*"],
        ['q' => 'The window ___ (вже було розбито) when I arrived.', 'a' => "✅ **had already been broken**\n\n*💡 Правило: Past Perfect Passive.*"],

        // --- Inversion & Emphatic Do ---
        ['q' => 'I ___ (дійсно) like you!', 'a' => "✅ **do**\n\n*💡 Правило: Підсилювальне do/does/did перед дієсловом (Emphatic do).*"],
        ['q' => 'Never ___ (я бачив) such a beautiful girl.', 'a' => "✅ **have I seen**\n\n*💡 Правило: Інверсія після заперечних прислівників (Never, Rarely, Seldom). Порядок слів як у питанні (have + I + V3).*"],

        // --- It's high time / Would rather / Had better ---
        ['q' => 'It\'s high time you ___ (піти) to bed!', 'a' => "✅ **went**\n\n*💡 Правило: Після \'It\'s time\' / \'It\'s high time\' + підмет -> дієслово ставиться в Past Simple! (Давно час).*"],
        ['q' => 'I ___ ___ (віддав би перевагу / волів би) stay at home tonight.', 'a' => "✅ **would rather / 'd rather**\n\n*💡 Правило: would rather + V (без to).*"],
        ['q' => 'You ___ ___ (краще б) see a doctor. You look awful.', 'a' => "✅ **had better / 'd better**\n\n*💡 Правило: had better + V (без to). Сильна порада.*"],

        // --- Tricky Question Tags ---
        ['q' => 'Let\'s go to the cinema, ___ ___ (чи не так)?', 'a' => "✅ **shall we**\n\n*💡 Правило: Після Let\'s хвостик завжди \'shall we?\'.*"],
        ['q' => 'Don\'t forget to call me, ___ ___ (добре / гаразд)?', 'a' => "✅ **will you**\n\n*💡 Правило: У наказовому способі хвостик \'will you?\'.*"],
        ['q' => 'I am right, ___ I (чи не так)?', 'a' => "✅ **aren't**\n\n*💡 Правило: Виняток! Для \'I am\' хвостик \'aren\'t I?\'.*"],

        // --- Wish / If only (about the past) ---
        ['q' => 'I wish I ___ (мати) more money.', 'a' => "✅ **had**\n\n*💡 Правило: Жаль про теперішнє -> Past Simple.*"],
        ['q' => 'I wish I ___ (не казав) that to her yesterday.', 'a' => "✅ **hadn't said**\n\n*💡 Правило: Жаль про минуле -> Past Perfect.*"],
    ],
];
