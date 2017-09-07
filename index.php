<?php

include 'layout.php';


 ?>
<!--loginView page-->
<div id="loginView">
    <div id="loginForm">
        <div class="container">
            <p id="login_message"></p>
            <br>
              <h3 class="text-center">Smart Home</h3>
              <div class="form" action="">
                    <div class="form-group has-feedback">
                          <label class="control-label">Email:</label>
                          <input type="email" class="form-control" name="email" id="email" placeholder="test@email.com">
                          <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                          <label class="control-label">Password:</label>
                          <input type="password" class="form-control" name="password" id="password"  placeholder="********">
                          <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                    </div>
                    <div class="form-horizontal">
                        <div class="form group">
                            <input type="checkbox" name="remember" id="remember"> Remember me
                        </div>
                        <br>
                    </div><!--end of loginForm-->                          
                        <button class="btn btn-primary btn-block login" value="login">Login</button>
                        <button class="btn btn-default btn-block registration">New? Register now</button>
              </div><!--end of form action-->


        </div><!--end of container-->
    </div><!--loginForm-->

</div><!--end of loginView-->
<!--headerView page-->
<div id="headerView">

    <div class="header">
        <nav class="navbar navbar-default">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a id="date" href="#"></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-minus"></span></a></li>
                </ul>
                <button class="navbar-btn btn btn-default">Kontrastversion anzeigen</button>
                <span id="welcome_msg" name="welcome_msg"></span>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-time"></span></a></li>
                    <li><a href="#" id="time"></a></li>
                    <li><a href="#" id="logout" name="logout">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div> <!--end of header-->
</div> <!--end of headerView-->
<!--registrationView page-->
<div id="registrationView">
    <div id="registrationForm">
     <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Smart Home User Registration Form</h1>
                </div>
                <div class="panel-body">
                    <div class="form-horizontal" action="">
                        <input type="text" hidden="" name="user_id" id="user_id">
                        <div class="form-group">
                           <label for="firstname" class="col-md-4 control-label">
                             First Name*</label>
                           <div class="col-md-8">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Max" />
                                <span class="error"><?php if(isset($errors['firstnameError'])){ echo $errors['firstnameError'];}?></span><br>
                                                
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-4 control-label">
                             Last Name*</label>
                            <div class="col-md-8">
                               <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Mustermann" />
                               <span class="error"><?php if(isset($errors['lastnameError'])){ echo $errors['lastnameError'];}?></span><br>                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emailReg" class="col-md-4 control-label">
                             Email*</label>
                            <div class="col-md-8">
                               <input type="email" class="form-control" id="emailReg" name="emailReg" placeholder="test@email.com" />
                                <span class="error"><?php if(isset($errors['emailError'])){ echo $errors['emailError'];}?></span><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordReg" class="col-md-4 control-label">
                             Password*</label>
                            <div class="col-md-8">
                               <input type="password" class="form-control" id="passwordReg" name="passwordReg" placeholder="***********" />
                               <span class="error"><?php if(isset($errors['passwordError'])){ echo $errors['passwordError'];}?></span><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="repeatpassword" class="col-md-4 control-label">
                             Confirm Password*</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="***********" />
                                <span class="error"><?php if(isset($errors['repeatError'])){ echo $errors['repeatError'];}?></span><br>
                            </div>
                        </div>
                    
                </div>
                <div class="panel-footer" style="text-align: right">
                    <input type="submit" id="register" name="register" value="register now" class="btn btn-default">
                    <input name="cancel" value="cancel" id="cancel" class="btn btn-danger">
                </div>
                    <p id="message"></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 </div><!--end of registrationView page-->
 <!--addDeviceView page-->   
