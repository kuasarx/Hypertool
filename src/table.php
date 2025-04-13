<?php
class Table extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('table');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$table = new Table('Sample content');
echo $table->output();

// Using the static factory method
$table2 = HtmlElement::table('Sample content');
echo $table2->output();
*/