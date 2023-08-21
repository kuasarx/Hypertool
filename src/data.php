<?php
class Data extends HtmlElement {
    public function __construct($value) {
        parent::__construct('data'); // Call the parent constructor with 'data' as the tag name
        $this->setValue($value); // Set the 'value' attribute using the parent class method
    }
}

// Usage example
// $dataElement = new Data('123'); // Create a <data> element with the value '123'
// echo $dataElement->output(); // Output the generated <data> element
