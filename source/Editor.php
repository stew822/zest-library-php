<?php

require_once( "ContentType.php" );
require_once( "ContentTypes/Item.php" );
require_once( "ContentTypes/Collection.php" );
require_once( "ContentTypes/Markdown.php" );
require_once( "ContentTypes/Text.php" );
require_once( "ContentTypes/Date.php" );

class Editor extends ContentType {

    public $contentTypes;

    function __construct() {
        $this->contentTypes = [];
        $this->contentTypes[ "item" ] = new ContentTypes\Item();
        $this->contentTypes[ "collection" ] = new ContentTypes\Collection();
        $this->contentTypes[ "markdown" ] = new ContentTypes\Markdown();
        $this->contentTypes[ "text" ] = new ContentTypes\Text();
        $this->contentTypes[ "date" ] = new ContentTypes\Date();
    }

    function head() {
        foreach( $this->contentTypes as $name => $contentType ) {
            $contentType->head();
        }
    }

    function editor( $location, $type ) {
        if( isset($this->contentTypes[$type] ) ) {
            $name = basename( $location );
            $this->contentTypes[$type]->editor( $name, $location );
        }
        else {
            echo "content type not recognised @ " . $location;
        }
    }

}
