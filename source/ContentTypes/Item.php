<?php

namespace ContentTypes;

require_once( "ContentType.php" );
require_once( "Editor.php" );

class Item extends \ContentType {

    public function editor( $name, $location ) {

        // get all of the fields in this item
        $fields = array_diff(scandir( $location ), array('.', '..'));

        $editor = new \Editor();
        foreach( $fields as $field ) {
            $field_location = "$location/$field";
            $editor->editor( $field_location );
        }
        // die( "item not found or it doesn't include the type in the name" );

        ?>
        <button type="button">Add new field to item</button>
        <?php

    }
}
