<?php
// Script to check which HTML element classes are missing in src/

$masterList = include __DIR__ . '/html_elements_master_list.php';

// Get all PHP files in src/ (excluding this script and the master list)
$files = glob(__DIR__ . '/*.php');
$existing = [];
foreach ($files as $file) {
    $base = basename($file, '.php');
    if (in_array($base, ['html_elements_master_list', 'check_missing_elements', 'Html'])) continue;
    $existing[] = strtolower($base);
}

// Special case: h1-h6, handled as 'h' in some codebases
foreach (['h1','h2','h3','h4','h5','h6'] as $hx) {
    if (in_array('h', $existing)) $existing[] = $hx;
}

$missing = array_diff($masterList, $existing);

echo "Missing element classes:\n";
foreach ($missing as $el) {
    echo $el . "\n";
}