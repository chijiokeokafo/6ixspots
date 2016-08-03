
// $(function)() {
//   $("#hero").click(function() {
//   $('.transform').toggleClass('transform-active');
//   console.log('this');
// });
// }




// MAP INITIALIZE
function initMap() {
  var mapDiv = document.getElementById('map');
  var map = new google.maps.Map(mapDiv, {
      center: {lat: 43.653, lng: -79.383},
      zoom: 13
  });
}