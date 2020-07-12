<?php

namespace ContentTypes;

require_once( "ContentType.php" );

class Date extends \ContentType {
    public function head() {
        // does nothing -- no need to print any head for this one
    }

    public function editor( $name, $location ) {

        # this bit of code literally just removes a linting error
        if( !isset($name) ) { $name = "defaultFieldName"; }

        ?>
        <input type="date" class="field" id="<?php echo $name; ?>"></input>
        <?php
    }
}
