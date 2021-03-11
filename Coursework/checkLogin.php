<?php
function checkLogin($user){
    if(empty($user)){
        header("Location: index.php");
        session_destroy();
        exit();
    } 
}
?>