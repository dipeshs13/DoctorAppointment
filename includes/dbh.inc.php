<?php

class datbase_Connection
{
//   public function establish(){
//     return $this->connect();
//   }
    protected function connect()
    {

        try {

            $host = 'localhost';
            $dbname = 'appointment';
            $dbusername = 'root';
            $dbpassword = '';
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

// $Connection = new datbase_Connection();
// if($Connection->establish()) {
//     echo "Connection succesfull";
// }
// else{
//     echo "connection not succesfull";
// }
?>