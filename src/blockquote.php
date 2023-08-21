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
