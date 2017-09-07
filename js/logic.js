
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
  if(!data){
      $("#login_message").html("<div class='alert alert-danger'>Login failed. Password or E-mail not correct</div>");
      //$("p").addClass("alert alert-warning").css("color", "red");
      switchViews("loginView");
  } else{
      $("#welcome_msg").text("Hello " + data);
      $("body").css("background-color", "white");
      switchViews("homeView");
  }
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
    console.log(data);
    devices.forEach(function(val, ind){
       $("#kitchenDevicesTable").append("<tr><td>" + val.geraetetyp_name + "</td><td>" +
              "<input type='radio' name='kitchen"+ ind +"' id='kitchenOn"+ind+"' value='on'>on </td><td>" +
               "<input type='radio' name='kitchen"+ ind +"' id='kitchenOff"+ind+"' value='off'>off</td><td>" +
               "<button type='button' class='btn btn-default' id='kitchenMore"+ind+"'>Mehr</button></td></tr>");
        val.fk_status_id == 1 ? document.getElementById("kitchenOn"+ind).checked = true : document.getElementById("kitchenOff"+ind).checked = true;
    });
    switchViews("kitchenView");
}

function addDevice(data){
    console.log(data);
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
