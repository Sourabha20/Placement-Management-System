<?php      
    include('connection.php');    
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection   
        $password = stripcslashes($password);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from upload where  password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            header("location: newp7.html"); 
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  