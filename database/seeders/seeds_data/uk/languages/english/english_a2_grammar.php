<?php

return [
    'name' => '🟡 🇬🇧 Англійська A2: Граматика',
    'description' => 'Розширена граматика рівня A2: ступені порівняння, Past Continuous, Present Perfect, майбутні форми, модальні дієслова, умовні речення, герундій, інфінітив, злічувані/незлічувані, відносні речення та прийменники.',
    'cards' => [
        // --- Comparatives & Superlatives ---
        ['q' => 'A cheetah is ___ (fast) than a lion.', 'a' => "✅ **faster**\n\n*💡 Правило: До коротких (односкладових) прикметників додаємо -er.*"],
        ['q' => 'This test is ___ (difficult) than the last one.', 'a' => "✅ **more difficult**\n\n*💡 Правило: З довгими прикметниками часто використовуємо more. difficult -> more difficult.*"],
        ['q' => 'What is ___ (long) river in the world?', 'a' => "✅ **the longest**\n\n*💡 Правило: Найвищий ступінь. Не забуваємо артикль the!*"],
        ['q' => 'This is ___ (bad) day of my life!', 'a' => "✅ **the worst**\n\n*💡 Правило: Виняток! bad -> worse -> the worst.*"],
        ['q' => 'My results are ___ (good) than yours.', 'a' => "✅ **better**\n\n*💡 Правило: Виняток! good -> better -> the best.*"],
        ['q' => 'She is as ___ (tall) as her sister.', 'a' => "✅ **tall**\n\n*💡 Правило: У конструкції as ... as (такий самий ... як) прикметник стоїть у початковій формі.*"],
        ['q' => 'His house is ___ (far) than mine.', 'a' => "✅ **further / farther**\n\n*💡 Правило: Виняток! far (далекий) -> further/farther.*"],
        ['q' => 'I have ___ (little) money than you.', 'a' => "✅ **less**\n\n*💡 Правило: Виняток! little -> less -> the least.*"],
        ['q' => 'She has ___ (many/much) friends than I do.', 'a' => "✅ **more**\n\n*💡 Правило: many/much -> more -> the most.*"],

        // --- Adjectives -ed vs -ing ---
        ['q' => 'This movie is very ___ (bore).', 'a' => "✅ **boring**\n\n*💡 Правило: Закінчення -ing описує саму річ/ситуацію (Нудний фільм).*"],
        ['q' => 'I am very ___ (bore).', 'a' => "✅ **bored**\n\n*💡 Правило: Закінчення -ed описує почуття людини (Мені стало нудно).*"],
        ['q' => 'Are you ___ (interest) in history?', 'a' => "✅ **interested**\n\n*💡 Правило: Мої почуття -> -ed.*"],
        ['q' => 'This book is very ___ (interest).', 'a' => "✅ **interesting**\n\n*💡 Правило: Характеристика книги -> -ing.*"],

        // --- Past Continuous vs Past Simple ---
        ['q' => 'At 7 PM yesterday, I ___ (have) dinner.', 'a' => "✅ **was having**\n\n*💡 Правило: Past Continuous для процесу в точний час у минулому (was/were + V-ing).*"],
        ['q' => 'They ___ (not / listen) to the teacher.', 'a' => "✅ **were not listening / weren't listening**\n\n*💡 Правило: Заперечення будується за допомогою weren't / wasn't.*"],
        ['q' => '___ you ___ (sleep) when I called?', 'a' => "✅ **Were you sleeping**\n\n*💡 Правило: У питанні was/were виноситься перед підметом.*"],
        ['q' => 'I ___ (walk) home when I saw Tom.', 'a' => "✅ **was walking**\n\n*💡 Тривала фонова дія в минулому: was/were + V-ing.*"],
        ['q' => 'I was walking home when I ___ (see) Tom.', 'a' => "✅ **saw**\n\n*💡 Коротка дія, яка відбулася на тлі тривалого процесу.*"],
        ['q' => 'While she ___ (cook), he was watching TV.', 'a' => "✅ **was cooking**\n\n*💡 Правило: While (в той час як) об'єднує два одночасних тривалих процеси.*"],

        // --- Present Perfect ---
        ['q' => 'I ___ (just / finish) my project.', 'a' => "✅ **have just finished**\n\n*💡 Правило: Present Perfect. Дія завершилася щойно (just). Формула: have/has + V3.*"],
        ['q' => 'Have you finished your homework ___?', 'a' => "✅ **yet**\n\n*💡 yet ставиться в кінці питання і означає «вже?».*"],
        ['q' => 'I have ___ finished my homework.', 'a' => "✅ **already**\n\n*💡 already означає «вже» і часто стоїть між have/has та V3.*"],
        ['q' => 'I have ___ finished my coffee.', 'a' => "✅ **just**\n\n*💡 just означає «щойно».*"],
        ['q' => '___ you ___ (ever / be) to Spain?', 'a' => "✅ **Have you ever been**\n\n*💡 Правило: ever (коли-небудь) використовується для питань про досвід. Дієслово be-was-been.*"],
        ['q' => 'I have ___ (никогда) eaten sushi.', 'a' => "✅ **never**\n\n*💡 Правило: never робить речення заперечним (haven't ставити не можна!).*"],
        ['q' => 'I have known her ___ ten years.', 'a' => "✅ **for**\n\n*💡 for + період часу: for ten years, for two weeks.*"],
        ['q' => 'I have known her ___ 2016.', 'a' => "✅ **since**\n\n*💡 since + точка початку: since 2016, since Monday.*"],
        ['q' => 'He has ___ (be) to Paris. (Він з\'їздив і повернувся)', 'a' => "✅ **been**\n\n*💡 Правило: has been = з'їздив і вже повернувся.*"],
        ['q' => 'He has ___ (go) to Paris. (Він поїхав і все ще там)', 'a' => "✅ **gone**\n\n*💡 Правило: has gone = поїхав і поки не повернулся.*"],

        // --- Present Perfect vs Past Simple ---
        ['q' => 'I ___ (see) him yesterday.', 'a' => "✅ **saw**\n\n*💡 Правило: Якщо є точний час у минулому (yesterday), це Past Simple!*"],
        ['q' => 'I ___ (see) him recently. He looks good.', 'a' => "✅ **have seen**\n\n*💡 Правило: recently (нещодавно) вказує на зв'язок з теперішнім -> Present Perfect.*"],
        ['q' => 'Shakespeare ___ (write) many plays.', 'a' => "✅ **wrote**\n\n*💡 Правило: Шекспір помер, період життя завершено -> Past Simple.*"],
        ['q' => 'Stephen King ___ (write) many books.', 'a' => "✅ **has written**\n\n*💡 Правило: Стівен Кінг живий, період не завершено (він може написати ще) -> Present Perfect.*"],

        // --- Future Forms ---
        ['q' => 'I think cars ___ (fly) in the future.', 'a' => "✅ **will fly**\n\n*💡 Правило: will використовується для прогнозів, заснованих на нашій думці (часто зі словом think).*"],
        ['q' => 'I promise I ___ (help) you.', 'a' => "✅ **will help**\n\n*💡 Правило: will використовується для обіцянок (promise).*"],
        ['q' => 'Look at those dark clouds! It ___ (rain).', 'a' => "✅ **is going to rain**\n\n*💡 Правило: be going to використовується для передбачень на основі очевидних фактів прямо зараз (бачу хмари).*"],
        ['q' => 'I ___ (buy) a new phone next week. I\'ve already saved the money.', 'a' => "✅ **am going to buy**\n\n*💡 Правило: be going to для особистих планів та намірів.*"],
        ['q' => 'We ___ (fly) to Paris tomorrow. We have tickets.', 'a' => "✅ **are flying**\n\n*💡 Правило: Present Continuous використовується для особистих домовленостей та вже організованих планів.*"],
        ['q' => 'The train ___ (leave) at 6 PM.', 'a' => "✅ **leaves**\n\n*💡 Правило: Present Simple використовується для розкладів (поїзди, літаки, кіно, уроки).*"],

        // --- Conditionals ---
        ['q' => 'If you mix blue and yellow, you ___ (get) green.', 'a' => "✅ **get**\n\n*💡 Правило: Zero Conditional (наукові факти). Обидві частини в Present Simple.*"],
        ['q' => 'If the weather ___ (be) good tomorrow, we will go for a walk.', 'a' => "✅ **is**\n\n*💡 Правило: First Conditional. Після If завжди йде Present Simple (навіть якщо мова про майбутнє!).*"],
        ['q' => 'I will call you as soon as I ___ (arrive).', 'a' => "✅ **arrive**\n\n*💡 Правило: Після as soon as, when, before, until, after для майбутнього часу використовується Present Simple!*"],

        // --- Modal Verbs: Have to / Must / Should / Might ---
        ['q' => 'I ___ (повинен) wear glasses because my eyes are bad.', 'a' => "✅ **have to**\n\n*💡 Правило: have to - змушений через обставини або зовнішні правила.*"],
        ['q' => '___ you have to work on Sunday?', 'a' => "✅ **Do**\n\n*💡 Питання з have to будується через do/does.*"],
        ['q' => 'She ___ have to work today.', 'a' => "✅ **doesn’t**\n\n*💡 Заперечення: don’t/doesn’t have to = не потрібно.*"],
        ['q' => 'I ___ wear a uniform at school. (past)', 'a' => "✅ **had to**\n\n*💡 Минула форма have to — had to.*"],
        ['q' => 'I ___ (повинен) study harder! I want to pass the exam.', 'a' => "✅ **must**\n\n*💡 Правило: must - особисте внутрішнє переконання або суворий наказ собі/іншому.*"],
        ['q' => 'You ___ (не можна) smoke in the hospital!', 'a' => "✅ **mustn't / must not**\n\n*💡 Правило: mustn't = сувора заборона (не можна!).*"],
        ['q' => 'You look tired. You ___ go to bed.', 'a' => "✅ **should**\n\n*💡 should використовується для поради.*"],
        ['q' => 'You ___ eat so much sugar.', 'a' => "✅ **shouldn’t**\n\n*💡 shouldn’t = не слід.*"],
        ['q' => 'It ___ (може) rain later, take an umbrella.', 'a' => "✅ **might / may**\n\n*💡 Правило: might/may показують можливість: може бути так, може бути ні.*"],

        // --- Be allowed to ---
        ['q' => 'You ___ allowed to smoke here.', 'a' => "✅ **are not / aren’t**\n\n*💡 be allowed to = мати дозвіл щось робити.*"],
        ['q' => 'Are we ___ to park here?', 'a' => "✅ **allowed**\n\n*💡 Are we allowed to...? = Нам дозволено...?*"],

        // --- Would like / Would rather ---
        ['q' => 'I would like ___ book a table.', 'a' => "✅ **to**\n\n*💡 would like + to + verb.*"],
        ['q' => 'Would you like ___ tea?', 'a' => "✅ **some**\n\n*💡 У ввічливих реченнях часто використовуємо some.*"],
        ['q' => 'I would rather ___ at home.', 'a' => "✅ **stay**\n\n*💡 would rather + verb без to = віддав би перевагу / волів би.*"],

        // --- Countable / Uncountable & Quantifiers ---
        ['q' => 'There are ___ apples on the table.', 'a' => "✅ **a few**\n\n*💡 a few використовується зі злічуваними іменниками.*"],
        ['q' => 'There is ___ milk in the fridge.', 'a' => "✅ **a little**\n\n*💡 a little використовується з незлічуваними іменниками.*"],
        ['q' => 'I have ___ time before the meeting.', 'a' => "✅ **a little**\n\n*💡 time незлічуване.*"],
        ['q' => 'How ___ money do you have?', 'a' => "✅ **much**\n\n*💡 much використовується з незлічуваними іменниками.*"],
        ['q' => 'How ___ people are there?', 'a' => "✅ **many**\n\n*💡 many використовується зі злічуваними іменниками у множині.*"],
        ['q' => 'There are ___ people in the room.', 'a' => "✅ **a lot of**\n\n*💡 a lot of підходить і для злічуваних, і для незлічуваних.*"],

        // --- Articles: a / an / the / zero article ---
        ['q' => 'She is ___ engineer.', 'a' => "✅ **an**\n\n*💡 З професіями використовуємо a/an. an — перед голосним звуком.*"],
        ['q' => 'I had lunch at ___ home.', 'a' => "✅ **- (без артикля)**\n\n*💡 У виразі at home артикль не потрібен.*"],
        ['q' => 'I went to ___ work by bus.', 'a' => "✅ **- (без артикля)**\n\n*💡 У виразі go to work артикль не потрібен.*"],
        ['q' => 'Can you play ___ piano?', 'a' => "✅ **the**\n\n*💡 З музичними інструментами часто використовується the.*"],

        // --- Infinitive & Gerund & Verb Patterns ---
        ['q' => 'I want ___ learn English.', 'a' => "✅ **to**\n\n*💡 want + to + verb.*"],
        ['q' => 'I enjoy ___ music.', 'a' => "✅ **listening to**\n\n*💡 enjoy + V-ing.*"],
        ['q' => 'She suggested ___ to a restaurant.', 'a' => "✅ **going**\n\n*💡 suggest + V-ing.*"],
        ['q' => 'He promised ___ me.', 'a' => "✅ **to help**\n\n*💡 promise + to + verb.*"],
        ['q' => 'It is difficult ___ (understand) this rule.', 'a' => "✅ **to understand**\n\n*💡 Правило: Після конструкції it is + прикметник використовується інфінітив.*"],
        ['q' => 'I went to the supermarket ___ (buy) some milk.', 'a' => "✅ **to buy**\n\n*💡 Правило: Інфінітив мети (щоб щось зробити).*"],
        ['q' => '___ (Читати) is good for your brain.', 'a' => "✅ **Reading**\n\n*💡 Правило: Герундій часто виступає в ролі підмета.*"],

        // --- Prepositions after adjectives ---
        ['q' => 'I am interested ___ history.', 'a' => "✅ **in**\n\n*💡 interested in something.*"],
        ['q' => 'She is good ___ English.', 'a' => "✅ **at**\n\n*💡 good at something.*"],
        ['q' => 'He is afraid ___ dogs.', 'a' => "✅ **of**\n\n*💡 afraid of something.*"],
        ['q' => 'I am proud ___ you.', 'a' => "✅ **of**\n\n*💡 proud of someone.*"],
        ['q' => 'This city is famous ___ its museums.', 'a' => "✅ **for**\n\n*💡 famous for something.*"],

        // --- Relative Clauses ---
        ['q' => 'This is the man ___ (який) helped me.', 'a' => "✅ **who / that**\n\n*💡 Правило: who використовується по відношенню до людей.*"],
        ['q' => 'This is the phone ___ (який) I bought yesterday.', 'a' => "✅ **which / that**\n\n*💡 Правило: which використовується для предметів.*"],
        ['q' => 'That is the hospital ___ (де) I was born.', 'a' => "✅ **where**\n\n*💡 Правило: where використовується для вказівки місця.*"],
        ['q' => 'This is the boy ___ (чий) dog ran away.', 'a' => "✅ **whose**\n\n*💡 Правило: whose перекладається як \"чий\" (приналежність).*"],
        ['q' => 'This is the book ___ I bought yesterday.', 'a' => "✅ **which / that / -**\n\n*💡 Якщо which/that є об'єктом (на нього спрямована дія), його можна опустити.*"],
        ['q' => 'This is the woman ___ lives next door.', 'a' => "✅ **who / that**\n\n*💡 Якщо who/that є підметом (сам виконує дію), його не можна просто прибрати.*"],

        // --- Too & Enough ---
        ['q' => 'This soup is ___ (занадто) hot to eat.', 'a' => "✅ **too**\n\n*💡 Правило: too (занадто) ставиться ПЕРЕД прикметником.*"],
        ['q' => 'He is not tall ___ (достатньо) to reach the shelf.', 'a' => "✅ **enough**\n\n*💡 Правило: enough (достатньо) ставиться ПІСЛЯ прикметника! (tall enough).*"],
        ['q' => 'We don\'t have ___ (достатньо) money for a new car.', 'a' => "✅ **enough**\n\n*💡 Правило: Але якщо enough стоїть з іменником, воно ставиться ПЕРЕД ним (enough money).*"],

        // --- Used to ---
        ['q' => 'I ___ (раніше) smoke a lot, but now I don\'t.', 'a' => "✅ **used to**\n\n*💡 Правило: Конструкція used to + V означає стару звичку, якої більше немає.*"],
        ['q' => 'I ___ (раніше не) like olives, but now I love them.', 'a' => "✅ **didn't use to**\n\n*💡 Правило: Заперечення будується з didn't, при цьому дієслово втрачає закінчення -d (use, а не used).*"],
        ['q' => '___ you use to play video games in your childhood?', 'a' => "✅ **Did**\n\n*💡 Правило: Питання будується з Did.*"],

        // --- So vs Such ---
        ['q' => 'She is ___ (така) beautiful!', 'a' => "✅ **so**\n\n*💡 Правило: so ставиться перед прикметниками (без іменника).*"],
        ['q' => 'She is ___ (така) beautiful girl!', 'a' => "✅ **such a**\n\n*💡 Правило: such (a/an) ставиться, якщо після прикметника йде іменник (girl).*"],

        // --- Indefinite Pronouns ---
        ['q' => 'Is there ___ (хто-небудь) at home?', 'a' => "✅ **anybody / anyone**\n\n*💡 Правило: У питаннях використовуємо any-.*"],
        ['q' => 'There is ___ (хтось) behind the door.', 'a' => "✅ **somebody / someone**\n\n*💡 Правило: У ствердженнях використовуємо some-.*"],
        ['q' => 'I have ___ (нічого) to wear!', 'a' => "✅ **nothing**\n\n*💡 Правило: В реченні може бути тільки одне заперечення. I have nothing = у мене немає нічого.*"],
        ['q' => '___ (Всі) enjoyed the party.', 'a' => "✅ **Everybody / Everyone**\n\n*💡 Правило: Важливо! Everyone/everybody завжди узгоджується з дієсловом в однині (Everyone is...).*"],

        // --- Prepositions of Movement ---
        ['q' => 'He walked ___ (всередину) the room.', 'a' => "✅ **into**\n\n*💡 Правило: Рух всередину.*"],
        ['q' => 'Get ___ ___ (назовні з) the car!', 'a' => "✅ **out of**\n\n*💡 Правило: Рух назовні.*"],
        ['q' => 'The train went ___ (крізь) the tunnel.', 'a' => "✅ **through**\n\n*💡 Правило: Рух крізь.*"],
        ['q' => 'Walk ___ (вздовж) this street and turn left.', 'a' => "✅ **along**\n\n*💡 Правило: Рух вздовж довгої лінії.*"],
        ['q' => 'He swam ___ (через) the river.', 'a' => "✅ **across**\n\n*💡 Правило: Рух через поверхню від одного краю до іншого.*"],
        ['q' => 'She walked ___ (повз) the bank.', 'a' => "✅ **past**\n\n*💡 Правило: Рух повз об'єкт.*"],
    ],
];
