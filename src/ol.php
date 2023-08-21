<?php
class Ol extends HtmlElement {
    public function __construct() {
        parent::__construct('ol');
    }

    public function addItem($identifier, $content) {
        $this->add_child($identifier, 'li')->text($content);
        return $this;
    }
}

// Usage example
// $ol = new Ol();
// $ol->addItem('Item-1','Item 1')
//    ->addItem('Item-2','Item 2')
//    ->addItem('Item-3','Item 3');
// 
// echo $ol->output();
