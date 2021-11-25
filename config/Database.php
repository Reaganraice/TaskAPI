<?php


$servername = "localhost";
$username = "mamp";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=taskjnb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



// var_dump($servername);









// class Database {

//     // Database params
//     private $host = 'localhost';
//     private $db_name = 'taskjnb';
//     private $username = 'root';
//     private $passwort = 'RaiceEthaN45';
//     private $conn;

//     // DB connect
//     public function connect() {

//         $this->conn = null;
//         try {
            
//             $this->conn = new PDO('mysql:host =' . $this->host . ';dbname =' . 
//             $this->db_name, $this->username, $this->password);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (PDOException $e) {
            
//             echo 'connection Error:' . $e->getMessage();
//         }
//         return $this-conn;
//     }

// }