<html>
<?php      
    include('connection.php');  
    $name = $_POST['name'];  
    $usn = $_POST['usn'];  
	$cgpa = $_POST['cgpa'];
	 
        $name = stripcslashes($name);  
        $usn = stripcslashes($usn); 
        $cgpa = stripcslashes($cgpa); 		
        $name = mysqli_real_escape_string($con, $name);  
        $usn= mysqli_real_escape_string($con, $usn); 
        $cgpa= mysqli_real_escape_string($con, $cgpa); 		
      
        $sql = "insert into btdept values('$name','$usn','$cgpa')"; 
        $result = mysqli_query($con, $sql);  
         //echo '<script> alert("Insertion Successful") </script>';
            //echo "<h1><center> insertion successful </center></h1>"; 
            echo "<h1 style='color:red; font-size:50px'><center> INSERTION SUCCESSFUL </center></h1>"; 
             echo '<script>alert("INSERTION SUCCESSFUL")</script>';  
             
?>  
<p style="font-size:30px"> Click below,to see the updated table </p>
<form action="bt1.php">
<button type="submit" value="back" name="BACK">BACK</button>
</html>