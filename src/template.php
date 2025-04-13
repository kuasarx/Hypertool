<?php
class Template extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('template');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$template = new Template('Sample content');
echo $template->output();

// Using the static factory method
$template2 = HtmlElement::template('Sample content');
echo $template2->output();
*/