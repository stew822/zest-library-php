<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>zest content editor</title>
    <!-- load jquery v 3.5.1 -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
    <?php $page->head(); ?>

    <!-- load custom css and javascript -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <div id="focused">
		<div id="nav">
            <?php
            foreach( $pages as $key => $value ) {
                if( $page->showInNav() ) {
                    echo "<a href='?page=$key'>";
                    $value->title();
                    echo "</a>";
                }
            }
            ?>
		</div>
		<div id="focused">
            <?php $page->content(); ?>
        </div>
		
	</div>
  </body>
</html>