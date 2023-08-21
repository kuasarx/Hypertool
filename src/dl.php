<?php
class Dl extends HtmlElement {
    public function __construct() {
        parent::__construct('dl');
    }

    public function addDefinition($dt, $dd) {
        $dtElement = $this->add_child(null, 'dt')->text($dt);
        $ddElement = $this->add_child(null, 'dd')->text($dd);
        
        return $this; // Return $this to allow chaining
    }
}

// Usage example
// $dl = new Dl();
// $dl->addDefinition('Term 1', 'Definition 1')
//    ->addDefinition('Term 2', 'Definition 2')
//    ->addDefinition('Term 3', 'Definition 3');
// 
// echo $dl->output();
