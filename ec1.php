<html>
<section style="background-color:white">
<head>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<header id="hh1"style="color:#fff; font-weight:bold;text-align:center;font-size:45px ;background-color:#153873">
WELCOME TO THE DEPARTMENT OF ELECTRONICS AND COMMUNICATION  ENGINEERING
</header>
<br><br>
<p style="font-color:#01203E;font-size:30px;text-align:center"> DETAILS OF THE STUDENTS ARE GIVEN BELOW </p>
<style>
.btn-group button {
background-color:#fa672e;
  border: 1px solid green; 
  color: white; 
  padding: 10px 10px; 
  cursor: pointer; 
  text-align:center;
  width:10%;
  height:10%;
  display:inline block;
  font-size:16px;
}

table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
  padding: 8px;
  font-size:20px;
  
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #E29237;}

.btn-group button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}


.btn-group button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn-group button:hover span {
  padding-right: 55px;
}

.btn-group button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
<body>


<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}


mysqli_select_db($con,"admin" );

$result = mysqli_query($con,"SELECT * FROM ecdept");
?>
<div class="btn-group">
<form action="first_page.html">
<center><button  type="submit" class="btn btn-primary btn-sm" style="margin-left:90%" name="logout"><span>LOGOUT</span></button>
</form>
</div>
<table border=1 bgcolor="khaki" cellspacing = "2" width="30%">
	<center>
<tr>
<th>NAME</th>
<th>USN</th>
<th>CGPA</th>
<th>RESUME UPLOAD</th>
<th> RESUME DOWNLOAD</th>
</tr>
</center>
<?php

while($row = mysqli_fetch_array($result))
{
	echo "<tr align=center>
	<td>" . $row['name']  . "</td>
  <td>" .  $row['usn']. "</td>
  <td>" .  $row['cgpa']. "</td>
	<td><form action='login_upload.html' ><button class='button' type='submit' value='UPLOAD'>UPLOAD</button></form></td>
	<td><button class='button' type='submit' type='submit' value='DOWNLOAD'><a href='upload/'>DOWNLOAD</a></button></td>
	</tr>";

}
	mysqli_close($con);
?>
 
 </table>
 <br><br><br><br><br><br>
<div class="btn-group">
<form action="newentries2.html">
<center><button type="submit" name="NEW"><span> NEW</span></button>
</form>
<br><br><br><br><br><br>
<div class="btn-group">
<form action="after_login.html">
<center><button type="submit" name="NEW"><span>Back</span></button>
</form>
 
 
 
</center>
</form>
</div>
</body>
</html>


