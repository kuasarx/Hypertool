<?php
class Dialog extends HtmlElement {
    public function __construct() {
        parent::__construct('dialog'); // Call the parent constructor with the 'dialog' tag name
    }

    public function setOpen($open) {
        $this->attributes['open'] = $open;
        return $this;
    }

    public function setCloseEvent($event) {
        $this->attributes['data-close-event'] = $event;
        return $this;
    }
}

// Usage example
// $dialog = new Dialog();
// $dialog->setId('myDialog')->setOpen(true)->setClass('custom-dialog');
// 
// $dialog->add_child('h2')->text('Dialog Title');
// $dialog->add_child('p')->text('This is the content of the dialog.');
// 
// $dialog->add_child('button')->text('Close')->setCloseEvent('closeDialog');
// 
// echo $dialog->output();
