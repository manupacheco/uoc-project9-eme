<?php


    
   
$db = 'eme'; 
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 

try{
    
$conn = new PDO("mysql:dbname=".$db.";host=".$host,$user, $pass); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $e){
        echo "Error: ".$e->getMessage();
}

?>
