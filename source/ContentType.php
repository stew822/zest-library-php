<?php

abstract class ContentType {
    public function head() {
        echo "";
    }
    abstract public function editor( $name, $location ); 
}