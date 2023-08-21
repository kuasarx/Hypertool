<?php
class Code extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('code');
        $this->content = $content;
    }

    public function language($language) {
        $this->attributes['class'] = "language-$language";
        return $this;
    }
}

// Usage example
// $code = new Code('echo "Hello, World!";');
// $code->language('php');
// 
// echo $code->output();
