<?php

namespace ContentTypes;

require_once( "source/ContentType.php" );

class Date extends \ContentType {
    public function head() {
        // does nothing -- no need to print any head for this one
    }

    public function editor( $fieldName ) {

        # this bit of code literally just removes a linting error
        if( !isset($fieldName) ) { $fieldName = "defaultFieldName"; }

        ?>
        <input type="text" class="field" id="<?php echo $fieldName; ?>"></input>
        <?php
    }
}
