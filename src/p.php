<?php
class P extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('p');
        $this->content = $content;
    }
}

// Usage example
// $paragraph = new P('This is a paragraph.');
// 
// echo $paragraph->output();
