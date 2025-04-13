<?php
// examples/html_element_example.php

// Use Composer's autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Import necessary classes from the namespace
use Hypertool\Html\HtmlElement;
use Hypertool\Html\Div;
use Hypertool\Html\Button;
use Hypertool\Html\H1;
use Hypertool\Html\Input;

echo "--- HtmlElement Examples (with Namespace) ---\n\n";

// 1. Basic Element Creation
echo "1. Basic Element Creation:\n";
$div = HtmlElement::div('Initial Content') // Using static factory
    ->setId('my-div')
    ->setClass('container');
$h1 = new H1('Main Title'); // Direct class instantiation (now namespaced)
$div->add_child('title', $h1);
$output1 = $div->output();
echo $output1 . "\n";
// Basic check
if (strpos($output1, '<div id="my-div" class="container">') !== false && strpos($output1, '<h1>Main Title</h1>') !== false) {
    echo "  [PASS] Basic div with h1 child created.\n";
} else {
    echo "  [FAIL] Basic div creation failed.\n";
}
echo "\n";

// 2. HTMX Attributes
echo "2. HTMX Attributes:\n";
$button_htmx = HtmlElement::button('Load More') // Using static factory
    ->setHxPost('/load-items')
    ->setHxTarget('#item-list')
    ->setHxSwap('beforeend')
    ->setHxIndicator('#loading-spinner');
$output2 = $button_htmx->output();
echo $output2 . "\n";
// Basic check
if (strpos($output2, 'hx-post="/load-items"') !== false && strpos($output2, 'hx-target="#item-list"') !== false) {
    echo "  [PASS] HTMX attributes set correctly.\n";
} else {
    echo "  [FAIL] HTMX attribute setting failed.\n";
}
echo "\n";

// 3. Hyperscript Attribute
echo "3. Hyperscript Attribute:\n";
$button_hs = HtmlElement::button('Toggle Class') // Using static factory
    ->setHyperscript('on click toggle .active on me');
$output3 = $button_hs->output();
echo $output3 . "\n";
// Basic check
if (strpos($output3, '_="on click toggle .active on me"') !== false) {
    echo "  [PASS] Hyperscript attribute set correctly.\n";
} else {
    echo "  [FAIL] Hyperscript attribute setting failed.\n";
}
echo "\n";

// 4. Combining HTMX and Hyperscript
echo "4. Combining HTMX and Hyperscript:\n";
$input = HtmlElement::input() // Using static factory
    ->setType('text')
    ->setHxTrigger('keyup changed delay:500ms')
    ->setHxGet('/validate-username')
    ->setHyperscript('on htmx:afterRequest if my.value is "" remove .error from me else add .error to me');
$output4 = $input->output();
echo $output4 . "\n";
// Basic check
if (strpos($output4, 'hx-trigger="keyup changed delay:500ms"') !== false && strpos($output4, '_="on htmx:afterRequest') !== false) {
    echo "  [PASS] Combined HTMX/Hyperscript attributes set correctly.\n";
} else {
    echo "  [FAIL] Combined HTMX/Hyperscript attribute setting failed.\n";
}
echo "\n";

?>