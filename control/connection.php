<!-- Asmaa Abdurrhman Azimudin
     Umm-Al-Qura university 
-->
<?php
// get value:
error_reporting(E_ALL);
ini_set('display_errors', 1);
$motor1 = $_POST["motor1"];
$motor2 = $_POST["motor2"];
$motor3 = $_POST["motor3"];
$motor4 = $_POST["motor4"];
$motor5 = $_POST["motor5"];

// connection to data base:
$con = new mysqli('localhost','root','','control');

if(isset($_POST["save"])){
$insertvar = "INSERT INTO motors(motor1,motor2,motor3,motor4,motor5) VALUES ('$motor1','$motor2','$motor3','$motor4','$motor5')";
$res = mysqli_query($con,$insertvar);
echo "Saved successfully";
echo "<br/>";
}

if(isset($_POST["on"])){

       $insertvar2 = "INSERT INTO playbutton(play) VALUES (1)";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "on successfully";
         echo "<br/>";
}
if(isset($_POST["off"])){

       $insertvar2 = "INSERT INTO playbutton(play) VALUES (0)";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "off successfully";
         echo "<br/>";
}

?>
