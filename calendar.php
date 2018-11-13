<?php
require("header.php");
require("navbar.php");

render_header("Calendar Page", "calendar");
render_nav();

include("mockData/calendar-mock.php");
// Modfified from https://codepen.io/chrisdpratt/pen/OOybam/;
?>

    <div class="page-content">

    <div class="calendar">
        <header>
        <?php

        foreach($days_of_week as $dow) {
            echo '<h5>' . $dow . '</h5>';
        }
        ?>
    </header>
  <div class="day-container">
    <?php
    $dow = 0;
    foreach($days as $day) {
        $hidden_class = $day->getClass();
        $date = $day->day;

        echo <<<Day
        <div class="day $hidden_class">
      <h5>
        <span class="date">$date</span>
        <small>$days_of_week[$dow]</small>
      </h5>
      <hr />
Day;
        $day->getEvents();
    echo "</div>";

$dow = ($dow + 1) % 7;
}

    ?>
</div>
    </div>

        

    </div>

<?php require("footer.php") ?>