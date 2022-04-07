window.onload = function () {
 
    var seconds = 00;
    var tens = 00;
    var appendTens = document.getElementById("tens")
    var appendSeconds = document.getElementById("seconds")
    var buttonStart = document.getElementById("button-start");
    var buttonStop = document.getElementById("button-stop");
    var Interval ;
    var cost ;
    var tsec ;
      buttonStart.onclick = function() {
     
      clearInterval(Interval);
       Interval = setInterval(startTimer, 10);
    }
   
      buttonStop.onclick = function() {
        tsec = seconds+(tens/1000);
        cost =tsec*0.00277;
        alert("The Cost for your Ride is: "+cost);
        location.href="pay.php";
          clearInterval(Interval);
          tens = "00";
        seconds = "00";
        appendTens.innerHTML = tens;
      appendSeconds.innerHTML = seconds;
   }

   
    function startTimer () {
      tens++;
     
      if(tens <= 9){
        appendTens.innerHTML = "0" + tens;
      }
     
      if (tens > 9){
        appendTens.innerHTML = tens;
       
      }
     
      if (tens > 99) {
        console.log("seconds");
        seconds++;
        appendSeconds.innerHTML = "0" + seconds;
        tens = 0;
        appendTens.innerHTML = "0" + 0;
      }
     
      if (seconds > 9){
        appendSeconds.innerHTML = seconds;
      }
   
    }
   
  
  }
  
