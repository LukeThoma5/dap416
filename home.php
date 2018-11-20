<?php
require_once("header.php");
require_once("navbar.php");

render_header_top('Cycling Races Brought to you by Steephill.');
?>
<link rel="stylesheet" href="styles/home.css" />

<?php
include("page-content/home-script.php");
render_header_bottom("Home Page");
render_nav();


include("page-content/home.php");

require_once("footer.php")

?>