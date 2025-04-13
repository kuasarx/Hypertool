<?php
class Map extends HtmlElement {
    public function __construct($name) {
        parent::__construct('map');
        $this->setName($name);
    }

    public function addArea($shape, $coords, $href) {
        $area = $this->add_child('area')
                     ->setShape($shape)
                     ->setCoords($coords)
                     ->setHref($href);
        return $area;
    }
}

// Usage example
// $map = new Map('image-map');
// $map->addArea('circle', '50,50,30', 'page1.html')
//     ->setAlt('Circle Area');
// $map->addArea('rect', '100,100,200,200', 'page2.html')
//     ->setAlt('Rectangle Area');
// 
// echo $map->output();

/*
Usage example:

// Using the class directly
$map = new Map('Sample content');
echo $map->output();

// Using the static factory method
$map2 = HtmlElement::map('Sample content');
echo $map2->output();
*/