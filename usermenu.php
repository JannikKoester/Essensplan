<?php
require 'header.php';

?>


<div class="container" style="text-align:center;">
<script>
function redirect(site) {
  location.replace(site)
}
</script>
<?php
if(isset($_SESSION['uid']))
{
    echo '<h1>Wilkommen '.$_SESSION['username'].'</h1>';
}
?>

        <div class="col text-center">
        
        <button onclick="redirect('gerichte/Trainingsplan.php')" type="button" class="btn btn-default btn-lg" style="margin-right:20px; background-color:green;">Trainingsplan von <?php echo $_SESSION['username']; ?></button>
        <button onclick="redirect('gerichte/essensplan.php')" type="button" class="btn btn-default btn-lg" style="background-color:red;">Essensplan von <?php echo $_SESSION['username']; ?></button>
        <br>
        <button onclick="redirect('gerichte/essensplan.php')" type="button" class="btn btn-default btn-lg" style="margin-right:20px; background-color:green;"name="trainingsplanbearbeiten">Trainingsplan bearbeiten</button>
        <button onclick="redirect('gerichte/essensplan.php')" type="button" class="btn btn-default btn-lg" style="background-color:red;"name="essensplanbearbeiten">Essensplan bearbeiten</button>
        <br>
        <button onclick="redirect('gerichte/Trainingsplanerstellen.php')" type="button" class="btn btn-default btn-lg" style="margin-right:20px; background-color:green;"name="trainingsplanerstellen">Trainingsplan erstellen</button>
        <button onclick="redirect('gerichte/gerichterstellen.php')" type="submit" class="btn btn-default btn-lg" style="background-color:red;" name="gerichterstellen">Gericht erstellen</button>
        <br>
        
    </div>
     </div>

<style>
button {
    color: black !important;
    
    font-size:32px !important;
    width:250px;
    height:250px;
    margin-top:20px;
}
button:hover {
    background-color:yellow !important;
    font-size:38px !important;
}
</style>
<?php
require 'footer.php';
?>