<div id="addDeviceView">
    <div id="addingDeviceForm">
     <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <p id="addDevice_message"></p>
                    <h1 class="panel-title">Gerät hinzufügen</h1>
                </div>
                <div class="panel-body">
                    <div class="form-horizontal" action="">
                        <input type="text" hidden="" name="geraetetyp_id" id="geraetetyp_id">
                        <div class="form-group">
                           <label for="deviceName" class="col-md-6 control-label">
                             Wie willst du das Gerät benennen? *</label>
                           <div class="col-md-6">
                                <input type="text" class="form-control" id="deviceName" name="deviceName" placeholder="" />
                                <span class="error"><?php if(isset($errors['firstnameError'])){ echo $errors['firstnameError'];}?></span><br>                  
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="device" class="col-md-6 control-label">
                             Gerätetyp*</label>
                            <div class="col-md-6">
                                 <input type="radio" name="device" id="rauchmelder"<?php if (isset($device) && $device=="Rauchmelder") echo "checked";?> value="Rauchmelder">Rauchmelder<br>
                                 <input type="radio" name="device" id="rollo"<?php if (isset($device) && $device=="Rollo") echo "checked";?> value="Rollo">Rollo<br>
                                 <input type="radio" name="device" id="fenster"<?php if (isset($device) && $device=="Fenster") echo "checked";?> value="Fenster">Fenster<br>
                                 <input type="radio" name="device" id="tuerschloss"<?php if (isset($device) && $device=="Tuerschloss") echo "checked";?> value="Tuerschloss">Tuerschloss<br>
                                 <input type="radio" name="device" id="bewegungsmelder"<?php if (isset($device) && $device=="Bewegungsmelder") echo "checked";?> value="Bewegungsmelder">Bewegungsmelder<br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="room" class="col-md-6 control-label">
                            Wo willst du das Gerät hinfügen?*</label>
                            <div class="col-md-6">
                                 <input type="radio" name="room" <?php if (isset($room) && $room=="Kueche") echo "checked";?> value="Kueche">Kueche<br>
                                 <input type="radio" name="room" <?php if (isset($room) && $room=="Vorzimmer") echo "checked";?> value="Vorzimmer">Vorzimmer<br>
                                 <input type="radio" name="room" <?php if (isset($room) && $room=="Schlafzimmer") echo "checked";?> value="Schlafzimmer">Schlafzimmer<br>
                                 <input type="radio" name="room" <?php if (isset($room) && $room=="Wohnzimmer") echo "checked";?> value="Wohnzimmer">Wohnzimmer<br>
                                 <input type="radio" name="room" <?php if (isset($room) && $room=="Badezimmer") echo "checked";?> value="Badezimmer">Badezimmer<br>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="deviceStatus" class="col-md-6 control-label">
                             Status des Gerätes*</label>
                            <div class="col-md-6">
                                 <input type="radio" name="deviceStatus" <?php if (isset($deviceStatus) && $deviceStatus=="On") echo "checked";?> value="On">On<br>
                                 <input type="radio" name="deviceStatus" <?php if (isset($deviceStatus) && $deviceStatus=="Off") echo "checked";?> value="Off">Off<br>
                            </div>
                        </div>                    
                </div>
                <div class="panel-footer" style="text-align: right">
                    <input type="submit" id="saveDevice" name="saveDevice" value="Gerät speichern" class="btn btn-default">
                    <input name="cancel" value="cancel" id="backToKitchen" class="btn btn-danger">
                </div>
                    <p id="deviceMessage"></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 </div><!--end of addDeviceView page-->     
<!--homeView page-->
<a name="home" id="home"></a> 
<div class="container"> 
     <div id="homeView">
         <ol class="breadcrumb" style="visibility: hidden">
             <li><a href="#" class="homeLink">Home</a></li>
         </ol>


     <div class="menu">
         <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="weatherbox text-center">
                     <br>
                     <i id="weatherIcon"></i>
                     <h4 id="summary"></h4>
                     <h2 id="temperature"></h2>
                 </div>
                 <div class="col-md-offset-3 col-xs-offset-1 col-sm-offset-3 btn-group-vertical btn-group-lg" role="group">
                     <button class="btn btn-primary" id="overview">Übersicht</button>
                     <br>
                     <button class="btn btn-primary" id="status">Status ändern</button>
                 </div>
             </div>
             <div class="col-md-6 col-sm-6 col-xs-12">

                 <div class="row mainMenu">

                     <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                         <button class="btn btn-default top" id="roomSettingsBtn"><i class="glyphicon glyphicon-home glyphiconMenu"></i><br />Raumverwaltung</button>
                         <button class="btn btn-default security" id="securitySettingsBtn"><i class="glyphicon glyphicon-warning-sign glyphiconMenu"></i><br />Sicherheit</button>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                         <button class="btn btn-default"><i class="glyphicon glyphicon-cog glyphiconMenu"></i><br />Einstellungen</button>
                         <button class="btn btn-default bottom"><i class=" glyphicon glyphicon-lamp glyphiconMenu"></i><br />Lichter</button>

                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                         <button class="btn btn-default top"><i class="glyphicon glyphicon-tint glyphiconMenu"></i><br />Wasser</button>
                         <button class="btn btn-default"><i class="glyphicon glyphicon-facetime-video glyphiconMenu"></i><br />Video</button>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-2 hidden-xs rightSide">
                 <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
             </div>
         </div>
     </div>  <!--end of menu-->
 </div> <!--end of container-->
