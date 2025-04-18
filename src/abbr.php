<?php

namespace Hypertool\Html;

class Abbr extends HtmlElement {
    public function __construct($title, $text = null) {
        parent::__construct('abbr');
        $this->setTitle($title);
        if ($text !== null) {
            $this->setText($text);
        }
    }

    public function setTitle($title) {
        $this->attributes['title'] = $title; // Set the 'title' attribute for the abbr element
        return $this;
    }

    public function setText($text) {
        $this->content = $text; // Set the content of the abbr element
        return $this;
    }
}

// Usage example
// $abbreviation = new Abbr('HTML', 'Hypertext Markup Language');
// echo $abbreviation->output();

/*
Usage example:

// Using the class directly
$abbr = new Abbr('Sample content');
echo $abbr->output();

// Using the static factory method
$abbr2 = HtmlElement::abbr('Sample content');
echo $abbr2->output();
*/