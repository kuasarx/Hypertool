<?php
class Param extends HtmlElement {
    public function __construct($name, $value) {
        parent::__construct('param');
        $this->setName($name)->setValue($value);
    }
}

// Usage example
// $param = new Param('movie', 'movie.mp4');
// 
// echo $param->output();