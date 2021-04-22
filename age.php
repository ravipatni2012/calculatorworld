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

<form name="sam" action=""  method="post" required>


<div class="font">




<table align="center"  bgcolor="LightGrey" border="1" cellpadding="15px" bordercolor="black" >

	<tr >
		<td  colspan="2" style="text-align:center">

			<label for="age">Age Calculator</label> 
		</td>

	</tr>

	
	
	<tr>

		<td>
		<label for="dob">Date of Birth:</label>
		
		</td>
		
		<td>		
		<input type="text" class="textbox" name="dob" placeholder="dd/mm/yyyy" autofocus required>
		</td>
		
		

	</tr>
	
	<tr>

		<td>
		<label for="dob">Today date:</label>
		
		</td>
		
		<td>		
		<input type="text" class="textbox" name="todaydate"  placeholder="dd/mm/yyyy" autofocus required>
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


</br>

 
</body>
</html>



<?php

error_reporting(1);

$day=0;

$yr=0;

$mon=0;

if (isset($_POST['btnsubmit'])) //this code is executed when the form is submitted
{


$d1=$_POST['todaydate']; 

$d2=$_POST['dob']; // Your date of birth




$arr=explode("/",$d1);

$brr=explode("/",$d2);

if($arr[0]<$brr[0])

{

$arr[0]+=30;

$arr[1]-=1;

}

$day=$arr[0]-$brr[0];

if($arr[1]<$brr[1])

{

$arr[1]+=12;

$arr[2]-=1;

}

$mon=$arr[1]-$brr[1];

$yr=$arr[2]-$brr[2];



}





?>
</br>
</br>

<?php 


error_reporting(1);

echo '<font color="blue" size="5"> <b> <center>';

echo ' Your Age is:'."  ".$yr.' years '.$mon.' months '.$day.' days ';

echo '</font>';

?>

</br>
</br>




	 
    
   

