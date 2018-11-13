<?php
require("header.php");
require("navbar.php");

render_header("Teams Page", "teams");
render_nav();

include("mockData/teams-mock.php");

$render_team = function($index) use ($teams) {

    $team = $teams[$index % count($teams)];

    echo <<<cardTop
    \n
<div class="team-card">
    <div class="card" tabindex="0">
        <img class="card-img-top" src="$team[logo]" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">$team[name]</h5>
        <ul class="list-group list-group-flush">
cardTop;

            foreach($team["members"] as $member) {
                echo <<<member
                <li class="list-group-item">
                <span>$member[id]</span><span>$member[name]</span><span>$member[country]</span>
                </li>
member;
            }

echo    "</ul>
            </div>
        </div>
    </div>\n";

}
?>

    <div class="page-content">
    <section class="card-container center">

        <?php
            for($i = 0; $i < 10; $i++) {
                $render_team($i);
            }
        ?>
    </div>

    </section>
    


    </div>

<?php require("footer.php") ?>