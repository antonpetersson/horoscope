<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $month = substr($_POST["bDate"], 2, 2);
    $day = substr($_POST["bDate"], 4, 2);

   

   //FM=FirstMonth. LM=LastMonth, FD=FirstDay, LD=LastDay
        $horoscopes = array(
            "ariesFM"       => 3,   "ariesLM"         => 4,  "ariesFD"         => 21, "ariesLD"        => 20,
            "taurusFM"      => 4,   "taurusLM"        => 5,  "taurusFD"        => 21, "taurusLD"       => 21,
            "geminiFM"      => 5,   "geminiLM"        => 6,  "geminiFD"        => 22, "geminiLD"       => 21,
            "cancerFM"      => 6,   "cancerLM"        => 7,  "cancerFD"        => 22, "cancerLD"       => 22,
            "leoFM"         => 7,   "leoLM"           => 8,  "leoFD"           => 23, "leoLD"          => 23,
            "virgoFM"       => 8,   "virgoLM"         => 9,  "virgoFD"         => 24, "virgoLD"        => 22,
            "libraFM"       => 9,   "libraLM"         => 10, "libraFD"         => 23, "libraLD"        => 23,
            "scorpioFM"     => 10,  "scorpioLM"       => 11, "scorpioFD"       => 24, "scorpioLD"      => 22,
            "sagittariusFM" => 11,  "sagittariusLM"   => 12, "sagittariusFD"   => 23, "sagittariusLD"  => 21,
            "capricornFM"   => 12,  "capricornLM"     => 1,  "capricornFD"     => 22, "capricornLD"    => 20,
            "aquariusFM"    => 1,   "aquariusLM"      => 2,  "aquariusFD"      => 21, "aquariusLD"     => 18,
            "piscesFM"      => 2,   "piscesLM"        => 3,  "piscesFD"        => 19, "piscesLD"       => 20,
        );
        if($month == $horoscopes["ariesFM"] && $day >= $horoscopes["ariesFD"] || $month == $horoscopes["ariesLM"] && $day <= $horoscopes["ariesLD"]){          
            $myHoroscope = "Vädur";
        }
        if($month == $horoscopes["taurusFM"] && $day >= $horoscopes["taurusFD"] || $month == $horoscopes["taurusLM"] && $day <= $horoscopes["taurusLD"]){          
            $myHoroscope = "Oxe";
        }
        if($month == $horoscopes["geminiFM"] && $day >= $horoscopes["geminiFD"] || $month == $horoscopes["geminiLM"] && $day <= $horoscopes["geminiLD"]){          
            $myHoroscope = "Tvilling";
        }
        if($month == $horoscopes["cancerFM"] && $day >= $horoscopes["cancerFD"] || $month == $horoscopes["cancerLM"] && $day <= $horoscopes["cancerLD"]){          
            $myHoroscope = "Kräfta";
        }
        if($month == $horoscopes["leoFM"] && $day >= $horoscopes["leoFD"] || $month == $horoscopes["leoLM"] && $day <= $horoscopes["leoLD"]){          
            $myHoroscope = "Lejon";
        }
        if($month == $horoscopes["virgoFM"] && $day >= $horoscopes["virgoFD"] || $month == $horoscopes["virgoLM"] && $day <= $horoscopes["virgoLD"]){          
            $myHoroscope = "Jungfru";
        }
        if($month == $horoscopes["libraFM"] && $day >= $horoscopes["libraFD"] || $month == $horoscopes["libraLM"] && $day <= $horoscopes["libraLD"]){          
            $myHoroscope = "Våg";
        }
        if($month == $horoscopes["scorpioFM"] && $day >= $horoscopes["scorpioFD"] || $month == $horoscopes["scorpioLM"] && $day <= $horoscopes["scorpioLD"]){          
            $myHoroscope = "Skorpion";
        }
        if($month == $horoscopes["sagittariusFM"] && $day >= $horoscopes["sagittariusFD"] || $month == $horoscopes["sagittariusLM"] && $day <= $horoscopes["sagittariusLD"]){          
            $myHoroscope = "Skytt";
        }
        if($month == $horoscopes["capricornFM"] && $day >= $horoscopes["capricornFD"] || $month == $horoscopes["capricornLM"] && $day <= $horoscopes["capricornLD"]){          
            $myHoroscope = "Stenbock";
        }
        if($month == $horoscopes["aquariusFM"] && $day >= $horoscopes["aquariusFD"] || $month == $horoscopes["aquariusLM"] && $day <= $horoscopes["aquariusLD"]){          
            $myHoroscope = "Vattuman";
        }
        if($month == $horoscopes["piscesFM"] && $day >= $horoscopes["piscesFD"] || $month == $horoscopes["piscesLM"] && $day <= $horoscopes["piscesLD"]){          
            $myHoroscope = "Fisk";
        }
            
        if(!isset($_SESSION["myHoroscope"])){
            $_SESSION["myHoroscope"] = $myHoroscope;
            echo "Add: True</br>";
        }
        else{
            echo "Add: False</br>";
        }
    }

?>