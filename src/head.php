<?php
<?php
class Head extends HtmlElement {
    public function __construct() {
        parent::__construct('head');
    }
}

// Usage example
// $Head = new Head();
// $Head->add_child('title', 'My Title')
//      ->add_child('meta-name', 'meta');
// $Head->meta-name->setName('description')->setContent('Description');
/*
Usage example:

// Using the class directly
$head = new Head('Sample content');
echo $head->output();

// Using the static factory method
$head2 = HtmlElement::head('Sample content');
echo $head2->output();
*/