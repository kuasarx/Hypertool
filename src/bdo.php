<?php
class Bdo extends HtmlElement {
    public function __construct($dir, $content = '') {
        parent::__construct('bdo');
        $this->attributes['dir'] = $dir;
        $this->content = $content;
    }
}

// Usage example
// $bdo = new Bdo('rtl', 'Text with right-to-left direction');
// echo $bdo->output();
