<?php

require_once( "ContentTypes/Item.php" );
require_once( "ContentTypes/Collection.php" );
require_once( "ContentTypes/Markdown.php" );
require_once( "ContentTypes/Text.php" );
require_once( "ContentTypes/Date.php" );

class Editor {

    public $contentTypes;

    function __construct() {
        $this->contentTypes = [];
        $this->contentTypes[ "item" ] = new ContentTypes\Item();
        $this->contentTypes[ "collection" ] = new ContentTypes\Collection();
        $this->contentTypes[ "markdown" ] = new ContentTypes\Markdown();
        $this->contentTypes[ "txt" ] = new ContentTypes\Text();
        $this->contentTypes[ "date" ] = new ContentTypes\Date();
    }

    function head() {
        foreach( $this->contentTypes as $name => $contentType ) {
            $contentType->head();
        }
    }

    function editor( $location ) {

        //var_dump( $location );

        $fragments = explode( ".", basename($location) );

        if( isset( $fragments[1] ) ) {
            $type = $fragments[1];

            $this->printFieldEditor( $location, $type );
        }
        else {
            // if the type of the item is not set, then it must be an item in a collection
            $this->printFieldEditor( $location, "item" );
        }
        
    }

    private function printFieldEditor( $location, $type ) {
        if( isset($this->contentTypes[$type] ) ) {
            $name = pathinfo( $location )["filename"];
            $this->contentTypes[$type]->editor( $name, $location );
        }
        else {
            echo "content type not recognised @ " . $location;
        }
    }

}
