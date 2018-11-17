<?php

include("mockData/home-mock.php");

$render_event_card = function($index) use ($races) {
    
    $data = $races[$index % count($races)];
    
    echo <<<eventCard
    \n
    <div class="sizable-card">
    <div class="card bg-dark img-card" tabindex="0" onclick="onCardClick(event)" onKeyPress="onCardClick(event)" role="button">
        <div class="hide-overspill"><img class="card-img" src="images/$data[image]-500.jpg" alt="$data[desc]"></div>
        <div class="card-img-overlay">
            <h5 class="card-title">$data[title]</h5>
        </div>
    </div>    
    </div>
    \n
eventCard;
}
?>
<div class="page-content">
    <section>

        <section class="card-container">
            
            <?php
                for($i = 0; $i < 10; $i++) {
                    $render_event_card($i);
                }
            ?>
        </section>

    </section>

</div>