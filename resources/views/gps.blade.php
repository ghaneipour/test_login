GPS PAGE
 <style>
     html {
    font-family: sans-serif;
    line-height: 1.15;
    height: 100%;
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #1a1a1a;
    text-align: left;
    height: 100%;
    background-color: #fff;
}

.container {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.map {
    flex: 1;
    background: #f0f0f0;
}
html {
    height: 100%;
}

body {
    height: 100%;
}

.container {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.map {
    flex: 1;
}
</style>

<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();
 $geoplugin->locate();

 echo '<br>'.$geoplugin->latitude;
 echo '<br>'.$geoplugin->longitude;
 
 
//     if ( $geoplugin->currency != $geoplugin->currencyCode ) {
//         //our visitor is not using the same currency as the base currency
//         echo "<p>At todays rate, US$100 will cost you " . $geoplugin->convert(100) ." </p>\n";
//     }
//     $nearby = $geoplugin->nearby();

//     if ( isset($nearby[0]['geoplugin_place']) ) {
    
//         echo "<pre><p>Some places you may wish to visit near " . $geoplugin->city . ": </p>\n";
    
//         foreach ( $nearby as $key => $array ) {
            
//             echo ($key + 1) .":<br />";
//             echo "\t Place: " . $array['geoplugin_place'] . "<br />";
//             echo "\t Region: " . $array['geoplugin_region'] . "<br />";
//             echo "\t Latitude: " . $array['geoplugin_latitude'] . "<br />";
//             echo "\t Longitude: " . $array['geoplugin_longitude'] . "<br />";
//         }
//         echo "</pre>\n";
//     }
    

// function init() {
//     const initialPosition = { lat: 59.325, lng: 18.069 };
  
//     const map = new google.maps.Map(document.getElementById('map'), {
//       center: initialPosition,
//       zoom: 15
//     });
  
//     const marker = new google.maps.Marker({ map, position: initialPosition });
  
//     // Get user's location
//     if ('geolocation' in navigator) {
//       navigator.geolocation.getCurrentPosition(
//         position => console.log(`Lat: ${position.coords.latitude} Lng: ${position.coords.longitude}`),
//         err => alert(`Error (${err.code}): ${err.message}`)
//       );
//     } else {
//       alert('Geolocation is not supported by your browser.');
//     }
//   }

// function init1() {
//     new google.maps.Map(document.getElementById('map'), {
//       center: { lat: 59.325, lng: 18.069 },
//       zoom: 15
//     });
//   }

//   function init2() {
//     const initialPosition = { lat: 59.325, lng: 18.069 };
  
//     const map = new google.maps.Map(document.getElementById('map'), {
//       center: initialPosition,
//       zoom: 15
//     });
  
//     const marker = new google.maps.Marker({ map, position: initialPosition });
//   }
// mmmmm1();
//  function mmmmm1()
//  {
//      $val= new google.maps.Map(
//          document.getElementById('map'), 
//          [
//          center=> array(  lat=> 59.325, lng=> 18.069 ),
//          zoom=> 15
//         ]
//  );
//    return $val;
//  }


// $pubnub="";

// $pubnub->publish(array(
//     'channel' => 'live_map_coords',
//     'message' => array( 32.3482, 51.3344)//,32.3482, 51.3544 )
// ));
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiFiNcdGqrxyg0f_SApggDajaW0fpWGDI&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>



9758f0812564b518 - AIzaSyDiFiNcdGqrxyg0f_SApggDajaW0fpWGDI


    AIzaSyDiFiNcdGqrxyg0f_SApggDajaW0fpWGDI
 
    