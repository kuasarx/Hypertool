<?php
class DataList extends HtmlElement {
    public function __construct($id) {
        parent::__construct('datalist');
        $this->setId($id);
    }

    public function addOption($value, $label) {
        $option = $this->add_child('option')->setValue($value)->setLabel($label);
        return $this;
    }
}

// Usage example
// $dataList = new DataList('myDatalist');
// $dataList->addOption('option1', 'Option 1');
// $dataList->addOption('option2', 'Option 2');
// 
// echo $dataList->output();
