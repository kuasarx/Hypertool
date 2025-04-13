<?php
class Command extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('command');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$command = new Command('Sample content');
echo $command->output();

// Using the static factory method
$command2 = HtmlElement::command('Sample content');
echo $command2->output();
*/