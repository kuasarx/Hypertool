<?php
// Script to generate missing HTML element classes in src/

$masterList = include __DIR__ . '/html_elements_master_list.php';

// Get all PHP files in src/ (excluding this script and the master list)
$files = glob(__DIR__ . '/*.php');
$existing = [];
foreach ($files as $file) {
    $base = basename($file, '.php');
    if (in_array($base, ['html_elements_master_list', 'check_missing_elements', 'generate_missing_elements', 'Html'])) continue;
    $existing[] = strtolower($base);
}

// Special case: h1-h6, handled as 'h' in some codebases
foreach (['h1','h2','h3','h4','h5','h6'] as $hx) {
    if (in_array('h', $existing)) $existing[] = $hx;
}

$missing = array_diff($masterList, $existing);

foreach ($missing as $el) {
    $className = ucfirst(preg_replace('/[^a-zA-Z0-9]/', '', $el));
    $fileName = __DIR__ . "/$el.php";
    if (file_exists($fileName)) continue;
    $content = "<?php\nclass $className extends HtmlElement {\n    public function __construct(\$content = '') {\n        parent::__construct('$el');\n        if (\$content) {\n            \$this->text(\$content);\n        }\n    }\n}\n";
    file_put_contents($fileName, $content);
    echo "Created $fileName\n";
}
echo "Done.\n";