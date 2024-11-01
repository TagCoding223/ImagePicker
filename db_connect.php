<?php
    $server='localhost';
    $username='id21372190_vishal_db';
    $password='db_2005_Vishal';
    $database='id21372190_vishal';
    $con=mysqli_connect($server,$username,$password,$database);
    if(!$con){
        die("Connection failed ");
    }
    echo "Connection done";
    
    $query="select * from Student;";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    echo "<br>Roll No : ",$row['Rollno'],"<br>Name : ",$row['Name'],"<br>Class : ",$row['Class'],"<br>Address : ",$row['Address'];
?>