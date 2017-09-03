<?php

$firstname = $lastname = $emailReg = $passwordReg = $repeatPass = "";
$pdo = new PDO('mysql:host=localhost;dbname=smarthome', 'username', '12345');

  if (isset($_POST['done'])){
     
      $fk_haus_id = 1;
      $firstnameError = "Please enter firstname! <br>";
      $lastnameError = "Please enter lastname! <br>";
      $emailError = "Please enter email! <br>"; 
      $passwordError = "Please enter password! <br>";
      $repeatError = "Password does not match. Please re-type your password!<br>"; 
      
      $errors = 0;

      
        if(empty($_POST['firstname'])){
            $errors ++;
            echo $firstnameError;
        }else{
           $firstname = $_POST['firstname'];
        };

        if(empty($_POST['lastname'])){
            $errors ++;
            echo $lastnameError;
        }else{
           $lastname = $_POST['lastname'];
        };  

        if(empty($_POST['emailReg'])){
            $errors ++;
            echo $emailError;
        }else{
           $emailReg = $_POST['emailReg'];
        };        

        if(empty($_POST['passwordReg'])){
            $errors ++;
            echo $passwordError;   
        }else{
            $passwordReg = $_POST['passwordReg'];
        }; 
    
        if($_POST['repeatPass'] <> $_POST['passwordReg']) {
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
       }
        

      
  }
