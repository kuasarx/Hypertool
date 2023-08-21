<?php
class Col extends HtmlElement {
    public function __construct() {
        parent::__construct('col'); // Call parent constructor with the tag name 'col'
    }

    public function setSpan($span) {
        $this->attributes['span'] = $span; // Set the 'span' attribute for the col element
        return $this;
    }
}

// Usage example
// $col = new Col();
// $col->setSpan(2);
// 
// echo $col->output(); // Output the generated <col> element
