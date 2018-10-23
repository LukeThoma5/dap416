<?php
require("header.php");
require("navbar.php");

render_header("Home Page");
render_nav();

include("mockData/calendar-mock.php");
// Modfified from https://codepen.io/chrisdpratt/pen/OOybam/;
?>

    <div class="page-content">

    <div class="container-fluid">
  <header>
    <div class="row d-none d-sm-flex p-1 bg-dark text-white">
        <?php

        foreach($days_of_week as $dow) {
            echo '<h5 class="col-sm p-1 text-center">' . $dow . '</h5>';
        }
        ?>
    </div>
  </header>
  <div class="row border border-right-0 border-bottom-0">
    <?php
    $dow = 0;
    foreach($days as $day) {
        $hidden_class = $day->getClass();
        $date = $day->day;

        echo <<<Day
        <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate $hidden_class">
      <h5 class="row align-items-center">
        <span class="date col-1">$date</span>
        <small class="col d-sm-none text-center text-muted">$days_of_week[$dow]</small>
        <span class="col-1"></span>
      </h5>
Day;
        $day->getEvents();
    echo "</div>";

$dow = ($dow + 1) % 7;

if ($dow == 0) {
    echo '<div class="w-100"></div>';
}

}

  

    ?>
</div>
        

    </div>

<?php require("footer.php") ?>