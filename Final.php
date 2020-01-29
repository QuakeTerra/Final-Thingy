<?php

$username = "Dylan";
$password = "P@ssw0rd";
$database = "G2T";
$server = "localhost";

$connection = new mysqli($server, $username, $password, $database);

$firstname = NULL;
$email = NULL;
$phonenumber = NULL;
$message = NULL;

if (isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
}

if (isset($_POST['email'])){
    $email = $_POST['email'];
}

if (isset($_POST['phonenumber'])){
    $phonenumber = $_POST['phonenumber'];
}

if (isset($_POST['message'])){
    $message = $_POST['message'];
}

if($firstname && $email && $phonenumber && $message) {
    $query = $connection->prepare("INSERT INTO ContactList (firstname, email, phonenumber, message) VALUES (?, ?, ?, ?)");
    $query->bind_param('ssss', $firstname, $email, $phonenumber, $message);
    $query->execute();
    $result = $query->get_result();
}

header('Location:/finalthingy/FinalMainPage.php');


?>