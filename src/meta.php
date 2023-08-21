<?php
class Meta extends HtmlElement {
    public function __construct($name, $content) {
        parent::__construct('meta');
        $this->setName($name);
        $this->setContent($content);
    }
}

// Usage example
// $meta = new Meta('description', 'This is a meta description.');
// echo $meta->output();
