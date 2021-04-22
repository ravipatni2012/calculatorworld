<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">

<link rel="stylesheet" href="./css/textbox.css">
<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/button.css">

<!-- leftsidenav -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/leftsidenav.css">

<!-- uppersidenav -->

<link rel="stylesheet" href="./css/uppersidenav.css">


</head>

<body>

<!-- leftsidenav_Started-->

<div id="side" class="sidenav">
  <a href="./index.html">About</a>


  <button class="dropdown-btn">Converter 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="./unit.php">Memory Unit </a>
  </div>
  
  <button class="dropdown-btn">Calculators 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="./age.php">Age Calculator</a>
    <a href="./bmi.php">BMI Calculator</a>
    <a href="./emi.php">EMI Calculator</a>
	<a href="./fd.php">FD Calculator</a>
  </div>
    <a href="./share.html">Contact</a>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


<!-- uppersidenav_Started-->

<div class="container">

  <div class="text-block">
    
	



<p>

<!-- datetime-->

	<div align="right"  style="color:white"><font size="3">
		<script type="text/javascript" src="./js/date_time.js"></script>

		<span id="date_time"></span>
		 <script type="text/javascript">window.onload = date_time('date_time');</script> </b><br>
		</font>

	</div >
	
<br>
	
<!-- goodmoring message-->
	
	<script type="text/javascript">
        document.write("<center><font size=4 style='color: white;'>");
        var day = new Date();
        var hr = day.getHours();
        if (hr >= 0 && hr < 12) {
            document.write("Good Morning!");
        } else if (hr == 12) {
            document.write("Good Noon!");
        } else if (hr >= 12 && hr <= 17) {
            document.write("Good Afternoon!");
        } else {
            document.write("Good Evening!");
        }
        document.write("</font></center>");
    </script>


</p>




  </div>
</div>

<br><br>




<form action="" method="POST">


<div class="font">




<table align="center"  bgcolor="LightGrey" border="1" cellpadding="15px" bordercolor="black" >

	<tr >
		<td  colspan="2" style="text-align:center">

			<label for="age">BODY MASS INDEX (BMI) Calculator</label> 
		</td>

	</tr>

	
	
	<tr>

		<td>
		<label for="height">Your Height:</label>
		
		</td>
		
		<td>	
			<label >Feet</label>
			<input name="txtheightfeet" type="number" class="textbox" style='text-transform:uppercase' step=1 autofocus required>
			<label >Inch</label>
			<input name="txtheightinch" type="number" class="textbox" style='text-transform:uppercase' step=1 autofocus required>
			
				
			
		</td>
		
		

	</tr>
	

	
	<tr>

		<td>
		<label for="weight">Your Weight:</label>
		
			
		<td>
				<label >Kg</label>
				<input name="txtweight" id="txtweight" type="number" class="textbox" style='text-transform:uppercase' step=1 >
		</td>
		
		
		

	</tr>

		
 
	<tr>
		<td colspan="2" style="text-align:center">

			<input type="submit" value="Submit" name="btnsubmit"  class="button">
			<input type="submit" name="btnclear"  class="button"  value="Clear All">
			
		</td>

	</tr>



 
</table>

</div>

</form>


 
</body>
</html>

<?php

if (isset($_POST['btnsubmit']))
{

	
	
	$selectedheight =$_POST['txtheightfeet'];
	
	$convertedinch=$selectedheight*12;
	
	$selectedinch =$_POST['txtheightinch'];
	
	$height=$convertedinch + $selectedinch;
	$finalheight=$height/39.370;
	
	
	$selectedweight =$_POST['txtweight'];



		$calc=round($selectedweight/($finalheight*$finalheight),2);
		
		
		
echo " <b> <center> <br>";		
	

	if($calc <= '18.0')
	{

		echo (" Your BMI="  .$calc ." and you are underweight");	

	}

	elseif ($calc >='18.0' && $calc<= '24.9')
	{
		echo (" Your BMI="  .$calc ." and you are in normal weight");
	}
	elseif($calc >= '25.0' && $calc<= '29.9')
	{
		echo (" Your BMI="  .$calc ." and you are in over weight");
	}
	else
	{
		echo (" Your BMI="  .$calc ." and you are obese");
	}
	
}
?>