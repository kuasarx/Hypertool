<?php
// Script to append a usage example to each element class file in src/

$dir = __DIR__;
$files = glob("$dir/*.php");

foreach ($files as $file) {
    $basename = basename($file, '.php');
    if (in_array($basename, [
        'Html', 'html_elements_master_list', 'check_missing_elements', 'generate_missing_elements', 'add_usage_examples'
    ])) continue;

    $content = file_get_contents($file);
    // Skip if usage example already present
    if (strpos($content, 'Usage example:') !== false) continue;

    // Try to detect class name (first class in file)
    if (preg_match('/class\s+([A-Za-z0-9_]+)/', $content, $m)) {
        $className = $m[1];
    } else {
        continue;
    }

    $usage = <<<EOT

/*
Usage example:

// Using the class directly
\${$basename} = new $className('Sample content');
echo \${$basename}->output();

// Using the static factory method
\${$basename}2 = HtmlElement::{$basename}('Sample content');
echo \${$basename}2->output();
*/
EOT;

    file_put_contents($file, $content . $usage);
    echo "Updated $file\n";
}
echo "Done.\n";