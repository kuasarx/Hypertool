<?php
class Button extends HtmlElement {
    public function __construct($text) {
        parent::__construct('button');
        $this->text($text);
    }

    public function setType($type) {
        $this->attributes['type'] = $type;
        return $this;
    }
    
    public function setDisabled($disabled) {
        $this->attributes['disabled'] = $disabled;
        return $this;
    }
}

// Usage example
// $submitButton = new Button('Submit');
// $submitButton->setId('submitBtn')
//              ->setClass('btn btn-primary')
//              ->setType('submit')
//              ->setDisabled(false);
// 
// echo $submitButton->output();





