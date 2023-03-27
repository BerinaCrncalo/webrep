<?php
$servername = "127.0.0.1" ;
$username = "root" ;
$password = "" ;
$schema = "lab3_db" ;


try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" ;
  
    $stmt = $conn->prepare("SELECT * FROM Users") ;
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
    print_r($result) ;


}catch(PDOException $e){
    echo "Connection failed : " . $e->getMessage();
}
?>

