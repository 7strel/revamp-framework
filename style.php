<?php
require "scss.inc.php";
$scss = new scssc();

$scss->setFormatter("scss_formatter_compressed");
$server = new scss_server("scss", "css/css-cache", $scss);
$server->serve( );
?>