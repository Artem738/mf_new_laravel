<?php

return [
    'name' => '🟢 🇬🇧 Английский A1: Служебные слова и грамматика',
    'description' => 'Базовая грамматика A1: to be, местоимения, артикли, множественное число, Present Simple, Present Continuous, there is / there are, have got, can, would like, предлоги, вопросы, отрицания, короткие ответы и базовый Past Simple.',
    'question_lang' => 'ru',
    'answer_lang' => 'en',
    'cards' => [

        // --- To be ---
        ['q' => 'I ___ a student.', 'a' => "✅ **am** — есть / являюсь\n\n📌 **Правило:** с местоимением **I** используется только форма **am**.\n\n🧩 **Формула:** I + am + noun/adjective/place\n\n🔹 **Пример:** I am a student. — Я студент.\n⚠️ **Не:** I is a student."],

        ['q' => 'She ___ my sister.', 'a' => "✅ **is** — есть / является\n\n📌 **Правило:** с **he / she / it** используется **is**.\n\n🧩 **Формула:** He/She/It + is + noun/adjective/place\n\n🔹 **Пример:** She is my sister. — Она моя сестра.\n⚠️ **Не:** She are my sister."],

        ['q' => 'We ___ at home.', 'a' => "✅ **are** — есть / находимся\n\n📌 **Правило:** с **you / we / they** используется **are**.\n\n🧩 **Формула:** You/We/They + are + noun/adjective/place\n\n🔹 **Пример:** We are at home. — Мы дома.\n⚠️ **Не:** We is at home."],

        ['q' => 'He ___ not a doctor.', 'a' => "✅ **is**\n\n📌 **Полный вариант:** He is not a doctor.\n📌 **Короткий вариант:** He isn't a doctor.\n\n🧩 **Формула отрицания:** subject + am/is/are + not\n\n🔹 **Пример:** He is not a doctor. — Он не врач."],

        ['q' => '___ they ready?', 'a' => "✅ **Are**\n\n📌 **Правило:** в вопросе с **to be** глагол ставится перед подлежащим.\n\n🧩 **Формула:** Am/Is/Are + subject + ...?\n\n🔹 **Пример:** Are they ready? — Они готовы?\n⚠️ **Не:** They are ready?"],

        ['q' => 'Is she your friend? — Yes, she ___.', 'a' => "✅ **is**\n\n📌 **Правило:** в коротком ответе повторяем глагол **to be**.\n\n🔹 **Полный ответ:** Yes, she is.\n🔹 **Отрицание:** No, she isn't.\n\n⚠️ **Не:** Yes, she."],

        ['q' => 'Are you tired? — No, I ___.', 'a' => "✅ **am not**\n\n📌 **Правило:** короткий отрицательный ответ с **I**: **No, I am not.**\n\n🔹 **Пример:** Are you tired? — No, I am not.\n\n⚠️ В разговоре часто говорят: **No, I'm not.**"],

        // --- Subject pronouns ---
        ['q' => '___ am from Ukraine. (Я)', 'a' => "✅ **I** — я\n\n📌 **Правило:** **I** всегда пишется с большой буквы.\n\n🔹 **Пример:** I am from Ukraine. — Я из Украины.\n⚠️ **Не:** i am from Ukraine."],

        ['q' => '___ is my brother. (Он)', 'a' => "✅ **He** — он\n\n📌 **Правило:** **he** используем для мужчины или мальчика.\n\n🔹 **Пример:** He is my brother. — Он мой брат."],

        ['q' => '___ is my mother. (Она)', 'a' => "✅ **She** — она\n\n📌 **Правило:** **she** используем для женщины или девочки.\n\n🔹 **Пример:** She is my mother. — Она моя мама."],

        ['q' => '___ is a small dog. (Это)', 'a' => "✅ **It** — это / он / она для предметов и животных\n\n📌 **Правило:** **it** используем для предметов, животных, погоды, времени.\n\n🔹 **Пример:** It is a small dog. — Это маленькая собака.\n🔹 **Пример:** It is cold. — Холодно."],

        ['q' => '___ are my friends. (Они)', 'a' => "✅ **They** — они\n\n📌 **Правило:** **they** используется для людей, животных и предметов во множественном числе.\n\n🔹 **Пример:** They are my friends. — Они мои друзья."],

        // --- Object pronouns ---
        ['q' => 'Give this book to ___. (мне)', 'a' => "✅ **me** — меня / мне\n\n📌 **Правило:** после глагола или предлога используем объектную форму.\n\n🔹 **I** = я\n🔹 **me** = меня / мне\n\n🔹 **Пример:** Give this book to me. — Дай эту книгу мне."],

        ['q' => 'I see ___ every day. (его)', 'a' => "✅ **him** — его / ему\n\n📌 **Правило:** **him** — объектная форма от **he**.\n\n🔹 **Пример:** I see him every day. — Я вижу его каждый день."],

        ['q' => 'Look at ___. (нее)', 'a' => "✅ **her** — ее / ей\n\n📌 **Правило:** **her** может значить и **ее** как объект, и **ее** как притяжательное слово.\n\n🔹 **Пример:** Look at her. — Посмотри на нее.\n🔹 **Пример:** Her name is Anna. — Ее зовут Анна."],

        ['q' => 'Call ___ tomorrow. (нас)', 'a' => "✅ **us** — нас / нам\n\n📌 **Правило:** **us** — объектная форма от **we**.\n\n🔹 **Пример:** Call us tomorrow. — Позвони нам завтра."],

        ['q' => 'I know ___. (их)', 'a' => "✅ **them** — их / им\n\n📌 **Правило:** **them** — объектная форма от **they**.\n\n🔹 **Пример:** I know them. — Я знаю их."],

        // --- Possessive adjectives ---
        ['q' => 'This is ___ car. (моя машина)', 'a' => "✅ **my** — мой / моя / мое / мои\n\n📌 **Правило:** после **my** обязательно идет существительное.\n\n🧩 **Формула:** my + noun\n\n🔹 **Пример:** This is my car. — Это моя машина.\n⚠️ **Не:** This car is my. Нужно: This car is mine."],

        ['q' => 'Is this ___ phone? (твой телефон)', 'a' => "✅ **your** — твой / ваш\n\n📌 **Правило:** **your** используется и для одного человека, и для нескольких.\n\n🔹 **Пример:** Is this your phone? — Это твой телефон?"],

        ['q' => 'That is ___ house. (его дом)', 'a' => "✅ **his** — его\n\n📌 **Правило:** **his** не меняется по роду и числу.\n\n🔹 **Пример:** That is his house. — Это его дом."],

        ['q' => 'This is ___ bag. (ее сумка)', 'a' => "✅ **her** — ее\n\n📌 **Правило:** **her + noun** = ее что-то.\n\n🔹 **Пример:** This is her bag. — Это ее сумка."],

        ['q' => 'The dog is playing with ___ toy. (своей игрушкой)', 'a' => "✅ **its** — его / ее для животного или предмета\n\n📌 **Правило:** **its** — притяжательная форма от **it**.\n\n🔹 **Пример:** The dog is playing with its toy. — Собака играет со своей игрушкой.\n⚠️ **its** = его/ее, а **it's** = it is."],

        ['q' => 'This is ___ house. (наш дом)', 'a' => "✅ **our** — наш\n\n📌 **Правило:** **our + noun**.\n\n🔹 **Пример:** This is our house. — Это наш дом."],

        ['q' => 'These are ___ children. (их дети)', 'a' => "✅ **their** — их\n\n📌 **Правило:** **their** показывает принадлежность.\n\n🔹 **Пример:** These are their children. — Это их дети.\n⚠️ **their** не путать с **there** — там."],

        // --- Possessive pronouns ---
        ['q' => 'This book is ___. (моя)', 'a' => "✅ **mine** — мой / моя / мое / мои\n\n📌 **Правило:** после **mine** существительное не ставится.\n\n🔹 **Пример:** This book is mine. — Эта книга моя.\n⚠️ **Не:** This book is my."],

        ['q' => 'Is this pen ___? (твоя)', 'a' => "✅ **yours** — твой / ваш\n\n📌 **Правило:** **yours** используется без существительного после него.\n\n🔹 **Пример:** Is this pen yours? — Эта ручка твоя?"],

        ['q' => 'This bag is ___. (ее)', 'a' => "✅ **hers** — ее\n\n📌 **Правило:** **hers** = принадлежит ей.\n\n🔹 **Пример:** This bag is hers. — Эта сумка ее.\n⚠️ **Не:** This bag is her."],

        ['q' => 'This house is ___. (наш)', 'a' => "✅ **ours** — наш\n\n📌 **Правило:** **ours** используется без существительного.\n\n🔹 **Пример:** This house is ours. — Этот дом наш."],

        // --- Demonstratives ---
        ['q' => '___ book is interesting. (эта книга рядом)', 'a' => "✅ **This** — этот / эта / это\n\n📌 **Правило:** **this** = один предмет рядом.\n\n🧩 **Формула:** this + singular noun\n\n🔹 **Пример:** This book is interesting. — Эта книга интересная."],

        ['q' => '___ book is old. (та книга далеко)', 'a' => "✅ **That** — тот / та / то\n\n📌 **Правило:** **that** = один предмет далеко.\n\n🔹 **Пример:** That book is old. — Та книга старая."],

        ['q' => '___ books are new. (эти книги рядом)', 'a' => "✅ **These** — эти\n\n📌 **Правило:** **these** = много предметов рядом.\n\n🔹 **Пример:** These books are new. — Эти книги новые."],

        ['q' => '___ books are old. (те книги далеко)', 'a' => "✅ **Those** — те\n\n📌 **Правило:** **those** = много предметов далеко.\n\n🔹 **Пример:** Those books are old. — Те книги старые."],

        // --- Articles ---
        ['q' => 'I have ___ apple.', 'a' => "✅ **an**\n\n📌 **Правило:** **an** ставится перед гласным звуком.\n\n🔹 **Пример:** an apple, an egg, an orange\n⚠️ Важно: смотрим на звук, а не только на букву."],

        ['q' => 'She is ___ doctor.', 'a' => "✅ **a**\n\n📌 **Правило:** **a** ставится перед согласным звуком.\n\n🔹 **Пример:** a doctor, a student, a book\n\n📌 С профессиями часто используем **a/an**:\n🔹 She is a doctor. — Она врач."],

        ['q' => 'I have a cat. ___ cat is black.', 'a' => "✅ **The**\n\n📌 **Правило:** при первом упоминании используем **a/an**, при повторном — **the**.\n\n🔹 **Пример:** I have a cat. The cat is black. — У меня есть кот. Этот кот черный."],

        ['q' => 'Look at ___ sun.', 'a' => "✅ **the**\n\n📌 **Правило:** с уникальными объектами обычно используем **the**.\n\n🔹 **Пример:** the sun, the moon, the sky\n\n🔹 Look at the sun. — Посмотри на солнце."],

        ['q' => 'I live in ___ London.', 'a' => "✅ **без артикля**\n\n📌 **Правило:** перед названиями городов обычно артикль не ставится.\n\n🔹 **Пример:** I live in London. — Я живу в Лондоне.\n⚠️ **Не:** I live in the London."],

        ['q' => 'I play ___ football.', 'a' => "✅ **без артикля**\n\n📌 **Правило:** с названиями видов спорта артикль обычно не нужен.\n\n🔹 **Пример:** I play football. — Я играю в футбол."],

        ['q' => 'I play ___ guitar.', 'a' => "✅ **the**\n\n📌 **Правило:** с музыкальными инструментами часто используется **the**.\n\n🔹 **Пример:** I play the guitar. — Я играю на гитаре."],

        // --- Plural nouns ---
        ['q' => 'One book — two ___.', 'a' => "✅ **books**\n\n📌 **Правило:** обычно для множественного числа добавляем **-s**.\n\n🔹 **Пример:** book → books, car → cars, dog → dogs."],

        ['q' => 'One box — two ___.', 'a' => "✅ **boxes**\n\n📌 **Правило:** после **-s, -ss, -sh, -ch, -x, -o** часто добавляем **-es**.\n\n🔹 **Пример:** box → boxes, bus → buses, watch → watches."],

        ['q' => 'One city — two ___.', 'a' => "✅ **cities**\n\n📌 **Правило:** если слово заканчивается на **согласная + y**, то **y → ies**.\n\n🔹 **Пример:** city → cities, baby → babies."],

        ['q' => 'One boy — two ___.', 'a' => "✅ **boys**\n\n📌 **Правило:** если перед **y** стоит гласная, просто добавляем **-s**.\n\n🔹 **Пример:** boy → boys, toy → toys."],

        ['q' => 'One man — two ___.', 'a' => "✅ **men**\n\n📌 **Правило:** это неправильное множественное число, его нужно запомнить.\n\n🔹 **Пример:** one man — two men."],

        ['q' => 'One woman — two ___.', 'a' => "✅ **women**\n\n📌 **Правило:** неправильное множественное число.\n\n🔹 **Пример:** one woman — two women.\n🔊 **Подсказка:** women читается примерно как **wimin**."],

        ['q' => 'One child — two ___.', 'a' => "✅ **children**\n\n📌 **Правило:** неправильное множественное число.\n\n🔹 **Пример:** one child — two children."],

        ['q' => 'One foot — two ___.', 'a' => "✅ **feet**\n\n📌 **Правило:** неправильное множественное число.\n\n🔹 **Пример:** one foot — two feet."],

        ['q' => 'One person — two ___.', 'a' => "✅ **people**\n\n📌 **Правило:** в обычной речи **people** = люди.\n\n🔹 **Пример:** There are five people in the room. — В комнате пять человек."],

        // --- There is / There are ---
        ['q' => '___ a book on the table.', 'a' => "✅ **There is** — есть / находится\n\n📌 **Правило:** используем **there is** для одного предмета.\n\n🧩 **Формула:** There is + singular noun + place\n\n🔹 **Пример:** There is a book on the table. — На столе есть книга."],

        ['q' => '___ two chairs in the room.', 'a' => "✅ **There are** — есть / находятся\n\n📌 **Правило:** используем **there are** для множественного числа.\n\n🧩 **Формула:** There are + plural noun + place\n\n🔹 **Пример:** There are two chairs in the room. — В комнате два стула."],

        ['q' => '___ there a bank near here?', 'a' => "✅ **Is**\n\n📌 **Правило:** в вопросе **is/are** ставится перед **there**.\n\n🧩 **Формула:** Is/Are + there + noun + place?\n\n🔹 **Пример:** Is there a bank near here? — Здесь рядом есть банк?"],

        ['q' => 'There ___ not any messages for me.', 'a' => "✅ **are**\n\n📌 **Правило:** с множественным числом используем **there are not / there aren't**.\n\n🔹 **Пример:** There are not any messages for me. — Для меня нет сообщений."],

        // --- Have got / Has got ---
        ['q' => 'I ___ a cat. (У меня есть кот)', 'a' => "✅ **have got / have**\n\n📌 **Правило:** для **I / you / we / they** используем **have got** или **have**.\n\n🔹 **British English:** I have got a cat.\n🔹 **Common English:** I have a cat.\n\nОба варианта правильные."],

        ['q' => 'She ___ a car. (У нее есть машина)', 'a' => "✅ **has got / has**\n\n📌 **Правило:** для **he / she / it** используем **has got** или **has**.\n\n🔹 She has got a car.\n🔹 She has a car.\n\n⚠️ **Не:** She have a car."],

        ['q' => '___ you got a pen?', 'a' => "✅ **Have**\n\n📌 **Правило:** в вопросе с **have got** слово **have/has** ставится в начало.\n\n🔹 **Пример:** Have you got a pen? — У тебя есть ручка?"],

        ['q' => 'He ___ not got a phone.', 'a' => "✅ **has**\n\n📌 **Полная форма:** He has not got a phone.\n📌 **Короткая форма:** He hasn't got a phone.\n\n🔹 **Перевод:** У него нет телефона."],

        // --- Present Simple ---
        ['q' => 'I ___ coffee every morning. (пить)', 'a' => "✅ **drink**\n\n📌 **Правило:** Present Simple используется для привычек, регулярных действий и фактов.\n\n🧩 **Формула:** I/you/we/they + verb\n\n🔹 **Пример:** I drink coffee every morning. — Я пью кофе каждое утро."],

        ['q' => 'He ___ tennis every Sunday. (играть)', 'a' => "✅ **plays**\n\n📌 **Правило:** в Present Simple для **he / she / it** добавляем **-s**.\n\n🧩 **Формула:** he/she/it + verb-s\n\n🔹 **Пример:** He plays tennis every Sunday. — Он играет в теннис каждое воскресенье."],

        ['q' => 'She ___ to work by bus. (ехать/идти)', 'a' => "✅ **goes**\n\n📌 **Правило:** к глаголам на **-o, -s, -sh, -ch, -x** часто добавляем **-es**.\n\n🔹 **Пример:** go → goes, watch → watches.\n\n⚠️ **Не:** She go to work."],

        ['q' => 'He ___ English. (учить)', 'a' => "✅ **studies**\n\n📌 **Правило:** если глагол заканчивается на **согласная + y**, то **y → ies**.\n\n🔹 **Пример:** study → studies.\n\n⚠️ **Не:** He studys English."],

        ['q' => '___ you like coffee?', 'a' => "✅ **Do**\n\n📌 **Правило:** вопросы в Present Simple для **I / you / we / they** начинаются с **Do**.\n\n🧩 **Формула:** Do + subject + verb?\n\n🔹 **Пример:** Do you like coffee? — Ты любишь кофе?"],

        ['q' => '___ she work in a bank?', 'a' => "✅ **Does**\n\n📌 **Правило:** вопросы для **he / she / it** начинаются с **Does**.\n\n🧩 **Формула:** Does + he/she/it + verb?\n\n🔹 **Пример:** Does she work in a bank? — Она работает в банке?\n⚠️ После **does** основной глагол без **-s**."],

        ['q' => 'I ___ speak German. (отрицание)', 'a' => "✅ **do not / don't**\n\n📌 **Правило:** отрицание для **I / you / we / they**: **do not + verb**.\n\n🔹 **Пример:** I don't speak German. — Я не говорю по-немецки."],

        ['q' => 'He ___ smoke. (отрицание)', 'a' => "✅ **does not / doesn't**\n\n📌 **Правило:** отрицание для **he / she / it**: **does not + verb**.\n\n🔹 **Пример:** He doesn't smoke. — Он не курит.\n⚠️ **Не:** He doesn't smokes."],

        ['q' => 'Do you like tea? — Yes, I ___.', 'a' => "✅ **do**\n\n📌 **Правило:** короткий ответ с **do**.\n\n🔹 **Yes, I do.** — Да.\n🔹 **No, I don't.** — Нет.\n\n⚠️ **Не:** Yes, I like."],

        ['q' => 'Does she live here? — No, she ___.', 'a' => "✅ **doesn't**\n\n📌 **Правило:** короткий отрицательный ответ с **does**.\n\n🔹 **Yes, she does.** — Да.\n🔹 **No, she doesn't.** — Нет."],

        // --- Adverbs of frequency ---
        ['q' => 'She ___ wakes up early. (всегда)', 'a' => "✅ **always** — всегда\n\n📌 **Правило:** наречия частотности обычно ставятся перед основным глаголом.\n\n🔹 **Пример:** She always wakes up early. — Она всегда рано просыпается."],

        ['q' => 'I am ___ tired after work. (обычно)', 'a' => "✅ **usually** — обычно\n\n📌 **Правило:** после глагола **to be** наречие ставится после **am/is/are**.\n\n🔹 **Пример:** I am usually tired after work. — Я обычно уставший после работы."],

        ['q' => 'They ___ eat meat. (никогда)', 'a' => "✅ **never** — никогда\n\n📌 **Правило:** с **never** не нужен **do not**, потому что **never** уже имеет отрицательный смысл.\n\n🔹 **Пример:** They never eat meat. — Они никогда не едят мясо.\n⚠️ **Не:** They don't never eat meat."],

        // --- Present Continuous ---
        ['q' => 'I ___ a book now. (читать)', 'a' => "✅ **am reading**\n\n📌 **Правило:** Present Continuous используется для действия, которое происходит сейчас.\n\n🧩 **Формула:** am/is/are + verb-ing\n\n🔹 **Пример:** I am reading a book now. — Я сейчас читаю книгу."],

        ['q' => 'She ___ at the moment. (танцевать)', 'a' => "✅ **is dancing**\n\n📌 **Правило:** если глагол заканчивается на немую **-e**, перед **-ing** она обычно исчезает.\n\n🔹 **Пример:** dance → dancing, make → making."],

        ['q' => 'They ___ on the sofa. (сидеть)', 'a' => "✅ **are sitting**\n\n📌 **Правило:** в коротких глаголах типа **sit** последняя согласная часто удваивается.\n\n🔹 **Пример:** sit → sitting, run → running."],

        ['q' => '___ you listening to me?', 'a' => "✅ **Are**\n\n📌 **Правило:** в вопросе Present Continuous глагол **to be** ставится перед подлежащим.\n\n🧩 **Формула:** Am/Is/Are + subject + verb-ing?\n\n🔹 **Пример:** Are you listening to me? — Ты меня слушаешь?"],

        ['q' => 'I am not ___ right now. (работать)', 'a' => "✅ **working**\n\n📌 **Правило:** отрицание строится так: **am/is/are + not + verb-ing**.\n\n🔹 **Пример:** I am not working right now. — Я сейчас не работаю."],

        ['q' => 'Look! It ___ . (идти о дожде)', 'a' => "✅ **is raining**\n\n📌 **Правило:** слова **Look!**, **now**, **at the moment** часто указывают на Present Continuous.\n\n🔹 **Пример:** Look! It is raining. — Смотри! Идет дождь."],

        // --- Present Simple vs Present Continuous ---
        ['q' => 'I usually ___ tea, but now I ___ coffee. (пить)', 'a' => "✅ **drink / am drinking**\n\n📌 **Правило:**\n- **Present Simple** = обычно, регулярно.\n- **Present Continuous** = сейчас.\n\n🔹 **Пример:** I usually drink tea, but now I am drinking coffee. — Обычно я пью чай, но сейчас пью кофе."],

        ['q' => 'She ___ every day, but today she ___. (работать / отдыхать)', 'a' => "✅ **works / is resting**\n\n📌 **Правило:**\n- **every day** → Present Simple.\n- **today / now** → часто Present Continuous.\n\n🔹 **Пример:** She works every day, but today she is resting."],

        // --- Can ---
        ['q' => 'I ___ swim.', 'a' => "✅ **can** — могу / умею\n\n📌 **Правило:** после **can** глагол идет без **to**.\n\n🧩 **Формула:** subject + can + verb\n\n🔹 **Пример:** I can swim. — Я умею плавать.\n⚠️ **Не:** I can to swim."],

        ['q' => 'He ___ drive. (не может)', 'a' => "✅ **cannot / can't**\n\n📌 **Правило:** отрицательная форма: **cannot** или **can't**.\n\n🔹 **Пример:** He can't drive. — Он не умеет водить."],

        ['q' => '___ you help me?', 'a' => "✅ **Can**\n\n📌 **Правило:** в вопросе **can** ставится перед подлежащим.\n\n🧩 **Формула:** Can + subject + verb?\n\n🔹 **Пример:** Can you help me? — Вы можете мне помочь?"],

        ['q' => 'Can I sit here?', 'a' => "✅ **Можно мне здесь сесть?**\n\n📌 **Правило:** **Can I...?** = можно мне...?\n\n🔹 **Пример:** Can I sit here? — Можно мне здесь сесть?\n🔹 **Пример:** Can I open the window? — Можно открыть окно?"],

        // --- Would like ---
        ['q' => 'I ___ ___ a cup of tea. (хотел бы)', 'a' => "✅ **would like / 'd like**\n\n📌 **Правило:** **would like** — вежливая форма желания.\n\n🔹 **Пример:** I would like a cup of tea. — Я бы хотел чашку чая.\n\n⚠️ **I want** звучит прямее, иногда грубее. **I would like** — вежливее."],

        ['q' => '___ you like some coffee?', 'a' => "✅ **Would**\n\n📌 **Правило:** **Would you like...?** = Хотели бы вы...?\n\n🔹 **Пример:** Would you like some coffee? — Хотите кофе?"],

        ['q' => 'I would like ___ buy this dress.', 'a' => "✅ **to**\n\n📌 **Правило:** после **would like** перед глаголом ставим **to**.\n\n🧩 **Формула:** would like + to + verb\n\n🔹 **Пример:** I would like to buy this dress. — Я бы хотела купить это платье."],

        // --- Imperative ---
        ['q' => '___ the window, please. (Открой)', 'a' => "✅ **Open**\n\n📌 **Правило:** повелительное наклонение начинается с глагола в начальной форме.\n\n🔹 **Пример:** Open the window, please. — Открой окно, пожалуйста."],

        ['q' => '___ touch that box! (Не трогай)', 'a' => "✅ **Don't**\n\n📌 **Правило:** отрицательная команда начинается с **Don't + verb**.\n\n🔹 **Пример:** Don't touch that box! — Не трогай ту коробку!"],

        ['q' => '___ careful! (Будь осторожен)', 'a' => "✅ **Be**\n\n📌 **Правило:** для команды с прилагательным используем **Be + adjective**.\n\n🔹 **Пример:** Be careful! — Будь осторожен!"],

        // --- Be going to ---
        ['q' => 'I ___ ___ ___ visit my grandmother tomorrow.', 'a' => "✅ **am going to**\n\n📌 **Правило:** **be going to** используется для планов и намерений.\n\n🧩 **Формула:** am/is/are + going to + verb\n\n🔹 **Пример:** I am going to visit my grandmother tomorrow. — Я собираюсь навестить бабушку завтра."],

        ['q' => 'She ___ ___ ___ buy a new phone.', 'a' => "✅ **is going to**\n\n📌 **Правило:** форма **to be** меняется: I am, he/she/it is, you/we/they are.\n\n🔹 **Пример:** She is going to buy a new phone. — Она собирается купить новый телефон."],

        ['q' => 'They ___ ___ ___ travel in summer.', 'a' => "✅ **are going to**\n\n📌 **Правило:** для **they** используем **are going to**.\n\n🔹 **Пример:** They are going to travel in summer. — Они собираются путешествовать летом."],

        // --- Countable and uncountable nouns ---
        ['q' => 'I have ___ apple. (утверждение)', 'a' => "✅ **an**\n\n📌 **Правило:** **apple** — исчисляемое существительное в единственном числе, поэтому нужен **a/an**.\n\n🔹 **Пример:** I have an apple. — У меня есть яблоко."],

        ['q' => 'I have ___ water. (немного воды)', 'a' => "✅ **some**\n\n📌 **Правило:** **water** — неисчисляемое существительное. С ним не используем **a/an**.\n\n🔹 **Пример:** I have some water. — У меня есть немного воды.\n⚠️ **Не:** a water."],

        ['q' => 'Do you have ___ questions?', 'a' => "✅ **any**\n\n📌 **Правило:** **any** часто используется в вопросах и отрицаниях.\n\n🔹 **Пример:** Do you have any questions? — У вас есть вопросы?"],

        ['q' => 'Would you like ___ tea?', 'a' => "✅ **some**\n\n📌 **Правило:** в вежливых предложениях и просьбах можно использовать **some** в вопросе.\n\n🔹 **Пример:** Would you like some tea? — Хотите чаю?"],

        ['q' => 'I do not have ___ time.', 'a' => "✅ **much**\n\n📌 **Правило:** **much** используется с неисчисляемыми существительными.\n\n🔹 **Пример:** I do not have much time. — У меня мало времени / не так много времени."],

        ['q' => 'I have ___ friends.', 'a' => "✅ **many / a lot of**\n\n📌 **Правило:** **many** используется с исчисляемыми существительными во множественном числе.\n\n🔹 **Пример:** I have many friends. — У меня много друзей.\n🔹 **a lot of** — более разговорный и универсальный вариант."],

        ['q' => '___ is this shirt? (Сколько стоит?)', 'a' => "✅ **How much**\n\n📌 **Правило:** для цены используем **How much...?**\n\n🔹 **Пример:** How much is this shirt? — Сколько стоит эта рубашка?"],

        ['q' => '___ people are there?', 'a' => "✅ **How many**\n\n📌 **Правило:** **How many** используем с исчисляемыми существительными.\n\n🔹 **Пример:** How many people are there? — Сколько там людей?"],

        // --- Prepositions of time ---
        ['q' => 'I will see you ___ Monday.', 'a' => "✅ **on**\n\n📌 **Правило:** с днями недели используем **on**.\n\n🔹 **Пример:** on Monday, on Friday, on Sunday.\n🔹 I will see you on Monday. — Увидимся в понедельник."],

        ['q' => 'My birthday is ___ October.', 'a' => "✅ **in**\n\n📌 **Правило:** с месяцами, годами и сезонами используем **in**.\n\n🔹 **Пример:** in October, in 2026, in summer."],

        ['q' => 'The lesson starts ___ 8 o clock.', 'a' => "✅ **at**\n\n📌 **Правило:** с точным временем используем **at**.\n\n🔹 **Пример:** at 8 o clock, at 5:30, at noon."],

        ['q' => 'I drink coffee ___ the morning.', 'a' => "✅ **in**\n\n📌 **Правило:** говорим **in the morning**, **in the afternoon**, **in the evening**.\n\n🔹 **Пример:** I drink coffee in the morning. — Я пью кофе утром."],

        ['q' => 'We sleep ___ night.', 'a' => "✅ **at**\n\n📌 **Правило:** устойчивое выражение: **at night**.\n\n🔹 **Пример:** We sleep at night. — Мы спим ночью."],

        // --- Prepositions of place ---
        ['q' => 'The cat is ___ the box. (внутри)', 'a' => "✅ **in** — в / внутри\n\n📌 **Правило:** **in** = внутри пространства.\n\n🔹 **Пример:** The cat is in the box. — Кот в коробке."],

        ['q' => 'The book is ___ the table. (на поверхности)', 'a' => "✅ **on** — на\n\n📌 **Правило:** **on** = на поверхности.\n\n🔹 **Пример:** The book is on the table. — Книга на столе."],

        ['q' => 'The dog is ___ the table. (под)', 'a' => "✅ **under** — под\n\n📌 **Правило:** **under** = ниже чего-то.\n\n🔹 **Пример:** The dog is under the table. — Собака под столом."],

        ['q' => 'The bank is ___ ___ the post office. (рядом с)', 'a' => "✅ **next to** — рядом с\n\n📌 **Правило:** **next to** = очень близко, по соседству.\n\n🔹 **Пример:** The bank is next to the post office. — Банк рядом с почтой."],

        ['q' => 'The car is ___ ___ ___ the house. (перед)', 'a' => "✅ **in front of** — перед\n\n📌 **Правило:** **in front of** = перед чем-то.\n\n🔹 **Пример:** The car is in front of the house. — Машина перед домом."],

        ['q' => 'The park is ___ the bank. (напротив)', 'a' => "✅ **opposite** — напротив\n\n📌 **Правило:** **opposite** = напротив, часто через дорогу.\n\n🔹 **Пример:** The park is opposite the bank. — Парк напротив банка."],

        ['q' => 'The cat is ___ the door. (позади)', 'a' => "✅ **behind** — за / позади\n\n📌 **Правило:** **behind** = сзади, позади.\n\n🔹 **Пример:** The cat is behind the door. — Кот за дверью."],

        ['q' => 'The shop is ___ the bank and the cafe. (между)', 'a' => "✅ **between** — между\n\n📌 **Правило:** **between** используется, когда что-то находится между двумя объектами.\n\n🔹 **Пример:** The shop is between the bank and the cafe. — Магазин между банком и кафе."],

        // --- Question words ---
        ['q' => '___ is your name?', 'a' => "✅ **What** — что / какой\n\n📌 **Правило:** **What** спрашивает о вещи, имени, информации.\n\n🔹 **Пример:** What is your name? — Как вас зовут?"],

        ['q' => '___ are you from?', 'a' => "✅ **Where** — где / куда / откуда\n\n📌 **Правило:** **Where** спрашивает о месте.\n\n🔹 **Пример:** Where are you from? — Откуда вы?"],

        ['q' => '___ is your birthday?', 'a' => "✅ **When** — когда\n\n📌 **Правило:** **When** спрашивает о времени или дате.\n\n🔹 **Пример:** When is your birthday? — Когда твой день рождения?"],

        ['q' => '___ is that woman?', 'a' => "✅ **Who** — кто\n\n📌 **Правило:** **Who** спрашивает о человеке.\n\n🔹 **Пример:** Who is that woman? — Кто та женщина?"],

        ['q' => '___ are you sad?', 'a' => "✅ **Why** — почему\n\n📌 **Правило:** **Why** спрашивает о причине.\n\n🔹 **Пример:** Why are you sad? — Почему ты грустный?"],

        ['q' => '___ are you?', 'a' => "✅ **How** — как\n\n📌 **Правило:** **How** спрашивает о состоянии, способе или качестве.\n\n🔹 **Пример:** How are you? — Как дела?"],

        ['q' => '___ bag is this?', 'a' => "✅ **Whose** — чей\n\n📌 **Правило:** **Whose** спрашивает о принадлежности.\n\n🔹 **Пример:** Whose bag is this? — Чья это сумка?"],

        ['q' => '___ color do you like?', 'a' => "✅ **Which** — который / какой из вариантов\n\n📌 **Правило:** **which** используем, когда есть выбор из вариантов.\n\n🔹 **Пример:** Which color do you like? — Какой цвет тебе нравится?"],

        // --- Word order ---
        ['q' => 'Put the words in order: like / I / coffee', 'a' => "✅ **I like coffee.**\n\n📌 **Правило:** базовый порядок слов в английском: **кто + что делает + что**.\n\n🧩 **Формула:** Subject + Verb + Object\n\n🔹 **Пример:** I like coffee. — Я люблю кофе."],

        ['q' => 'Put the words in order: every day / she / works', 'a' => "✅ **She works every day.**\n\n📌 **Правило:** обстоятельство времени часто ставится в конец предложения.\n\n🔹 **Пример:** She works every day. — Она работает каждый день."],

        ['q' => 'Put the words in order: does / where / live / he?', 'a' => "✅ **Where does he live?**\n\n📌 **Правило:** специальный вопрос в Present Simple:\n\n🧩 **Формула:** Question word + do/does + subject + verb?\n\n🔹 **Пример:** Where does he live? — Где он живет?"],

        // --- Conjunctions ---
        ['q' => 'I like apples ___ bananas.', 'a' => "✅ **and** — и\n\n📌 **Правило:** **and** соединяет похожие идеи или предметы.\n\n🔹 **Пример:** I like apples and bananas. — Я люблю яблоки и бананы."],

        ['q' => 'I like coffee, ___ I do not like tea.', 'a' => "✅ **but** — но\n\n📌 **Правило:** **but** показывает противопоставление.\n\n🔹 **Пример:** I like coffee, but I do not like tea. — Я люблю кофе, но не люблю чай."],

        ['q' => 'I stayed home ___ it was raining.', 'a' => "✅ **because** — потому что\n\n📌 **Правило:** **because** объясняет причину.\n\n🔹 **Пример:** I stayed home because it was raining. — Я остался дома, потому что шел дождь."],

        ['q' => 'It was raining, ___ I stayed home.', 'a' => "✅ **so** — поэтому\n\n📌 **Правило:** **so** показывает результат.\n\n🔹 **Пример:** It was raining, so I stayed home. — Шел дождь, поэтому я остался дома."],

        ['q' => 'Do you want tea ___ coffee?', 'a' => "✅ **or** — или\n\n📌 **Правило:** **or** показывает выбор.\n\n🔹 **Пример:** Do you want tea or coffee? — Ты хочешь чай или кофе?"],

        // --- Basic Past Simple ---
        ['q' => 'I ___ to the cinema yesterday. (ходить/идти)', 'a' => "✅ **went**\n\n📌 **Правило:** Past Simple используется для завершенных действий в прошлом.\n\n🔹 **yesterday** = вчера, часто указывает на Past Simple.\n\n🔹 **Пример:** I went to the cinema yesterday. — Я ходил в кино вчера.\n⚠️ **go → went** — неправильный глагол."],

        ['q' => 'She ___ hard last week. (работать)', 'a' => "✅ **worked**\n\n📌 **Правило:** у правильных глаголов в Past Simple добавляем **-ed**.\n\n🔹 **Пример:** She worked hard last week. — Она много работала на прошлой неделе."],

        ['q' => 'We ___ happy yesterday. (быть)', 'a' => "✅ **were**\n\n📌 **Правило:** Past Simple от **to be**:\n- I/he/she/it → **was**\n- you/we/they → **were**\n\n🔹 **Пример:** We were happy yesterday. — Мы были счастливы вчера."],

        ['q' => 'I ___ at home yesterday. (быть)', 'a' => "✅ **was**\n\n📌 **Правило:** с **I** в прошлом времени используем **was**.\n\n🔹 **Пример:** I was at home yesterday. — Я был дома вчера."],

        ['q' => 'I ___ go to work yesterday. (отрицание)', 'a' => "✅ **did not / didn't**\n\n📌 **Правило:** отрицание в Past Simple: **did not + verb**.\n\n🔹 **Пример:** I didn't go to work yesterday. — Я не ходил на работу вчера.\n⚠️ После **didn't** глагол стоит в начальной форме: **didn't go**, не **didn't went**."],

        ['q' => '___ you like the movie?', 'a' => "✅ **Did**\n\n📌 **Правило:** вопрос в Past Simple начинается с **Did**.\n\n🧩 **Формула:** Did + subject + verb?\n\n🔹 **Пример:** Did you like the movie? — Тебе понравился фильм?\n⚠️ После **Did** глагол без прошедшей формы."],

        ['q' => 'He ___ his friend two days ago. (видеть)', 'a' => "✅ **saw**\n\n📌 **Правило:** **see → saw** — неправильный глагол.\n\n🔹 **Пример:** He saw his friend two days ago. — Он видел своего друга два дня назад."],

        ['q' => 'They ___ a house last year. (покупать)', 'a' => "✅ **bought**\n\n📌 **Правило:** **buy → bought** — неправильный глагол.\n\n🔹 **Пример:** They bought a house last year. — Они купили дом в прошлом году."],
    ],
];