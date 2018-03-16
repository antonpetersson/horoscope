<?php
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        if(isset($_SESSION["myHoroscope"])){
            unset($_SESSION["myHoroscope"]);
        }
    }
        ?>