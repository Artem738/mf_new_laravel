<?php

return [
    'name' => '🔴 🇬🇧 Англійська: Граматика B2 (Просунута)',
    'description' => 'Максимальний набір граматичних структур рівня B2: Inversion, Participle Clauses, Alternatives to IF, Cleft sentences, Advanced Modals, Causative form, та нюанси злічуваних/незлічуваних іменників.',
    'question_lang' => 'uk',
    'answer_lang' => 'en',
    'cards' => [
        // --- Inversion (Інверсія) ---
        ['q' => '___ (Ніколи раніше не бачив я) such a terrible storm.', 'a' => "✅ **Never before have I seen**\n\n*💡 Правило: Після заперечних прислівників (Never, Rarely, Seldom) на початку речення відбувається інверсія — допоміжне дієслово ставиться перед підметом.*"],
        ['q' => '___ (Не тільки він спізнився), but he also forgot his passport.', 'a' => "✅ **Not only was he late**\n\n*💡 Правило: Інверсія з Not only... but also. У першій частині порядок слів запитальний.*"],
        ['q' => '___ (Ледве я ліг спати) when the phone rang.', 'a' => "✅ **Hardly had I gone to bed**\n\n*💡 Правило: Конструкція Hardly ... when (Ледве ... як). Використовується Past Perfect.*"],
        ['q' => '___ (Щойно я вийшов) than it started to rain.', 'a' => "✅ **No sooner had I left**\n\n*💡 Правило: Конструкція No sooner ... than (Щойно ... так відразу).*"],
        ['q' => '___ (Мало я знав) about her real plans.', 'a' => "✅ **Little did I know**\n\n*💡 Правило: Інверсія зі словом Little у значенні \"майже не, навряд чи\".*"],
        ['q' => 'On no account ___ (ви не повинні) open this door.', 'a' => "✅ **must you**\n\n*💡 Правило: On no account (У жодному разі) також вимагає інверсії.*"],
        ['q' => 'Only after the meeting ___ (я зрозумів) the problem.', 'a' => "✅ **did I understand**\n\n*💡 Правило: Only after / Only when на початку речення викликають інверсію в ГОЛОВНОМУ реченні.*"],

        // --- Participle Clauses (Дієприкметникові звороти) ---
        ['q' => '___ (Відчуваючи) tired, I went to bed early.', 'a' => "✅ **Feeling**\n\n*💡 Правило: Present Participle (V-ing) замінює \"Because I felt tired\". Дії відбуваються одночасно.*"],
        ['q' => '___ (Зробивши) my homework, I went for a walk.', 'a' => "✅ **Having done**\n\n*💡 Правило: Perfect Participle (Having + V3) використовується, щоб показати, що одна дія ЗАВЕРШИЛАСЯ до початку іншої.*"],
        ['q' => '___ (Будучи побудованим) in 1890, the bridge is very old.', 'a' => "✅ **Built / Having been built**\n\n*💡 Правило: Past Participle (V3) має пасивне значення.*"],
        ['q' => '___ (Не знаючи) what to do, she started to cry.', 'a' => "✅ **Not knowing**\n\n*💡 Правило: Заперечення в дієприкметникових зворотах ставиться ПЕРЕД дієприкметником.*"],
        ['q' => '___ (Відкривши) the door, he saw a strange man.', 'a' => "✅ **Opening**\n\n*💡 Правило: Дії відбуваються одна за одною дуже швидко, тому використовуємо V-ing.*"],

        // --- Conditionals & Alternatives to IF (Заміна If) ---
        ['q' => 'You can borrow my car ___ ___ ___ (за умови, що) you bring it back tomorrow.', 'a' => "✅ **as long as / provided that / on condition that**\n\n*💡 Правило: Це синоніми \"If\", але вони роблять умову більш суворою (тільки якщо).*"],
        ['q' => '___ (Уяви/Припустимо) you won the lottery, what would you do?', 'a' => "✅ **Suppose / Supposing**\n\n*💡 Правило: Використовується для гіпотетичних ситуацій замість If (зазвичай з 2nd Conditional).*"],
        ['q' => 'I won\'t go to the party ___ (якщо не / поки не) you come with me.', 'a' => "✅ **unless**\n\n*💡 Правило: Unless = If not. Після нього дієслово ставиться у СТВЕРДЖУВАЛЬНІЙ формі.*"],
        ['q' => '___ (У разі) fire, do not use the elevators.', 'a' => "✅ **In case of**\n\n*💡 Правило: \"In case of\" + іменник. Означає \"Якщо станеться...\".*"],
        ['q' => 'I will take an umbrella ___ ___ (на випадок якщо) it rains.', 'a' => "✅ **in case**\n\n*💡 Правило: in case + речення (на випадок, якщо щось станеться).*"],
        ['q' => 'If I ___ (не загубив) my keys yesterday, I ___ (не стояв би) outside now.', 'a' => "✅ **hadn't lost / wouldn't be standing**\n\n*💡 Правило: Mixed Conditional (Past -> Present). Умова в минулому, результат зараз.*"],
        ['q' => 'If he ___ (був би) a better driver, he ___ (не розбив би) the car last week.', 'a' => "✅ **were / wouldn't have crashed**\n\n*💡 Правило: Mixed Conditional (Present -> Past). Властивість у теперішньому, результат у минулому.*"],
        ['q' => 'If I ___ (не з\'їв) so much pizza, I ___ (не почувався б) sick now.', 'a' => "✅ **hadn't eaten / wouldn't feel**\n\n*💡 Правило: Mixed Conditional (Past action -> Present result).*"],
        ['q' => '___ (Якби не) his help, I would have failed.', 'a' => "✅ **But for / Had it not been for**\n\n*💡 Правило: \"Якби не\" для жалю про минуле.*"],

        // --- Passive with Reporting Verbs (Складний пасив) ---
        ['q' => '___ (Кажуть, що) he is a millionaire.', 'a' => "✅ **It is said that**\n\n*💡 Правило: Безособова пасивна конструкція.*"],
        ['q' => 'He is said ___ (що він мільйонер).', 'a' => "✅ **to be a millionaire**\n\n*💡 Правило: Особова пасивна конструкція. Підмет + пасив + інфінітив.*"],
        ['q' => 'She is believed ___ (що вона вкрала) the money.', 'a' => "✅ **to have stolen**\n\n*💡 Правило: Якщо дія відбулася у МИНУЛОМУ, використовується Perfect Infinitive (to have + V3).*"],
        ['q' => 'The company is reported ___ (що вона втрачає) money right now.', 'a' => "✅ **to be losing**\n\n*💡 Правило: Якщо процес відбувається прямо зараз, використовується Continuous Infinitive (to be + V-ing).*"],
        ['q' => 'They are thought ___ (що переїхали) to Paris last year.', 'a' => "✅ **to have moved**\n\n*💡 Правило: Дія в минулому -> to have + V3.*"],

        // --- Causative Form (Послуги) ---
        ['q' => 'I ___ my car ___ (помив машину / мені помили) yesterday.', 'a' => "✅ **had / washed (or: got / washed)**\n\n*💡 Правило: have/get + object + V3 = коли хтось робить роботу для вас.*"],
        ['q' => 'She is going to ___ her hair ___ (підстригти волосся / їй підстрижуть) tomorrow.', 'a' => "✅ **have / cut (or: get / cut)**\n\n*💡 Правило: Causative form у майбутньому часі.*"],
        ['q' => 'I got him ___ (допомогти) me with my homework.', 'a' => "✅ **to help**\n\n*💡 Правило: get + person + TO do something = переконати когось щось зробити.*"],
        ['q' => 'I had him ___ (полагодити) my laptop.', 'a' => "✅ **fix**\n\n*💡 Правило: have + person + DO something = доручити комусь щось зробити (без to).*"],
        ['q' => 'He made me ___ (плакати).', 'a' => "✅ **cry**\n\n*💡 Правило: make + person + DO = змусити (в активі завжди без TO).*"],
        ['q' => 'I was made ___ (плакати).', 'a' => "✅ **to cry**\n\n*💡 Правило: У ПАСИВІ після make обов'язково ставиться TO.*"],

        // --- Relative Clauses with Prepositions ---
        ['q' => 'The woman ___ I was talking ___ is my boss.', 'a' => "✅ **who(m) / to**\n\n*💡 Правило: У розмовній мові прийменник (to) ставиться в кінець.*"],
        ['q' => 'The woman ___ ___ I was talking is my boss.', 'a' => "✅ **to whom**\n\n*💡 Правило: В офіційній (formal) мові прийменник ставиться ПЕРЕД whom (ніколи перед who).*"],
        ['q' => 'The house ___ ___ I grew up is very old.', 'a' => "✅ **in which / where**\n\n*💡 Правило: where = in/at which.*"],
        ['q' => 'He gave me two books, both of ___ (обидві з яких) I had read.', 'a' => "✅ **which**\n\n*💡 Правило: both of which / some of which / many of whom використовуються в non-defining relative clauses.*"],

        // --- Cleft Sentences (Емфатичні речення) ---
        ['q' => '___ ___ John ___ broke the window. (Саме Джон розбив вікно)', 'a' => "✅ **It was / who (that)**\n\n*💡 Правило: Cleft sentence (It was ... who/that) використовується для виділення певної частини речення.*"],
        ['q' => '___ I really need ___ a cup of tea. (Те, що мені потрібно - це чай)', 'a' => "✅ **What / is**\n\n*💡 Правило: Cleft sentence з What (Те, що / Все, що).*"],
        ['q' => '___ ___ he did ___ call the police. (Все, що він зробив - це...)', 'a' => "✅ **All / was**\n\n*💡 Правило: Cleft sentence зі словом All.*"],
        ['q' => '___ ___ on Monday that we met. (Саме в понеділок ми зустрілися)', 'a' => "✅ **It was**\n\n*💡 Правило: It was + обставина + that.*"],

        // --- Modals in the Past (Просунуті форми) ---
        ['q' => 'I ___ (не повинен був) shouted at you, I\'m sorry.', 'a' => "✅ **shouldn't have**\n\n*💡 Правило: Жаль про вчинену дію в минулому.*"],
        ['q' => 'You ___ (міг би) told me you were going to be late!', 'a' => "✅ **could have**\n\n*💡 Правило: Дорікання (ти міг би й сказати).*"],
        ['q' => 'He ___ (можливо) missed the train, but I\'m not sure.', 'a' => "✅ **might have / may have / could have**\n\n*💡 Правило: Ймовірність у минулому (50/50).*"],
        ['q' => 'She ___ (не могла) stolen the money. She is too honest.', 'a' => "✅ **can't have / couldn't have**\n\n*💡 Правило: Логічний висновок (100% впевненість у тому, що цього НЕ було).*"],
        ['q' => 'You ___ (мабуть / напевно) been exhausted after that long flight.', 'a' => "✅ **must have**\n\n*💡 Правило: Логічний висновок (100% впевненість у тому, що це БУЛО).*"],
        ['q' => 'I ___ (не треба було) taken an umbrella. It didn\'t rain.', 'a' => "✅ **needn't have**\n\n*💡 Правило: Дія була виконана, але виявилася непотрібною.*"],
        ['q' => 'I ___ (не довелося) take an umbrella because it was sunny.', 'a' => "✅ **didn't need to**\n\n*💡 Правило: Дія НЕ БУЛА виконана, тому що не було потреби.*"],

        // --- Advanced Obligations ---
        ['q' => 'You ___ ___ ___ (передбачається, що) wear a suit, but it\'s not strict.', 'a' => "✅ **are supposed to**\n\n*💡 Правило: be supposed to - повинен (очікується, за правилами).*"],
        ['q' => 'Nobody ___ ___ ___ (не повинен/не має права) leave the room.', 'a' => "✅ **is to**\n\n*💡 Правило: be to - формальний наказ/заборона (Nobody is to leave = Ніхто не повинен залишати).*"],
        ['q' => 'You ___ (краще) tell her the truth.', 'a' => "✅ **had better ('d better)**\n\n*💡 Правило: had better + V - наполеглива порада (інакше будуть погані наслідки).*"],

        // --- Future in the Past & Advanced Future ---
        ['q' => 'I ___ (збирався) call you, but I forgot.', 'a' => "✅ **was going to**\n\n*💡 Правило: План у минулому, який не здійснився.*"],
        ['q' => 'I ___ ___ ___ (саме збирався) leave when it started raining.', 'a' => "✅ **was about to**\n\n*💡 Правило: was/were about to do - збирався зробити щось ось-ось (буквально в наступну секунду).*"],
        ['q' => 'The President ___ ___ (має) visit London next week.', 'a' => "✅ **is to**\n\n*💡 Правило: be to + infinitive часто використовується в новинах для запланованих офіційних подій.*"],
        ['q' => 'The train ___ ___ ___ (ось-ось) leave. Hurry up!', 'a' => "✅ **is on the verge of / is on the point of**\n\n*💡 Правило: be on the point of + V-ing - ось-ось станеться.*"],

        // --- Adjectives & Comparatives (Advanced) ---
        ['q' => 'I was ___ (дуже) tired.', 'a' => "✅ **very / extremely**\n\n*💡 Правило: Зі звичайними прикметниками (tired, cold, hot) використовуємо very, extremely.*"],
        ['q' => 'I was ___ (абсолютно) exhausted.', 'a' => "✅ **absolutely / completely**\n\n*💡 Правило: Зі \"строгими\"/крайніми прикметниками (exhausted, freezing, boiling) не можна ставити very! Ми ставимо absolutely або completely.*"],
        ['q' => '___ (Чим більше) you read, ___ (тим розумнішим) you get.', 'a' => "✅ **The more / the smarter**\n\n*💡 Правило: Конструкція The ... the ... (Чим ..., тим ...). Вимагає артикля the перед вищим ступенем!*"],
        ['q' => 'She is ___ ___ (навіть близько не) as tall as her sister.', 'a' => "✅ **nowhere near**\n\n*💡 Правило: nowhere near as ... as - підсилювач порівняння (зовсім не такий як).*"],
        ['q' => 'He is ___ (набагато) older than me.', 'a' => "✅ **much / far / significantly**\n\n*💡 Правило: Підсилювачі вищого ступеня.*"],

        // --- Uncountable Nouns & Articles (Трюки B2) ---
        ['q' => 'I have some good ___ (новини). ___ (Вони) are about your promotion.', 'a' => "✅ **news / It**\n\n*💡 Правило: Слово news (новини) завжди в ОДНИНІ і вимагає займенника It та дієслова is.*"],
        ['q' => 'Let me give you ___ (одну пораду).', 'a' => "✅ **a piece of advice**\n\n*💡 Правило: Advice (порада) незлічуване. Не можна сказати \"an advice\". Потрібно \"a piece of advice\" або \"some advice\".*"],
        ['q' => 'Your luggage ___ (дуже важкий).', 'a' => "✅ **is very heavy**\n\n*💡 Правило: Luggage/Baggage (багаж), Furniture (меблі), Accommodation (житло) — завжди незлічувані (дієслово в однині: is, has, was).*"],
        ['q' => 'The police ___ (розслідує) the crime.', 'a' => "✅ **are investigating**\n\n*💡 Правило: Слово police завжди у МНОЖИНІ (police are, police have).*"],
        
        // --- Articles with Geographical Names & Nouns ---
        ['q' => 'I climbed ___ (Еверест) last year.', 'a' => "✅ **Mount Everest**\n\n*💡 Правило: Одиночні гори (Everest, Kilimanjaro) йдуть БЕЗ артикля, на відміну від гірських ланцюгів (the Alps).*"],
        ['q' => 'We sailed across ___ (Атлантичний океан).', 'a' => "✅ **the Atlantic Ocean**\n\n*💡 Правило: Океани, моря, річки та канали завжди з артиклем the.*"],
        ['q' => 'They went to ___ (Багами) for their honeymoon.', 'a' => "✅ **the Bahamas**\n\n*💡 Правило: Острівні групи (the Bahamas, the Canary Islands) вимагають артикля the, а поодинокі острови (Cyprus) - ні.*"],
        ['q' => 'She speaks ___ (французькою), but she is learning ___ (французьку мову).', 'a' => "✅ **French / the French language**\n\n*💡 Правило: Назви мов - без артикля, але якщо є слово \"language\", то потрібен the.*"],
        ['q' => 'She plays ___ (на піаніно) very well.', 'a' => "✅ **the piano**\n\n*💡 Правило: Музичні інструменти вимагають артикля the.*"],
        ['q' => '___ (Безробітним) should be given more support.', 'a' => "✅ **The unemployed**\n\n*💡 Правило: The + прикметник позначає групу людей (the rich, the poor, the elderly).*"],

        // --- Subjunctive Mood & Unreal Past (Сослагательное B2) ---
        ['q' => 'I suggest that he ___ (залишить) immediately.', 'a' => "✅ **leave / should leave**\n\n*💡 Правило: Після дієслів suggest, recommend, insist, demand використовується голий інфінітив (без s/es) навіть для he/she/it! Або should + V.*"],
        ['q' => 'It is vital that she ___ (не знає) the truth.', 'a' => "✅ **not know / shouldn't know**\n\n*💡 Правило: Заперечення у Subjunctive mood будується без don't/doesn't (просто not + дієслово).*"],
        ['q' => 'It\'s high time you ___ (знайшов) a job!', 'a' => "✅ **found**\n\n*💡 Правило: It's (high) time + Past Simple = давно час щось зробити.*"],
        ['q' => 'I\'d rather you ___ (не курив) here.', 'a' => "✅ **didn't smoke**\n\n*💡 Правило: I would rather + someone + Past Simple = перевага щодо дій ІНШОЇ людини.*"],
        ['q' => 'I wish I ___ (мав) more free time.', 'a' => "✅ **had**\n\n*💡 Правило: I wish + Past Simple = жаль про сьогодення.*"],
        ['q' => 'I wish you ___ (припинив) making that noise!', 'a' => "✅ **would stop**\n\n*💡 Правило: I wish + somebody + would = роздратування щодо чужої поведінки.*"],
        ['q' => 'If only I ___ (знав) the answer yesterday!', 'a' => "✅ **had known**\n\n*💡 Правило: If only / I wish + Past Perfect = жаль про минуле.*"],

        // --- Verbs with two meanings (Gerund/Infinitive) ---
        ['q' => 'I regret ___ (що говорю) you that your application was rejected.', 'a' => "✅ **to tell**\n\n*💡 Правило: regret to tell/inform = з жалем повідомляємо (офіційно).*"],
        ['q' => 'I regret ___ (що сказав) those words.', 'a' => "✅ **saying**\n\n*💡 Правило: regret + V-ing = шкодувати про вчинене в минулому.*"],
        ['q' => 'He went on ___ (розповідати) us about his trip.', 'a' => "✅ **telling / to tell**\n\n*💡 Правило: Залежно від контексту. Якщо ПРОДОВЖИВ ту саму тему = telling. Якщо ПЕРЕЙШОВ до нової теми = to tell.*"],
        ['q' => 'This shirt needs ___ (щоб її випрали).', 'a' => "✅ **washing / to be washed**\n\n*💡 Правило: need + V-ing = пасивне значення (потребує прання).*"],
        ['q' => 'I remember ___ (як зачиняв) the door when I left.', 'a' => "✅ **closing**\n\n*💡 Правило: remember + V-ing = пам'ятати подію з минулого.*"],
        ['q' => 'Remember ___ (зачинити) the door when you leave.', 'a' => "✅ **to close**\n\n*💡 Правило: remember + to do = не забудь зробити.*"],
    ],
];
