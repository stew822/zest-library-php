<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

set_include_path( '/workspace/zest-cms/source' );

require_once( "Pages/Editor.php" );
require_once( "Pages/PageNotFound.php");
if( isset($_GET['page']) ) { 
    $slug = $_GET['page'];
}
else {
    $slug = "editor";
}

if( !isset($_GET['item']) ) { 
    $_GET['item'] = "../example.collection";
}

$pages = [];
$pages["editor"] = new Pages\Editor();

if( isset($pages[$slug] ) ) {
    $page = $pages[$slug];
}
else {
    $page = new Pages\PageNotFound();
}

include( "theme/theme.php" );


