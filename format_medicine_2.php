<?php

$file = '/home/artem/mf_new/database/seeders/seeds_data/ru/languages/english/en_medicine.php';
$lines = file($file);
$out = [];
$q = '';
$a = '';
$in_card = false;

foreach ($lines as $line) {
    if (preg_match('/^\s*\d+\s*=>\s*\[/', $line)) {
        $in_card = true;
        continue;
    }
    
    if ($in_card) {
        if (preg_match('/\'q\'\s*=>\s*(.+),$/', rtrim($line), $matches)) {
            $q = trim($matches[1]);
        } elseif (preg_match('/\'a\'\s*=>\s*(.+),$/', rtrim($line), $matches)) {
            $a = trim($matches[1]);
        } elseif (preg_match('/\'weight\'/', $line)) {
            // ignore
        } elseif (preg_match('/^\s*\],/', $line)) {
            // End of card
            $out[] = "        ['q' => $q, 'a' => $a],";
            $in_card = false;
        }
    } else {
        $out[] = rtrim($line);
    }
}

file_put_contents($file, implode("\n", $out) . "\n");
echo "Done formatting!";
