<?php
session_start();
$accesslevel = $_SESSION['access_level'];

displayAcessInfo($accesslevel);

function displayAcessInfo($acessinfo){
    if($acessinfo == "standard"){
        echo "You are a standard user";
    }
    elseif($acessinfo == "root"){
        echo "You have site admin access";
    }
}
?>