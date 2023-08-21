<?php
class Del extends HtmlElement {
    public function __construct($cite = '', $datetime = '') {
        parent::__construct('del');
        $this->setDelCite($cite);
        $this->setDelDatetime($datetime);
    }

    public function setDelCite($cite) {
        $this->attributes['cite'] = $cite;
        return $this;
    }

    public function setDelDatetime($datetime) {
        $this->attributes['datetime'] = $datetime;
        return $this;
    }
}

// Usage example
// $deletedText = new Del('https://example.com/some-page', '2023-08-18T12:00:00Z');
// $deletedText->text('This content has been deleted.');
// 
// echo $deletedText->output();