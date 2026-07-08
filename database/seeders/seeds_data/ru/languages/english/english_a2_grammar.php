<?php

return [
    'name' => '🟡 🇬🇧 Английский A2: Грамматика',
    'description' => 'Расширенная грамматика уровня A2: степени сравнения, Past Continuous, Present Perfect, будущие формы, модальные глаголы, условные предложения, герундий, инфинитив, исчисляемые/неисчисляемые, относительные предложения и предлоги.',
    'question_lang' => 'ru',
    'answer_lang' => 'en',
    'cards' => [
        // --- Comparatives & Superlatives ---
        ['q' => 'A cheetah is ___ (fast) than a lion.', 'a' => "✅ **faster**\n\n*💡 Правило: К коротким (односложным) прилагательным добавляем -er.*"],
        ['q' => 'This test is ___ (difficult) than the last one.', 'a' => "✅ **more difficult**\n\n*💡 Правило: С длинными прилагательными часто используем more. difficult -> more difficult.*"],
        ['q' => 'What is ___ (long) river in the world?', 'a' => "✅ **the longest**\n\n*💡 Правило: Превосходная степень. Не забываем артикль the!*"],
        ['q' => 'This is ___ (bad) day of my life!', 'a' => "✅ **the worst**\n\n*💡 Правило: Исключение! bad -> worse -> the worst.*"],
        ['q' => 'My results are ___ (good) than yours.', 'a' => "✅ **better**\n\n*💡 Правило: Исключение! good -> better -> the best.*"],
        ['q' => 'She is as ___ (tall) as her sister.', 'a' => "✅ **tall**\n\n*💡 Правило: В конструкции as ... as (такой же ... как) прилагательное стоит в начальной форме.*"],
        ['q' => 'His house is ___ (far) than mine.', 'a' => "✅ **further / farther**\n\n*💡 Правило: Исключение! far (далекий) -> further/farther.*"],
        ['q' => 'I have ___ (little) money than you.', 'a' => "✅ **less**\n\n*💡 Правило: Исключение! little -> less -> the least.*"],
        ['q' => 'She has ___ (many/much) friends than I do.', 'a' => "✅ **more**\n\n*💡 Правило: many/much -> more -> the most.*"],

        // --- Adjectives -ed vs -ing ---
        ['q' => 'This movie is very ___ (bore).', 'a' => "✅ **boring**\n\n*💡 Правило: Окончание -ing описывает саму вещь/ситуацию (Скучный фильм).*"],
        ['q' => 'I am very ___ (bore).', 'a' => "✅ **bored**\n\n*💡 Правило: Окончание -ed описывает чувства человека (Я заскучал).*"],
        ['q' => 'Are you ___ (interest) in history?', 'a' => "✅ **interested**\n\n*💡 Правило: Мои чувства -> -ed.*"],
        ['q' => 'This book is very ___ (interest).', 'a' => "✅ **interesting**\n\n*💡 Правило: Характеристика книги -> -ing.*"],

        // --- Past Continuous vs Past Simple ---
        ['q' => 'At 7 PM yesterday, I ___ (have) dinner.', 'a' => "✅ **was having**\n\n*💡 Правило: Past Continuous для процесса в точное время в прошлом (was/were + V-ing).*"],
        ['q' => 'They ___ (not / listen) to the teacher.', 'a' => "✅ **were not listening / weren't listening**\n\n*💡 Правило: Отрицание строится при помощи weren't / wasn't.*"],
        ['q' => '___ you ___ (sleep) when I called?', 'a' => "✅ **Were you sleeping**\n\n*💡 Правило: В вопросе was/were выносится перед подлежащим.*"],
        ['q' => 'I ___ (walk) home when I saw Tom.', 'a' => "✅ **was walking**\n\n*💡 Длительное фоновое действие в прошлом: was/were + V-ing.*"],
        ['q' => 'I was walking home when I ___ (see) Tom.', 'a' => "✅ **saw**\n\n*💡 Короткое действие, которое произошло на фоне длительного процесса.*"],
        ['q' => 'While she ___ (cook), he was watching TV.', 'a' => "✅ **was cooking**\n\n*💡 Правило: While (в то время как) объединяет два одновременных длительных процесса.*"],

        // --- Present Perfect ---
        ['q' => 'I ___ (just / finish) my project.', 'a' => "✅ **have just finished**\n\n*💡 Правило: Present Perfect. Действие завершилось только что (just). Формула: have/has + V3.*"],
        ['q' => 'Have you finished your homework ___?', 'a' => "✅ **yet**\n\n*💡 yet ставится в конце вопроса и значит «уже?».*"],
        ['q' => 'I have ___ finished my homework.', 'a' => "✅ **already**\n\n*💡 already значит «уже» и часто стоит между have/has и V3.*"],
        ['q' => 'I have ___ finished my coffee.', 'a' => "✅ **just**\n\n*💡 just значит «только что».*"],
        ['q' => '___ you ___ (ever / be) to Spain?', 'a' => "✅ **Have you ever been**\n\n*💡 Правило: ever (когда-либо) используется для вопросов об опыте. Глагол be-was-been.*"],
        ['q' => 'I have ___ (никогда) eaten sushi.', 'a' => "✅ **never**\n\n*💡 Правило: never делает предложение отрицательным (haven't ставить нельзя!).*"],
        ['q' => 'I have known her ___ ten years.', 'a' => "✅ **for**\n\n*💡 for + период времени: for ten years, for two weeks.*"],
        ['q' => 'I have known her ___ 2016.', 'a' => "✅ **since**\n\n*💡 since + точка начала: since 2016, since Monday.*"],
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
        ['q' => 'We ___ (fly) to Paris tomorrow. We have tickets.', 'a' => "✅ **are flying**\n\n*💡 Правило: Present Continuous используется для личных договоренностей и уже организованных планов.*"],
        ['q' => 'The train ___ (leave) at 6 PM.', 'a' => "✅ **leaves**\n\n*💡 Правило: Present Simple используется для расписаний (поезда, самолеты, кино, уроки).*"],

        // --- Conditionals ---
        ['q' => 'If you mix blue and yellow, you ___ (get) green.', 'a' => "✅ **get**\n\n*💡 Правило: Zero Conditional (научные факты). Обе части в Present Simple.*"],
        ['q' => 'If the weather ___ (be) good tomorrow, we will go for a walk.', 'a' => "✅ **is**\n\n*💡 Правило: First Conditional. После If всегда идет Present Simple (даже если речь о будущем!).*"],
        ['q' => 'I will call you as soon as I ___ (arrive).', 'a' => "✅ **arrive**\n\n*💡 Правило: После as soon as, when, before, until, after для будущего времени используется Present Simple!*"],

        // --- Modal Verbs: Have to / Must / Should / Might ---
        ['q' => 'I ___ (должен) wear glasses because my eyes are bad.', 'a' => "✅ **have to**\n\n*💡 Правило: have to - вынужден из-за обстоятельств или внешних правил.*"],
        ['q' => '___ you have to work on Sunday?', 'a' => "✅ **Do**\n\n*💡 Вопрос с have to строится через do/does.*"],
        ['q' => 'She ___ have to work today.', 'a' => "✅ **doesn’t**\n\n*💡 Отрицание: don’t/doesn’t have to = не нужно.*"],
        ['q' => 'I ___ wear a uniform at school. (past)', 'a' => "✅ **had to**\n\n*💡 Прошедшая форма have to — had to.*"],
        ['q' => 'I ___ (должен) study harder! I want to pass the exam.', 'a' => "✅ **must**\n\n*💡 Правило: must - личное внутреннее убеждение или строгий приказ себе/другому.*"],
        ['q' => 'You ___ (нельзя) smoke in the hospital!', 'a' => "✅ **mustn't / must not**\n\n*💡 Правило: mustn't = строгий запрет (нельзя!).*"],
        ['q' => 'You look tired. You ___ go to bed.', 'a' => "✅ **should**\n\n*💡 should используется для совета.*"],
        ['q' => 'You ___ eat so much sugar.', 'a' => "✅ **shouldn’t**\n\n*💡 shouldn’t = не следует.*"],
        ['q' => 'It ___ (может) rain later, take an umbrella.', 'a' => "✅ **might / may**\n\n*💡 Правило: might/may показывают возможность: может быть да, может быть нет.*"],

        // --- Be allowed to ---
        ['q' => 'You ___ allowed to smoke here.', 'a' => "✅ **are not / aren’t**\n\n*💡 be allowed to = иметь разрешение что-то делать.*"],
        ['q' => 'Are we ___ to park here?', 'a' => "✅ **allowed**\n\n*💡 Are we allowed to...? = Нам разрешено...?*"],

        // --- Would like / Would rather ---
        ['q' => 'I would like ___ book a table.', 'a' => "✅ **to**\n\n*💡 would like + to + verb.*"],
        ['q' => 'Would you like ___ tea?', 'a' => "✅ **some**\n\n*💡 В вежливых предложениях часто используем some.*"],
        ['q' => 'I would rather ___ at home.', 'a' => "✅ **stay**\n\n*💡 would rather + verb без to = предпочел бы.*"],

        // --- Countable / Uncountable & Quantifiers ---
        ['q' => 'There are ___ apples on the table.', 'a' => "✅ **a few**\n\n*💡 a few используется с исчисляемыми существительными.*"],
        ['q' => 'There is ___ milk in the fridge.', 'a' => "✅ **a little**\n\n*💡 a little используется с неисчисляемыми существительными.*"],
        ['q' => 'I have ___ time before the meeting.', 'a' => "✅ **a little**\n\n*💡 time неисчисляемое.*"],
        ['q' => 'How ___ money do you have?', 'a' => "✅ **much**\n\n*💡 much используется с неисчисляемыми существительными.*"],
        ['q' => 'How ___ people are there?', 'a' => "✅ **many**\n\n*💡 many используется с исчисляемыми существительными во множественном числе.*"],
        ['q' => 'There are ___ people in the room.', 'a' => "✅ **a lot of**\n\n*💡 a lot of подходит и для исчисляемых, и для неисчисляемых.*"],

        // --- Articles: a / an / the / zero article ---
        ['q' => 'She is ___ engineer.', 'a' => "✅ **an**\n\n*💡 С профессиями используем a/an. an — перед гласным звуком.*"],
        ['q' => 'I had lunch at ___ home.', 'a' => "✅ **- (без артикля)**\n\n*💡 В выражении at home артикль не нужен.*"],
        ['q' => 'I went to ___ work by bus.', 'a' => "✅ **- (без артикля)**\n\n*💡 В выражении go to work артикль не нужен.*"],
        ['q' => 'Can you play ___ piano?', 'a' => "✅ **the**\n\n*💡 С музыкальными инструментами часто используется the.*"],

        // --- Infinitive & Gerund & Verb Patterns ---
        ['q' => 'I want ___ learn English.', 'a' => "✅ **to**\n\n*💡 want + to + verb.*"],
        ['q' => 'I enjoy ___ music.', 'a' => "✅ **listening to**\n\n*💡 enjoy + V-ing.*"],
        ['q' => 'She suggested ___ to a restaurant.', 'a' => "✅ **going**\n\n*💡 suggest + V-ing.*"],
        ['q' => 'He promised ___ me.', 'a' => "✅ **to help**\n\n*💡 promise + to + verb.*"],
        ['q' => 'It is difficult ___ (understand) this rule.', 'a' => "✅ **to understand**\n\n*💡 Правило: После конструкции it is + прилагательное используется инфинитив.*"],
        ['q' => 'I went to the supermarket ___ (buy) some milk.', 'a' => "✅ **to buy**\n\n*💡 Правило: Инфинитив цели (чтобы что-то сделать).*"],
        ['q' => '___ (Читать) is good for your brain.', 'a' => "✅ **Reading**\n\n*💡 Правило: Герундий часто выступает в роли подлежащего.*"],

        // --- Prepositions after adjectives ---
        ['q' => 'I am interested ___ history.', 'a' => "✅ **in**\n\n*💡 interested in something.*"],
        ['q' => 'She is good ___ English.', 'a' => "✅ **at**\n\n*💡 good at something.*"],
        ['q' => 'He is afraid ___ dogs.', 'a' => "✅ **of**\n\n*💡 afraid of something.*"],
        ['q' => 'I am proud ___ you.', 'a' => "✅ **of**\n\n*💡 proud of someone.*"],
        ['q' => 'This city is famous ___ its museums.', 'a' => "✅ **for**\n\n*💡 famous for something.*"],

        // --- Relative Clauses ---
        ['q' => 'This is the man ___ (который) helped me.', 'a' => "✅ **who / that**\n\n*💡 Правило: who используется по отношению к людям.*"],
        ['q' => 'This is the phone ___ (который) I bought yesterday.', 'a' => "✅ **which / that**\n\n*💡 Правило: which используется для предметов.*"],
        ['q' => 'That is the hospital ___ (где) I was born.', 'a' => "✅ **where**\n\n*💡 Правило: where используется для указания места.*"],
        ['q' => 'This is the boy ___ (чей) dog ran away.', 'a' => "✅ **whose**\n\n*💡 Правило: whose переводится как \"чей\" (принадлежность).*"],
        ['q' => 'This is the book ___ I bought yesterday.', 'a' => "✅ **which / that / -**\n\n*💡 Если which/that является объектом (на него направлено действие), его можно опустить.*"],
        ['q' => 'This is the woman ___ lives next door.', 'a' => "✅ **who / that**\n\n*💡 Если who/that является подлежащим (сама выполняет действие), его нельзя просто убрать.*"],

        // --- Too & Enough ---
        ['q' => 'This soup is ___ (слишком) hot to eat.', 'a' => "✅ **too**\n\n*💡 Правило: too (слишком) ставится ПЕРЕД прилагательным.*"],
        ['q' => 'He is not tall ___ (достаточно) to reach the shelf.', 'a' => "✅ **enough**\n\n*💡 Правило: enough (достаточно) ставится ПОСЛЕ прилагательного! (tall enough).*"],
        ['q' => 'We don\'t have ___ (достаточно) money for a new car.', 'a' => "✅ **enough**\n\n*💡 Правило: Но если enough стоит с существительным, оно ставится ПЕРЕД ним (enough money).*"],

        // --- Used to ---
        ['q' => 'I ___ (раньше) smoke a lot, but now I don\'t.', 'a' => "✅ **used to**\n\n*💡 Правило: Конструкция used to + V означает старую привычку, которой больше нет.*"],
        ['q' => 'I ___ (раньше не) like olives, but now I love them.', 'a' => "✅ **didn't use to**\n\n*💡 Правило: Отрицание строится с didn't, при этом глагол теряет окончание -d (use, а не used).*"],
        ['q' => '___ you use to play video games in your childhood?', 'a' => "✅ **Did**\n\n*💡 Правило: Вопрос строится с Did.*"],

        // --- So vs Such ---
        ['q' => 'She is ___ (такая) beautiful!', 'a' => "✅ **so**\n\n*💡 Правило: so ставится перед прилагательными (без существительного).*"],
        ['q' => 'She is ___ (такая) beautiful girl!', 'a' => "✅ **such a**\n\n*💡 Правило: such (a/an) ставится, если после прилагательного идет существительное (girl).*"],

        // --- Indefinite Pronouns ---
        ['q' => 'Is there ___ (кто-нибудь) at home?', 'a' => "✅ **anybody / anyone**\n\n*💡 Правило: В вопросах используем any-.*"],
        ['q' => 'There is ___ (кто-то) behind the door.', 'a' => "✅ **somebody / someone**\n\n*💡 Правило: В утверждениях используем some-.*"],
        ['q' => 'I have ___ (ничего) to wear!', 'a' => "✅ **nothing**\n\n*💡 Правило: В предложении может быть только одно отрицание. I have nothing = у меня нет ничего.*"],
        ['q' => '___ (Все) enjoyed the party.', 'a' => "✅ **Everybody / Everyone**\n\n*💡 Правило: Важно! Everyone/everybody всегда согласуется с глаголом в единственном числе (Everyone is...).*"],

        // --- Prepositions of Movement ---
        ['q' => 'He walked ___ (внутрь) the room.', 'a' => "✅ **into**\n\n*💡 Правило: Движение внутрь.*"],
        ['q' => 'Get ___ ___ (наружу из) the car!', 'a' => "✅ **out of**\n\n*💡 Правило: Движение наружу.*"],
        ['q' => 'The train went ___ (сквозь) the tunnel.', 'a' => "✅ **through**\n\n*💡 Правило: Движение насквозь.*"],
        ['q' => 'Walk ___ (вдоль) this street and turn left.', 'a' => "✅ **along**\n\n*💡 Правило: Движение вдоль длинной линии.*"],
        ['q' => 'He swam ___ (через) the river.', 'a' => "✅ **across**\n\n*💡 Правило: Движение через поверхность от одного края до другого.*"],
        ['q' => 'She walked ___ (мимо) the bank.', 'a' => "✅ **past**\n\n*💡 Правило: Движение мимо объекта.*"],
    ],
];
