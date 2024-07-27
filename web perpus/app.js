let map;

function initialize() {
  const mapProperties = {
    center: { lat: -8.5830695, lng: 116.3202515 },
    zoom: 9,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  };

  map = new google.maps.Map(document.getElementById("map"), mapProperties);
}

google.maps.event.addDomListener(window, 'load', initialize);