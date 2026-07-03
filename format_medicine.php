<?php

$file = '/home/artem/mf_new/database/seeders/seeds_data/ru/languages/english/en_medicine.php';
$content = file_get_contents($file);

// Match block like:
//    130 => [
//      'q' => 'Вакцинация от гепатита',
//      'a' => 'Hepatitis vaccination',
//      'weight' => 0,
//    ],
$pattern = '/\s*\d+\s*=>\s*\[\s*\'q\'\s*=>\s*(.+?),\s*\'a\'\s*=>\s*(.+?),(?:\s*\'weight\'\s*=>\s*\d+,)?\s*\],/sU';

$content = preg_replace_callback($pattern, function($matches) {
    $q = trim($matches[1]);
    $a = trim($matches[2]);
    return "\n        ['q' => $q, 'a' => $a],";
}, $content);

file_put_contents($file, $content);
echo "Format complete!";
