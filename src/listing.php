<?php
class Listing extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('listing');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$listing = new Listing('Sample content');
echo $listing->output();

// Using the static factory method
$listing2 = HtmlElement::listing('Sample content');
echo $listing2->output();
*/