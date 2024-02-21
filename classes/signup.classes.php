<?php
require_once("../includes/dbh.inc.php");
class Signup extends datbase_Connection{
   public function setUsers($fullname,$username,$email,$address,$phone,$password,$dob){
      $query = 'INSERT INTO users(u_name,u_username,u_email,u_address,u_phone,u_password,u_Dob) VALUES (?,?,?,?,?,?,?)';
      $stmt = $this->connect()->prepare($query);
      $hashed_Password = password_hash($password, PASSWORD_DEFAULT);
     
   if(!$stmt->execute([$fullname, $username, $email,$address,$phone, $hashed_Password,$dob])){
      
        $errorInfo = $stmt->errorInfo();
        header("location:/index.php?error={$errorInfo}");
        exit();
     }

   }
     
     
   public function checkUser($username,$email){
      $query = "SELECT u_username FROM users WHERE u_username=? OR u_email=?";
      $stmt = $this->connect()->prepare($query);
      if(!$stmt->execute([$username,$email])){
         $errorInfo = $stmt->errorInfo();
         header("location:../index.php?error={$errorInfo}");
      }
      $result = true;
      if($stmt->rowCount() > 0){
          $result = false;
      }
      return $result;
   }
   
 }


?>