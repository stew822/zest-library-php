<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

set_include_path( '/workspace/zest-library-php/source' );

class Zest {

    public $location;

    public function __construct( $location ) {
        $this->location = $location;
    }

    function getItems( $subdirectory = "" ) {
        
    }
}
