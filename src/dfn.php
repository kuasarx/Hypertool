<?php
class Dfn extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('dfn');
        $this->content = $content;
    }

    public function setDefinition($definition) {
        $this->attributes['title'] = $definition; // Set the 'title' attribute for the dfn element
        return $this;
    }
}

// Usage example
// $dfn = new Dfn('Abbreviation');
// $dfn->setDefinition('A shortened form of a word.');
// echo $dfn->output();
