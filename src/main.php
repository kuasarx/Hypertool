<?php
class Main extends HtmlElement {
    public function __construct() {
        parent::__construct('main'); // Set the tag name to 'main'
    }
}

// Usage example
// $main = new Main();
// $main->setId('main-content')->setClass('main-container')->setText('Welcome to our website');
// 
// echo $main->output();
