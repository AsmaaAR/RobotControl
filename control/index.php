<!DOCTYPE html>
<html>
<head>
<meta charset="windows-1256">
<link rel="stylesheet" href="NewFile.css" type="text/css">
<title>Controlar</title>
</head>
<body>
<div class="content">

<form action="connection.php" method="post" class="slidecontainer">

<div class="slidecontainer">
   <h3> Motor 1: </h3>
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange" name="motor1">  
  <span class="limit" ></span>
</div>

<div class="slidecontainer">
   <h3> Motor 2: </h3>
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange" name="motor2">  
  <span class="limit" ></span>
</div>

<div class="slidecontainer">
   <h3> Motor 3: </h3>
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange" name="motor3">  
  <span class="limit" ></span>
</div>
  
<div class="slidecontainer">
   <h3> Motor 4: </h3>
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange" name="motor4">  
  <span class="limit" ></span>
</div>
  
<div class="slidecontainer">
   <h3> Motor 5: </h3>
  <input type="range" min="0" max="180" value="0" class="slider" id="myRange" name="motor5">  
  <span class="limit" ></span>
</div>
  
<div class="slidecontainer">
     <input value="save" type="submit" name="save">
</div>
		
<div class="slidecontainer">
     <input value="on" type="submit"  name="on">
</div>
		
<div class="slidecontainer">
     <input value="off" type="submit"  name="off">
</div> 
		
  
  

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<script>
		function updateLabel() {
		var limit = this.parentElement.getElementsByClassName("limit")[0];
		limit.innerHTML = this.value;
		}

		var slideContainers = document.getElementsByClassName("slidecontainer");

		for (var i = 0; i < slideContainers.length; i++) {
		var slider = slideContainers[i].getElementsByClassName("slider")[0];
		updateLabel.call(slider);
		slider.oninput = updateLabel;
		}
	</script>
	</form>
</div>
</body>
</html>