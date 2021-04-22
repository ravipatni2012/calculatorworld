<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="./css/dropbtn.css">
<link rel="stylesheet" href="./css/textbox.css">
<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/button.css">



<!-- leftsidenav -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/leftsidenav.css">

<!-- uppersidenav -->

<link rel="stylesheet" href="./css/uppersidenav.css">

</head>


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





<body>


<form name="sam" action=""  method="post" required>


<div class="font">




<table align="center"  bgcolor="LightGrey" border="1" cellpadding="15px" bordercolor="black" >

	<tr >
		<td  colspan="2" style="text-align:center">

			<label for="state">Unit Converter</label> 
		</td>

	</tr>

	<tr>

		<td>
		<label for="child">Enter Number:</label>
		</td>
		
		<td>
		<input type="text" name="txtunit" class="textbox" style='text-transform:uppercase' autofocus required>
		
		</td>

	</tr>
	
	
	<tr>

		<td>
		<label for="from">From</label>
		</td>
		
		<td>

			<select class="dropbtn" name="cbounit" id="cbounit">
			
				<option value="0">Select Unit</option>
				<option value="Byte">Byte</option>
				<option value="Kilobyte">Kilobyte</option>
				<option value="Megabyte">Megabyte</option>
				<option value="Gigabyte">Gigabyte</option>
				<option value="Terabyte">Terabyte</option>
				<option value="Petabyte">Petabyte</option>
				<option value="Exabyte">Exabyte</option>
				<option value="Zettabyte">Zettabyte</option>
				<option value="Yottabyte">Yottabyte</option>
				
				
			 </select>
		</td>

	</tr>
	
	<tr>

		<td>
		<label for="unitto">To</label>
		</td>
		
		<td>

			<select class="dropbtn" name="cboto" id="cboto">
			
				<option value="0">Select Unit</option>
				<option value="Byte">Byte</option>
				<option value="Kilobyte">Kilobyte</option>
				<option value="Megabyte">Megabyte</option>
				<option value="Gigabyte">Gigabyte</option>
				<option value="Terabyte">Terabyte</option>
				<option value="Petabyte">Petabyte</option>
				<option value="Exabyte">Exabyte</option>
				<option value="Zettabyte">Zettabyte</option>
				<option value="Yottabyte">Yottabyte</option>
				
				
			 </select>
		</td>

	</tr>
 
	<tr>
		<td colspan="2" style="text-align:center">

			<input type="submit" value="Convert" name="btnconvert"  class="button">
			
			
		</td>

	</tr>




 
</table>

</div>


</form>


</br>

 
</body>
</html>



</br>
</br>




<?php


