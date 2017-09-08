var views = ["homeView", "registrationView", "loginView", "roomSettingsView", "securitySettingsView", "kitchenView", "bedroomView",
    "bathroomView", "hallView", "livingRoomView", "windowView", "addDeviceView"];
//Date
let date = new Date().toLocaleDateString();
let clock = new Date().toLocaleTimeString('en-GB', { hour: "numeric", minute: "numeric" });

$(document).ready(() => {

    checkIfLoggedIn();
    switchViews("loginView");
    getWeather();

    $("#date").text(date);
    $("#time").text(clock);

    $(".login").click(function(){
        //switchViews("homeView");
        checkLogin($("#email").val(), $("#password").val(), $("#remember").is(":checked") );
         /* Beim Einloggen wieder weißer Hintergrund*/
   });
    $(".registration").click(function(){
       switchViews("registrationView");
    });
    $("#logout").click(logout);

    $("#roomSettingsBtn").click(function () {
        showRooms();
    });
    $("#securitySettingsBtn").click(function () {
        showSecurityDevices();
    });
    $(".securityLink").click(function () {
        switchViews("securitySettingsView");
    });
    $(".homeLink").click(function () {
        switchViews("homeView");
    });
    $(".roomLink").click(function () {
        switchViews("roomSettingsView");
    });
    $(".Kueche").click(function () {
        showKitchenDevices();
    });
    $("#kitchenAllBtnOn").click(function(){
        kitchenEnableAll();
    });
    $("#kitchenAllBtnOff").click(function(){
        kitchenDisableAll();
    });
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
    $("#windowBtn").click(function () {
        switchViews("windowView");
    });
    $(".saveChangesBtn").click(function () {
        showAlert();
    });
    $("#cancel").click(function() {
        switchViews("loginView");
    });
    $(".home").click(function () {
        switchViews("homeView");
    });

    $("#register").click(function(){
        registerUserToDatabase();
    });

    $(".addDevice").click(function(){
        switchViews("addDeviceView");
    });

    $("#saveDevice").click(function(){
        addDeviceToARoom();
    });

    $("#backToKitchen").click(function(){
        showKitchenDevices();
        switchViews("kitchenView");
    });
    $("#windowBtn").click(function(){
        showAllWindows();
    });
    
    $("table").on('click', 'button.deleteDevice', function(){
        var confirmOnDelete = confirm('Dieses Gerät löschen?');
        if(confirmOnDelete){
            deletethisDevice($(this).attr('id'));
        }
    });    

});
