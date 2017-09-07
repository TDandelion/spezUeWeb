<?php

$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');

if(isset($_POST['room'])){
    $room = $_POST['room'];
    $sql = $pdo->prepare("UPDATE geraetetyp SET fk_status_id = 1 WHERE fk_raum_id = 1");
    $sql->execute();
    return true;
}

if(isset($_POST['false'])){
    $room = $_POST['false'];
    $sql = $pdo->prepare("UPDATE geraetetyp SET fk_status_id = 2 WHERE fk_raum_id = 1");
    $sql->execute();
    return true;
}

if(isset($_POST['rooms'])){
<<<<<<< HEAD

$sql = $pdo->prepare("SELECT raum_name from raum where fk_haus_id=1");
$sql->execute();
=======
   
    $sql = $pdo->prepare("SELECT raum_name from raum where fk_haus_id=1");
    $sql->execute();
>>>>>>> de29b4022e46510823e1943f9abdaaa5f084e4c2

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
<<<<<<< HEAD
    $sql=$pdo->prepare("SELECT * from geraetetyp where fk_raum_id=1");
=======
    $sql=$pdo->prepare("SELECT geraetetyp_name from geraetetyp where fk_raum_id=1 ORDER BY geraetetyp_name ASC");
    $sql->execute();
    $result=$sql->fetchAll();
    print json_encode($result);
}

if(isset($_POST['showWindows'])){
    $sql = $pdo->prepare("SELECT geraetetyp_name, fk_raum_id from geraetetyp where fk_geraet_id=3 ORDER BY geraetetyp_name ASC ");
    //$stm = $pdo->prepare("SELECT raum_name from raum where fk_raum_id");
>>>>>>> de29b4022e46510823e1943f9abdaaa5f084e4c2
    $sql->execute();
    $result=$sql->fetchAll();
    print json_encode($result);
}
