var views = ["homeView", "loginView", "roomSettingsView", "securitySettingsView", "kitchenView", "bedroomView",
             "bathroomView", "hallView", "livingRoomView"];
//Date
let date = new Date().toLocaleDateString();
let clock = new Date().toLocaleTimeString('en-GB', { hour: "numeric", minute: "numeric" });

$(document).ready(() => {

    switchViews("loginView");
    getWeather();

    $("#date").text(date);
    $("#time").text(clock);

    $(".login").click(function(){
        $("body").css("background-color", "white"); /* Beim Einloggen wieder weißer Hintergrund*/
        switchViews("homeView");
    });
    $(".logout").click(function () {
        switchViews("loginView");
    });
    $("#roomSettingsBtn").click(function () {
        switchViews("roomSettingsView");
    });
    $("#securitySettingsBtn").click(function () {
        switchViews("securitySettingsView");
    });
    $(".homeLink").click(function () {
        switchViews("homeView")
    });
    $(".roomLink").click(function () {
        switchViews("roomSettingsView")
    });
    $(".kitchenLink").click(function () {
        switchViews("kitchenView");
    })
    $(".bedroomLink").click(function () {
        switchViews("bedroomView");
    });
    $(".bathroomLink").click(function () {
        switchViews("bathroomView");
    });
    $(".hallLink").click(function () {
        switchViews("hallView");
    });
    $(".livingRoomLink").click(function () {
        switchViews("livingRoomView");
    });



    //not final
    /*$("button").click(function(){
      var getClass = $(this).attr("id");
      switch(getClass){
        case overview: openOverviewBox()
                      break;
        case status: openStatusBox()
                      break;
        default: break;
      }
    });*/

});
