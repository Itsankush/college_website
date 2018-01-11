<?php
$hostname = "localhost";
$database = "computer_db";
$username = "root";  
$conn = @mysql_connect($hostname, $username);
mysql_select_db($database,$conn);
$seat_number = $_POST['seat_no'];

$query = mysql_query("SELECT * FROM te_cm_iii WHERE seat_no = $seat_number");
$row1 = mysql_fetch_array($query);

$name = $row1['name'];
$seat_number = $row1['seat_no'];
$reg_no= $row1['reg_no'];
$mp = $row1['mp'];
$os= $row1['os'];
$sooad = $row1['sooad'];
$cn = $row1['cn'];
$wt = $row1['wt'];
$bce= $row1['bce'];
$total_marks= $row1['total_marks'];
$per= $row1['percentage'];
?>

<html>
<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon"/>
<head>
	<title>Result</title>
</head>
<link rel="stylesheet" href="result.css">
<body>
	<img src="logo.JPG" id="logo" height="120px" align="left">
        <img src="clg name.jpg" >
<hr width="100%" height="2px" color="black">
<center><h3><u>Statement of Marks</u></h3></center>
<div class="details">
<table>
<tr>
	<th align="left">Name</th><td>: <?php echo $name ?></td>
</tr>
<tr>
	<th align="left">Examination</th><td>: THIRD YEAR ENGINEERING (SEMESTER V)</td>
</tr>
<tr>
	<th align="left">Branch</th><td>: COMPUTER ENGINEERING</td>
</tr>
<tr>
	<th align="left">Held In</th><td>: NOVEMBER 2016</td>
</tr>
<tr>
	<th align="left">Seat Number</th><td>: <?php echo $seat_number ?></td><th>Registration No.</th><td>: <?php echo $reg_no ?></td>
</tr>
</table>
</div><br>
<table border="1" width="100%" id="mark">
<tr>
	<th>Title of Subject</th>
	<th>Max. Marks</th>
	<th>Min. Marks</th>
	<th>Marks Obtained</th>
</tr>
<tr>
	<td><b>1. Microprocessor</b></td>
	<td>100</td>
	<td>40</td>
	<td><?php echo $mp ?></td>
</tr>
<tr>
	<td><b>2. Operating System</b></td>
	<td>100</td>
	<td>40</td>
	<td><?php echo $os ?></td>
</tr>
<tr>
	<td><b>3. Structured and Object Oriented Analysis & Design</b></td>
	<td>100</td>
	<td>40</td>
	<td><?php echo $sooad ?></td>
</tr>
<tr>
	<td><b>4. Computer Network</b></td>
	<td>100</td>
	<td>40</td>
	<td><?php echo $cn ?></td>
</tr>
<tr>
	<td><b>5. Web Technology</td>
	<td>100</td>
	<td>40</td>
	<td><?php echo $wt ?></td>
</tr>
<tr>
	<td><b>6. Business Communication & Ethics</b></td>
	<td>100</td>
	<td>40</td>
	<td><?php echo $bce ?></td>
</tr>
<tr>
	<th rowspan="2"></th>
	<th>Total Max. Marks</th>
	<th>Result with %</th>
	<th>Total Marks Obtained</th>
</tr>
<tr>
	
	<td><b>600</b></td>
	<td><b><?php echo $per ?></b></td>
	<td><b><?php echo $total_marks ?></b></td>
</tr>
</table>
<h4>Declared Date : 23/1/2017</h4><br><br><br>
<table width="100%">
<tr height="50px">
	<th><img src="as.jpg"></th>
	<th><img src="signature.jpg"></th>
</tr>
<tr>
	<th>Exam Cell</th>
	<th>Principal</th>
</tr>
</table>
</body>
</html>