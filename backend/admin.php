<?php
  session_start();

$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');

if(isset($_POST['id'])){
  $statement = $pdo->prepare("DELETE FROM geraetetyp WHERE geraetetyp_id = :id");
  $id = $_POST['id'];
  $result = $statement->execute(array('id' => $id));
  return true;
}
//login form validation & cookies setting
 if(isset($_POST['email'])){
 $email = $_POST['email'];
 $password = $_POST['password'];


 $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();


  if ($user !== false && $password == $user['password']) {
    $_SESSION['userid'] = $user['user_id'];
    $name = $user['name'];
         if(isset($_POST['remember'])){
             if($_POST['remember']){
               setcookie('email', $email, time()+60*60*24);
               setcookie('password', $password, time()+60*60*24);
               setcookie('name', $name, time()+60*60*24);
             } else {
               setcookie("name", "", time() - 3600);
               setcookie("password", "", time() - 3600);
               setcookie("email", "", time() - 3600);
             }
          }
        echo $name;
  } else {
    return false;
    }
}
