<?php

 
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');
  $sql = "SELECT * FROM user";

  foreach ($pdo->query($sql) as $row) {
     echo $row['email']. "<br />";
     echo $row['name']."<br />";
     echo $row['password']."<br />";
  }
