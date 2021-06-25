<!-- Asmaa Abdurrhman Azimudin
     Umm-Al-Qura university 
-->
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("localhost","root","","control") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"control") or die("Error: Can't Connect to DB");
 
$sql= mysqli_query($con, "SELECT * FROM motors ORDER BY id DESC LIMIT 1");
 
while ($row = mysqli_fetch_assoc($sql)) { 
    
    echo (' motor1: '); echo $row['motor1'];
    echo"<br>";
    echo (' motor2: '); echo $row['motor2'];
    echo"<br>";
    echo (' motor3: '); echo $row['motor3'];
    echo "<br>";
    echo (' motor4: '); echo $row['motor4'];
    echo"<br>";
    echo (' motor5: '); echo $row['motor5'];
    echo"<br>";

}

?>
