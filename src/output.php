<?php
class Output extends HtmlElement {
    public function __construct() {
        parent::__construct('output');
    }
    // ... add other methods as needed
}
// Usage example
// $output = new Output();
// $output->setName('result')
//        ->setFor('inputElement')
//        ->setValue('Result: ')
//        ->setClass('output-style');
// 
// echo $output->output();

/*
Usage example:

// Using the class directly
$output = new Output('Sample content');
echo $output->output();

// Using the static factory method
$output2 = HtmlElement::output('Sample content');
echo $output2->output();
*/