<?php


class ATR_Public{

    # gestionar propiedades 
    private $theme_name;
    private $version;


    public function __construct($theme_name,$version){

        $this->theme_name = $theme_name;
        $this->version = $version;

    }
}