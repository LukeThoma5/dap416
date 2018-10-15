<?php
require("header.php");
require("navbar.php");

render_header("Details Page");
render_nav();
?>

    <div class="page-content">
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
      <tr>
        <td>1st</td>
        <td>GBR</td>
        <td>YATES, Simon</td>
        <td>82:05:58</td>
      </tr>
      <tr>
        <td>2nd</td>
        <td>ESP</td>
        <td>MAS NICOLAU, Enric</td>
        <td>82:07:44 (+1:46)</td>
      </tr>
    </tbody>
  </table>

  <div class="table-cards">
    <div class="card" tabindex="0">
        <dl class="inline">
          <dt>Position</dt>
          <dd>1st</dd>

          <dt>Country</dt>
          <dd>GBR</dd>

          <dt>Country</dt>
          <dd>GBR</dd>

          <dt>Country</dt>
          <dd>GBR</dd>
        </dl>
      </div>

      <div class="card" tabindex="0">
        <dl class="inline">
          <dt>Position</dt>
          <dd>1st</dd>

          <dt>Country</dt>
          <dd>GBR</dd>

          <dt>Country</dt>
          <dd>GBR</dd>

          <dt>Country</dt>
          <dd>GBR</dd>
        </dl>
      </div>

      <div class="card" tabindex="0">
        <dl class="inline">
          <dt>Position</dt>
          <dd>1st</dd>

          <dt>Country</dt>
          <dd>GBRasdasdasdasdasdasdasdasdasdasdasdasdasdasd</dd>

          <dt>Country</dt>
          <dd>GBR</dd>

          <dt>Country</dt>
          <dd>GBR</dd>
        </dl>
      </div>
  </div>

  

    </div>

<?php require("footer.php") ?>