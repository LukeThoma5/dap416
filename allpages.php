<?php
require_once("header.php");
require_once("navbar.php");

render_header_top('Testing page that contains the entire site');
?>
<link rel="stylesheet" href="styles/home.css" type="text/css" />
<link rel="stylesheet" href="styles/teams.css" type="text/css" />
<link rel="stylesheet" href="styles/details.css" type="text/css" />
<link rel="stylesheet" href="styles/calendar.css" type="text/css" />
<?php
include("page-content/home-script.php");
render_header_bottom("All Pages Test Page");
render_nav();

include("page-content/home.php");
include("page-content/teams.php");
include("page-content/details.php");
include("page-content/calendar.php");

require_once("footer.php") ?>