const WEATHERURL = "https://api.darksky.net/forecast/773af2afa7529a84fce81ea1e39d0e77/48.210033,16.363449";

function getWeather(){
  $.ajax({
    url: WEATHERURL,
    dataType: 'jsonp',
    success: showWeather,
    error: function(err){ console.log(err)},
  });
}
