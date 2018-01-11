<?php
// Connection to database
//require_once ("includes/settings.php")
$hostname = "localhost";
$database = "computer_db";
$username = "root";  
$conn =  @mysql_connect($hostname, $username);
mysql_select_db($database,$conn);

if(isset($_POST['submit'])) {
   $seat_number = $_POST['seat_no'];
   
   $sql1 = mysql_query("SELECT seat_no FROM te_cm_iii WHERE seat_no = $seat_number");
   $row1 = mysql_num_rows($sql1);
   
   if($row1 == 0) {
      echo 'Error, ID does not exist';
   } else {
      header('Location: result.php?roll_no='.$seat_number);
   }   
}
?>

<html>
<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon"/>
<head>
	<title>Online Result</title>
</head>
<link rel="stylesheet" href="result.css">
<body>
<img src="logo.JPG" id="logo" height="120px" align="left">
	<img src="clg name.jpg" >
<hr width="100%" height="2px" color="black">
<div>
	<center><h1 id="heading">ONLINE RESULT DISPLAY SYSTEM</h1></center>
</div>
<div id="note">
	<h3><b>Note : Enter your 5 digit Seat Number which is given in Hall Ticket.</b></h3>
</div><br><br><br><br>
    <center><form method="post" action="result.php">	
        <label>Enter Seat Number :
        <input type="text" name="seat_no" id="seat_no" />
        </label>
        <label><br><br>
        <input type="submit" name="submit" id="submit" value="Submit" />
        </label>
    </form></center>
</body>
</html>