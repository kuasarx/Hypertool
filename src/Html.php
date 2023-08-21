<?php
class HtmlElement {
    private $tagName;
    private $attributes = [];
    private $standaloneAttributes = [];
    private $children = [];
    private $childMap = [];
    private $content = '';

    public function __construct($tagName) {
        $this->tagName = $tagName;
    }

    // Attributes

        // Global attributes
        // accesskey
        public function setAccessKey($accesskey) {
            $this->attributes['accesskey'] = $accesskey; // Set the 'accesskey' attribute for the element
            return $this;
        }
        public function setClass($class) {
            $this->attributes['class'] = $class;
            return $this;
        }
        // contenteditable
        public function setContenteditable($contenteditable) {
            $this->attributes['contenteditable'] = $contenteditable; // Set the 'contenteditable' attribute for the element
            return $this;
        }
        // data
        public function setData($data) {
            $this->attributes['data'] = $data; // Set the 'data' attribute for the element
            return $this;
        }
        // data-*
        public function setDataAttribute($dataAttribute, $value) {
            $this->attributes["data-$dataAttribute"] = $value; // Set the 'data-*' attribute for the element
            return $this;
        }
        // dir
        public function setDir($dir) {
            $this->attributes['dir'] = $dir; // Set the 'dir' attribute for the element
            return $this;
        }
        // draggable    
        public function setDraggable($draggable) {
            $this->standaloneAttributes['draggable'] = $draggable; // Set the 'draggable' attribute for the element
            return $this;
        }
        // hidden
        public function setHidden($hidden) {
            $this->attributes['hidden'] = $hidden; // Set the 'hidden' attribute for the element
            return $this;
        }
        // id
        public function setId($id) {
            $this->attributes['id'] = $id;
            return $this;
        }
        // lang
        public function setLang($lang) {
            $this->attributes['lang'] = $lang; // Set the 'lang' attribute for the element
            return $this;
        }
        // spellcheck
        public function setSpellcheck($spellcheck) {
            $this->attributes['spellcheck'] = $spellcheck; // Set the 'spellcheck' attribute for the element
            return $this;
        }
        // style
        public function setStyle($style) {
            $this->attributes['style'] = $style; // Set the 'style' attribute for the element
            return $this;
        }
        // tabindex
        public function setTabindex($tabindex) {
            $this->attributes['tabindex'] = $tabindex; // Set the 'tabindex' attribute for the element
            return $this;
        }
        // title
        public function setTitle($title) {
            $this->attributes['title'] = $title; // Set the 'title' attribute for the element
            return $this;
        }
        // translate
        public function setTranslate($translate) {
            $this->attributes['translate'] = $translate; // Set the 'translate' attribute for the element
            return $this;
        }
        // META
        // charset
        public function setCharset($charset) {
            $this->standaloneAttributes['charset'] = $charset; // Set the 'charset' attribute for the element
            return $this;
        }
        // content
        public function setContent($content) {
            $this->attributes['content'] = $content; // Set the 'content' attribute for the element
            return $this;
        }
        // http-equiv
        public function setHttpEquiv($httpEquiv) {
            $this->standaloneAttributes['http-equiv'] = $httpEquiv; // Set the 'http-equiv' attribute for the element
            return $this;
        }
        // name
        public function setName($name) {
            $this->standaloneAttributes['name'] = $name; // Set the 'name' attribute for the element
            return $this;
        }



        // src
        public function setSrc($src) {
            $this->attributes['src'] = $src; // Set the 'src' attribute for the element
            return $this;
        }
        // alt
        public function setAlt($alt) {
            $this->attributes['alt'] = $alt; // Set the 'alt' attribute for the element
            return $this;
        }
        //href
        public function setHref($href) {
            $this->attributes['href'] = $href; // Set the 'href' attribute for the element
            return $this;
        }
        //hreflang
        public function setHreflang($hreflang) {
            $this->attributes['hreflang'] = $hreflang; // Set the 'hreflang' attribute for the element
            return $this;
        }
        // width
        public function setWidth($width) {
            $this->attributes['width'] = $width; // Set the 'width' attribute for the element
            return $this;
        }
        // height
        public function setHeight($height) {
            $this->attributes['height'] = $height; // Set the 'height' attribute for the element
            return $this;
        }

