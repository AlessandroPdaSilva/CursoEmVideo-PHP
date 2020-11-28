<?php

require_once "Lobo.php";

class Cachorro extends Lobo{

    function emitirSom()
    {
        echo "<p> au! au! au!</p>";
    }

    function reagirFrase($frase){
        if($frase == "bom garoto" || $frase == "toma comida"){
            echo "<p> abanar o rabo </p>";
        }else if($frase == " vai embora " || $frase == " Sai daqui , sai "){
            echo "<p> latir </p>";
        }else {
            echo " <p>sem reação</p>";
        }

    }

    function reagirHora($hora,$min){
        if($hora < 12){
            echo "<p> abanar o rabo </p> ";
        }else if($hora > 18){
            echo " <p> Ignorar </p>";
        }else {
            echo "<p> abanar o rabo e latir </p> ";
        }

    }

    function reagirDono($dono){
        if($dono){
            echo "<p> abanar o rabo </p> ";
        }else {
            echo " <p> latir ou rosnar </p>";
        }

    }

    function reagirIdadePeso($idade,$peso){
        if($idade < 5){
            // cachorro jovem
            if($peso < 10){
                echo "<p> abanar </p>";// magro
            }else{
                echo "<p> latir </p>";// gordo
            }

        }else{
            // cachorro velho
            if($peso < 10){
                echo "<p> rosnar </p>";// magro
            }else{
                echo "<p> ignorar </p>";// gordo
            }
        }

    }

}