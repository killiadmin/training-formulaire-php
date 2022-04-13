<?php

include 'cnx.php';

if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["telephone"]) && isset($_GET["email"]) && isset($_GET["status"])&& isset($_GET["message"])) {
    # code...
    $nom= $_GET["nom"];
    $prenom= $_GET["prenom"];
    $telephone= $_GET["telephone"];
    $email= $_GET["email"];
    $status= $_GET["status"];
    $message= $_GET["message"];

    $req= mysqli_query($link,"insert into users(nom, prenom, telephone, email, status, message) values ('$nom', '$prenom' ,'$telephone' ,'$email' , '$status' , '$message')" );

    if ($req) {
        echo "intertion effectuée";
        # code...
    } else {
        echo "Il y a une erreur d'intertion";
    }
}

?>