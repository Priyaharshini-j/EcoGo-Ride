<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Daily-Rentals</title>
<link rel="stylesheet" href="Daily-Rentals.css">
<link rel="stylesheet" href="stopwatch.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="timer.js"></script>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
    
.button{
   display: inline-flex;
   height: 55px;
   width: 250px;
   padding: 10px;
   background-color:rgb(219, 84, 90) ;
   border: none;
   outline: none;
   border-radius: 10px;
   overflow: hidden;
    font-family: 'QuickSand',sans-serif;
    font-size: 20px;
    font-weight: 550;
    cursor: pointer;
    justify-content:center;
}
.button:hover{
    background-color: rgba(222, 98, 104, 0.947);
}
.ride{
    background-color: rgb(255,255,255);
}
    </style>
</head>
<body>
    <div class="navbar">
        <img src="images/logo.png" class="logo"/>
        <nav>
        <ul>
        <li><a href="logout.php"> LOGOUT </a></li>
                <li><a href ="gocontact.php">CONTACT</a></li>
                     <li><a  href ="About.php">ABOUT</a></li>
                     <!--li><a href ="EcoPayment.php">PAYMENT</a></li-->
                     <li><a class="active" href ="#Daily-Rentals">DAILY RENTALS</a></li>
        <li><a href ="Home.php">HOME</a></li>
        </ul>
        </nav>
    </div>
    <center>
    <div>
    <h2 class="heading">Daily Rentals</h2>
    </div>
    </center>
    <div>
        <table>
        <tr>
        <td width="60%">
        <img src="images/Dailyrent.jpg" alt="Bikes imges" class="img" />
        </td>
        <td width="40%">
        <h2 class="dail">Daily</h2>
        <h2 class="rent">&nbsp;&nbsp; Rentals</h2>
        <h3 class="con"> Things we provide </h3>
        <br/>
        <ul>
        <li>Good Condition bikes</li>
        <li>Always Sanitized before your rides</li>
        <li>Helmets are provided</li>
        <li>Bikes and scooter will be always available </li>
        <li>No theft or unauthorised bikes are used</li>
        <li>Stealing our bikes is illegal </li> 
        </ul>
        </td>
        </tr>
        </table>
    </div>
    <br/>
    <br/>
    <center>
    <div class="ride">
        <center>
        <forms name="myForm">
        <br/>
        <div class="">
        <button type= "button" class="button" id="mybutton">
            <span class="myButton">Start Ride</spen>&nbsp;
            <span class="myButton_icon">
            <ion-icon name="bicycle"></ion-icon>
</span>
</button>

<script type="text/javascript">
    document.getElementById("mybutton").onclick = function () {
        location.href = "mindex.php";
    };
</script>
</div>

           
           
</forms>
</center>
    </div>
    </center>
</body>
</html>





