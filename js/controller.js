var views = ["homeView", "loginView"];
//Date
let date = new Date().toLocaleDateString();
let clock = new Date().toLocaleTimeString('en-GB', { hour: "numeric", minute: "numeric" });

$(document).ready(() => {

    switchViews("loginView");
    getWeather();

    $("#date").text(date);
    $("#time").text(clock);
    $(".login").click(function(){
      switchViews("homeView");
    });
    $(".logout").click(function () {
        switchViews("loginView");
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
