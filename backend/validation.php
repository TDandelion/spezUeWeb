<?php

//registration form validation

$firstname = $lastname = $emailReg = $passwordReg = $repeatPass = "";
$dev = $room = $status = $deviceName = "";
$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');

  if (isset($_POST['firstname'])){

      $fk_haus_id = 1;
      $firstnameError = "Bitte Vorname eingeben! <br>";
      $lastnameError = "Bitte Lastname eingeben! <br>";
      $emailError = "Bitte Email eingeben! <br>";
      $passwordError = "Bitte Passwort eingeben! <br>";
      $repeatError = "Die Passwörter stimmen nicht überein. Bitte probieren Sie noch mal!<br>";

      $errors = 0;

        if(empty($_POST['firstname'])){
            $errors ++;
            echo $firstnameError;
        }else{
           $firstname = test_input($_POST['firstname']);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                $errors++;
                $firstnameError = "Nur Buchstaben und Leerzeichen in Namenfeld erlaubt!<br>";
              echo $firstnameError;
            };
        };

        if(empty($_POST['lastname'])){
            $errors ++;
            echo $lastnameError;
        }else{
           $lastname = test_input($_POST['lastname']);
            if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
                $errors++;
                $lastnameError = "Nur Buchstaben und Leerzeichen in Lastnamenfeld erlaubt!<br>";
                echo $lastnameError;
            };
        };

        if(empty($_POST['emailReg'])){
            $errors ++;
            echo $emailError;
        }else{
           $emailReg = $_POST['emailReg'];
           // check if e-mail address is well-formed
           if (!filter_var($emailReg, FILTER_VALIDATE_EMAIL)) {
             $errors ++;
             $emailError = "Falsches E-Mail Format. E-Mail bitte noch mal eingeben.<br>";
             echo $emailError;
           };
        };

        if(empty($_POST['passwordReg'])){
            $errors ++;
            echo $passwordError;
        }else{
            $passwordReg = $_POST['passwordReg'];
            //check, that the length is at least 6 char long!
            if(strlen($passwordReg) < 6){
                $errors++;
                $passwordError = "Ihr Passwort muss mindestens 6 Zeichen lang sein<br>";
                echo $passwordError;
                };
        };

        if(empty($_POST['passwordReg']) || $_POST['repeatPass'] <> $_POST['passwordReg']) {
            $errors ++;
            echo $repeatError;
        }else{
            $repeatpassword = $_POST['repeatPass'];
        }


        //var_dump($errors);
       if($errors == null){
            $sql = "INSERT INTO user(name, email, password, fk_haus_id) values ('{$firstname}','{$emailReg}', '{$passwordReg}', '{$fk_haus_id}')";
            //echo var_dump($sql);
            $result = $pdo->query($sql);
            
            if(!$result){
              echo "something went wrong!";
            }else{
              echo  $firstname . ", Thank you for registration! Enjoy Smart Home!";
            }

            echo '<script type="<text/javascript">',
                 '$("body").css("background-color", "white");',
                 'switchViews("homeView");',
                 '$("#welcome_msg").text(displayMsg() + " welcome to SmartHome!");',
                 '</script>';
       }
  }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    // device form validation

    if(isset($_POST['addDevice'])){
        $deviceNameError = "Bitte alle Felder ausfüllen!";
        $errors = 0;

        if(empty($_POST['deviceName'])){
            $errors ++;
        }else{
            $deviceName = test_input($_POST['deviceName']);
            if (!preg_match("/^[a-zA-Z0-9 ]*$/",$deviceName)) {
                $errors++;
                $deviceNameError = "Nur Buchstaben, Nummern und Leerzeichen im Namensfeld erlaubt!<br>";
            };
        }
        if(empty($_POST['device'])){
            $errors ++;
        }else{
            $device = $_POST['device'];
        }

        if(empty($_POST['room'])){
            $errors ++;
        }else{
            $room = $_POST['room'];
        }

        if(empty($_POST['status'])){
            $errors ++;
        }else{
            $status = $_POST['status'];
        }

        if($errors == null){

          $deviceId = "SELECT geraet_id FROM geraet where geraet_name ='{$device}'";
            foreach($pdo->query($deviceId) as $row){
                $deviceIdResult = $row['geraet_id'];
            }
            //echo var_dump($queriedIdResult);
          $roomId = "SELECT raum_id FROM raum where raum_name ='{$room}'";
            foreach($pdo->query($roomId) as $row){
                $roomIdResult = $row['raum_id'];
            }
          $statusId = "SELECT id FROM status where status ='{$status}'";
            foreach($pdo->query($statusId) as $row){
                $statusIdResult = $row['id'];
            }

          $sql = "INSERT INTO geraetetyp(geraetetyp_name, fk_geraet_id, fk_raum_id, fk_status_id) values ('{$deviceName}','{$deviceIdResult}', '{$roomIdResult}', '{$statusIdResult}')";
          //echo var_dump($sql);
          $result = $pdo->query($sql);

            if($result){
                echo 200;              
            }
        }else{
            echo $deviceNameError;
        }
    }
