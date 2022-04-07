

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>

  <link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
    type="text/css"
  />
 <!-- Turf & Polyline -->
<script src="https://npmcdn.com/@turf/turf/turf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mapbox-polyline/1.1.1/polyline.js"></script>
<script src="timer.js"></script>
  <title> Ride Tracker</title>
  <style>
    body {
      margin: 10;
      background-color: white;
    }


    #map {
      height: 70vh;
      width: 80vw;
      align-items: center;
    }
    *{
    margin: 0;
    padding: 0;
}
.logo
{
    width:90px;
    cursor:pointer;
    align-self: center;
    background-color: white;
}

  #button-start, #button-stop , #myButton{
   display: inline-flex;
   height: 50px;
   width: 120px;
   border-style: solid;
   justify-content: center;
   padding: 15px;
   line-height: 10px;
   text-align:center;
   background-color: rgb(168, 20, 20);
   border: none;
   outline: none;
   border-radius: 10px;
   overflow: hidden;
    font-family: 'QuickSand',sans-serif;
    font-size: 15px;
    font-weight: 100;
    cursor: pointer;
    color: white;
}
#button-start:hover, #button-stop:hover , #myButton:hover{
    background-color: rgba(222, 98, 104, 0.947);
    color:black;
    
}

  </style>
  <script src="map.js" defer></script>

</head>
<body>
        <div class="navbar">
            <img src="images/logo.png" class="logo">
            
        </div>
  <center>
  <div id='map'></div>
  <div class="wrapper">
                <p><span id="seconds">00</span>:<span id="tens">00</span></p><br/>
                <button id="button-start" name="start" placeholder="Start Ride">START RIDE</button>
                <button id="button-stop" name="stop" placeholder="End Ride" >END RIDE</button>

                <br/>
                
                <br/>
            </div> 
           
</center>
</body>
</html>
