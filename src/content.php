<?php
class Content extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('content');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$content = new Content('Sample content');
echo $content->output();

// Using the static factory method
$content2 = HtmlElement::content('Sample content');
echo $content2->output();
*/