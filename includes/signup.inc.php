<?php

 require_once('dbh.inc.php');
 
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $Cpassword = $_POST['confirmpassword'];
    $dob = $_POST['dateOfBirth'];


    //Instantiate signupcontro class
     include "../classes/signup.classes.php";
     include "../classes/signup.contro.php";
     $Signup = new Signupcontro($fullname,$username,$email,$address,$phone,$password,$Cpassword,$dob);

     $Signup->signupUser();
    //Running error handles user signup


   //Grabing data
  header("location:../index.php?success");
  exit();
}

?>