</div><!--end of homePageView-->
<!--start of roomSettingsView page-->
<div id="roomSettingsView">
  <div class="container">
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li class="active">Raumverwaltung</li>
    </ol>

        <div class="menu">
            <div class="row">
                <div class="col-md-4 col-sm-4 hidden-xs">
                    <h2>Raumwervaltung</h2>
                    <img class="pic" src="images/61831580-Furniture-and-home-decor-icon-set-vector-illustration-Indoor-cabinet-interior-room-library-office-bo-Stock-Vector.jpg " />

                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row mainMenu">
                        <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                            <button class="btn btn-default top Kueche"><i class="glyphicon glyphicon-cutlery glyphiconMenu"></i><br /><div class="text-center"><p id="0"></p></div></button>
                            <button class="btn btn-default hallLink"><i class="glyphicon glyphicon-phone-alt glyphiconMenu"></i><br /><div class="text-center"><p id="1"></p></button>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                            <button class="btn btn-default bedroomLink"><i class="glyphicon glyphicon-bed glyphiconMenu"></i><br /><div class="text-center"><p id="2"></p></button>
                            <button class="btn btn-default bottom livingRoomLink"><i class="glyphicon glyphicon-blackboard glyphiconMenu"></i><br /><div class="text-center"><p id="3"></p></button>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                            <button class="btn btn-default top bathroomLink"><i class="glyphicon glyphicon-tint glyphiconMenu"></i><div class="text-center"><p id="4"></p><br /></button>
                            <button class="btn btn-default"><i class="glyphicon glyphicon-plus-sign glyphiconMenu"></i><br />hinzufuegen</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 hidden-xs rounded-button rightSide">
                    <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                </div>

            </div>
        </div>  <!--end of menu-->
    </div> <!--end of container-->
</div> <!--end of roomSettingsView page-->
<!--start kitchenView page-->
<div id="kitchenView">
    <div class="container">
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li><a href="#" class="roomLink">Raumverwaltung</a></li>
        <li class="active">Küche</li>
    </ol>
        <div class="row">
            <div class="col-md-offset-5 btn-group-lg" role="group">
               <button class="btn btn-default" id="kitchenAllBtnOn">Alle einschalten</button>
<!--                        <input type="checkbox" id="kitchenAllBtnOn">Alle einschalten-->
                <button class="btn btn-default" id="kitchenAllBtnOff">Alle ausschalten</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                <br />
                <h1>Küche</h1>
                <br />
                <br />
                <i class="glyphicon glyphicon-cutlery glyphiconMenu" style="font-size:100px"></i>
            </div>
            <div class="col-md-7 col-sm-6 col-sm-6">
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead></thead>
                        <tbody id="kitchenDevicesTable"></tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2 hidden-xs">
                <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-5 btn-group-lg" role="group" >
                <button class="btn btn-default saveChangesBtn">Änderungen speichern</button>
                <button class="btn btn-primary addDevice">Gerät hinzufügen</button>
            </div>
        </div>

    </div>
</div> <!--end of kitchenView page-->
<!--start of bedroomView page-->
<div id="bedroomView">
    <div class="container">
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li><a href="#" class="roomLink">Raumverwaltung</a></li>
        <li class="active">Schlafzimmer</li>
    </ol>


        <div class="row">
            <div class="col-md-offset-5 btn-group-lg" role="group">
                <button class="btn btn-default allBtnOn">Alle einschalten</button>
                <button class="btn btn-default allBtnOff">Alle ausschalten</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                <br />
                <h1>Schlafzimmer</h1>
                <br />
                <br />
                <i class="glyphicon glyphicon-bed glyphiconMenu" style="font-size:100px"></i>
            </div>
            <div class="col-md-7 col-sm-6 col-sm-6">
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody id="bedroomTable">
                            <tr>
                                <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Fenster</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rollos</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2 hidden-xs">
                <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-7 col-md-2">
                <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
            </div>
        </div>

    </div>
</div> <!--end of bedroomView page-->
<!--start of bathroomView page-->
<div id="bathroomView">
    <div class="container">        
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li><a href="#" class="roomLink">Raumverwaltung</a></li>
        <li class="active">Badezimmer</li>
    </ol>


        <div class="row">
            <div class="col-md-offset-5 btn-group-lg" role="group">
                <button class="btn btn-default allBtnOn">Alle einschalten</button>
                <button class="btn btn-default allBtnOff">Alle ausschalten</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                <br />
                <h1>Badezimmer</h1>
                <br />
                <br />
                <i class="glyphicon glyphicon-tint glyphiconMenu" style="font-size:100px"></i>
            </div>
            <div class="col-md-7 col-sm-6 col-sm-6">
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody id="bathroomTable">
                            <tr>
                                <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Fenster</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rollos</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2 hidden-xs">
                <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-7 col-md-2">
                <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
            </div>
        </div>

    </div>
