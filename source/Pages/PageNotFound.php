<?php

namespace Pages;

require_once( "Page.php" );

class PageNotFound extends \Page {
    public function title() {
        ?>Page not found<?php
    }

    public function content() {
        ?>
        Sorry, the page you requested does not exist.
        <?php
    }
}
