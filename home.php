<?php
require("header.php");
require("navbar.php");

render_header("Home Page");
?>

<script>

    function navToDetails() {
        window.location.href = "details.php";
    }
    function onCardClick(ev) {
        if(ev.keyCode==13){
            navToDetails()
        }
        else if(ev.charCode==32){
            ev.preventDefault();navToDetails();
        } else if (ev.type == "click") {navToDetails();
        }
    }

    

</script>

<?php
render_nav();

include("mockData/home-mock.php");

$render_event_card = function($index) use ($races) {
    
    $data = $races[$index % count($races)];
    
    echo <<<eventCard
    \n
    <div class="sizable-card">
    <div class="card bg-dark img-card" tabindex="0" onclick="onCardClick(event)" onKeyPress="onCardClick(event)" role="button">
        <div class="hide-overspill"><img class="card-img" src="$data[image]" alt="$data[desc]"></div>
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

<?php require("footer.php") ?>