        // Html specific attributes
        // <a></a> element
        public function setTarget($target) {
            $this->attributes['target'] = $target; // Set the 'target' attribute for the element
            return $this;
        }

        public function setRel($rel) {
            $this->attributes['rel'] = $rel; // Set the 'rel' attribute for the <a> element
            return $this;
        }
        // <form></form> element
        public function setAction($action) {
            $this->attributes['action'] = $action; // Set the 'action' attribute for the form
            return $this;
        }
        // formaction
        public function setFormaction($formaction) {
            $this->attributes['formaction'] = $formaction; // Set the 'formaction' attribute for the form
            return $this;
        }

        public function setMethod($method) {
            $this->attributes['method'] = $method; // Set the 'method' attribute for the form
            return $this;
        }

        public function setEnctype($enctype) {
            $this->attributes['enctype'] = $enctype; // Set the 'enctype' attribute for the form
            return $this;
        }

        public function setAutocomplete($autocomplete) {
            $this->attributes['autocomplete'] = $autocomplete; // Set the 'autocomplete' attribute for the <form> element
            return $this;
        }

        // Inputs
        public function setPlaceholder($placeholder) {
            $this->attributes['placeholder'] = $placeholder; // Set the 'placeholder' attribute for the input
            return $this;
        }

        public function setType($type) {
            $this->attributes['type'] = $type; // Set the 'type' attribute for the input element
            return $this;
        }

        public function setValue($value) {
            $this->attributes['value'] = $value; // Set the 'value' attribute for the input element
            return $this;
        }

        public function setFor($for) {
            $this->attributes['for'] = $for; // Set the 'for' attribute for the label element
            return $this;
        }

        public function setRows($rows) {
            $this->attributes['rows'] = $rows; // Set the 'rows' attribute for the textarea element
            return $this;
        }
        // rowspan
        public function setRowspan($rowspan) {
            $this->attributes['rowspan'] = $rowspan; // Set the 'rowspan' attribute for the label element
            return $this;
        }
        // colspan
        public function setColspan($colspan) {
            $this->attributes['colspan'] = $colspan; // Set the 'colspan' attribute for the label element
            return $this;
        }
        // span
        public function setSpan($span) {
            $this->attributes['span'] = $span; // Set the 'span' attribute for the label element
            return $this;
        }

        public function setCols($cols) {
            $this->attributes['cols'] = $cols; // Set the 'cols' attribute for the textarea element
            return $this;
        }

        public function setLabel($label) {
            $this->attributes['label'] = $label; // Set the 'label' attribute for the output element
            return $this;
        }

        public function setMin($min) {
            $this->attributes['min'] = $min; // Set the 'min' attribute for the input element
            return $this;
        }

        public function setMax($max) {
            $this->attributes['max'] = $max; // Set the 'max' attribute for the input element
            return $this;
        }

        public function setStep($step) {
            $this->attributes['step'] = $step; // Set the 'step' attribute for the input element
            return $this;
        }

        public function setPattern($pattern) {
            $this->attributes['pattern'] = $pattern; // Set the 'pattern' attribute for the input element
            return $this;
        }

        public function setAccept($accept) {
            $this->attributes['accept'] = $accept; // Set the 'accept' attribute for the input element
            return $this;
        }

        public function setSize($size) {
            $this->attributes['size'] = $size; // Set the 'size' attribute for the input element
            return $this;
        }
        // sizes
        public function setSizes($sizes) {
            $this->attributes['sizes'] = $sizes; // Set the 'sizes' attribute for the input element
            return $this;
        }
        // maxlength
        public function setMaxlength($maxlength) {
            $this->attributes['maxlength'] = $maxlength; // Set the 'maxlength' attribute for the input element
            return $this;
        }

        public function setForm($form) {
            $this->attributes['form'] = $form; // Set the 'form' attribute for the element
            return $this;
        }
        // list
        public function setList($list) {
            $this->attributes['list'] = $list; // Set the 'list' attribute for the element
            return $this;
        }
        // dirname
        public function setDirname($dirname) {
            $this->attributes['dirname'] = $dirname; // Set the 'dirname' attribute for the element
            return $this;
        }
        // cite
        public function setCite($cite) {
            $this->attributes['cite'] = $cite; // Set the 'cite' attribute for the element
            return $this;
        }
            
