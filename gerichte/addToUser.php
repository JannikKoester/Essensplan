<?php
require '../db/settings.php';
session_start();

if(isset($_POST['AddBtn']))
{
    $list = array();
    for ($i=0; $i < 100; $i++) { 
        if(isset($_POST[$i]))
        {
            $list[] = $i; 
        }
    }
    // Alle ausgeben
    print_r($list);

}