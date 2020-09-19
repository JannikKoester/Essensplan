<?php
require '../header.php';
require '../db/settings.php';
?>
<div class="container">
  <div class="jumbotron">
    <h1>Gericht erstellen</h1>
    <p>Erstelle hier dein eigenes Gericht.</p>
  </div>

</div>

<div class="container">
<form action="gekauftegerichte.php" method="post">
      <div class="form-group">
        <label for="Gerichtname">Gerichtname</label>
        <input type="text" class="form-control" placeholder="Gebe deinen Gerichtnamen ein" id="Gerichtname" name="Gerichtname" required>
      </div>
      <div class="form-group">
        <label for="Gerichtname">Kalorien</label>
        <input type="number" class="form-control" placeholder="Gebe deinen Kalorien ein" id="Kalorien" name="Kalorien" required>
      </div>
      <div class="form-group">
        <label for="Gerichtname">Kohlenhydrate</label>
        <input type="number" class="form-control" placeholder="Gebe deine Kohlenhydrate ein" id="Kohlenhydrate" name="Kohlenhydrate" required>
      </div>
      <div class="form-group">
        <label for="Gerichtname">Fett</label>
        <input type="number" class="form-control" placeholder="Gebe deine Fette ein" id="Fett" name="Fett" required>
      </div>
      <div class="form-group">
        <label for="Gerichtname">Eiweiß</label>
        <input type="number" class="form-control" placeholder="Gebe deine Eiweiße ein" id="Eiweiss" name="Eiweiss" required>
      </div>
      <button type="submit" class="btn btn-primary" name="gcreategericht" style="margin-bottom:10px;">Gericht erstellen</button>
    </form>
    <?php
if(isset($_SESSION['alertgericht']))
{
    echo $_SESSION['alertgericht'];
}
?>
        <div class="col text-center">
        <button data-toggle="collapse" data-target="#demo">Vorhandene Gerichte</button>
        <div id="demo" class="collapse">
<?php
listMeals($conn);
?>
</div>
        </div>



</div>

<?php

require '../footer.php';
?>