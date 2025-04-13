<?php
class Base extends HtmlElement {
    public function __construct($href = null, $target = null) {
        parent::__construct('base');
        if ($href !== null) {
            $this->setHref($href);
        }
        if ($target !== null) {
            $this->setTarget($target);
        }
    }

    public function setHref($href) {
        $this->attributes['href'] = $href; // Set the 'href' attribute for the base element
        return $this;
    }

    public function setTarget($target) {
        $this->attributes['target'] = $target; // Set the 'target' attribute for the base element
        return $this;
    }
}

/**

Usage example
$baseElement = new Base('https://www.example.com', '_blank');
echo $baseElement->output();

 */
/*
Usage example:

// Using the class directly
$base = new Base('Sample content');
echo $base->output();

// Using the static factory method
$base2 = HtmlElement::base('Sample content');
echo $base2->output();
*/