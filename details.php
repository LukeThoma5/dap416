<?php
require("header.php");
require("navbar.php");

render_header("Details Page");
render_nav();
?>

<?php 

  include("./mockData/details-mock.php");

  $render_participant_table = function($index) use ($participants) {

    $data = $participants[$index % count($participants)];

    echo <<<tableRow
    \n
    <tr>
      <td>$data[position]</td>
      <td>$data[country]</td>
      <td>$data[name]</td>
      <td>$data[time]</td>
    </tr>
    \n
tableRow;
  };

  $render_participant_card = function($index) use ($participants) {

    $data = $participants[$index % count($participants)];

    echo <<<card
    \n
    <div class="table-card">
        <div class="card" tabindex="$index">
          <dl class="inline">
            <dt>Position</dt>
            <dd>$data[position]</dd>

            <dt>Country</dt>
            <dd>$data[country]</dd>

            <dt>Name</dt>
            <dd>$data[name]</dd>

            <dt>Time</dt>
            <dd>$data[time]</dd>
          </dl>
        </div>
      </div>
    \n
card;
  };
?>

<div class="page-content">

  <section class="responsive-table">
    <table class="table table-bordered table-hover">
      <caption>List of Participants</caption>
      <thead>
        <tr>
          <th scope="col">Position</th>
          <th scope="col">Country</th>
          <th scope="col">Name</th>
          <th scope="col">Time</th>
        </tr>
      </thead>
      <tbody>
      <?php
          for($i = 0; $i < 10; $i++) {
              $render_participant_table($i);
          }
      ?>
    </table>

    <div class="table-cards">
      <?php
        for($i = 0; $i < 10; $i++) {
            $render_participant_card($i);
        }
      ?>

    </div>

  </section>
</div>

<?php require("footer.php") ?>