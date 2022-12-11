<?php
class Test{
        private $id;
        private $email;
        private $address;
        private $city;
        private $state;
        private $zip;
        private $psw;

    function __construct($id,$email,$address,$city,$state,$zip,$psw)
    {
        $this->id=$id;
        $this->email=$email;
        $this->address=$address;
        $this->city=$city;
        $this->state=$state;
        $this->zip=$zip;
        $this->psw=$psw;
    }
 function getId(){
    return $this->id;
 }
 function getEmail(){
    return $this->email;
 }
 function getAddress(){
    return $this->address;
 }
 function getCity(){
    return $this->city;
 }
 function getState(){
    return $this->state;
 }
 function getZip(){
    return $this->zip;
 }
 function getPsw(){
    return $this->psw;
 }

}



?>