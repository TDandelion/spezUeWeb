
function switchViews(view) {
    for (var i = 0; i < views.length; i++) {
        if (view === views[i]) {
            $("#" + view).show();
            $("#headerView").show();
        } else {
            $("#" + views[i]).hide();
        }
    }
}

function showWeather(data){
  console.log(data);
}
