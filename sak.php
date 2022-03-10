<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <button onclick="getLocation()">Get Location</button>
    <div id="output"></div>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js">
 </script>
 <script>
var x= document.getElementById('output');
x.innerHTML = "here it is";
  function  getLocation(){
      if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
      }

  }
  function showPosition(position){
      var id=position.coords.latitude;
      var id2=position.coords.longitude;

      //x.innerHTML="latitude= "+position.coords.latitude;
      //x.innerHTML+="<br/>"
      //x.innerHTML+="longitude = "+position.coords.longitude;
      x.innerHTML=id;
      x.innerHTML+=id2;

      var locapi="http://maps.google.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&key=AIzaSyC7JvFBpthI4QGr_nemgJfJ_yKd659Lc3o;";
     x.innerHTML=locapi;
  }



 </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>