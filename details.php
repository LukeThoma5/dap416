<?php
require_once("header.php");
require_once("navbar.php");

$render_header("Details Page", "details");
render_nav();

include("page-content/details.php");

require_once("footer.php") 

?>