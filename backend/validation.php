<?php

//registration form validation

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
           $firstname = test_input($_POST['firstname']);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                $errors++;
                $firstnameError = "Only letters and white spaces in name-field allowed <br>";
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
                $lastnameError = "Only letters and white spaces in lastn-name field allowed <br>";
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
             $emailError = "Invalid email format <br>";
             echo $emailError;
           };           
        };        

        if(empty($_POST['passwordReg'])){
            $errors ++;
            echo $passwordError;   
        }else{
            $passwordReg = $_POST['passwordReg'];
            //check, that the length is at least 4 char long!
            if(strlen($passwordReg) < 4){
                $errors++;
                $passwordError = "Password has to be at least 4 charachters long!<br>";
                echo $passwordError;
                };
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
            
            echo '<script type="<text/javascript">',
                 '$("body").css("background-color", "white");',
                 'switchViews("homeView");',
                 '</script>';
       }
  }
  
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

