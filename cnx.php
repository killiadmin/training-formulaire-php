<?php

$user="root";
$mdp="";
$db="training-formulaire-php";
$server="localhost:3307";

$link=mysqli_connect($server, $user, $mdp, $db);

if ($link) {
    echo "Connexion etablie!";
    # code...
} else {
    die(mysqli_connect_error());
}
?>