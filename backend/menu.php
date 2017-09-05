<?php

$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');
$sql = $pdo->prepare("SELECT raum_name from raum where fk_haus_id=1");
$sql->execute();

$result = $sql->fetchAll();
//print_r($result);

print json_encode($result);
//echo $result;