        // coords
        public function setCoords($coords) {
            $this->attributes['coords'] = $coords; // Set the 'coords' attribute for the element
            return $this;
        }
        
        // datetime
        public function setDatetime($datetime) {
            $this->attributes['datetime'] = $datetime; // Set the 'datetime' attribute for the element
            return $this;
        }
        // headers
        public function setHeaders($headers) {
            $this->attributes['headers'] = $headers; // Set the 'headers' attribute for the element
            return $this;
        }
        // high
        public function setHigh($high) {
            $this->attributes['high'] = $high; // Set the 'high' attribute for the element
            return $this;
        }
        // low 
        public function setLow($low) {
            $this->attributes['low'] = $low; // Set the 'low' attribute for the element
            return $this;
        }
        // kind
        public function setKind($kind) {
            $this->attributes['kind'] = $kind; // Set the 'kind' attribute for the element
            return $this;
        }
        // media
        public function setMedia($media) {
            $this->attributes['media'] = $media; // Set the 'media' attribute for the element
            return $this;
        }
        // sandbox
        public function setSandbox($sandbox) {
            $this->attributes['sandbox'] = $sandbox; // Set the 'sandbox' attribute for the element
            return $this;
        }
        // scope
        public function setScope($scope) {
            $this->attributes['scope'] = $scope; // Set the 'scope' attribute for the element
            return $this;
        }
        // shape
        public function setShape($shape) {
            $this->attributes['shape'] = $shape; // Set the 'shape' attribute for the element
            return $this;
        }
        //srcdoc
        public function setSrcdoc($srcdoc) {
            $this->attributes['srcdoc'] = $srcdoc; // Set the 'srcdoc' attribute for the element
            return $this;
        }
        // srclang
        public function setSrclang($srclang) {
            $this->attributes['srclang'] = $srclang; // Set the 'srclang' attribute for the element
            return $this;
        }
        // srcset
        public function setSrcset($srcset) {
            $this->attributes['srcset'] = $srcset; // Set the 'srcset' attribute for the element
            return $this;
        }
        // start
        public function setStart($start) {
            $this->attributes['start'] = $start; // Set the 'start' attribute for the element
            return $this;
        }
        // usemap
        public function setUsemap($usemap) {
            $this->attributes['usemap'] = $usemap; // Set the 'usemap' attribute for the element
            return $this;
        }
        // wrap
        public function setWrap($wrap) {
            $this->attributes['wrap'] = $wrap; // Set the 'wrap' attribute for the element
            return $this;
        }


        

        // Standalone attributes
        public function setAutofocus($autofocus) {
            $this->standaloneAttributes['autofocus'] = $autofocus;
            return $this;
        }
        // async
        public function setAsync($async) {
            $this->standaloneAttributes['async'] = $async;
            return $this;
        }
        // autoplay
        public function setAutoplay($autoplay) {
            $this->standaloneAttributes['autoplay'] = $autoplay;
            return $this;
        }
        // checked 
        public function setChecked($checked) {
            $this->standaloneAttributes['checked'] = $checked;
            return $this;
        }
        // disabled
        public function setDisabled($disabled) {
            $this->standaloneAttributes['disabled'] = $disabled;
            return $this;
        }
        // readonly
        public function setReadonly($readonly) {
            $this->standaloneAttributes['readonly'] = $readonly;
            return $this;
        }
        // required
        public function setRequired($required) {
            $this->standaloneAttributes['required'] = $required;
            return $this;
        }
        // reversed
        public function setReversed($reversed) {
            $this->standaloneAttributes['reversed'] = $reversed;
            return $this;
        }
        // controls
        public function setControls($controls) {
            $this->standaloneAttributes['controls'] = $controls;
            return $this;
        }
        // loop
        public function setLoop($loop) {
            $this->standaloneAttributes['loop'] = $loop;
            return $this;
        }
        // default
        public function setDefault($default) {
            $this->standaloneAttributes['default'] = $default;
            return $this;
        }
        //defer
        public function setDefer($defer) {
            $this->standaloneAttributes['defer'] = $defer;
            return $this;
        }
        // download
        public function setDownload($download) {
            $this->standaloneAttributes['download'] = $download;
            return $this;
        }
        // ismap
        public function setIsmap($ismap) {
            $this->standaloneAttributes['ismap'] = $ismap;
            return $this;
        }
        // multiple
        public function setMultiple($multiple) {
            $this->standaloneAttributes['multiple'] = $multiple;
            return $this;
        }
        // novalidate
        public function setNovalidate($novalidate) {
            $this->standaloneAttributes['novalidate'] = $novalidate;
            return $this;
        }
        // muted
        public function setMuted($muted) {
            $this->standaloneAttributes['muted'] = $muted;
            return $this;
        }

