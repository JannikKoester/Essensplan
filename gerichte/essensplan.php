<?php
require '../header.php';
require '../db/settings.php';
?>
<div class="container">
  <div class="jumbotron">
    <h1>Dein Essensplann</h1>
    <p>Auflistung der Gerichte</p>
  </div>
  <?php
listMealsWithButton($conn);
?>


</div>