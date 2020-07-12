<?php

namespace ContentTypes;

require_once( "ContentType.php" );

class Item extends \ContentType {

    public function editor( $name, $location ) {

        # this bit of code literally just removes a linting error
        if( !isset($location) ) { $location = "defaultFieldName"; }

        // get all of the fields in this item
        $location = $item;
        $fields = scandir( $location );

        var_dump($location);

        foreach( $fields as $field ) {

        }
        die( "item not found or it doesn't include the type in the name" );

        $items = scandir( $location );
        var_dump($items);
        ?>
        Browsing content of item: <?php echo $name; ?>

        <table>
            <?php
            foreach($items as $item ) {
                if( $item == "." || $item == ".." ) continue;

                $item_location = $location."/".$item;

                echo "<tr><td>";
                echo "<a href='?page=editor&item=".urlencode($item_location)."'>$item</a>";
                echo "</td></tr>";
            }
            ?>
        </table>
        <?php
    }
}
