<?php
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASSWORD","");
define("DBNAME","test");
  $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;
    try {
        $db=new PDO($dsn,DBUSER,DBPASSWORD);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    } catch (PDOException $th) {
        die("Erreur:".$th->getMessage());
    }
?>