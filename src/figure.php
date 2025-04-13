<?php
class Figure extends HtmlElement {
    public function __construct($caption = '') {
        parent::__construct('figure');
        
        $this->setCaption($caption);
    }
}

// Usage example
// $figure = new Figure('A beautiful sunset');
// $figure->setImage('sunset.jpg', 'Sunset over the ocean');
// 
// echo $figure->output();

/*
Usage example:

// Using the class directly
$figure = new Figure('Sample content');
echo $figure->output();

// Using the static factory method
$figure2 = HtmlElement::figure('Sample content');
echo $figure2->output();
*/