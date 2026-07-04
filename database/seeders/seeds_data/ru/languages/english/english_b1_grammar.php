<?php

return [
    'name' => '🟠 🇬🇧 Английский B1: Грамматика (Включая продвинутую)',
    'description' => 'Полная грамматика уровня B1. Включает перфектные времена, условные предложения, косвенную речь, а также продвинутые темы (Causative, Inversion, Mixed Conditionals), которые служат мостиком к B2.',
    'cards' => [
        // --- Present Perfect vs Past Simple ---
        ['q' => 'I ___ (знать) him for 5 years.', 'a' => "✅ **have known**\n\n*💡 Правило: Действие началось в прошлом и длится до сих пор (Present Perfect).*"],
        ['q' => 'I ___ (встретить) him in 2015.', 'a' => "✅ **met**\n\n*💡 Правило: Точное время в прошлом (Past Simple).*"],

        // --- Present Perfect Continuous Basics ---
        ['q' => 'I ___ (написать) three emails today.', 'a' => "✅ **have written**\n\n*💡 Правило: Present Perfect Simple подчеркивает результат: три письма уже написаны.*"],
        ['q' => 'I ___ (писать) emails all morning.', 'a' => "✅ **have been writing**\n\n*💡 Правило: Present Perfect Continuous подчеркивает длительность процесса.*"],
        ['q' => 'I have ___ (знать) him since 2010.', 'a' => "✅ **known**\n\n*💡 Правило: Исключение! Глаголы состояния (know, like, want, believe) НЕ используются в Continuous.*"],
        
        // --- Past Perfect Basics ---
        ['q' => 'When I arrived at the station, the train ___ (уже уехал).', 'a' => "✅ **had already left**\n\n*💡 Правило: Past Perfect (предпрошедшее время).*"],
        ['q' => 'She was nervous because she ___ (никогда не летала) before.', 'a' => "✅ **had never flown**\n\n*💡 Правило: Past Perfect для опыта до определенного момента в прошлом.*"],

        // --- Used to / Be used to / Get used to ---
        ['q' => 'I ___ (раньше жил) in London, but now I live in Paris.', 'a' => "✅ **used to live**\n\n*💡 Правило: used to + инфинитив = старая привычка.*"],
        ['q' => 'I ___ (привык к) waking up early. It\'s normal for me now.', 'a' => "✅ **am used to**\n\n*💡 Правило: be used to + V-ing = иметь привычку в настоящем.*"],
        ['q' => 'I can\'t ___ (привыкнуть к) this cold weather.', 'a' => "✅ **get used to**\n\n*💡 Правило: get used to + V-ing = стать привыкшим.*"],

        // --- Conditionals (1st, 2nd, 3rd basics) ---
        ['q' => 'If it ___ (дождь) tomorrow, we will stay at home.', 'a' => "✅ **rains**\n\n*💡 Правило: 1st Conditional. Условие (If) стоит в Present Simple, результат в Future Simple.*"],
        ['q' => 'If I ___ (быть) you, I would study harder.', 'a' => "✅ **were**\n\n*💡 Правило: 2nd Conditional. В классическом 2nd Conditional обычно используют were для всех лиц: If I were you...*"],
        ['q' => 'If I had a million dollars, I ___ (купить) an island.', 'a' => "✅ **would buy**\n\n*💡 Правило: 2nd Conditional. Мечты в настоящем/будущем.*"],
        ['q' => 'If I ___ (знать) you were in hospital, I would have visited you.', 'a' => "✅ **had known**\n\n*💡 Правило: 3rd Conditional (Сожаления о прошлом).*"],
        ['q' => 'If he had driven carefully, he ___ (не разбил бы) the car.', 'a' => "✅ **wouldn't have crashed**\n\n*💡 Правило: 3rd Conditional. Действие в прошлом нельзя изменить.*"],

        // --- Reported Speech (Косвенная речь) ---
        ['q' => 'She said, "I am tired." -> She said that she ___ (была) tired.', 'a' => "✅ **was**\n\n*💡 Правило: Шаг назад в прошлое: Present Simple -> Past Simple.*"],
        ['q' => 'He said, "I have finished." -> He said that he ___ (закончил).', 'a' => "✅ **had finished**\n\n*💡 Правило: Present Perfect -> Past Perfect.*"],
        ['q' => 'She said, "I will call you tomorrow." -> She said she ___ (позвонит) me the next day.', 'a' => "✅ **would call**\n\n*💡 Правило: will -> would.*"],
        ['q' => 'He asked, "Where do you live?" -> He asked where I ___.', 'a' => "✅ **lived**\n\n*💡 Правило: В reported questions порядок слов прямой: where + subject + verb.*"],
        ['q' => 'She asked, "Are you tired?" -> She asked ___ I was tired.', 'a' => "✅ **if / whether**\n\n*💡 Правило: В yes/no questions используем if или whether.*"],
        ['q' => 'He said, "Don\'t be late." -> He told me ___ late.', 'a' => "✅ **not to be**\n\n*💡 Правило: reported command: told + object + not to + verb.*"],
        ['q' => 'She said, "Please help me." -> She asked me ___ her.', 'a' => "✅ **to help**\n\n*💡 Правило: asked + object + to + verb.*"],

        // --- Indirect Questions (Косвенные вопросы) ---
        ['q' => 'Where is the station? -> Do you know where the station ___?', 'a' => "✅ **is**\n\n*💡 Правило: В косвенных вопросах прямой порядок слов! (where + subject + verb).*"],
        ['q' => 'Where does he live? -> Can you tell me where he ___ (жить)?', 'a' => "✅ **lives**\n\n*💡 Правило: Вспомогательные глаголы do/does/did ИСЧЕЗАЮТ.*"],
        ['q' => 'Did she pass the exam? -> I wonder ___ she passed the exam.', 'a' => "✅ **if / whether**\n\n*💡 Правило: Если нет вопросительного слова, используем if/whether (ли).*"],

        // --- Passive Voice Basics ---
        ['q' => 'The room ___ (убирают) every day.', 'a' => "✅ **is cleaned**\n\n*💡 Правило: Present Simple Passive: am/is/are + V3.*"],
        ['q' => 'The letter ___ (было отправлено) yesterday.', 'a' => "✅ **was sent**\n\n*💡 Правило: Past Simple Passive: was/were + V3.*"],
        ['q' => 'The email will ___ (быть отправлено) tomorrow.', 'a' => "✅ **be sent**\n\n*💡 Правило: Future Passive: will be + V3.*"],

        // --- Gerund vs Infinitive (Разница смыслов) ---
        ['q' => 'Please remember ___ (запереть) the door when you leave.', 'a' => "✅ **to lock**\n\n*💡 Правило: remember to do = не забудь что-то сделать (будущее).*"],
        ['q' => 'I remember ___ (как посещал) Paris when I was a child.', 'a' => "✅ **visiting**\n\n*💡 Правило: remember doing = вспоминать о прошлом.*"],
        ['q' => 'I stopped ___ (курить) last year.', 'a' => "✅ **smoking**\n\n*💡 Правило: stop doing = бросить привычку.*"],
        ['q' => 'I was walking, and I stopped ___ (чтобы купить) a coffee.', 'a' => "✅ **to buy**\n\n*💡 Правило: stop to do = остановиться, ЧТОБЫ что-то сделать.*"],
        ['q' => 'He apologized for ___ (за то, что опоздал).', 'a' => "✅ **being late**\n\n*💡 Правило: Глаголы с предлогами (apologize for, insist on, succeed in) всегда требуют герундия (-ing).*"],

        // --- Relative Clauses ---
        ['q' => 'The man ___ (который) lives here is a doctor.', 'a' => "✅ **who / that**\n\n*💡 Правило: Для людей используем who или that.*"],
        ['q' => 'The car ___ (которую) I bought is fast.', 'a' => "✅ **which / that**\n\n*💡 Правило: Для вещей используем which или that.*"],
        ['q' => 'The city ___ (где) I live is big.', 'a' => "✅ **where**\n\n*💡 Правило: Для мест используем where.*"],
        ['q' => 'The woman ___ lives next door is a doctor.', 'a' => "✅ **who / that**\n\n*💡 Правило: Если who/that является подлежащим, его нельзя опустить.*"],
        ['q' => 'The book ___ I bought yesterday is interesting.', 'a' => "✅ **which / that / -**\n\n*💡 Правило: Если which/that является объектом, его можно опустить.*"],
        ['q' => 'My brother, ___ lives in London, is a doctor.', 'a' => "✅ **who**\n\n*💡 Правило: В non-defining relative clauses используем who/which, но не that.*"],

        // --- Quantifiers ---
        ['q' => 'I have ___ (несколько) friends, so I am not lonely.', 'a' => "✅ **a few**\n\n*💡 Правило: a few = несколько, достаточно. Используется с исчисляемыми существительными.*"],
        ['q' => 'I have ___ (мало) friends, so I feel lonely.', 'a' => "✅ **few**\n\n*💡 Правило: few = мало, недостаточно. Используется с исчисляемыми существительными.*"],
        ['q' => 'We have ___ (немного) time, so we can have coffee.', 'a' => "✅ **a little**\n\n*💡 Правило: a little = немного, но достаточно. Используется с неисчисляемыми существительными.*"],
        ['q' => 'We have ___ (мало) time, so hurry up!', 'a' => "✅ **little**\n\n*💡 Правило: little = мало, недостаточно. Используется с неисчисляемыми существительными.*"],
        ['q' => '___ (Каждый) student must do the homework.', 'a' => "✅ **Every**\n\n*💡 Правило: every смотрит на группу целиком: каждый из группы.*"],
        ['q' => 'There were two boys. ___ (Каждый) boy had a bag.', 'a' => "✅ **Each**\n\n*💡 Правило: each подчеркивает каждого отдельно, часто из небольшой группы.*"],
        ['q' => '___ (Оба) my parents are doctors.', 'a' => "✅ **Both**\n\n*💡 Правило: Both = и тот и другой.*"],
        ['q' => 'You can have ___ (или) tea or coffee.', 'a' => "✅ **either**\n\n*💡 Правило: Either ... or = или ... или.*"],
        ['q' => 'I like ___ (ни) tea nor coffee.', 'a' => "✅ **neither**\n\n*💡 Правило: Neither ... nor = ни ... ни.*"],

        // --- Articles B1 ---
        ['q' => 'I went to ___ school when I was six.', 'a' => "✅ **-**\n\n*💡 Правило: go to school = ходить в школу как ученик, артикль не нужен.*"],
        ['q' => 'My mother went to ___ school to talk to my teacher.', 'a' => "✅ **the**\n\n*💡 Правило: the school = конкретное здание школы.*"],
        ['q' => 'He is in ___ hospital after the accident.', 'a' => "✅ **hospital / the hospital**\n\n*💡 Правило: British English часто: in hospital. American English: in the hospital.*"],
        ['q' => 'The rich should help ___ (бедных).', 'a' => "✅ **the poor**\n\n*💡 Правило: the + adjective может обозначать группу людей: the rich, the poor, the young.*"],

        // --- Linking Words ---
        ['q' => '___ (Хотя) it was raining, we went for a walk.', 'a' => "✅ **Although**\n\n*💡 Правило: although = хотя. После although идет целое предложение.*"],
        ['q' => 'It was raining. ___ (Однако), we went for a walk.', 'a' => "✅ **However**\n\n*💡 Правило: however = однако. Обычно стоит в начале второго предложения.*"],
        ['q' => '___ (Несмотря на) the rain, we went for a walk.', 'a' => "✅ **Despite**\n\n*💡 Правило: despite + noun / V-ing. Не ставим полноценное предложение сразу после despite.*"],
        ['q' => 'I stayed at home ___ (потому что) I was ill.', 'a' => "✅ **because**\n\n*💡 Правило: because показывает причину.*"],
        ['q' => 'I was ill, ___ (поэтому) I stayed at home.', 'a' => "✅ **so**\n\n*💡 Правило: so показывает результат.*"],
        ['q' => 'I am learning English ___ (чтобы) get a better job.', 'a' => "✅ **in order to / to**\n\n*💡 Правило: in order to + verb показывает цель.*"],



        // --- Modals: Advice, Obligation, Deduction ---
        ['q' => 'He has a Ferrari. He ___ (должно быть) be very rich.', 'a' => "✅ **must**\n\n*💡 Правило: must используется, когда мы почти уверены на основе фактов или логики.*"],
        ['q' => 'She ___ (не может) be at home. I saw her 5 minutes ago.', 'a' => "✅ **can't**\n\n*💡 Правило: can\'t используется, когда мы считаем что-то практически невозможным.*"],

        // --- Future Continuous & Future Perfect ---
        ['q' => 'This time tomorrow, I ___ (буду лежать) on the beach.', 'a' => "✅ **will be lying**\n\n*💡 Правило: Future Continuous (процесс в точное время в будущем).*"],
        ['q' => 'By the end of this year, I ___ (накоплю) $5000.', 'a' => "✅ **will have saved**\n\n*💡 Правило: Future Perfect (действие завершится ДО определенного момента в будущем).*"],

        // --- Past Perfect Continuous ---
        ['q' => 'They ___ (вести машину) for 5 hours before they found a hotel.', 'a' => "✅ **had been driving**\n\n*💡 Правило: Past Perfect Continuous. Подчеркивает длительность процесса, ДО другого действия в прошлом.*"],

        // --- Mixed Conditionals ---
        ['q' => 'If I had won the lottery yesterday, I ___ (быть) rich now.', 'a' => "✅ **would be**\n\n*💡 Правило: Mixed Conditional (Условие в прошлом, результат сейчас).*"],

        // --- Needn't have done vs didn't need to ---
        ['q' => 'I bought milk, but we already had a lot. I ___ (зря купил) it.', 'a' => "✅ **needn't have bought**\n\n*💡 Правило: needn't have done = действие БЫЛО сделано, но оно было не нужно (зря).*"],
        ['q' => 'I knew we had milk, so I ___ (не стал покупать) it.', 'a' => "✅ **didn't need to buy**\n\n*💡 Правило: didn't need to do = действие НЕ БЫЛО сделано, потому что не было нужно.*"],

        // --- Modal Deductions in the Past ---
        ['q' => 'The ground is wet. It ___ (должно быть, шел дождь) in the night.', 'a' => "✅ **must have rained**\n\n*💡 Правило: Дедукция в ПРОШЛОМ: modal + have + V3.*"],
        ['q' => 'He failed the exam. He ___ (не мог учиться) hard.', 'a' => "✅ **can't have studied / couldn't have studied**\n\n*💡 Правило: Уверенность в отрицании в прошлом.*"],

        // --- Causative Form (Have something done) ---
        ['q' => 'I didn\'t cut my hair myself. I ___ (сделал стрижку - пассив).', 'a' => "✅ **had it cut / got it cut**\n\n*💡 Правило: have/get + объект + V3 (услугу сделали для вас).*"],
        ['q' => 'I will ___ (заставлю / попрошу) my brother to fix the car.', 'a' => "✅ **get**\n\n*💡 Правило: get SOMEONE TO DO something (с частицей to).*"],
        ['q' => 'I will ___ (поручу) the mechanic fix the car.', 'a' => "✅ **have**\n\n*💡 Правило: have SOMEONE DO something (без частицы to).*"],

        // --- Advanced Passive Voice ---
        ['q' => 'The room ___ (убирают) right now.', 'a' => "✅ **is being cleaned**\n\n*💡 Правило: Present Continuous Passive (am/is/are + being + V3).*"],
        ['q' => 'The window ___ (уже было разбито) when I arrived.', 'a' => "✅ **had already been broken**\n\n*💡 Правило: Past Perfect Passive.*"],

        // --- Inversion & Emphatic Do ---
        ['q' => 'I ___ (действительно) like you!', 'a' => "✅ **do**\n\n*💡 Правило: Усилительное do/does/did перед глаголом (Emphatic do).*"],
        ['q' => 'Never ___ (я видел) such a beautiful girl.', 'a' => "✅ **have I seen**\n\n*💡 Правило: Инверсия после отрицательных наречий (Never, Rarely, Seldom). Порядок слов как в вопросе (have + I + V3).*"],

        // --- It's high time / Would rather / Had better ---
        ['q' => 'It\'s high time you ___ (пойти) to bed!', 'a' => "✅ **went**\n\n*💡 Правило: После 'It's time' / 'It's high time' + подлежащее -> глагол ставится в Past Simple! (Давно пора).*"],
        ['q' => 'I ___ ___ (предпочел бы) stay at home tonight.', 'a' => "✅ **would rather / 'd rather**\n\n*💡 Правило: would rather + V (без to).*"],
        ['q' => 'You ___ ___ (лучше бы) see a doctor. You look awful.', 'a' => "✅ **had better / 'd better**\n\n*💡 Правило: had better + V (без to). Сильный совет.*"],

        // --- Tricky Question Tags ---
        ['q' => 'Let\'s go to the cinema, ___ ___ (не так ли)?', 'a' => "✅ **shall we**\n\n*💡 Правило: После Let's хвостик всегда 'shall we?'.*"],
        ['q' => 'Don\'t forget to call me, ___ ___ (хорошо)?', 'a' => "✅ **will you**\n\n*💡 Правило: В повелительном наклонении хвостик 'will you?'.*"],
        ['q' => 'I am right, ___ I (не так ли)?', 'a' => "✅ **aren't**\n\n*💡 Правило: Исключение! Для 'I am' хвостик 'aren\'t I?'.*"],

        // --- Wish / If only (about the past) ---
        ['q' => 'I wish I ___ (иметь) more money.', 'a' => "✅ **had**\n\n*💡 Правило: Сожаление о настоящем -> Past Simple.*"],
        ['q' => 'I wish I ___ (не говорил) that to her yesterday.', 'a' => "✅ **hadn't said**\n\n*💡 Правило: Сожаление о прошлом -> Past Perfect.*"],
    ],
];
