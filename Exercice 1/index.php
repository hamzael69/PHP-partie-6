<?php

if(isset($_GET["lastname"], $_GET["firstname"])){
    echo "Bienvenue " . $_GET["lastname"]. " ". $_GET["firstname"];
}