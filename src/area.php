<?php

class Area extends HtmlElement {
    public function __construct() {
        parent::__construct('area');
    }

    public function setShape($shape) {
        $this->attributes['shape'] = $shape;
        return $this;
    }

    public function setCoords($coords) {
        $this->attributes['coords'] = $coords;
        return $this;
    }

    public function setHref($href) {
        $this->attributes['href'] = $href;
        return $this;
    }

    public function setAlt($alt) {
        $this->attributes['alt'] = $alt;
        return $this;
    }
    
    // ... Add more methods for other <area> attributes
}

/**  Usage example
$area = new Area();
$area->setShape('rect')->setCoords('0,0,100,100')->setHref('https://www.example.com')->setAlt('Image Link');

echo $area->output(); // Output the generated <area> element
*/