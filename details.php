<?php
require("header.php");
require("navbar.php");

render_header("Details Page", "details");
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

  <div class="accordion" id="highlight-accordion">
  <div class="card">
    <div class="card-header" id="highlight-heading">
      <h5 class="mb-0">
        <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-film fa-3x"></i><span>Highlights</span> 
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="highlight-heading" data-parent="#highlight-accordion">
      <div class="card-body">
      <table class="table table-bordered table-hover">
      <caption>List of Highlights</caption>
      <tbody>
        <tr>
          <td class="table-thumb"><img src="images/thumbnail.jpg"></td>
          <td><a href="https://www.youtube.com/watch?v=N-ZO2ILecoE">Last KM of Stage 21 (04:14)</a></td>
      </tr>
      <tr>
          <td class="table-thumb"><img src="images/thumbnail.jpg"></td>
          <td><a href="https://www.youtube.com/watch?v=N-ZO2ILecoE">Backstage Pass - Stage 21</a></td>
      </tr>
    </table>
      </div>
    </div>
  </div>
</div>
</div>

<?php require("footer.php") ?>