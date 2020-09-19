<?php
require 'settings.php';
session_start();

if(isset($_POST['loginButton']))
{
//Kontrolle, ob der Benutzer existiert
$username = $_POST['benutzername'];
$pwd = $_POST['passwort'];

//Speichert die Benutzerdaten in Variablen ab


$sql = "SELECT * FROM users where username='$username' AND password='$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['uid'] = $row['uid'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];

    header("location: ../usermenu.php");
  }
} else {
    $_SESSION['alert'] = '<div class="alert alert-danger">
     Benutzername oder Passwort ist falsch.
  </div>';

  header("location: ../index.php?result=accountdatennichtgefunden");
}
$conn->close();
}
