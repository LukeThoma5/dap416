<?php
require_once("header.php");
require_once("navbar.php");

$render_header("Teams Page", "teams");
render_nav();

include("mockData/teams-mock.php");

include("page-content/teams.php");

require_once("footer.php") ?>