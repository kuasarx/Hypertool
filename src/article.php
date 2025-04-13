<?php

namespace Hypertool\Html;

class Article extends HtmlElement {
    public function __construct() {
        parent::__construct('article'); // Set the tag name to 'article'
    }

    // You can add custom methods specific to the <article> element if needed
}

/** Usage example
$article = new Article();
$article->setId('articleID')->setClass('articleClass');
$article->text('This is an example article.');

echo $article->output();
*/
/*
Usage example:

// Using the class directly
$article = new Article('Sample content');
echo $article->output();

// Using the static factory method
$article2 = HtmlElement::article('Sample content');
echo $article2->output();
*/