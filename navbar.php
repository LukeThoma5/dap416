<?php

function render_nav_item($link, $name) {

    $current_indicator = "";
    $class = "nav-item";

    if ($_SERVER['REQUEST_URI'] == $link) {
        $current_indicator = '<span class="sr-only">(current)</span>';
        $class = "nav-item active";
    }

    echo <<<navItem
    <li class="$class">
        <a class="nav-link" href="$link">$name $current_indicator</a>
    </li>

navItem;
}

function render_nav() {
    echo <<<navTop
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php"><img src="images/steephill.svg" alt="Steep hill logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
navTop;

            render_nav_item('home.php', 'Home');
            render_nav_item('calendar.php', 'Calendar'); 
            render_nav_item('teams.php', 'Teams');
        echo <<<navBottom
                </ul>
        </div>
    </nav>
navBottom;

}
?>


