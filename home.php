<?php
require("header.php");
require("navbar.php");

render_header("Home Page");
render_nav();

function render_event_card() {
    echo <<<eventCard
    \n
    <div class="card bg-dark text-white">
        <div class="hide-overspill"><img class="card-img" src="images/winners.jpg" alt="Card image"></div>
        <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>\n
eventCard;
}
?>

    <div class="content">
        <section>

            <section class="card-container">
                
                <?php
                    for($i = 0; $i < 10; $i++) {
                        render_event_card();
                    }
                ?>
            </section>




        </section>

    </div>

<?php require("footer.php") ?>