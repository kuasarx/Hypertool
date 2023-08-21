<?php
// TODO: This is just a placeholder for now.
class HtmlPicture extends HtmlElement {
    public function __construct() {
        parent::__construct('picture');
    }

    public function addSource($src, $media = null) {
        $source = $this->add_child('source')->setSrc($src);
        
        if ($media !== null) {
            $source->setMedia($media);
        }

        return $this;
    }

    public function addImage($src, $alt = '') {
        $img = $this->add_child('img');
        $img->setSrc($src);
        $img->setAlt($alt);
        
        return $this;
    }
}

// Usage example
$picture = new HtmlPicture();
$picture
    ->addSource('image.webp', '(min-width: 1024px)')
    ->addSource('image.jpg', '(max-width: 1023px)')
    ->addImage('fallback.jpg', 'Alt Text');

echo $picture->output();
