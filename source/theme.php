<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>stew822</title>
    <!-- load jquery v 3.5.1 -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
    <?php $editor->head(); ?>

    <!-- load custom css and javascript -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <div id="focused">
		<div id="nav">
			<a href="pages.html"><- pages</a>
		</div>
		<div style="clear:both;"></div>
		<div>
			<input type="text" class="field" id="title" />
			<input type="date" class="field" id="date" />
		</div>
		<div style="clear:both;"></div>
		
	</div>
  </body>
</html>