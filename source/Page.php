<?php

abstract class Page {
    abstract public function title();
    public function head() {
        echo "";
    }
    abstract public function nav();
    abstract public function content(); 
}