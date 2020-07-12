<?php

abstract class Page {
    abstract public function title();
    public function head() {
        echo "";
    }
    public function showInNav() {
        return false;
    }
    abstract public function content(); 
}