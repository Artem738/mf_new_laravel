<?php

return [
    'name' => '🟡 🇬🇧 Английский: Грамматика A2 (Продвинутая)',
    'description' => 'Ультимативная коллекция грамматики A2. Более 120 карточек. Детальный разбор Present Perfect, разницы будущих времен, пассива, герундия, модальных глаголов, question tags, so/such, prepositions of movement.',
    'cards' => [
        // --- Comparatives & Superlatives ---
        ['q' => 'A cheetah is ___ (fast) than a lion.', 'a' => "✅ **faster**\n\n*💡 Правило: К коротким (односложным) прилагательным добавляем -er.*"],
        ['q' => 'This test is ___ (difficult) than the last one.', 'a' => "✅ **more difficult**\n\n*💡 Правило: К длинным прилагательным (2 и более слогов) добавляем слово more.*"],
        ['q' => 'What is ___ (long) river in the world?', 'a' => "✅ **the longest**\n\n*💡 Правило: Превосходная степень. Не забываем артикль the!*"],
        ['q' => 'This is ___ (bad) day of my life!', 'a' => "✅ **the worst**\n\n*💡 Правило: Исключение! bad -> worse -> the worst.*"],
        ['q' => 'My results are ___ (good) than yours.', 'a' => "✅ **better**\n\n*💡 Правило: Исключение! good -> better -> the best.*"],
        ['q' => 'She is as ___ (tall) as her sister.', 'a' => "✅ **tall**\n\n*💡 Правило: В конструкции as ... as (такой же ... как) прилагательное стоит в начальной форме.*"],
        ['q' => 'His house is ___ (far) than mine.', 'a' => "✅ **further / farther**\n\n*💡 Правило: Исключение! far (далекий) -> further/farther.*"],
        ['q' => 'I have ___ (little) money than you.', 'a' => "✅ **less**\n\n*💡 Правило: Исключение! little -> less -> the least.*"],
        ['q' => 'She has ___ (many/much) friends than me.', 'a' => "✅ **more**\n\n*💡 Правило: Исключение! many/much -> more -> the most.*"],

        // --- Adjectives -ed vs -ing ---
        ['q' => 'This movie is very ___ (bore).', 'a' => "✅ **boring**\n\n*💡 Правило: Окончание -ing описывает саму вещь/ситуацию (Скучный фильм).*"],
        ['q' => 'I am very ___ (bore).', 'a' => "✅ **bored**\n\n*💡 Правило: Окончание -ed описывает чувства человека (Я заскучал).*"],
        ['q' => 'Are you ___ (interest) in history?', 'a' => "✅ **interested**\n\n*💡 Правило: Мои чувства -> -ed.*"],
        ['q' => 'This book is very ___ (interest).', 'a' => "✅ **interesting**\n\n*💡 Правило: Характеристика книги -> -ing.*"],

        // --- Order of Adjectives ---
        ['q' => 'I bought a (red / beautiful / big) car.', 'a' => "✅ **beautiful big red**\n\n*💡 Правило: Порядок прилагательных: Оценка (beautiful) -> Размер (big) -> Цвет (red) + Существительное.*"],
        ['q' => 'She has a (wooden / old / nice) table.', 'a' => "✅ **nice old wooden**\n\n*💡 Правило: Оценка (nice) -> Возраст (old) -> Материал (wooden).*"],

        // --- Past Continuous ---
        ['q' => 'At 7 PM yesterday, I ___ (have) dinner.', 'a' => "✅ **was having**\n\n*💡 Правило: Past Continuous для процесса в точное время в прошлом (was/were + V-ing).*"],
        ['q' => 'They ___ (not / listen) to the teacher.', 'a' => "✅ **were not listening / weren't listening**\n\n*💡 Правило: Отрицание строится при помощи weren't / wasn't.*"],
        ['q' => '___ you ___ (sleep) when I called?', 'a' => "✅ **Were you sleeping**\n\n*💡 Правило: В вопросе was/were выносится перед подлежащим.*"],
        ['q' => 'I was reading a book when the phone ___ (ring).', 'a' => "✅ **rang**\n\n*💡 Правило: Фоновое длительное действие (Past Continuous) прерывается коротким однократным (Past Simple).*"],
        ['q' => 'While she ___ (cook), he was watching TV.', 'a' => "✅ **was cooking**\n\n*💡 Правило: While (в то время как) объединяет два одновременных длительных процесса.*"],

        // --- Present Perfect ---
        ['q' => 'I ___ (just / finish) my project.', 'a' => "✅ **have just finished**\n\n*💡 Правило: Present Perfect. Действие завершилось только что (just). Формула: have/has + V3.*"],
        ['q' => 'She ___ (already / eat) lunch.', 'a' => "✅ **has already eaten**\n\n*💡 Правило: already (уже) используется в утверждениях и ставится между has и глаголом. Глагол eat-ate-eaten.*"],
        ['q' => 'We haven\'t seen this movie ___ (еще).', 'a' => "✅ **yet**\n\n*💡 Правило: yet (еще / уже) ставится в конце отрицаний и вопросов.*"],
        ['q' => '___ you ___ (ever / be) to Spain?', 'a' => "✅ **Have you ever been**\n\n*💡 Правило: ever (когда-либо) используется для вопросов об опыте. Глагол be-was-been.*"],
        ['q' => 'I have ___ (никогда) eaten sushi.', 'a' => "✅ **never**\n\n*💡 Правило: never делает предложение отрицательным (haven't ставить нельзя!).*"],
        ['q' => 'She has lived here ___ 2015.', 'a' => "✅ **since**\n\n*💡 Правило: since (с) указывает на точку начала действия.*"],
        ['q' => 'I have worked here ___ 5 years.', 'a' => "✅ **for**\n\n*💡 Правило: for (в течение) указывает на период времени.*"],
        ['q' => 'He has ___ (be) to Paris. (Он съездил и вернулся)', 'a' => "✅ **been**\n\n*💡 Правило: has been = съездил и уже вернулся.*"],
        ['q' => 'He has ___ (go) to Paris. (Он уехал и все еще там)', 'a' => "✅ **gone**\n\n*💡 Правило: has gone = уехал и пока не вернулся.*"],

        // --- Present Perfect vs Past Simple ---
        ['q' => 'I ___ (see) him yesterday.', 'a' => "✅ **saw**\n\n*💡 Правило: Если есть точное время в прошлом (yesterday), это Past Simple!*"],
        ['q' => 'I ___ (see) him recently. He looks good.', 'a' => "✅ **have seen**\n\n*💡 Правило: recently (недавно) указывает на связь с настоящим -> Present Perfect.*"],
        ['q' => 'Shakespeare ___ (write) many plays.', 'a' => "✅ **wrote**\n\n*💡 Правило: Шекспир умер, период жизни завершен -> Past Simple.*"],
        ['q' => 'Stephen King ___ (write) many books.', 'a' => "✅ **has written**\n\n*💡 Правило: Стивен Кинг жив, период не завершен (он может написать еще) -> Present Perfect.*"],

        // --- Future Forms ---
        ['q' => 'I think cars ___ (fly) in the future.', 'a' => "✅ **will fly**\n\n*💡 Правило: will используется для прогнозов, основанных на нашем мнении (часто со словом think).*"],
        ['q' => 'I promise I ___ (help) you.', 'a' => "✅ **will help**\n\n*💡 Правило: will используется для обещаний (promise).*"],
        ['q' => 'Look at those dark clouds! It ___ (rain).', 'a' => "✅ **is going to rain**\n\n*💡 Правило: be going to используется для предсказаний на основе очевидных фактов прямо сейчас (вижу тучи).*"],
        ['q' => 'I ___ (buy) a new phone next week. I\'ve already saved the money.', 'a' => "✅ **am going to buy**\n\n*💡 Правило: be going to для личных планов и намерений.*"],
        ['q' => 'We ___ (fly) to Paris tomorrow. We have tickets.', 'a' => "✅ **are flying**\n\n*💡 Правило: Present Continuous используется для 100% подтвержденных планов (договоренностей, есть билеты).*"],
        ['q' => 'The train ___ (leave) at 6 PM.', 'a' => "✅ **leaves**\n\n*💡 Правило: Present Simple используется для расписаний (поезда, самолеты, кино, уроки).*"],

        // --- Conditionals ---
        ['q' => 'If you mix blue and yellow, you ___ (get) green.', 'a' => "✅ **get**\n\n*💡 Правило: Zero Conditional (научные факты). Обе части в Present Simple.*"],
        ['q' => 'If the weather ___ (be) good tomorrow, we will go for a walk.', 'a' => "✅ **is**\n\n*💡 Правило: First Conditional. После If всегда идет Present Simple (даже если речь о будущем!).*"],
        ['q' => 'I will call you as soon as I ___ (arrive).', 'a' => "✅ **arrive**\n\n*💡 Правило: После as soon as, when, before, until, after для будущего времени используется Present Simple!*"],

        // --- Modal Verbs ---
        ['q' => 'I ___ (должен) wear glasses because my eyes are bad.', 'a' => "✅ **have to**\n\n*💡 Правило: have to - вынужден из-за обстоятельств или внешних правил.*"],
        ['q' => 'I ___ (должен) study harder! I want to pass the exam.', 'a' => "✅ **must**\n\n*💡 Правило: must - личное внутреннее убеждение или строгий приказ себе/другому.*"],
        ['q' => 'You ___ (нельзя) smoke in the hospital!', 'a' => "✅ **mustn't / must not**\n\n*💡 Правило: mustn't = строгий запрет (нельзя!).*"],
        ['q' => 'Tomorrow is Sunday, so I ___ (не нужно) wake up early.', 'a' => "✅ **don't have to**\n\n*💡 Правило: don't have to = нет необходимости (можешь делать, а можешь не делать).*"],
        ['q' => 'You ___ (следует) see a doctor. You look awful.', 'a' => "✅ **should**\n\n*💡 Правило: should - дружеский совет, рекомендация.*"],
        ['q' => 'You ___ (не следует) drink so much coffee.', 'a' => "✅ **shouldn't**\n\n*💡 Правило: shouldn't - совет чего-то не делать.*"],
        ['q' => 'It ___ (может) rain later, take an umbrella.', 'a' => "✅ **might / may**\n\n*💡 Правило: might/may используются для выражения вероятности в будущем (50/50).*"],

        // --- Infinitive & Gerund ---
        ['q' => 'I enjoy ___ (read) books.', 'a' => "✅ **reading**\n\n*💡 Правило: После глаголов enjoy, finish, mind, suggest, avoid используется герундий (-ing).*"],
        ['q' => 'She decided ___ (go) to university.', 'a' => "✅ **to go**\n\n*💡 Правило: После глаголов decide, want, hope, promise, need, plan используется инфинитив (to).*"],
        ['q' => 'I am interested in ___ (learn) Spanish.', 'a' => "✅ **learning**\n\n*💡 Правило: После ЛЮБОГО предлога (in, on, at, about, for, of) глагол всегда ставится с -ing.*"],
        ['q' => 'It is difficult ___ (understand) this rule.', 'a' => "✅ **to understand**\n\n*💡 Правило: После конструкции it is + прилагательное (difficult, easy, hard, important) используется инфинитив.*"],
        ['q' => 'I went to the supermarket ___ (buy) some milk.', 'a' => "✅ **to buy**\n\n*💡 Правило: Инфинитив цели. В английском \"чтобы что-то сделать\" переводится просто частицей to.*"],
        ['q' => '___ (Читать) is good for your brain.', 'a' => "✅ **Reading**\n\n*💡 Правило: Герундий часто выступает в роли подлежащего в начале предложения.*"],

        // --- Relative Clauses ---
        ['q' => 'This is the man ___ (который) helped me.', 'a' => "✅ **who / that**\n\n*💡 Правило: who используется по отношению к людям.*"],
        ['q' => 'This is the phone ___ (который) I bought yesterday.', 'a' => "✅ **which / that**\n\n*💡 Правило: which используется для предметов и животных.*"],
        ['q' => 'That is the hospital ___ (где) I was born.', 'a' => "✅ **where**\n\n*💡 Правило: where используется для указания места.*"],
        ['q' => 'This is the boy ___ (чей) dog ran away.', 'a' => "✅ **whose**\n\n*💡 Правило: whose переводится как \"чей\" (принадлежность).*"],

        // --- Too & Enough ---
        ['q' => 'This soup is ___ (слишком) hot to eat.', 'a' => "✅ **too**\n\n*💡 Правило: too (слишком) ставится ПЕРЕД прилагательным.*"],
        ['q' => 'He is not tall ___ (достаточно) to reach the shelf.', 'a' => "✅ **enough**\n\n*💡 Правило: enough (достаточно) ставится ПОСЛЕ прилагательного! (tall enough).*"],
        ['q' => 'We don\'t have ___ (достаточно) money for a new car.', 'a' => "✅ **enough**\n\n*💡 Правило: Но если enough стоит с существительным, оно ставится ПЕРЕД ним (enough money).*"],

        // --- Used to ---
        ['q' => 'I ___ (раньше) smoke a lot, but now I don\'t.', 'a' => "✅ **used to**\n\n*💡 Правило: Конструкция used to + V означает старую привычку, которой больше нет.*"],
        ['q' => 'I ___ (раньше не) like olives, but now I love them.', 'a' => "✅ **didn't use to**\n\n*💡 Правило: Отрицание строится с didn't, при этом глагол теряет окончание -d (use, а не used).*"],
        ['q' => '___ you use to play video games in your childhood?', 'a' => "✅ **Did**\n\n*💡 Правило: Вопрос строится с Did.*"],

        // --- Passive Voice ---
        ['q' => 'This book ___ (write) by Stephen King.', 'a' => "✅ **was written**\n\n*💡 Правило: Past Simple Passive (была написана). Формула: was/were + V3.*"],
        ['q' => 'These cars ___ (make) in Germany.', 'a' => "✅ **are made**\n\n*💡 Правило: Present Simple Passive (производятся вообще). Формула: am/is/are + V3.*"],
        ['q' => 'The window was broken ___ Tom.', 'a' => "✅ **by**\n\n*💡 Правило: Предлог by указывает на исполнителя действия.*"],
        ['q' => 'The project ___ (finish) next week.', 'a' => "✅ **will be finished**\n\n*💡 Правило: Future Simple Passive. Формула: will be + V3.*"],

        // --- Indefinite Pronouns ---
        ['q' => 'Is there ___ (кто-нибудь) at home?', 'a' => "✅ **anybody / anyone**\n\n*💡 Правило: В вопросах используем any-.*"],
        ['q' => 'There is ___ (кто-то) behind the door.', 'a' => "✅ **somebody / someone**\n\n*💡 Правило: В утверждениях используем some-.*"],
        ['q' => 'I have ___ (ничего) to wear!', 'a' => "✅ **nothing**\n\n*💡 Правило: В предложении может быть только одно отрицание. I have nothing = у меня нет ничего.*"],
        ['q' => '___ (Все) enjoyed the party.', 'a' => "✅ **Everybody / Everyone**\n\n*💡 Правило: Важно! Everyone/everybody всегда согласуется с глаголом в единственном числе (Everyone is...).*"],

        // --- So / Neither (Краткие согласия) ---
        ['q' => '- I love pizza. - ___ do I.', 'a' => "✅ **So**\n\n*💡 Правило: So do I = Я тоже (согласие с утверждением).*"],
        ['q' => '- I don\'t like snakes. - ___ do I.', 'a' => "✅ **Neither**\n\n*💡 Правило: Neither do I = Я тоже нет (согласие с отрицанием).*"],
        ['q' => '- I am tired. - So ___ I.', 'a' => "✅ **am**\n\n*💡 Правило: Вспомогательный глагол копируется из первого предложения.*"],
        ['q' => '- I can swim. - So ___ I.', 'a' => "✅ **can**\n\n*💡 Правило: Если было can, в ответе тоже can.*"],

        // --- Question Tags (Разделительные вопросы) ---
        ['q' => 'You like pizza, ___ you?', 'a' => "✅ **don't**\n\n*💡 Правило: Утвердительное предложение -> отрицательный \"хвостик\" (You like -> don't you?).*"],
        ['q' => 'She isn\'t here, ___ she?', 'a' => "✅ **is**\n\n*💡 Правило: Отрицательное предложение -> утвердительный \"хвостик\" (She isn't -> is she?).*"],
        ['q' => 'He went to the cinema, ___ he?', 'a' => "✅ **didn't**\n\n*💡 Правило: Прошедшее время -> вспомогательный глагол Past Simple (didn't).*"],
        ['q' => 'I am right, ___ I?', 'a' => "✅ **aren't**\n\n*💡 Правило: Исключение! Для \"I am\" хвостик всегда \"aren't I?\".*"],

        // --- So vs Such ---
        ['q' => 'She is ___ (такая) beautiful!', 'a' => "✅ **so**\n\n*💡 Правило: so ставится перед прилагательными (без существительного).*"],
        ['q' => 'She is ___ (такая) beautiful girl!', 'a' => "✅ **such a**\n\n*💡 Правило: such (a/an) ставится, если после прилагательного идет существительное (girl).*"],

        // --- Prepositions of Movement ---
        ['q' => 'He walked ___ (внутрь) the room.', 'a' => "✅ **into**\n\n*💡 Правило: Движение внутрь.*"],
        ['q' => 'Get ___ ___ (наружу из) the car!', 'a' => "✅ **out of**\n\n*💡 Правило: Движение наружу.*"],
        ['q' => 'The train went ___ (сквозь) the tunnel.', 'a' => "✅ **through**\n\n*💡 Правило: Движение насквозь.*"],
        ['q' => 'Walk ___ (вдоль) this street and turn left.', 'a' => "✅ **along**\n\n*💡 Правило: Движение вдоль длинной линии.*"],
        ['q' => 'He swam ___ (через) the river.', 'a' => "✅ **across**\n\n*💡 Правило: Движение через поверхность от одного края до другого.*"],
        ['q' => 'She walked ___ (мимо) the bank.', 'a' => "✅ **past**\n\n*💡 Правило: Движение мимо объекта.*"],
        // --- Past Continuous & Used To ---
        ['q' => 'I ___ ___ (смотрел) TV when she called.', 'a' => "✅ **was watching**

*💡 Правило: Past Continuous (was/were + V-ing) для длительного действия в прошлом.*"],
        ['q' => 'I ___ ___ (раньше играл) play tennis, but now I don\'t.', 'a' => "✅ **used to**

*💡 Правило: used to + глагол = привычка в прошлом, которой больше нет.*"],
        // --- Modals (Must vs Have to vs Should) ---
        ['q' => 'You ___ (должен) wear a seatbelt. It\'s the law.', 'a' => "✅ **have to / must**

*💡 Правило: have to - внешнее обязательство (закон).*"],
        ['q' => 'You ___ (следует) see a doctor.', 'a' => "✅ **should**

*💡 Правило: should - совет.*"],
        // --- First Conditional ---
        ['q' => 'If it ___ (пойдет дождь), we will stay home.', 'a' => "✅ **rains**

*💡 Правило: First Conditional. После If используем Present Simple (rains), а в главной части - Future (will).*"],
    ],
];
