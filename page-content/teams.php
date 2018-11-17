<?php
include("mockData/teams-mock.php");

$render_team = function($index) use ($teams) {

    $team = $teams[$index % count($teams)];

    echo <<<cardTop
    \n
<div class="team-card">
    <div class="card" tabindex="0">
        <img class="card-img-top" src="$team[logo]" alt="Team Sky Logo" aria-hidden="true">
        <div class="card-body">
        <h5 class="card-title" aria-label="$team[name] information.">$team[name]</h5>
        <ul class="list-group list-group-flush">
cardTop;

            foreach($team["members"] as $member) {
                echo <<<member
                <li class="list-group-item" aria-label="Team Member $member[name]. Position $member[id]. Country is $member[countryLong].">
                <span aria-label="1st">$member[id]</span><span aria-label="Name is $member[name]">$member[name]</span><span aria-label="Country is $member[country]">$member[country]</span>
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