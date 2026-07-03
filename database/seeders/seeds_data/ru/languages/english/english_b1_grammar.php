<?php

return [
    'name' => '🟠 🇬🇧 Английский: Грамматика B1 (Продвинутая)',
    'description' => 'Ультимативная коллекция грамматики B1. Разбор перфектных времен, Conditionals, Causative, Needn\'t have done, Inversion, It\'s high time, косвенных вопросов и сложных предлогов.',
    'cards' => [
        // --- Present Perfect Continuous ---
        ['q' => 'I ___ (wait) for you for two hours!', 'a' => "✅ **have been waiting**\n\n*💡 Правило: Present Perfect Continuous. Действие началось в прошлом и длится до сих пор.*"],
        ['q' => 'You look tired. ___ you ___ (run)?', 'a' => "✅ **Have you been running**\n\n*💡 Правило: Present Perfect Continuous используется, когда есть очевидный видимый результат.*"],
        ['q' => 'I have ___ (know) him since 2010.', 'a' => "✅ **known**\n\n*💡 Правило: Исключение! Глаголы состояния (know, like, want, believe) НЕ используются в Continuous.*"],
        
        // --- Past Perfect / Past Perfect Continuous ---
        ['q' => 'When I arrived at the station, the train ___ (already / leave).', 'a' => "✅ **had already left**\n\n*💡 Правило: Past Perfect (предпрошедшее время).*"],
        ['q' => 'She was nervous because she ___ (never / fly) before.', 'a' => "✅ **had never flown**\n\n*💡 Правило: Past Perfect для опыта до определенного момента в прошлом.*"],
        ['q' => 'They ___ (drive) for 5 hours before they found a hotel.', 'a' => "✅ **had been driving**\n\n*💡 Правило: Past Perfect Continuous. Подчеркивает длительность процесса, ДО другого действия в прошлом.*"],

        // --- Future Continuous & Future Perfect ---
        ['q' => 'This time tomorrow, I ___ (lie) on the beach.', 'a' => "✅ **will be lying**\n\n*💡 Правило: Future Continuous (процесс в точное время в будущем).*"],
        ['q' => 'By the end of this year, I ___ (save) $5000.', 'a' => "✅ **will have saved**\n\n*💡 Правило: Future Perfect (действие завершится ДО определенного момента в будущем).*"],

        // --- Used to / Be used to / Get used to ---
        ['q' => 'I ___ (раньше) live in London, but now I live in Paris.', 'a' => "✅ **used to**\n\n*💡 Правило: used to + инфинитив = старая привычка.*"],
        ['q' => 'I ___ (привык) waking up early. It\'s normal for me now.', 'a' => "✅ **am used to**\n\n*💡 Правило: be used to + V-ing = иметь привычку в настоящем.*"],
        ['q' => 'I can\'t ___ (привыкнуть) this cold weather.', 'a' => "✅ **get used to**\n\n*💡 Правило: get used to + V-ing = стать привыкшим.*"],

        // --- Conditionals (2nd, 3rd, Mixed) ---
        ['q' => 'If I ___ (be) you, I would study harder.', 'a' => "✅ **were**\n\n*💡 Правило: 2nd Conditional. Глагол to be всегда were для всех лиц!*"],
        ['q' => 'If I had a million dollars, I ___ (buy) an island.', 'a' => "✅ **would buy**\n\n*💡 Правило: 2nd Conditional. Мечты в настоящем.*"],
        ['q' => 'If I ___ (know) you were in hospital, I would have visited you.', 'a' => "✅ **had known**\n\n*💡 Правило: 3rd Conditional (Сожаления о прошлом).*"],
        ['q' => 'If he had driven carefully, he ___ (not / crash) the car.', 'a' => "✅ **wouldn't have crashed**\n\n*💡 Правило: 3rd Conditional.*"],
        ['q' => 'If I had won the lottery yesterday, I ___ (be) rich now.', 'a' => "✅ **would be**\n\n*💡 Правило: Mixed Conditional (Условие в прошлом, результат сейчас).*"],

        // --- Reported Speech (Косвенная речь) ---
        ['q' => 'She said, "I am tired." -> She said that she ___ (be) tired.', 'a' => "✅ **was**\n\n*💡 Правило: Шаг назад в прошлое: Present Simple -> Past Simple.*"],
        ['q' => 'He said, "I have finished." -> He said that he ___ (finish).', 'a' => "✅ **had finished**\n\n*💡 Правило: Present Perfect -> Past Perfect.*"],
        ['q' => 'She said, "I will call you tomorrow." -> She said she ___ (call) me the next day.', 'a' => "✅ **would call**\n\n*💡 Правило: will -> would.*"],

        // --- Indirect Questions (Косвенные вопросы) ---
        ['q' => 'Where is the station? -> Do you know where the station ___?', 'a' => "✅ **is**\n\n*💡 Правило: В косвенных вопросах прямой порядок слов!*"],
        ['q' => 'Where does he live? -> Can you tell me where he ___?', 'a' => "✅ **lives**\n\n*💡 Правило: Вспомогательные глаголы do/does/did ИСЧЕЗАЮТ.*"],
        ['q' => 'Did she pass the exam? -> I wonder ___ she passed the exam.', 'a' => "✅ **if / whether**\n\n*💡 Правило: Если нет вопросительного слова, используем if/whether (ли).*"],

        // --- Modal Verbs of Deduction & Modals Advanced ---
        ['q' => 'He has a Ferrari. He ___ (должно быть) be very rich.', 'a' => "✅ **must**\n\n*💡 Правило: must = 100% уверенность.*"],
        ['q' => 'She ___ (не может) be at home. I saw her 5 minutes ago.', 'a' => "✅ **can't**\n\n*💡 Правило: can't = 100% уверенность в отрицании.*"],
        ['q' => 'The ground is wet. It ___ (должно быть, шел дождь) rained in the night.', 'a' => "✅ **must have**\n\n*💡 Правило: Дедукция в ПРОШЛОМ: modal + have + V3.*"],
        ['q' => 'He failed the exam. He ___ (не мог) studied hard.', 'a' => "✅ **can't have / couldn't have**\n\n*💡 Правило: Уверенность в отрицании в прошлом.*"],
        ['q' => 'I bought milk, but we already had a lot. I ___ (не нужно было) bought it.', 'a' => "✅ **needn't have**\n\n*💡 Правило: needn't have done = действие БЫЛО сделано, но оно было не нужно (зря).*"],
        ['q' => 'I knew we had milk, so I ___ (не нужно было) buy it.', 'a' => "✅ **didn't need to**\n\n*💡 Правило: didn't need to do = действие НЕ БЫЛО сделано, потому что не было нужно.*"],

        // --- Gerund vs Infinitive (Разница смыслов) ---
        ['q' => 'Please remember ___ (lock) the door when you leave.', 'a' => "✅ **to lock**\n\n*💡 Правило: remember to do = не забудь что-то сделать (будущее).*"],
        ['q' => 'I remember ___ (visit) Paris when I was a child.', 'a' => "✅ **visiting**\n\n*💡 Правило: remember doing = вспоминать о прошлом.*"],
        ['q' => 'I stopped ___ (smoke) last year.', 'a' => "✅ **smoking**\n\n*💡 Правило: stop doing = бросить привычку.*"],
        ['q' => 'I was walking, and I stopped ___ (buy) a coffee.', 'a' => "✅ **to buy**\n\n*💡 Правило: stop to do = остановиться, ЧТОБЫ что-то сделать.*"],
        ['q' => 'He apologized for ___ (be) late.', 'a' => "✅ **being**\n\n*💡 Правило: Глаголы с предлогами (apologize for, insist on, succeed in) всегда требуют герундия (-ing).*"],

        // --- Would rather / Had better / It's time ---
        ['q' => 'I ___ ___ (предпочел бы) stay at home tonight.', 'a' => "✅ **would rather / \'d rather**\n\n*💡 Правило: would rather + V (без to).*"],
        ['q' => 'You ___ ___ (лучше бы) see a doctor. You look awful.', 'a' => "✅ **had better / \'d better**\n\n*💡 Правило: had better + V (без to). Сильный совет.*"],
        ['q' => 'It\'s high time you ___ (go) to bed!', 'a' => "✅ **went**\n\n*💡 Правило: После \"It's time\" / \"It's high time\" + подлежащее -> глагол ставится в Past Simple! (Давно пора).*"],

        // --- Causative Form (Have something done) ---
        ['q' => 'I didn\'t cut my hair myself. I ___ (have) it cut.', 'a' => "✅ **had**\n\n*💡 Правило: have/get + объект + V3 (услугу сделали для вас).*"],
        ['q' => 'I will ___ (заставлю / попрошу) my brother to fix the car.', 'a' => "✅ **get**\n\n*💡 Правило: get SOMEONE TO DO something (с частицей to).*"],
        ['q' => 'I will ___ (заставлю) the mechanic fix the car.', 'a' => "✅ **have**\n\n*💡 Правило: have SOMEONE DO something (без частицы to).*"],

        // --- Wish / If only ---
        ['q' => 'I wish I ___ (have) more money.', 'a' => "✅ **had**\n\n*💡 Правило: Сожаление о настоящем -> Past Simple.*"],
        ['q' => 'I wish I ___ (not / say) that to her yesterday.', 'a' => "✅ **hadn't said**\n\n*💡 Правило: Сожаление о прошлом -> Past Perfect.*"],

        // --- Both, Either, Neither ---
        ['q' => '___ (Оба) my parents are doctors.', 'a' => "✅ **Both**\n\n*💡 Правило: Both = и тот и другой.*"],
        ['q' => 'You can have ___ (или) tea or coffee.', 'a' => "✅ **either**\n\n*💡 Правило: Either ... or = или ... или.*"],
        ['q' => 'I like ___ (ни) tea nor coffee.', 'a' => "✅ **neither**\n\n*💡 Правило: Neither ... nor = ни ... ни.*"],

        // --- Advanced Passive Voice ---
        ['q' => 'The room ___ (clean) right now.', 'a' => "✅ **is being cleaned**\n\n*💡 Правило: Present Continuous Passive (am/is/are + being + V3).*"],
        ['q' => 'The window ___ (already / break) when I arrived.', 'a' => "✅ **had already been broken**\n\n*💡 Правило: Past Perfect Passive.*"],

        // --- Question Tags (Tricky Cases) ---
        ['q' => 'Let\'s go to the cinema, ___ ___?', 'a' => "✅ **shall we**\n\n*💡 Правило: После Let's хвостик всегда \"shall we?\".*"],
        ['q' => 'Don\'t forget to call me, ___ ___?', 'a' => "✅ **will you**\n\n*💡 Правило: В повелительном наклонении хвостик \"will you?\".*"],
        ['q' => 'I am right, ___ I?', 'a' => "✅ **aren't**\n\n*💡 Правило: Исключение! Для \"I am\" хвостик \"aren't I?\".*"],

        // --- Inversion & Emphatic Do ---
        ['q' => 'I ___ (действительно) like you!', 'a' => "✅ **do**\n\n*💡 Правило: Усилительное do/does/did перед глаголом (Emphatic do).*"],
        ['q' => 'Never ___ (я видел) such a beautiful girl.', 'a' => "✅ **have I seen**\n\n*💡 Правило: Инверсия после отрицательных наречий (Never, Rarely, Seldom). Порядок слов как в вопросе (have + I + V3).*"],
        
        // --- Compound Adjectives & Order ---
        ['q' => 'It is a three-___ (week) holiday.', 'a' => "✅ **week**\n\n*💡 Правило: В составных прилагательных существительное не имеет окончания -s (a three-week holiday, a ten-year-old boy).*"],
        // --- Present Perfect vs Past Simple ---
        ['q' => 'I ___ (know) him for 5 years.', 'a' => "✅ **have known**

*💡 Правило: Действие началось в прошлом и длится до сих пор (Present Perfect).*"],
        ['q' => 'I ___ (meet) him in 2015.', 'a' => "✅ **met**

*💡 Правило: Точное время в прошлом (Past Simple).*"],
        // --- Relative Clauses (who/which/that) ---
        ['q' => 'The man ___ (который) lives here is a doctor.', 'a' => "✅ **who / that**

*💡 Правило: Для людей используем who или that.*"],
        ['q' => 'The car ___ (которую) I bought is fast.', 'a' => "✅ **which / that**

*💡 Правило: Для вещей используем which или that.*"],
        ['q' => 'The city ___ (где) I live is big.', 'a' => "✅ **where**

*💡 Правило: Для мест используем where.*"],
    ],
];
