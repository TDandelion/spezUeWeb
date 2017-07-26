var views = ["homeView", "loginView"];
//Date
let date = new Date().toLocaleDateString();
let clock = new Date().toLocaleTimeString('en-GB', { hour: "numeric", minute: "numeric" });

$(document).ready(() => {

    switchViews("loginView");

    $("#date").text(date);
    $("#time").text(clock);
    $(".login").click(function(){
      switchViews("homeView");
    });

});
