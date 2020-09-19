<?php
//Datenbankverbindung

$servername = "localhost";
$username = "root";
$password = "";
$datenbank = 'essensplaner';

// Create connection
$conn = new mysqli($servername, $username, $password,$datenbank);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function checkUnique($conn,$table,$gesuchteSpalte,$gesuchterText)
{
  $sql = "SELECT * FROM $table where $gesuchteSpalte='$gesuchterText'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row

 return false;
  }
  else{
    return true;
  }
}


function listMeals($conn)
{
  $sql = "SELECT * FROM gerichte";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    echo '<ul class="list-group" style="text-align:left;">';
    while($row = $result->fetch_assoc()) {
      echo '<li class="list-group-item"><h3>'.$row['gericht'].'</h3> Kalorien:'.$row['gericht_kalorien'].' kcal Kohlnehydrate: '.$row['gericht_kohlenhydrate'].'g Fett: '.$row['gericht_fett'].'g Eiweiß: '.$row['gericht_eiweiss'].'g </li>';

  

    }
    echo '</ul>';
  }
  else{
    return true;
  }
}

function listMealsWithButton($conn)
{
  $sql = "SELECT * FROM gerichte";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    echo '<form action="addToUser.php" method="post">';
    echo '<ul class="list-group" style="text-align:left;">';
    while($row = $result->fetch_assoc()) {
      echo '<li class="list-group-item"><h3>'.$row['gericht'].'</h3> Kalorien:'.$row['gericht_kalorien'].'
       kcal Kohlnehydrate: '.$row['gericht_kohlenhydrate'].'g Fett: '.$row['gericht_fett'].'g Eiweiß: '.$row['gericht_eiweiss'].'g 
       <div class="custom-control custom-switch">
       <input type="checkbox" class="custom-control-input" id="'.$row['unique_id'].'" name="'.$row['unique_id'].'" unchecked>
       <label class="custom-control-label" for="'.$row['unique_id'].'">hinzufügen</label>
     </div>
      </li>';

  

    }
    echo '</ul>';
    echo '      <button type="submit" class="btn btn-primary" name="AddBtn" style="margin-bottom:10px;">Auswählen</button>';
    echo '</form>';
  }
  else{
    return true;
  }
}


?>