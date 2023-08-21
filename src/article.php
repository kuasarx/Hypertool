<?php
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