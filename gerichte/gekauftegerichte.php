<?php
require '../db/settings.php';
session_start();
if(isset($_POST['gcreategericht']))
{
    $gerichtname = $_POST['Gerichtname'];
    $kalorien = $_POST['Kalorien'];
    $kohlenhydrate = $_POST['Kohlenhydrate'];
    $fett = $_POST['Fett'];
    $eiweiss = $_POST['Eiweiss'];

    //Guck, ob das Gericht schon vorhanden ist
    if(checkUnique($conn,"gerichte","gericht",$gerichtname))
    {
    //Speichere das Gericht ab.
          $sql = "INSERT INTO gerichte (gericht, gericht_kalorien, gericht_kohlenhydrate,gericht_fett,gericht_eiweiss)
      VALUES ('$gerichtname', '$kalorien', '$kohlenhydrate', '$fett', '$eiweiss')";

      if ($conn->query($sql) === TRUE) {
        $_SESSION['alertgericht'] = '<div class="alert alert-success">
        Gericht wurde erfolgreich hinzugefügt.
        </div>';
        header("location: gerichterstellen.php?result=gerichterstellt");
      }
    }
    else{
      $_SESSION['alertgericht'] = '<div class="alert alert-danger">
      Gericht gibt es schon.
    </div>';
    header("location: gerichterstellen.php?result=gibtesschon");
 

    }
    


}