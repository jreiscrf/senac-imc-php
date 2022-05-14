<?php

    function calcImc($imcValue){
        $faixaIMC = array(
            "18.5" => "Magreza",
            "24.9" => "Saudável",
            "29.9" => "Sobrepeso",
            "34.9" => "Obesidade Grau I",
            "39.9" => "Obesidade Grau II",
            "40.0" => "Obesidade Grau III"
        );

        foreach($faixaIMC as $key => $ranking){
           
            if($key < 40.0){
                if($imcValue <= $key){
                    echo PHP_EOL."Atenção, seu IMC é ".number_format($imcValue, 2, '.', '').", e você está classificado com "."$ranking".'.';
                    break;
                }
            }else{ 
                echo PHP_EOL."Atenção, seu IMC é ".number_format($imcValue, 2, '.', '').", e você está classificado com "."$ranking".'.';
            }
        }
    }

    if(isset($_POST["imcValue"])){
        $imcValue = (float) $_POST["imcValue"];
        calcImc($imcValue);
    }

?>