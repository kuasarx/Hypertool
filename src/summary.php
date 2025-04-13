<?php
class Summary extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('summary');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$summary = new Summary('Sample content');
echo $summary->output();

// Using the static factory method
$summary2 = HtmlElement::summary('Sample content');
echo $summary2->output();
*/