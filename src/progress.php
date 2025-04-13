<?php
class Progress extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('progress');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$progress = new Progress('Sample content');
echo $progress->output();

// Using the static factory method
$progress2 = HtmlElement::progress('Sample content');
echo $progress2->output();
*/