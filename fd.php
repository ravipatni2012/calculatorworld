<!DOCTYPE html>

<head>
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

			<label for="age">FD Calculator</label> 
		</td>

	</tr>

	
	
	<tr>

		<td>
		<label for="dob">Total Investment:</label>
		</td>
		
		<td>		
			<input type="text" name="txtinvestment" class="textbox" style='text-transform:uppercase' autofocus required>
		</td>
		
		

	</tr>
	
	<tr>

		<td>
		<label for="dob">Rate of Interest (P.A):</label>
		
		<td>		
		<input type="range" min="1" max="12" step=".1" value="1" id="roi" name="roibar" onchange='document.getElementById("ratebar").value = "Rate = " + document.getElementById("roi").value;'/>
		<br>
		
		<input type="text" name="ratebar" id="ratebar" value="Rate = 1" disabled />
		</td>
		
		

	</tr>
	
	<tr>

		<td>
		<label for="dob">Time Period:</label>
		
		<select class="dropbtn" name="timeselect" id="timeselect" onclick="Reset();" required>
			
				<option value="0">Select Unit</option>
				<option value="Year">Year</option>
				<option value="Month">Month</option>
				<option value="Day">Day</option>
										
		</select>
		
		<td>

		<script type="text/javascript">
		function Reset() 
		{
			timebar.value= "Time";
			time.value="1";
		}
		</script>		
		<input type="range" min="1" max="366" step="1" value="1" id="time" name="time" onchange='document.getElementById("timebar").value = "Time = " + document.getElementById("time").value + "  "+document.getElementById("timeselect").value;'/>
		<br>
		
		<input type="text" name="timebar" id="timebar" value="Time" disabled />
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

	
	$selectedOption =$_POST['timeselect'];



	if ($selectedOption == "Year")
	{
		$invest=$_POST["txtinvestment"];
		$r=$_POST["roibar"];
		$calc=$invest*$r/100;
		$grand=$invest+$calc;
	}
	elseif ($selectedOption == "Month")
	{
		$invest=$_POST["txtinvestment"];
		$r=$_POST["roibar"];
		$calc=$invest*$r/100;
		$finalcalc=$calc/12;
		$grand=$invest+$finalcalc;
	}
	else
	{
		$invest=$_POST["txtinvestment"];
		$r=$_POST["roibar"];
		$calc=$invest*$r/100;
		$finalcalc=$calc/12;
		$finalcalc1=$finalcalc/30;
		$grand=$invest+$finalcalc1;
	}
echo "<br>";


	
echo "<b> <center> Total Investment (INR)= " .$_POST["txtinvestment"] . "<br> </center> </b>"; 
echo "<br>";
echo " <b> <center> Interest (in percentage)= " .$_POST["roibar"] . "<br> </center> </b>"; 
echo "<br>";
echo " <b> <center>  Total Maturity Value(INR)= "  .$grand  ;	


}


?>