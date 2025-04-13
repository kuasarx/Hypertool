<?php
class Mark extends HtmlElement {
    public function __construct() {
        parent::__construct('mark'); // Call the parent constructor with 'mark' as the tag name
    }
}

// Usage example
// $mark = new Mark();
// $mark->setText('Highlighted Text')->setClass('highlight');
// 
// echo $mark->output();

/*
Usage example:

// Using the class directly
$mark = new Mark('Sample content');
echo $mark->output();

// Using the static factory method
$mark2 = HtmlElement::mark('Sample content');
echo $mark2->output();
*/