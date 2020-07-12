<?php

namespace Pages;

require_once( "Page.php" );
require_once( "Editor.php" );

class Editor extends \Page {
    public function title() {
        ?>Editor<?php
    }

    public function nav() {
        if( isset($_GET['item']) ) { 
            $item = $_GET['item'];
        }
        else {
            $item = ".";
        }

        $back = pathinfo($item)["dirname"];

        $link = "?page=editor&item=".urlencode($back);

        return [
            $link => "&#8592; back to $back"
        ];
    }

    public function head() {
        $editor = new \Editor();
        $editor->head();
    }

    public function content() {

        if( isset($_GET['item']) ) { 
            $item = $_GET['item'];
        }
        else {
            $item = ".";
        }

        //var_dump( $item );

        $location = realpath( $item );

        $name = basename( $location );
        echo "<p style='color:green;'>editing $name</p>";

        $editor = new \Editor();
        $editor->editor( $location );
        
    }
}
