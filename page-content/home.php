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
<!-- <div class="trim">
<img src="images/header-img.jpg" />
</div> -->

<!-- <div style="margin-top: 1em;background-image: url(images/header-img.jpg);background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
    background-position: center;
    background-size: cover;">
<div style="min-height: 30vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffff;">
<h1>Steephill cycling and stuff and this has quite long text and I would like if it didn't over extend the image but that might be difficult</h1>
    
</div>
</div> -->

<div class="header-container">
    <div class="img-container">
        <h1>Steephill Cycling Coverage</h1>
    </div>
</div>
    <section class="card-container">
        
        <?php
            for($i = 0; $i < 10; $i++) {
                $render_event_card($i);
            }
        ?>
    </section>
</div>