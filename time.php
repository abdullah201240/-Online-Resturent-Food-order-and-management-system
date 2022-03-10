<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  display: inline;
  font-size: 40px;
  margin-top: 0px;
}
</style>
</head>
<body>
    <?php 
    $hi=1;
    
    ?>

    <div>Registration closes in <span id="time">05:00</span> minutes!</div>
    <div class="container">
<h1 id="ten-countdown">10:00</h1>


    </div>
    <script >
      function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
           
            element.innerHTML = "Time is up!";
           

        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "ten-countdown", 1, 0 );





        </script>
        <?php
        if($hi==0){
            echo"done";
        } 
        else{
            echo"notdone";
        }?>
</body>
</html>
