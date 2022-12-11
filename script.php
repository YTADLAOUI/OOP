<?php
require_once ('conix.php');
require_once ('class.php');

if(isset($_POST["sign"])){save();}

function save(){
    $id     = "";
    $email  =$_POST["email"];
    $psw    =$_POST["password"];
    $address=$_POST["address"];
    $city   =$_POST["city"];
    $state  =$_POST["state"];
    $zip    =$_POST["zip"];
    // var_dump($email);
    // var_dump($psw);
    // var_dump($address);
    // var_dump($city);
    // var_dump($state);
    // var_dump($zip);
}

$sql="SELECT * FROM donne";
$requet= $db->qury($sql);
$user =$requet->fetch();




?>