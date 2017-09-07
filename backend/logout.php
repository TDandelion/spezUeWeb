<?php
session_start();

if(isset($_POST['logout'])){

$_SESSION = array();
setcookie("PHPSESSID", "", time()-3600, "/");
setcookie("name", "", time() - 3600);
setcookie("password", "", time() - 3600);
setcookie("email", "", time() - 3600);
session_destroy();

}
