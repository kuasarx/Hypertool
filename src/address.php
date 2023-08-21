<?php
class Address extends HtmlElement {
    public function __construct() {
        parent::__construct('address');
    }

    public function setName($name) {
        $this->text($name); // Set the text content of the <address> element
        return $this;
    }

    public function setAddress($address) {
        $this->text($address); // Set the text content of the <address> element
        return $this;
    }
}

/**  Usage example
$address = new Address();
$address->setName('John Doe')->setAddress('123 Main Street, City, Country');

echo $address->output();
*/