        // Event attributes
        // onabort
        public function setOnabort($onabort) {
            $this->attributes['onabort'] = $onabort;
            return $this;
        }
        // onafterprint
        public function setOnafterprint($onafterprint) {
            $this->attributes['onafterprint'] = $onafterprint;
            return $this;
        }
        // onbeforeprint
        public function setOnbeforeprint($onbeforeprint) {
            $this->attributes['onbeforeprint'] = $onbeforeprint;
            return $this;
        }
        // onbeforeunload
        public function setOnbeforeunload($onbeforeunload) {
            $this->attributes['onbeforeunload'] = $onbeforeunload;
            return $this;
        }
        // onblur
        public function setOnblur($onblur) {
            $this->attributes['onblur'] = $onblur;
            return $this;
        }
        // oncanplay
        public function setOncanplay($oncanplay) {
            $this->attributes['oncanplay'] = $oncanplay;
            return $this;
        }
        // oncanplaythrough
        public function setOncanplaythrough($oncanplaythrough) {
            $this->attributes['oncanplaythrough'] = $oncanplaythrough;
            return $this;
        }
        // onchange
        public function setOnchange($onchange) {
            $this->attributes['onchange'] = $onchange;
            return $this;
        }
        // onclick
        public function setOnclick($onclick) {
            $this->attributes['onclick'] = $onclick;
            return $this;
        }
        // oncontextmenu
        public function setOncontextmenu($oncontextmenu) {
            $this->attributes['oncontextmenu'] = $oncontextmenu;
            return $this;
        }
        // oncopy
        public function setOncopy($oncopy) {
            $this->attributes['oncopy'] = $oncopy;
            return $this;
        }
        // oncuechange
        public function setOncuechange($oncuechange) {
            $this->attributes['oncuechange'] = $oncuechange;
            return $this;
        }
        // oncut
        public function setOncut($oncut) {
            $this->attributes['oncut'] = $oncut;
            return $this;
        }
        // ondblclick
        public function setOndblclick($ondblclick) {
            $this->attributes['ondblclick'] = $ondblclick;
            return $this;
        }
        // ondrag
        public function setOndrag($ondrag) {
            $this->attributes['ondrag'] = $ondrag;
            return $this;
        }
        // ondragend
        public function setOndragend($ondragend) {
            $this->attributes['ondragend'] = $ondragend;
            return $this;
        }
        // ondragenter
        public function setOndragenter($ondragenter) {
            $this->attributes['ondragenter'] = $ondragenter;
            return $this;
        }
        // ondragleave
        public function setOndragleave($ondragleave) {
            $this->attributes['ondragleave'] = $ondragleave;
            return $this;
        }
        // ondragover
        public function setOndragover($ondragover) {
            $this->attributes['ondragover'] = $ondragover;
            return $this;
        }
        // ondragstart
        public function setOndragstart($ondragstart) {
            $this->attributes['ondragstart'] = $ondragstart;
            return $this;
        }
        // ondro
        public function setOndrop($ondrop) {
            $this->attributes['ondrop'] = $ondrop;
            return $this;
        }
        // ondurationchange
        public function setOndurationchange($ondurationchange) {
            $this->attributes['ondurationchange'] = $ondurationchange;
            return $this;
        }
        // onemptied
        public function setOnemptied($onemptied) {
            $this->attributes['onemptied'] = $onemptied;
            return $this;
        }
        // onended
        public function setOnended($onended) {
            $this->attributes['onended'] = $onended;
            return $this;
        }
        // onerror
        public function setOnerror($onerror) {
            $this->attributes['onerror'] = $onerror;
            return $this;
        }
        // onfocus
        public function setOnfocus($onfocus) {
            $this->attributes['onfocus'] = $onfocus;
            return $this;
        }
        // onhashchange
        public function setOnhashchange($onhashchange) {
            $this->attributes['onhashchange'] = $onhashchange;
            return $this;
        }
        // oninput
        public function setOninput($oninput) {
            $this->attributes['oninput'] = $oninput;
            return $this;
        }
        // oninvalid
        public function setOninvalid($oninvalid) {
            $this->attributes['oninvalid'] = $oninvalid;
            return $this;
        }
        // onkeydown
        public function setOnkeydown($onkeydown) {
            $this->attributes['onkeydown'] = $onkeydown;
            return $this;
        }
        // onkeypress
        public function setOnkeypress($onkeypress) {
            $this->attributes['onkeypress'] = $onkeypress;
            return $this;
        }
        // onkeyup
        public function setOnkeyup($onkeyup) {
            $this->attributes['onkeyup'] = $onkeyup;
            return $this;
        }
        // onload
        public function setOnload($onload) {
            $this->attributes['onload'] = $onload;
            return $this;
        }
        // onloadeddata
        public function setOnloadeddata($onloadeddata) {
            $this->attributes['onloadeddata'] = $onloadeddata;
            return $this;
        }
        // onloadedmetadata
        public function setOnloadedmetadata($onloadedmetadata) {
            $this->attributes['onloadedmetadata'] = $onloadedmetadata;
            return $this;
        }
        // onloadstart
        public function setOnloadstart($onloadstart) {
            $this->attributes['onloadstart'] = $onloadstart;
            return $this;
        }
        // onmousedown
        public function setOnmousedown($onmousedown) {
            $this->attributes['onmousedown'] = $onmousedown;
            return $this;
        }
        // onmousemove
        public function setOnmousemove($onmousemove) {
            $this->attributes['onmousemove'] = $onmousemove;
            return $this;
        }
        // onmouseout
        public function setOnmouseout($onmouseout) {
            $this->attributes['onmouseout'] = $onmouseout;
            return $this;
        }
        // onmouseover
        public function setOnmouseover($onmouseover) {
            $this->attributes['onmouseover'] = $onmouseover;
            return $this;
        }
        // onmouseup
        public function setOnmouseup($onmouseup) {
            $this->attributes['onmouseup'] = $onmouseup;
            return $this;
        }
        // onmousewheel
        public function setOnmousewheel($onmousewheel) {
            $this->attributes['onmousewheel'] = $onmousewheel;
            return $this;
        }
        // onoffline
        public function setOnoffline($onoffline) {
            $this->attributes['onoffline'] = $onoffline;
            return $this;
        }
        // ononline
        public function setOnonline($ononline) {
            $this->attributes['ononline'] = $ononline;
            return $this;
        }
        // onpagehide
        public function setOnpagehide($onpagehide) {
            $this->attributes['onpagehide'] = $onpagehide;
            return $this;
        }
        // onpageshow
        public function setOnpageshow($onpageshow) {
            $this->attributes['onpageshow'] = $onpageshow;
            return $this;
        }
        // onpaste 
        public function setOnpaste($onpaste) {
            $this->attributes['onpaste'] = $onpaste;
            return $this;
        }
        // onpause
        public function setOnpause($onpause) {
            $this->attributes['onpause'] = $onpause;
            return $this;
        }
        // onplay
        public function setOnplay($onplay) {
            $this->attributes['onplay'] = $onplay;
            return $this;
        }
        // onplaying
        public function setOnplaying($onplaying) {
            $this->attributes['onplaying'] = $onplaying;
            return $this;
        }
        // onpopstate
        public function setOnpopstate($onpopstate) {
            $this->attributes['onpopstate'] = $onpopstate;
            return $this;
        }
        // onprogress
        public function setOnprogress($onprogress) {
            $this->attributes['onprogress'] = $onprogress;
            return $this;
        }
        // onratechange
        public function setOnratechange($onratechange) {
            $this->attributes['onratechange'] = $onratechange;
            return $this;
        }
        // onreset
        public function setOnreset($onreset) {
            $this->attributes['onreset'] = $onreset;
            return $this;
        }
        // onresize
        public function setOnresize($onresize) {
            $this->attributes['onresize'] = $onresize;
            return $this;
        }
        // onscroll
        public function setOnscroll($onscroll) {
            $this->attributes['onscroll'] = $onscroll;
            return $this;
        }
        // onsearch
        public function setOnsearch($onsearch) {
            $this->attributes['onsearch'] = $onsearch;
            return $this;
        }
        // onseeked
        public function setOnseeked($onseeked) {
            $this->attributes['onseeked'] = $onseeked;
            return $this;
        }
        // onseeking
        public function setOnseeking($onseeking) {
            $this->attributes['onseeking'] = $onseeking;
            return $this;
        }
        // onselect
        public function setOnselect($onselect) {
            $this->attributes['onselect'] = $onselect;
            return $this;
        }
        // onstalled
        public function setOnstalled($onstalled) {
            $this->attributes['onstalled'] = $onstalled;
            return $this;
        }
        // onsubmit
        public function setOnsubmit($onsubmit) {
            $this->attributes['onsubmit'] = $onsubmit;
            return $this;
        }
        // onsuspend
        public function setOnsuspend($onsuspend) {
            $this->attributes['onsuspend'] = $onsuspend;
            return $this;
        }
        // ontimeupdate
        public function setOntimeupdate($ontimeupdate) {
            $this->attributes['ontimeupdate'] = $ontimeupdate;
            return $this;
        }
        // ontoggle
        public function setOntoggle($ontoggle) {
            $this->attributes['ontoggle'] = $ontoggle;
            return $this;
        }
        // onunload
        public function setOnunload($onunload) {
            $this->attributes['onunload'] = $onunload;
            return $this;
        }
        // onvolumechange
        public function setOnvolumechange($onvolumechange) {
            $this->attributes['onvolumechange'] = $onvolumechange;
            return $this;
        }
        // onwaiting
        public function setOnwaiting($onwaiting) {
            $this->attributes['onwaiting'] = $onwaiting;
            return $this;
        }
        // onwheel
        public function setOnwheel($onwheel) {
            $this->attributes['onwheel'] = $onwheel;
            return $this;
        }
        // end event attributes

