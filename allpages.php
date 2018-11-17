<?php
require_once("header.php");
require_once("navbar.php");

render_header_top();
?>
<link  rel="stylesheet" href="styles/home.css"  defer />
<link  rel="stylesheet" href="styles/teams.css" defer />
<link  rel="stylesheet" href="styles/details.css" defer />
<link  rel="stylesheet" href="styles/calendar.css" defer />
<?php
include("page-content/home-script.php");
render_header_bottom("All Pages Test Page");
render_nav();

include("page-content/home.php");
include("page-content/teams.php");
include("page-content/details.php");
include("page-content/calendar.php");

require_once("footer.php") ?>