</div> <!--end of bathroomView page-->
<!--start of livingRoomView page-->
<div id="livingRoomView">
    <div class="container">
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li><a href="#" class="roomLink">Raumverwaltung</a></li>
        <li class="active">Wohnzimmer</li>
    </ol>


        <div class="row">
            <div class="col-md-offset-5 btn-group-lg" role="group">
                <button class="btn btn-default allBtnOn">Alle einschalten</button>
                <button class="btn btn-default allBtnOff">Alle ausschalten</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                <br />
                <h1>Wohnzimmer</h1>
                <br />
                <br />
                <i class="glyphicon glyphicon-blackboard glyphiconMenu" style="font-size:100px"></i>
            </div>
            <div class="col-md-7 col-sm-6 col-sm-6">
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody id="livingRoomTable">
                            <tr>
                                <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Fenster</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rollos</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2 hidden-xs">
                <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-7 col-md-2">
                <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
            </div>
        </div>

    </div>
</div> <!--end of livingRoomView page-->
<!--start of hallView page-->
<div id="hallView">
    <div class="container">
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li><a href="#" class="roomLink">Raumverwaltung</a></li>
        <li class="active">Vorzimmer</li>
    </ol>


        <div class="row">
            <div class="col-md-offset-5 btn-group-lg" role="group">
                <button class="btn btn-default allBtnOn">Alle einschalten</button>
                <button class="btn btn-default allBtnOff">Alle ausschalten</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                <br />
                <h1>Vorzimmer</h1>
                <br />
                <br />
                <i class="glyphicon glyphicon-phone-alt glyphiconMenu" style="font-size:100px"></i>
            </div>
            <div class="col-md-7 col-sm-6 col-sm-6">
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody id="hallRoomTable">
                            <tr>
                                <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Fenster</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Rollos</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                <td><button type="button" class="btn btn-default">Mehr</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2 hidden-xs">
                <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-7 col-md-2">
                <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
            </div>
        </div>

    </div>
</div> <!--end of hallView page-->
<!--start of securitySettingsView page-->
<div id="securitySettingsView">
    <div class="container">
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li class="active">Security</li>
    </ol>


        <div class="menu">
            <div class="row">
                <div class="col-md-4 col-sm-4 hidden-xs">
                    <h2>Sicherheitsverwaltung</h2>
                    <img class="pic" src="images/safety-security-icons-set-38500318.jpg " />

                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row mainMenu">
                        <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                            <button class="btn btn-default top"><i class="glyphicon glyphicon-fire glyphiconMenu"></i><p id="device0"></p></button>
                            <button class="btn btn-default"><i class="glyphicon glyphicon-align-justify glyphiconMenu"></i><p id="device1"></button>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                            <button class="btn btn-default"  id="windowBtn"><i class="glyphicon glyphicon-cog glyphiconMenu"></i><p id="device2"></p></button>
                            <button class="btn btn-default bottom"><i class=" glyphicon glyphicon-lock glyphiconMenu"></i><p id="device3"></p></button>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                            <button class="btn btn-default top"><i class="glyphicon glyphicon-refresh glyphicon-facetime-video glyphiconMenu"></i><p id="device4"></p></button>
                            <button class="btn btn-default"><i class="glyphicon glyphicon-plus-sign glyphiconMenu"></i><br />hinzufuegen</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 rounded-button rightSide">
                    <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                </div>

            </div>
        </div>  <!--end of menu-->
    </div> <!--end of container-->
</div> <!--end of securitySettingsView page-->
<!--start of windowView page-->
<div id="windowView">
    <div class="container">            
    <ol class="breadcrumb">
        <li><a href="#" class="homeLink">Home</a></li>
        <li><a href="#" class="securityLink">Sicherheit</a></li>
        <li class="active">Fenster</li>
    </ol>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 btn-group-lg" role="group">
                <button class="btn btn-default allBtnOn">Alle einschalten</button>
                <button class="btn btn-default allBtnOff">Alle ausschalten</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                <br />
                <h1>Fenster</h1>
                <br />
                <br />
                <i class="glyphicon glyphicon-cog glyphiconMenu" style="font-size:100px"></i>
            </div>
            <div class="col-md-7 col-sm-6 col-sm-6">
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr><th></th><th>Fenster 1</th><th>Fenster 2</th><<th>Fenster 3</th></tr>
                        </thead>
                        <tbody id="fenster">
                            <tr>
                                <td><div class="label label-default menuLabel">K�che</div></td>
                                <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Wohnzimmer</div></td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Schalfzimmer</div></td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Vorzimmer</div></td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                            </tr>
                            <tr>
                                <td><div class="label label-default menuLabel">Badezimmer</div></td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                                <td>
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2 hidden-xs">
                <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-7 col-md-2">
                <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
            </div>
        </div>

    </div>
 </div><!--end of windowView page-->

</body>
</html>
