$(document).ready(() => {
    
    let date = new Date().toLocaleDateString();
    let clock = new Date().toLocaleTimeString('en-GB', { hour: "numeric", minute: "numeric" });
    $("#date").text(date);
    $("#time").text(clock);


});