<?php

$file = '/home/artem/mf_new/database/seeders/seeds_data/ru/languages/english/en_medicine.php';
$content = file_get_contents($file);

// Update name and description
$content = str_replace("'name' => '💉 Medicine'", "'name' => '🩺 🇬🇧 Английский: Медицина (Advanced)'", $content);
$content = preg_replace("/'description' => '.*?',/", "'description' => 'Ультимативный медицинский словарь. От базовой анатомии и симптомов до инструментов, узких специалистов и сложных диагнозов. Идеально для врачей и тех, кто заботится о здоровье.',", $content);

// Find the last array closer
$search = "  ],\n];";
if (strpos($content, $search) !== false) {

$medicine_cards = <<<PHP
    // --- Symptoms & Complaints (Симптомы и жалобы) ---
    ['q' => 'Тошнота', 'a' => 'Nausea'],
    ['q' => 'Головокружение', 'a' => 'Dizziness'],
    ['q' => 'Одышка', 'a' => 'Shortness of breath'],
    ['q' => 'Хроническая усталость', 'a' => 'Fatigue'],
    ['q' => 'Учащенное сердцебиение / Пальпитация', 'a' => 'Palpitations'],
    ['q' => 'Озноб', 'a' => 'Chills'],
    ['q' => 'Онемение', 'a' => 'Numbness'],
    ['q' => 'Сыпь', 'a' => 'Rash'],
    ['q' => 'Отек (припухлость)', 'a' => 'Swelling'],
    ['q' => 'Рвота', 'a' => 'Vomiting'],

    // --- Diseases & Conditions (Болезни и состояния) ---
    ['q' => 'Воспаление легких / Пневмония', 'a' => 'Pneumonia'],
    ['q' => 'Сотрясение мозга', 'a' => 'Concussion'],
    ['q' => 'Инсульт', 'a' => 'Stroke'],
    ['q' => 'Инфаркт (Сердечный приступ)', 'a' => 'Heart attack / Myocardial infarction'],
    ['q' => 'Гипертония (Повышенное давление)', 'a' => 'Hypertension'],
    ['q' => 'Язва', 'a' => 'Ulcer'],
    ['q' => 'Перелом', 'a' => 'Fracture'],
    ['q' => 'Вывих', 'a' => 'Dislocation'],
    ['q' => 'Растяжение связок', 'a' => 'Sprain'],

    // --- Anatomy & Organs (Анатомия и органы) ---
    ['q' => 'Печень', 'a' => 'Liver'],
    ['q' => 'Почки', 'a' => 'Kidneys'],
    ['q' => 'Легкие', 'a' => 'Lungs'],
    ['q' => 'Селезенка', 'a' => 'Spleen'],
    ['q' => 'Желудок', 'a' => 'Stomach'],
    ['q' => 'Кишечник (тонкий / толстый)', 'a' => 'Intestines (Small / Large)'],
    ['q' => 'Кровеносные сосуды (Вены и Артерии)', 'a' => 'Blood vessels (Veins and Arteries)'],
    ['q' => 'Позвоночник', 'a' => 'Spine'],
    ['q' => 'Костный мозг', 'a' => 'Bone marrow'],

    // --- Medical Equipment & Items (Оборудование и предметы) ---
    ['q' => 'Шприц', 'a' => 'Syringe'],
    ['q' => 'Капельница', 'a' => 'IV drip (Intravenous drip)'],
    ['q' => 'Костыли', 'a' => 'Crutches'],
    ['q' => 'Инвалидное кресло', 'a' => 'Wheelchair'],
    ['q' => 'Гипс', 'a' => 'Cast'],
    ['q' => 'Шина (для фиксации перелома)', 'a' => 'Splint'],
    ['q' => 'Носилки', 'a' => 'Stretcher'],
    ['q' => 'Пинцет', 'a' => 'Tweezers'],
    ['q' => 'Стетоскоп', 'a' => 'Stethoscope'],

    // --- Medical Procedures & Verbs (Процедуры и действия) ---
    ['q' => 'Назначить лекарство (Выписать рецепт)', 'a' => 'To prescribe (medicine)'],
    ['q' => 'Поступить в больницу (быть госпитализированным)', 'a' => 'To be admitted to the hospital'],
    ['q' => 'Выписать из больницы', 'a' => 'To discharge (from the hospital)'],
    ['q' => 'Осмотреть пациента', 'a' => 'To examine a patient'],
    ['q' => 'Реанимировать', 'a' => 'To resuscitate'],
    ['q' => 'Сделать операцию', 'a' => 'To perform surgery'],
    ['q' => 'Сдать анализ крови', 'a' => 'To have a blood test'],
    ['q' => 'Сделать УЗИ', 'a' => 'To have an ultrasound'],
    ['q' => 'Накладывать швы', 'a' => 'To stitch up / To give stitches'],

    // --- Medical Specialties & Staff (Специалисты и персонал) ---
    ['q' => 'Хирург', 'a' => 'Surgeon'],
    ['q' => 'Педиатр', 'a' => 'Pediatrician'],
    ['q' => 'Акушер-гинеколог', 'a' => 'Obstetrician-Gynecologist (OB/GYN)'],
    ['q' => 'Анестезиолог', 'a' => 'Anesthesiologist'],
    ['q' => 'Медсестра / Медбрат', 'a' => 'Nurse'],
    ['q' => 'Фельдшер (парамедик)', 'a' => 'Paramedic'],
    ['q' => 'Терапевт (врач общей практики)', 'a' => 'General Practitioner (GP)'],
PHP;

    $content = str_replace($search, $medicine_cards . "\n" . $search, $content);
    file_put_contents($file, $content);
    echo "Medicine updated successfully!";
} else {
    echo "Could not find the end of the array.";
}
