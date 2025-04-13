<?php
class Menuitem extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('menuitem');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$menuitem = new Menuitem('Sample content');
echo $menuitem->output();

// Using the static factory method
$menuitem2 = HtmlElement::menuitem('Sample content');
echo $menuitem2->output();
*/