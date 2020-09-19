<?php
require 'header.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="container" style="margin-top:30px;">
<?php
if(isset($_SESSION['uid']))
{
    echo '<h1>Wilkommen '.$_SESSION['username'].'</h1>';
}
else
{
    echo '

    <form action="db/login_inc.php" method="post">
      <div class="form-group">
        <label for="Benutzername">Benutzername</label>
        <input type="text" class="form-control" placeholder="Gebe deinen Benutzernamen ein" id="username" name="benutzername" required>
      </div>
      <div class="form-group">
        <label for="pwd">Passwort:</label>
        <input type="password" class="form-control" placeholder="Gebe dein Passwort ein" id="pwd" name="passwort"required>
      </div>
      <!--
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
      -->
      <button type="submit" class="btn btn-primary" name="loginButton" style="margin-bottom:10px;">Einloggen</button>
    </form>';


    if(isset($_SESSION["alert"]))
    {
        echo $_SESSION["alert"];
    }

}

?>

</div>












<?php
require 'footer.php';
?>
    


