<?php
    session_start();

     if ($_SERVER['REQUEST_METHOD'] == 'GET'){

        if (isset($_SESSION["myHoroscope"])){
            echo $_SESSION["myHoroscope"];

            echo "<style>   #updateHoroscope{display: inline-block;}
                            #deleteHoroscope{display: inline-block;}
                            #saveHoroscope{display: none;}</style>";

        }
        else{
            echo "<style>   #updateHoroscope{display: none;}
                            #deleteHoroscope{display: none;}
                            #saveHoroscope{display: inline-block;}</style>";
        }

    }
    




    ?>