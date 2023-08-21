<?php
class Details extends HtmlElement {
    public function __construct() {
        parent::__construct('details'); // Set the tag name to 'details'
    }

    public function setSummary($summary) {
        $summaryElement = $this->add_child('summary', 'summary');
        $summaryElement->text($summary);
        return $this;
    }

    // Add more methods specific to the <details> element if needed
}

// Usage example
// $details = new Details();
// $details->setId('detailsID')->setClass('detailsClass');
// $details->setSummary('Click me to toggle details');
// $details->text('This is the content of the details.');
// 
// echo $details->output();
