
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
    var obj = JSON.parse(data);
    obj.forEach(function(value, ind){
        console.log(ind);
       $("#" + ind).text(value.raum_name);
    });
    switchViews('roomSettingsView');

}
