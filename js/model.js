const WEATHERURL = "https://api.darksky.net/forecast/773af2afa7529a84fce81ea1e39d0e77/48.210033,16.363449";

function getWeather(){
  $.ajax({
    url: WEATHERURL,
    dataType: 'jsonp',
    success: showWeather,
    error: function(err){ console.log(err)},
  });
}

function checkLogin(email, password) {
$.ajax({
    type: "POST",
    url: "backend/admin.php",
    data: {
        email: email,
        password: password,
    },
    success: login,
    error: function(err){ console.log(err)}
});
}

function saveToDatabase(){
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