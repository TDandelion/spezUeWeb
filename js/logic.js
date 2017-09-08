
function switchViews(view) {

    for (var i = 0; i < views.length; i++) {
        if(view === views[i]) {
            $("#" + view).show();
            $("#headerView").show();
         } else {
            $("#" + views[i]).hide();
        }
    }

    if(view === "loginView" || view === "registrationView"){
        $("#headerView").hide();
    }
}


function showWeather(data){
  $('#summary').text(data.currently.summary);
  let icon;
  console.log(data);
  switch(data.currently.icon){
    case 'partly-cloudy-day': icon = 'fa fa-cloud'
                        break;
    case 'clear-day':   icon = 'fa fa-sun-o'
                        break;
    case 'rainy-day': icon = 'fa fa-tint'
                        break;
    case 'snowy-day': icon = 'fa fa-snowflake-o'
                        break;
    default: icon = 'fa fa-cloud'
                    break;
  }

  $('#weatherIcon').attr('class', "glyphicon " + icon);
  let fahrenheit = data.currently.temperature;
  let celsius = (fahrenheit - 32) * 5 / 9;
  $('#temperature').text(Math.round(celsius) + "° C");
};

function login(data){
  console.log(data);
  if(!data){
      console.log(data);
      $("#login_message").html("<div class='alert alert-danger'>Login failed. Password or E-mail not correct</div>");
      switchViews("loginView");
  } else{
    setHomeView(data);
  }
}
function setHomeView(data){
  $("#welcome_msg").text(displayMsg() + data + "! Welcome to SmartHome!");
  $("body").css("background-color", "white");
  switchViews("homeView");
}

function showAlert() {
    alert('Ihre Änderungen wurden erfolgreich gespeichert');
}

function getRooms(data){
    //console.log(data);
    var obj = JSON.parse(data);
    obj.forEach(function(value, ind){
        console.log(ind);
       $("#" + ind).text(value.raum_name);
    });
    switchViews('roomSettingsView');
}

function getDevices(data){
    //console.log(data);
    var devices = JSON.parse(data);
    devices.forEach(function(value, ind){
        console.log(ind);
        $("#device" + ind).text(value.geraet_name);
    });
    switchViews("securitySettingsView");
}

function getKitchenDevices(data){
    $("#kitchenDevicesTable").empty();
    var devices = JSON.parse(data);
    devices.forEach(function(val, ind){
       $("#kitchenDevicesTable").append("<tr id='" + val.geraetetyp_id + "'><td>" + val.geraetetyp_name + "</td><td>" +
              "<input type='radio' name='kitchen"+ ind +"' id='kitchenOn"+ind+"' value='on'>on </td><td>" +
               "<input type='radio' name='kitchen"+ ind +"' id='kitchenOff"+ind+"' value='off'>off</td><td>" +
               "<button class='btn btn-xs btn-danger deleteDevice' id='"+val.geraetetyp_id+"'><i class='glyphicon glyphicon-trash'></i> Delete</button></td></tr>");
        val.fk_status_id == 1 ? document.getElementById("kitchenOn"+ind).checked = true : document.getElementById("kitchenOff"+ind).checked = true;
    });
    switchViews("kitchenView");
}

//not yet working!
function getWindows(data){
    $("#windowsTable").empty();
    console.log(data);
    var windows = JSON.parse(data);
    windows.forEach(function(val, ind){
        $("#windowsNames").append("<tr><th></th><th>"+val.geraetetyp_name +"</th>");
        $("#windowsTable").append("<tr><td>"+val.raum_name +"</td><td><input type='radio'>on <input type='radio'>off</td>");
    });
}

function addDevice(data){
  console.log(data);
    if(data == 200){
      showKitchenDevices();
      $("#addDevice_message").html('Gerät erfolgreich hinzugefügt');
    } else {
      $("#addDevice_message").html(data);
      $("#addDevice_message").addClass("alert alert-warning").css("color", "red");
    }
}

var checked = false;

function kitchenEnableAll(){
    enableAllDevices('Küche');
}

function kitchenDisableAll(index){
    disableAllDevices('Küche');
}

function successAllDevices(data) {
      showKitchenDevices();
}

function successAllDevicesDisabled(data){
      showKitchenDevices();
}

function displayMsg(){
    var today = new Date();
    var curHr = today.getHours();

        if (curHr < 12) {
          return 'Guten Morgen, ';
        } else if (curHr < 18) {
          return 'Guten Tag, ';
        } else {
          return 'Guten Abend, ';
        };
}


function redirectToHome(data){
  if(data === ''){
    return;
  } else {
    setHomeView(data);
  }
}

function successfullyDeleted(data){
    console.log(data);
    showKitchenDevices();
}
