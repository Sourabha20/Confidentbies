
<?php
$host = "sql6.freesqldatabase.com";
   //$host = "localhost";
    $user = "sql6414113";
   //$user= "root";
	$password = "VqnseCPhCE";
    //$password = ''; 
	$db_name = "sql6414113";
    //$db_name = "cloud_project";
    $con = new mysqli($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	mysqli_select_db($con,"sql6414113");

    ?>