        // open
        public function setOpen($open) {
            $this->attributes['open'] = $open;
            return $this;
        }
        // optimum
        public function setOptimum($optimum) {
            $this->attributes['optimum'] = $optimum;
            return $this;
        }
        // poster
        public function setPoster($poster) {
            $this->attributes['poster'] = $poster;
            return $this;
        }
        // preload
        public function setPreload($preload) {
            $this->attributes['preload'] = $preload;
            return $this;
        }










    
    public function add_child($identifier = null, $tagName) {
        // if $identifier is null, count the number of children and add +1
        if ($identifier === null) {
            $identifier = count($this->children);
            $identifier++;
        }
        $child = new HtmlElement($tagName);
        $this->children[] = $child;
        $this->childMap[$identifier] = $child;
        return $child;
    }

    public function __get($identifier) {
        if (isset($this->childMap[$identifier])) {
            return $this->childMap[$identifier];
        }
        return null;
    }

    public function text($content) {
        $this->content = $content;
        return $this;
    }

    public function setCaption($caption) {
        $this->add_child('figcaption', 'figcaption')
        ->text($caption);
        return $this;
    }

    public function setImage($src, $alt = '') {
        $this->add_child('image', 'img')
            ->setSrc($src)
            ->setAlt($alt);
        return $this;
    }

    public function output() {
        $html = "<{$this->tagName}";

        foreach ($this->attributes as $attribute => $value) {
            $html .= " $attribute=\"$value\"";
        }
        foreach ($this->standaloneAttributes as $standaloneAttribute => $value) {
            $html .= " ".$standaloneAttribute;
        }

        if (empty($this->children) && isset($this->content)) {
            $html .= ">" . htmlspecialchars($this->content) . "</{$this->tagName}>";
        } elseif (!empty($this->children)) {
            $html .= ">";

            foreach ($this->children as $child) {
                $html .= $child->output();
            }

            $html .= "</{$this->tagName}>";
        } else {
            $html .= "></{$this->tagName}>";
        }

        return $html;
    }
}




// Usage example
$html = new HtmlElement('div');
$html->setId('someID')->setClass('some class');

$html->add_child('header', 'h1')->text('Header')->setClass('Title'); // Add child element

$html->header->setClass('UpdatedTitle'); // Modify child's class property

echo $html->output();