if (isset($_POST['btnconvert']))
{
	
	$num =$_POST['txtunit']; 
	if (filter_var($num, FILTER_VALIDATE_INT))
	{
		
	}
	
	else
	{
		echo ("Please enter numeric value");
	}
	
	$selectedOption =$_POST['cbounit'];
	$selectedto =$_POST['cboto'];
	
	if($selectedOption=="Byte" and $selectedto=="Byte")
	{
		
		echo '<script>alert("Wrong Selection")</script>'; 
		
	}

	elseif ($selectedOption=="Byte" and $selectedto=="Kilobyte")
	{
		$num1= $num/1024;
		
		echo "  <b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif ($selectedOption=="Byte" and $selectedto=="Megabyte")
	{
		$num1= $num/1024*1024;
		
		echo "<b> <center> $num $selectedOption= $num1 $selectedto </center> </b>";
		
	}
			
	elseif($selectedOption=="Byte" and $selectedto=="Gigabyte")
	{
		$num1= $num/1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Byte" and $selectedto=="Petabyte")
	{
		$num1= $num/1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto</center> </b> ";
		
	}	
	elseif($selectedOption=="Byte" and $selectedto=="Exabyte")
	{
		$num1= $num/1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}	
	elseif($selectedOption=="Byte" and $selectedto=="Zettabyte")
	{
		$num1= $num/1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}		
	elseif($selectedOption=="Byte" and $selectedto=="Yottabyte")
	{
		$num1= $num/1024*1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	
	elseif($selectedOption=="Kilobyte" and $selectedto=="Kilobyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>'; 
		
	}
	
	elseif($selectedOption=="Kilobyte" and $selectedto=="Byte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	
	elseif($selectedOption=="Kilobyte" and $selectedto=="Megabyte")
	{
		$num1= $num/1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	
	elseif($selectedOption=="Kilobyte" and $selectedto=="Gigabyte")
	{
		$num1= $num/(1024*1024);
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Kilobyte" and $selectedto=="Terabyte")
	{
		$num1= $num/(1024*1024*1024);
		
		echo "<b> <center> $num $selectedOption =$num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Kilobyte" and $selectedto=="Petabyte")
	{
		$num1= $num/(1024*1024*1024*1024);
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Kilobyte" and $selectedto=="Exabyte")
	{
		$num1= $num/(1024*1024*1024*1024*1024);
		
		echo "<b> <center> $num $selectedOption =$num1 $selectedto </center> </b>";
		
	}
		
	
	elseif($selectedOption=="Kilobyte" and $selectedto=="Zettabyte")
	{
		$num1= $num/(1024*1024*1024*1024*1024*1024);
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Kilobyte" and $selectedto=="Yottabyte")
	{
		$num1= $num/(1024*1024*1024*1024*1024*1024*1024);
		
		echo "<b> <center> $num $selectedOption =$num1 $selectedto </center> </b>";
		
		
	}
	
	
	elseif($selectedOption=="Megabyte" and $selectedto=="Megabyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>';   
		
	}
	
	elseif($selectedOption=="Megabyte" and $selectedto=="Byte")
	{
		$num1= $num*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Megabyte" and $selectedto=="Kilobyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	
	elseif($selectedOption=="Megabyte" and $selectedto=="Gigabyte")
	{
		$num1= $num/1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Megabyte" and $selectedto=="Terabyte")
	{
		$num1= $num/1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Megabyte" and $selectedto=="Petabyte")
	{
		$num1= $num/1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Megabyte" and $selectedto=="Exabyte")
	{
		$num1= $num/1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
		
	
	elseif($selectedOption=="Megabyte" and $selectedto=="Zettabyte")
	{
		$num1= $num/1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Megabyte" and $selectedto=="Yottabyte")
	{
		$num1= $num/1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Gigabyte" and $selectedto=="Gigabyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>';  
		
	}
	
	elseif($selectedOption=="Gigabyte" and $selectedto=="Byte")
	{
		$num1= $num*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Gigabyte" and $selectedto=="Kilobyte")
	{
		$num1= $num*1024*1024;
		
		echo "<b> <center> $num $selectedOption =$num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Gigabyte" and $selectedto=="Megabyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption =$num1 $selectedto </center> </b>";
		
	}
	
	
	elseif($selectedOption=="Gigabyte" and $selectedto=="Terabyte")
	{
		$num1= $num/1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Gigabyte" and $selectedto=="Petabyte")
	{
		$num1= $num/1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Gigabyte" and $selectedto=="Exabyte")
	{
		$num1= $num/1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
		
	
	elseif($selectedOption=="Gigabyte" and $selectedto=="Zettabyte")
	{
		$num1= $num/1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Gigabyte" and $selectedto=="Yottabyte")
	{
		$num1= $num/1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Terabyte" and $selectedto=="Terabyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>'; 
		
	}
	
	elseif($selectedOption=="Terabyte" and $selectedto=="Byte")
	{
		$num1= $num*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Terabyte" and $selectedto=="Kilobyte")
	{
		$num1= $num*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Terabyte" and $selectedto=="Megabyte")
	{
		$num1= $num*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Terabyte" and $selectedto=="Gigabyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Terabyte" and $selectedto=="Petabyte")
	{
		$num1= $num/1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Terabyte" and $selectedto=="Exabyte")
	{
		$num1= $num/1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
		
	
	elseif($selectedOption=="Terabyte" and $selectedto=="Zettabyte")
	{
		$num1= $num/1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Terabyte" and $selectedto=="Yottabyte")
	{
		$num1= $num/1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Petabyte" and $selectedto=="Petabyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>'; 
		
	}
	
	elseif($selectedOption=="Petabyte" and $selectedto=="Byte")
	{
		$num1= $num*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Petabyte" and $selectedto=="Terabyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Petabyte" and $selectedto=="Gigabyte")
	{
		$num1= $num*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Petabyte" and $selectedto=="Megabyte")
	{
		$num1= $num*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Petabyte" and $selectedto=="Kilobyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	
	elseif($selectedOption=="Petabyte" and $selectedto=="Exabyte")
	{
		$num1= $num/1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
		
	
	elseif($selectedOption=="Petabyte" and $selectedto=="Zettabyte")
	{
		$num1= $num/1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Petabyte" and $selectedto=="Yottabyte")
	{
		$num1= $num/1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Exabyte" and $selectedto=="Exabyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>';  
		
	}
	
	elseif($selectedOption=="Exabyte" and $selectedto=="Byte")
	{
		$num1= $num*1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Exabyte" and $selectedto=="Kilobyte")
	{
		$num1= $num*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Exabyte" and $selectedto=="Megabyte")
	{
		$num1= $num*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Exabyte" and $selectedto=="Gigabyte")
	{
		$num1= $num*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Exabyte" and $selectedto=="Terabyte")
	{
		$num1= $num*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	
	elseif($selectedOption=="Exabyte" and $selectedto=="Petabyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Exabyte" and $selectedto=="Zettabyte")
	{
		$num1= $num/1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Exabyte" and $selectedto=="Yottabyte")
	{
		$num1= $num/1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
		
		
	
	elseif($selectedOption=="Zettabyte" and $selectedto=="Zettabyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>'; 
		
	}
	
	elseif($selectedOption=="Zettabyte" and $selectedto=="Byte")
	{
		$num1= $num*1024*1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Zettabyte" and $selectedto=="Kilobyte")
	{
		$num1= $num*1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Zettabyte" and $selectedto=="Megabyte")
	{
		$num1= $num*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	
	elseif($selectedOption=="Zettabyte" and $selectedto=="Gigabyte")
	{
		$num1= $num*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Zettabyte" and $selectedto=="Terabyte")
	{
		$num1= $num*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Zettabyte" and $selectedto=="Petabyte")
	{
		$num1= $num*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Zettabyte" and $selectedto=="Exabyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
		
	elseif($selectedOption=="Zettabyte" and $selectedto=="Yottabyte")
	{
		$num1= $num/1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	elseif($selectedOption=="Yottabyte" and $selectedto=="Yottabyte")
	{
		
		echo '<script>alert("Wrong Selection")</script>'; 
		
	}
	
	elseif($selectedOption=="Yottabyte" and $selectedto=="Byte")
	{
		$num1= $num*1024*1024*1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Yottabyte" and $selectedto=="Kilobyte")
	{
		$num1= $num*1024*1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	elseif($selectedOption=="Yottabyte" and $selectedto=="Megabyte")
	{
		$num1= $num*1024*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	
	elseif($selectedOption=="Yottabyte" and $selectedto=="Gigabyte")
	{
		$num1= $num*1024*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
	}
	
	elseif($selectedOption=="Yottabyte" and $selectedto=="Terabyte")
	{
		$num1= $num*1024*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Yottabyte" and $selectedto=="Petabyte")
	{
		$num1= $num*1024*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	elseif($selectedOption=="Yottabyte" and $selectedto=="Exabyte")
	{
		$num1= $num*1024*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
		
	elseif($selectedOption=="Yottabyte" and $selectedto=="Zettabyte")
	{
		$num1= $num*1024;
		
		echo "<b> <center> $num $selectedOption = $num1 $selectedto </center> </b>";
		
		
	}
	
	
	
	
}	
?>



	 
    
   

