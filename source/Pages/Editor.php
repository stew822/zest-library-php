<?php

namespace Pages;

require_once( "Page.php" );
require_once( "Editor.php" );

class Editor extends \Page {
    public function title() {
        ?>Editor<?php
    }

    public function head() {
        $editor = new \Editor();
        $editor->head();
    }

    public function content() {

        echo "<p style='color:green;'>on editing page</p>";
        if( isset($_GET['item']) ) { 
            $item = $_GET['item'];
        }
        else {
            $item = ".";
        }

        var_dump( $item );

        $item = realpath( $item );

        $filename = basename( $item );

        var_dump( $filename );

        $fragments = explode( ".", $filename );
        if( isset( $fragments[1] ) ) {
            $type = $fragments[1];

            $editor = new \Editor();
            $editor->editor( $item, $type );
        }
        else {
            // if the type of the item is not set, then it must be an item in a collection
            $editor = new \Editor();
            $editor->editor( $item, "item" );
        }
        
        
    }
}
