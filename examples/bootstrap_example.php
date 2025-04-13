<?php
// examples/bootstrap_example.php
// Demonstrates using the HtmlElement library with Bootstrap classes via setClass()

// Assumes Composer autoloader is included
require_once __DIR__ . '/../vendor/autoload.php';

use Hypertool\Html\HtmlElement;

echo "--- Bootstrap Examples using setClass() ---\n\n";

// --- Bootstrap Button ---
echo "1. Bootstrap Button:\n";
$button = HtmlElement::button('Primary Button')
    ->setClass('btn btn-primary'); // Apply Bootstrap button classes
echo $button->output() . "\n\n";
// Expected: <button class="btn btn-primary">Primary Button</button>

// --- Bootstrap Alert ---
echo "2. Bootstrap Alert:\n";
$alert = HtmlElement::div('This is a success alert!')
    ->setClass('alert alert-success') // Apply Bootstrap alert classes
    ->setRole('alert'); // Add accessibility role
echo $alert->output() . "\n\n";
// Expected: <div class="alert alert-success" role="alert">This is a success alert!</div>

// --- Bootstrap Card (Simple) ---
echo "3. Bootstrap Card (Simple):\n";
$cardDiv = HtmlElement::div()
    ->setClass('card') // Card container
    ->setStyle('width: 18rem;'); // Optional inline style

$cardBody = HtmlElement::div()
    ->setClass('card-body'); // Card body

$cardTitle = HtmlElement::h5('Card Title')->setClass('card-title');
$cardText = HtmlElement::p('Some quick example text to build on the card title.')
    ->setClass('card-text');
$cardLink = HtmlElement::a('Go somewhere')->setHref('#')->setClass('btn btn-info'); // Button inside card

$cardBody->add_child('title', $cardTitle)
         ->add_child('text', $cardText)
         ->add_child('link', $cardLink);

$cardDiv->add_child('body', $cardBody);

echo $cardDiv->output() . "\n\n";
/* Expected structure:
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card Title</h5>
    <p class="card-text">Some quick example text...</p>
    <a href="#" class="btn btn-info">Go somewhere</a>
  </div>
</div>
*/

echo "--- End Bootstrap Examples ---\n";

?>