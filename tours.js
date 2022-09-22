function mapSize() {
    $("#map").css({"height": $(".weather").css("height"), "width": $(".weather").css("width")});
    $("#dirMap").css({"height": $(".details").css("height"), "width": $(".details").css("width")});
}

var map = mapSize;

window.onresize = map;

var coords = [
  ['51.12957927158707', '1.3212347030639648'],
  ['55.94890725035077', '-3.195426210461873'],
  ['47.5576247', '10.7496264'],
  ['48.80340041108276', '2.125536485545802'],
  ['49.9339431', '6.2024261']
];

var adrs = ['Castle Hill Rd, Dover CT16 1HU, United Kingdom', 'Castlehill, Edinburgh EH1 2NG, United Kingdom', 'Neuschwansteinstraße 20, 87645 Schwangau, Germany', 'Place d\'Armes, 78000 Versailles, France', 'Montee du Chateau, Vianden, LU 9401'];

var castles = ['Dover Castle', 'Edinburgh Castle', 'Neuschwanstein Castle', 'The Palace of Versailles', 'Vianden Castle'];
var descriptions = ['<b>Open Daily 10am - 5pm</b><br><br><u>Upcoming Events</u>:<br>No Upcoming Event Information Available',
                  'TEMPORARILY CLOSED<br>REOPENING ON 30APR2021',
                  'Open Daily 9am - 6pm<br>Upcoming Events:<br>No Upcoming Event Information Available',
                  'In-door Tours - TEMPORARILY CLOSED<br>Park Tours Tickets are still available for purchase.',
                  'Open Daily 10am - 6pm<br>Upcoming Events:<br>No Upcoming Event Information Available'];

var castleNum;

function init()
{
  tabDisplay(0);
}

function tabDisplay(cNum)
{
  castleNum = cNum;
  
  $("#dirMap").empty();
  $("#directions").html("Submit address to see distance info here");

  $("#calcText").html("<hr>Calculate distance to " + castles[castleNum]);
  //fetch weather data and put it in the appropriate paragraph element
  fetch('https://api.openweathermap.org/data/2.5/weather?lat=' + coords[castleNum][0] + '&lon=' + coords[castleNum][1] + '&units=imperial&appid=6b13e899a56f2f9bc9eab2447c3c7577')
    .then(res => res.json())
    .then(data => showWeather(data));
  
  var mapOp = {
    center: new google.maps.LatLng(coords[castleNum][0], coords[castleNum][1]),
    zoom: 17
  };
   
  var map = new google.maps.Map(document.getElementById("map"), mapOp);
  
  $("#details").html(descriptions[castleNum]);

  $(".tab").removeClass("gold");
  $(".tab").eq(castleNum).addClass("gold");
}

function getDir()
{
  var usrAddr = document.getElementById("addr").value;
  var dirOp = {
    center: new google.maps.LatLng(coords[castleNum][0], coords[castleNum][1]),
    zoom: 17
  };

  var dir = new google.maps.Map(document.getElementById("dirMap"), dirOp);

  var directionsService = new google.maps.DirectionsService();

  var directionsDisplay = new google.maps.DirectionsRenderer();
  
  directionsDisplay.setMap(dir);


  var request = {
    origin: usrAddr,
    destination: adrs[castleNum],
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.IMPERIAL
  };

  directionsService.route(request, (result, status) => {
    if(status == google.maps.DirectionsStatus.OK) {
      $("#directions").html("From: " + usrAddr + "<br>To: " + adrs[castleNum] + "<br>Driving Distance: " + result.routes[0].legs[0].distance.text + "<br>Duration: " + result.routes[0].legs[0].duration.text);
      directionsDisplay.setDirections(result);
    } 
    else {
      directionsDisplay.setDirections({routes: []});

      dir.setCenter(new google.maps.LatLng(coords[castleNum][0], coords[castleNum][1]));

      $("#directions").html("Given location is not within driving range of<br>" + adrs[castleNum]);
    }
  });
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(usePosition);
  }
  else {
    loc.html("Geolocation is not supported by this browser.");
  }
}

function usePosition(position) {
  crds = position.coords;
  
  var dirOp = {
    center: new google.maps.LatLng(coords[castleNum][0], coords[castleNum][1]),
    zoom: 17
  };

  var dir = new google.maps.Map(document.getElementById("dirMap"), dirOp);

  var directionsService = new google.maps.DirectionsService();

  var directionsDisplay = new google.maps.DirectionsRenderer();
  
  directionsDisplay.setMap(dir);


  var request = {
    origin: new google.maps.LatLng(crds.latitude, crds.longitude),
    destination: adrs[castleNum],
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.IMPERIAL
  };

  directionsService.route(request, (result, status) => {
    if(status == google.maps.DirectionsStatus.OK) {
      $("#directions").html("From: Your Position<br>To: " + adrs[castleNum] + "<br>Driving Distance: " + result.routes[0].legs[0].distance.text + "<br>Duration: " + result.routes[0].legs[0].duration.text);
      directionsDisplay.setDirections(result);
    } 
    else {
      directionsDisplay.setDirections({routes: []});

      dir.setCenter(new google.maps.LatLng(coords[castleNum][0], coords[castleNum][1]));

      $("#directions").html("Your location is not within driving range of<br>" + adrs[castleNum] );
    }
  });
}

function showWeather(data)
{
  $("#wInfo").html("<u>Weather Info</u>:<hr>Temp: " + data['main']['temp'] + "°F<br>Feels like: " + data['main']['feels_like']
  + "°F<br>Max temp: " + data['main']['temp_max'] + "°F<br>Min temp: " + data['main']['temp_min']
  + "°F<br>Pressure: " + data['main']['pressure'] + "hPa<br>Humidity: " + data['main']['humidity']
  + "%<br>Wind speed: " + data['wind']['speed'] + "m/s<br>Direction: " + data['wind']['deg'] 
  + "°<br>Gust: " + data['wind']['gust'] + "m/s<br>Cloud Coverage: " + data['clouds']['all']
  + "%<br>Type: " + data['weather'][0]['main'] + "<br>Description: " + data['weather'][0]['description']
  + "<br>Timezone: UTC+" + (data['timezone']/(60*60)));
    mapSize();
}