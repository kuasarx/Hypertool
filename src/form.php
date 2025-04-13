<?php
class Form extends HtmlElement {
    public function __construct() {
        parent::__construct('form'); // Call the parent constructor with 'form' as the tag name
    }

    // Add more methods specific to forms as needed
}

// Usage example
// $form = new Form();
// $form->setAction('/submit.php')->setMethod('post')->setEnctype('multipart/form-data')->setTarget('_blank');
// 
// echo $form->output();

/*
Usage example:

// Using the class directly
$form = new Form('Sample content');
echo $form->output();

// Using the static factory method
$form2 = HtmlElement::form('Sample content');
echo $form2->output();
*/