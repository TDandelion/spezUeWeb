<?php
  session_start();
   
$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');
//  $sql = "SELECT * FROM user";
//
//  foreach ($pdo->query($sql) as $row) {
//     echo $row['email']. "<br />";
//     echo $row['name']."<br />";
//     echo $row['password']."<br />";
//  };

//login form validation

 $email = $_POST['email'];
 $password = $_POST['password'];
  
 $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();
 
  if ($user !== false && $password == $user['password']) {
    $_SESSION['userid'] = $user['user_id'];
    echo '<script type="<text/javascript">',
         '$("body").css("background-color", "white");',
         'switchViews("homeView");',
         '</script>';
  } else {
    echo "E-Mail oder Passwort war ungültig<br>";
    }
  

