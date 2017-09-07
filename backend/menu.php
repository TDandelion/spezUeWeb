<?php

$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');

if(isset($_POST['rooms'])){
   
    $sql = $pdo->prepare("SELECT raum_name from raum where fk_haus_id=1");
    $sql->execute();

    $result = $sql->fetchAll();
//print_r($result);

    print json_encode($result);
//echo $result;
};

if(isset($_POST['devices'])){
    $sql = $pdo->prepare("SELECT geraet_name from geraet");
    $sql->execute();
    
    $result=$sql->fetchAll();
    
    print json_encode($result);
}

if(isset($_POST['kitchenDevices'])){
    $sql=$pdo->prepare("SELECT geraetetyp_name from geraetetyp where fk_raum_id=1 ORDER BY geraetetyp_name ASC");
    $sql->execute();
    $result=$sql->fetchAll();
    print json_encode($result);
}

if(isset($_POST['showWindows'])){
    $sql = $pdo->prepare("SELECT geraetetyp_name, fk_raum_id from geraetetyp where fk_geraet_id=3 ORDER BY geraetetyp_name ASC ");
    $sql->execute();
    $result=$sql->fetchAll();
    print json_encode($result);
}