<?php
class Nav extends HtmlElement {
    public function __construct() {
        parent::__construct('nav');
    }
}

// Usage example
// $nav = new Nav();
// $nav->setId('main-nav')->setClass('navigation');
// 
// echo $nav->output();
