<?php
  session_start();

$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');

//login form validation & cookies setting
 //if(isset($_POST['email'])){
 $email = $_POST['email'];
 $password = $_POST['password'];

 $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
 $result = $statement->execute(array(':email' => $email));
 $user = $statement->fetch();

  if ($user !== false && $password == $user['password']) {
    $_SESSION['userid'] = $user['user_id'];
    $name = $user['name'];
         if(isset($_POST['remember'])){
             if(($_POST['remember'])){
               setcookie('email', $email, time()+60*60*24);
               setcookie('password', $password, time()+60*60*24);
               setcookie('name', $name, time()+60*60*24);
             } else {
               setcookie("name", "$name", time() - 3600);
               setcookie("password", "$password", time() - 3600);
               setcookie("email", "$email", time() - 3600);
             }
          }
        echo $name;
  } else {
    return false;
    }
//}
