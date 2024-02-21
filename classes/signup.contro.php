<?php
class Signupcontro extends  Signup{
    private $fullname;
    private $username;
    private $email;
    private $address;
    
    private $phone;

    private $password;
    private $Cpassword;
    
    private $dob;
    public function __construct($fullname,$username,$email,$address,$phone,$password,$Cpassword,$dob){
        $this->fullname = $fullname;
        $this->username = $username;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;  
        $this->password = $password;
        $this->Cpassword = $Cpassword;
        $this->dob = $dob;
    }

    public function signupUser(){
      if($this->emptyInput()==false){
        header("location:../index.php?error=emptyinput");
         exit();
      }
      if($this->invalidUsername()==false){
        header("location:../index.php?error=invalidusername");
        exit();
      }
      if($this->invalidEmail()==false){
        header("location:../index.php?error=invalidEmail");
        exit();
      }
      if($this->passwordMatch()==false){
        header("location:index.php?error=password doesn't match");
        exit();
      }
      if($this->usernameCheck()==false){
        header("location:index.php?error=username taken");
        exit();
      }
      $this->setUsers($this->fullname,$this->username,$this->email,$this->address,$this->phone,$this->password,$this->dob);
    }
    private function emptyInput(){
        $result = true;
        if(empty($this->fullname)|| empty($this->username) || empty($this->email) || empty($this->address) 

        || empty($this->phone)|| empty($this->password) || empty($this->Cpassword) || empty($this->dob)){
           $result = false;
        }
        return $result;
    }

    private function invalidUsername(){
        $result = true;
        $pattern = '/^[a-zA-Z0-9_]{5,}$/';
        if(!preg_match($pattern, $this->username)){
            $result = false;
        }
        return $result;
    }
    
    private function invalidEmail(){
         $result = true;
         if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
    }
   
    return $result;

}

 private function passwordMatch(){
    $result = true;
    if($this->password != $this->Cpassword){
        $result = false;
    }
 
    return $result;
 }

 private function usernameCheck(){
    $result = true;
    if(!$this->checkUser($this->username,$this->email)){
        $result = false;
    }
  
    return $result;
 }
}

?>