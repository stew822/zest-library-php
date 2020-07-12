<?php

require_once( "source/ContentType.php" );

class Editor extends ContentType {

    public $contentTypes;

    function __construct() {
        $this->contentTypes = [];
        $this->contentTypes[ "Markdown" ] = new ContentTypes\Markdown();
        $this->contentTypes[ "Text" ] = new ContentTypes\Text();
    }

    function head() {
        foreach( $this->contentTypes as $name => $contentType ) {
            $contentType->head();
        }
    }

    function editor( $folderName ) {

    }

}
