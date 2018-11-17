<?php
require_once("header.php");
require_once("navbar.php");

$render_header("Calendar Page", "calendar");
render_nav();

include("page-content/calendar.php");

 require_once("footer.php") ?>