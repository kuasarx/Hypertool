<?php
// examples/tailwind_example.php
// Demonstrates using the HtmlElement library with Tailwind CSS classes via setClass()

// Assumes Composer autoloader is included
require_once __DIR__ . '/../vendor/autoload.php';

use Hypertool\Html\HtmlElement;

echo "--- Tailwind CSS Examples using setClass() ---\n\n";

// --- Tailwind Styled Button ---
echo "1. Tailwind Styled Button:\n";
$button = HtmlElement::button('Styled Button')
    ->setClass('bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'); // Apply Tailwind utility classes
echo $button->output() . "\n\n";
// Expected: <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Styled Button</button>

// --- Tailwind Card ---
echo "2. Tailwind Card:\n";
$card = HtmlElement::div()
    ->setClass('max-w-sm rounded overflow-hidden shadow-lg bg-white'); // Apply Tailwind card container classes

$image = HtmlElement::img()
    ->setSrc('/img/card-top.jpg') // Placeholder image path
    ->setAlt('Sunset in the mountains')
    ->setClass('w-full');

$contentDiv = HtmlElement::div()->setClass('px-6 py-4');

$title = HtmlElement::div('The Coldest Sunset')
    ->setClass('font-bold text-xl mb-2');

$text = HtmlElement::p('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.')
    ->setClass('text-gray-700 text-base');

$contentDiv->add_child('title', $title)->add_child('text', $text);

$tagsDiv = HtmlElement::div()->setClass('px-6 pt-4 pb-2');

$tag1 = HtmlElement::span('#photography')->setClass('inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2');
$tag2 = HtmlElement::span('#travel')->setClass('inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2');
$tag3 = HtmlElement::span('#winter')->setClass('inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2');

$tagsDiv->add_child('tag1', $tag1)->add_child('tag2', $tag2)->add_child('tag3', $tag3);

$card->add_child('image', $image)
     ->add_child('content', $contentDiv)
     ->add_child('tags', $tagsDiv);

echo $card->output() . "\n\n";
/* Expected structure similar to Tailwind card component example */

echo "--- End Tailwind CSS Examples ---\n";

?>