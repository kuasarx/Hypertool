<?php
class Img extends HtmlElement {
    public function __construct($src) {
        parent::__construct('img');
        $this->setSrc($src);
    }
    // You can add more methods for other attributes specific to <img> elements
}
// Usage Example
// $img = new Img('image.jpg');
// $img->setAlt('Image Alt Text')->setWidth(300)->setHeight(200);
// 
// echo $img->output();