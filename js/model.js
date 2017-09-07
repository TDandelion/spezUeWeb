const WEATHERURL = "https://api.darksky.net/forecast/773af2afa7529a84fce81ea1e39d0e77/48.210033,16.363449";

function getWeather(){
  $.ajax({
    url: WEATHERURL,
    dataType: 'jsonp',
    success: showWeather,
    error: function(err){ console.log(err)},
  });
}

function checkLogin(email, password, remember) {
$.ajax({
    type: "POST",
    url: "backend/admin.php",
    data: {
        email: email,
        password: password,
        remember: true,
    },
    success: login,
    error: function(err){ console.log(err);}
});
}

function registerUserToDatabase(){
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var emailReg = $("#emailReg").val();
    var passwordReg = $("#passwordReg").val();
    var repeatPass = $("#repeatpassword").val();

    $.ajax({
        type: "POST",
        url: "backend/validation.php",
        async: false,
        data: {
            "done": 1,
            "firstname": firstname,
            "lastname": lastname,
            "emailReg": emailReg,
            "passwordReg": passwordReg,
            "repeatPass": repeatPass
        },
        success: function(data) {
            $("#firstname").val('');
            $("#lastname").val('');
            $("#emailReg").val('');
            $("#passwordReg").val('');
            $("#repeatpassword").val('');
            $("#message").html(data);
            $("p").addClass("alert alert-warning").css("color", "red");
            },
        error: function(err) {
            alert('error');
            $("#message").html();
            $("p").addClass("alert alert-danger");
            }
        });
}

function logout(){
    $.ajax({
        url: "backend/logout.php",
        type: "POST",
        async: false,
        data:{
            "logout": 1
        },
        success:function(){
            switchViews("loginView");
            $("body").css("background-color", "#DADADA");
            //$("#login_message").hide();
            //$("#message").hide();
        },
        error:function(err){
            alert("error");
        }
    });
}

function showRooms(){
    $.ajax({
      url: "backend/menu.php",
      type: "POST",
      data:{
          rooms: 1
      },
      success: getRooms,
      error: function(err){
          alert('error');
      }
    });
}

function showSecurityDevices(){
    $.ajax({
        url: "backend/menu.php",
        type: "POST",
        data:{
            devices: 1
        },
        success: getDevices,
        error: function(err){
            alert('error');
        }
    });
}

function showKitchenDevices(){
    $.ajax({
        url: "backend/menu.php",
        type: "POST",
        data:{
            kitchenDevices: 1
        },
        success: getKitchenDevices,
        error: function(err){
            alert('error');
        }
    });
}

function addDeviceToARoom(){
    var deviceName = $("#deviceName").val();
    var device = $("input[name=device]:checked", "#addingDeviceForm").val();
    var room = $("input[name=room]:checked", "#addingDeviceForm").val();
    var status = $("input[name=deviceStatus]:checked", "#addingDeviceForm").val();

    $.ajax({
        url: "backend/validation.php",
        type: "POST",
        data:{
          addDevice: 1,
          name: deviceName,
          device:device,
          raum: room,
          status: status
        },
        success: addDevice,
        error: function(err){
            alert("error");
        }
    })
}
  function enableAllDevices(room){
    $.ajax({
        type: "POST",
        url: "backend/menu.php",
        data: {
            room: room
        },
        success: successAllDevices,
        error: function(err){ console.log(err);}
    });
  }

 function disableAllDevices(room){
    $.ajax({
        type: "POST",
        url: "backend/menu.php",
        data: {
            false: room
        },
        success: successAllDevicesDisabled,
        error: function(err){ console.log(err);}
    });
  }
