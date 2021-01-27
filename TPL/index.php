<?php 

require_once("vendor/autoload.php");

use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
    //"debug"         => true, // set to false to improve the speed
);

Tpl::configure( $config );

$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Obi Wan Kenoby" );

$tpl->assign( "version", PHP_VERSION );

// draw the template
$tpl->draw( "index" );

?>