<?php
class A extends HtmlElement {
    public function __construct($href = '') {
        parent::__construct('a');
        $this->setHref($href);
    }

    public function setHref($href) {
        $this->attributes['href'] = $href; // Set the 'href' attribute for the anchor element
        return $this;
    }
}

// Usage example
// $anchor = new A('https://www.example.com');
// $anchor->setText('Visit Example')->setClass('link-class')->setTarget('_blank');

// echo $anchor->output();
/*
Usage example:

// Using the class directly
$a = new A('Sample content');
echo $a->output();

// Using the static factory method
$a2 = HtmlElement::a('Sample content');
echo $a2->output();
*/