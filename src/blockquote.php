<?php
class Blockquote extends HtmlElement {
    public function __construct() {
        parent::__construct('blockquote'); // Call the parent class constructor with the 'blockquote' tag
    }

    public function setCite($cite) {
        $this->attributes['cite'] = $cite; // Set the 'cite' attribute for the blockquote element
        return $this;
    }
}

// Usage example
// $blockquote = new Blockquote();
// $blockquote->setCite('https://example.com')->text('This is a quote.');
// echo $blockquote->output();

/*
Usage example:

// Using the class directly
$blockquote = new Blockquote('Sample content');
echo $blockquote->output();

// Using the static factory method
$blockquote2 = HtmlElement::blockquote('Sample content');
echo $blockquote2->output();
*/