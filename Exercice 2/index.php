<?php

if(isset($_GET["age"])){
    echo $_GET["age"];
}
else{
    echo "le paramètre âge n'existe pas.";
}