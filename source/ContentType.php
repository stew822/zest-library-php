<?php

abstract class ContentType {
    abstract public function head();
    abstract public function editor( $fieldName ); 
}