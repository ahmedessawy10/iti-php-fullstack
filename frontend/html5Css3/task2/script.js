
var country = document.getElementById("country");
var countries=[{
    name:"egypt",
    latitude: 30.0444,
    longitude: 31.2354,
},{
name: "Japan",
latitude: 35.6895,
longitude: 139.6917
},
{
name: "Brazil",
latitude: -15.8267,
longitude: -47.9218
},
{
name: "Canada",
latitude: 45.4215,
longitude: -75.6972
}];


function myMap(mylat,mylong) {
  var mapProp = {
    center: new google.maps.LatLng(mylat,mylong),
    zoom: 5,
  };
  var map = new google.maps.Map(
    document.getElementById("googleMap"),
    mapProp
  );
}
function getcor(){
    var selectedCountry = country.value;
    console.log(selectedCountry);
    var selectedCountryData = countries.find(function (country) {
        return country.name === selectedCountry;
      });
      if (!selectedCountryData) {
        console.error("Country not found!");
        return;
    }
      var latitude = selectedCountryData.latitude;
      var longitude = selectedCountryData.longitude;
     

    myMap(latitude,longitude); 

}

window.onload = function () {
    getcor();
}

country.addEventListener("change", function () {

    getcor();
   
});

