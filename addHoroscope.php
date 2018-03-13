<?php
    session_start();
    include "./checkHoroscope.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $month = substr($_POST["bDate"], 2, 2);
        $day = substr($_POST["bDate"], 4, 2);

            
        if(!isset($_SESSION["myHoroscope"])){
            $_SESSION["myHoroscope"] = checkHoroscope($month, $day);
            echo "Add: True</br>";
        }
        else{
            echo "Add: False</br>";
            
        }
    }

?>