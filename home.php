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

$races = array(
    array("title" => "2018 UCL Road World Championships", "image" => "images/winners.jpg"),
    array("title" => "Stage 20 Post Race Coverage", "image" => "images/320-7R9A6117.jpg")
);

$render_event_card = function($index) use ($races) {
    
    $data = $races[$index % count($races)];
    
    echo <<<eventCard
    \n
    <div class="sizable-card">
    <div class="card bg-dark img-card" tabindex="$index" onclick="onCardClick(event)" onKeyPress="onCardClick(event)" role="button">
        <div class="hide-overspill"><img class="card-img" src="$data[image]" alt="Card image"></div>
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