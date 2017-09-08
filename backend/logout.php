<?php
session_start();
$_SESSION = array();

if(isset($_POST['logout'])){
    
setcookie('PHPSESSID', '', time() -3600, "/");
setcookie('name', '', time() - 3600);
setcookie('password', "", time() - 3600);
setcookie('email', '', time() - 3600);
session_destroy();

}
