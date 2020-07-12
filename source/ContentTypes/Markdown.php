<?php

namespace ContentTypes;

require_once( "source/ContentType.php" );

class Markdown extends \ContentType {
    public function head() {
        ?>
        <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
        <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css">
        <?php
    }

    public function editor( $fieldName ) {

        # this bit of code literally just removes a linting error
        if( !isset($fieldName) ) { $fieldName = "defaultFieldName"; }

        ?>
        <textarea class="field" id="<?php echo $fieldName; ?>"></textarea>
		<script>
		var easyMDE = new EasyMDE({
			element: $('#<?php echo $fieldName; ?>')[0],
			uploadImage: true,
			imageUploadEndpoint: "save-image.php"
		});
		</script>
        <?php
    }
}
