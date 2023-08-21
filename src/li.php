<?php
class Li extends HtmlElement {
    public function __construct() {
        parent::__construct('li'); // Call the parent class constructor with 'li' as the tag name
    }
}

// Usage example
// $li = new Li();
// $li->setText('List Item')->setClass('list-item');
// 
// echo $li->output(); // Output: <li class="list-item">List Item</li>
