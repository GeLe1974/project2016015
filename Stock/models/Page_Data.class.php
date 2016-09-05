<?php

class Page_Data {
    public $title = '';
    public $subTitle = '';
    public $content = '';
    public $css = '';
    public $externalCss='';
    public $embeddedStyle = '';
    public $header ='';
    public $navigation ='';
    public $sidebar ='';
    public $footer ='';

    public function addCss($href) {
        // niet .= vergeten want meerdere stijlbladen moeten TOEGEVOEGD worden
        $this->css .= "<link href='$href' rel='stylesheet' >";
    }

}
