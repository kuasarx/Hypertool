<?php
class Mark extends HtmlElement {
    public function __construct() {
        parent::__construct('mark'); // Call the parent constructor with 'mark' as the tag name
    }
}

// Usage example
// $mark = new Mark();
// $mark->setText('Highlighted Text')->setClass('highlight');
// 
// echo $mark->output();
