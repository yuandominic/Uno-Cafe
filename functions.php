<?php
session_start();


function redirect_to($location){

    header("Location: ".$location);
    die();
}

function userOnly(){
if ($_SERVER["REQUEST_URI"] === "/~yuan/UNOCAFE/cart.php") {
    if (!isset($_SESSION["user"])) {
        redirect_to("index.php");
    }
}
}
