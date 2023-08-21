<?php
class Optgroup extends HtmlElement {
    public function __construct() {
        parent::__construct('optgroup');
    }

    public function addChild($identifier, $value, $text) {
        $this->add_child($identifier, 'option')
            ->setValue($value)
            ->text($text);
        return $this;
    }
}

// Usage example
// $optgroup = new Optgroup('Fruits');
// $optgroup->addChild('apple', 'Apple')->setClass('fruit');
// $optgroup->addChild('banana', 'Banana')->setClass('fruit');
// $optgroup->addChild('orange', 'Orange')->setClass('fruit');
// 
// echo $optgroup->output();
