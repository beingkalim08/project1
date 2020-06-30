<?php
//index.php

$error = '';
$Age = '';
$Gender = '';
$BLOOD_PRESSURE = '';
$PHYSICAL_EXCERCISE = '';
$GENETIC_DISEASE = '';
$DRAINAGE_SYSTEM= '';
$BODY_PAIN= '';
$OCCUPATION= '';
$SMOKING= '';
$NAME='';
$MONTH= '';
$YEAR= '';
$LATITUDE= '';
$LONGITUDE= '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["AGE"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Age</label></p>';
 }
 else
 {
  $AGE = clean_text($_POST["AGE"]);
 }
 if(empty($_POST["GENDER"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Gender</label></p>';
 }
 else
 {
  $GENDER = clean_text($_POST["GENDER"]);
 }
 if(empty($_POST["BLOOD_PRESSURE"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Bloodpressure</label></p>';
 }
 else
 {
  $BLOOD_PRESSURE = clean_text($_POST["BLOOD_PRESSURE"]);
 }
 if(empty($_POST["PHYSICAL_EXCERCISE"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Physicalexercise</label></p>';
 }
 else
 {
  $PHYSICAL_EXCERCISE = clean_text($_POST["PHYSICAL_EXCERCISE"]);
 }

 if(empty($_POST["GENETIC_DISEASE"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Geneticdisease</label></p>';
 }
 else
 {
  $GENETIC_DISEASE = clean_text($_POST["GENETIC_DISEASE"]);
 }
 if(empty($_POST["DRAINAGE_SYSTEM"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Drainage</label></p>';
 }
 else
 {
  $DRAINAGE_SYSTEM = clean_text($_POST["DRAINAGE_SYSTEM"]);
 }

 if(empty($_POST["BODY_PAIN"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Body Pain</label></p>';
 }
 else
 {
  $BODY_PAIN = clean_text($_POST["BODY_PAIN"]);
 }
 if(empty($_POST["OCCUPATION"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Occupation</label></p>';
 }
 else
 {
  $OCCUPATION = clean_text($_POST["OCCUPATION"]);
 }
 if(empty($_POST["SMOKING"]))
 {
  $error .= '<p><label class="text-danger">Please Enter you Smoke or not </label></p>';
 }
 else
 {
  $SMOKING = clean_text($_POST["SMOKING"]);
 }

 if(empty($_POST["MONTH"]))
 {
  $error .= '<p><label class="text-danger">Month is required</label></p>';
 }
 else
 {
  $MONTH = clean_text($_POST["MONTH"]);
 }
 if(empty($_POST["YEAR"]))
 {
  $error .= '<p><label class="text-danger">Year is required</label></p>';
 }
 else
 {
  $YEAR = clean_text($_POST["YEAR"]);
 }
 if(empty($_POST["LATITUDE"]))
 {
  $error .= '<p><label class="text-danger">Latitude is required</label></p>';
 }
 else
 {
  $LATITUDE = clean_text($_POST["LATITUDE"]);
 } if(empty($_POST["LONGITUDE"]))
 {
  $error .= '<p><label class="text-danger">Longitude is required</label></p>';
 }
 else
 {
  $LONGITUDE = clean_text($_POST["LONGITUDE"]);
 }
 if($error == '')
 {
  $file_open = fopen("../Data/PatientSymptom.csv", "a");
  $no_rows = count(file("../Data/PatientSymptom.csv"));
  $num = $no_rows;
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
  'ID'  => $no_rows,
  'AGE' => $AGE,
  'GENDER' => $GENDER,
  'BLOOD_PRESSURE' => $BLOOD_PRESSURE,
  'PHYSICAL_EXCERCISE' => $PHYSICAL_EXCERCISE,
  'GENETIC_DISEASE' => $GENETIC_DISEASE,
  'DRAINAGE_SYSTEM'=> $DRAINAGE_SYSTEM,
  'BODY_PAIN'=> $BODY_PAIN,
  'OCCUPATION'=> $OCCUPATION,
  'SMOKING' => $SMOKING,
  'NAME' => null,
  'MONTH'=> $MONTH,
  'YEAR'=> $YEAR,
  'LATITUDE'=> $LATITUDE,
  'LONGITUDE'=> $LONGITUDE,
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for Register </label>';
  $Age = '';
  $Gender = '';
  $BLOOD_PRESSURE = '';
  $PHYSICAL_EXCERCISE = '';
  $GENETIC_DISEASE = '';
  $DRAINAGE_SYSTEM= '';
  $BODY_PAIN= '';
  $OCCUPATION= '';
  $SMOKING= '';
  $MONTH= '';
  $YEAR= '';
  $LATITUDE= '';
  $LONGITUDE= '';

 }
echo "<script>alert('Your ID Number is' + $num);</script>";
header("location:index.php");
}

?><?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>My-tour bootstrap Design website | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<style>

/* For Background Image */
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("../image/nature.jpg");

  /* Full height */
  height: 130%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* End of Background */


body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text]{
  width: 40%;
  padding: 13px 20px;
  margin: 9px 0;
  display: inline!important;
  line-height: 1.4;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #243ff2;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
}

button:hover {
  opacity: 0.8;
}

}

.imgcontainer {
  text-align: center;
}

.container {
  padding: 5px;
}

span.text {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.text {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<!--/animated-css-->
</head>
<body align="center" bgcolor="#f5f5f0">
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
  header("location:loginform.php");
}
?>

<?php include('function.php'); ?>




<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="bg">
  
  <!-- For the table (closed box) -->
  <table align="center" width="35%" height="100%">
    <tr>
      <td>

<h1><font color="purple">Register your Form</font></h1>

<form method="post" id="nameform"> 
  
  <!-- For the avatar -->
  <div class="imgcontainer">
    <img src="../image/patient1.png" height="90" width="90" alt="Avatar" class="avatar">
  </div>
  <p><?php echo $error; ?></p>
  <label for="NAME"><font color="purple">Enter Name:</font></label>
  <input type="text" align="right" id="NAME" name="NAME" placeholder="Enter Your Name " maxlength = "30">
  <br><br>
  <!-- Age -->
  <label for="AGE"><font color="purple">Enter Age:</font></label>
  <select id="AGE" name="AGE">
    <option value="<?php echo $AGE; ?>"> </option>
    <option value="AGE_GRP_I">Group I</option>
    <option value="AGE_GRP_II">Group II</option>
    <option value="AGE_GRP_III">Group III</option>
    <option value="AGE_GRP_IV">Group IV</option>
  </select>
  
  <br><br>
  <!-- Gender -->
  <label for="GENDER"><font color="purple">Enter Gender:</font></label>
  <select id="GENDER" name="GENDER">
    <option value="<?php echo $GENDER; ?>"> </option>
    <option value="MALE">MALE</option>
    <option value="FEMALE">FEMALE</option>
  </select><br>

  <!-- Blood Pressure -->
  <br>
  <label for="BLOOD_PRESSURE"><font color="purple">Enter Blood Pressure:</font></label>
  <select id="BLOOD_PRESSURE" name="BLOOD_PRESSURE">
    <option value="<?php echo $BLOOD_PRESSURE; ?>"> </option>
    <option value="LOW_B.P">Low</option>
    <option value="NORMAL_B.P">Normal</option>
    <option value="HIGH_B.P">High</option>
  </select>

  <br><br>
  <!-- Physical Exercise -->
  <label for="PHYSICAL_EXCERCISE"><font color="purple">Physical Exercise:</font></label>
  <select id="PHYSICAL_EXCERCISE" name="PHYSICAL_EXCERCISE">
    <option value="<?php echo $PHYSICAL_EXCERCISE; ?>"> </option>
    <option value="PHYSICAL_EXCERCISE">Yes</option>
    <option value="NO_PHYSICAL_EXCERCISE">No</option>
  </select>
<br>
  <!-- Genetic Disease -->
  <br>
  <label for="GENETIC_DISEASE"><font color="purple">Genetic Disease:</font></label>
  <select id="GENETIC_DISEASE" name="GENETIC_DISEASE">
    <option value="<?php echo $GENETIC_DISEASE; ?>"> </option>
    <option value="GENETIC_DISEASE">Yes</option>
    <option value="NO_GENETIC_DISEASE">No</option>
  </select>
<br>
  <!-- Drainage System -->
  <br>
  <label for="DRAINAGE_SYSTEM"><font color="purple">Drainage System:</font></label>
  <select id="DRAINAGE_SYSTEM" name="DRAINAGE_SYSTEM">
    <option value="<?php echo $DRAINAGE_SYSTEM; ?>"> </option>
    <option value="DRAINAGE_SYSTEM">Yes</option>
    <option value="NO_DRAINAGE_SYSTEM">No</option>
  </select><br>

  <!-- Body Pain -->
  <br>
  <label for="BODY_PAIN"><font color="purple">Body Pain:</font></label>
  <select id="BODY_PAIN" name="BODY_PAIN">
    <option value="<?php echo $BODY_PAIN; ?>"> </option>
    <option value="BODY_PAIN">Yes</option>
    <option value="NO_BODY_PAIN">No</option>
  </select>
  <br>

  <!-- Occupation -->
  <br>
  <label for="OCCUPATION"><font color="purple">Enter Occupation:</font></label>
  <select id="OCCUPATION" name="OCCUPATION">
    <option value="<?php echo $OCCUPATION; ?>"> </option>
    <option value="Student">Student</option>
    <option value="GovService">GovService</option>
    <option value="IT_SectorJob">IT_SectorJob</option>
    <option value="Buisnessman">Buisnessman</option>
    <option value="Others">Others</option>
    <option value="InHouseWorker">InHouseWorker</option>
    <option value="HealthCareWorker">HealthCareWorker</option>
    <option value="Engineer">Engineer</option>
    <option value="DailyWageWorker">DailyWageWorker</option>
  </select>

  <br><br>

  <label for="SMOKING"><font color="purple">Do You Smoke:</font></label>
  <select id="SMOKING" name="SMOKING">
    <option value="<?php echo $SMOKING; ?>"> </option>
    <option value="SMOKER">Yes</option>
    <option value="NON_SMOKER">No</option>
  </select>
  <br><br>
  
  <!-- Month -->
  <label for="MONTH"><font color="purple">Enter Month:</font></label>
  <select id="MONTH" name="MONTH">
    <option value="<?php echo $MONTH; ?>"> </option>
    <option value="JAN">JAN</option>
    <option value="FEB">FEB</option>
    <option value="MAR">MAR</option>
    <option value="APR">APR</option>
    <option value="MAY">MAY</option>
    <option value="JUN">JUN</option>
    <option value="JUL">JUL</option>
    <option value="AUG">AUG</option>
    <option value="SEP">SEP</option>
    <option value="OCT">OCT</option>
    <option value="NOV">NOV</option>
    <option value="DEC">DEC</option>
  </select>

  <br><br>
  <!-- Year -->
  <label for="YEAR"><font color="purple">Enter Year:</font></label>
  <select id="YEAR" name="YEAR">
    <option value="<?php echo $YEAR; ?>"> </option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
  </select>

  <br><br>
  <!-- Latitude & Longitude -->
  <label for="latitude"><font color="purple">Enter Latitude:</font></label>
  <input type="number" step="any" min="8.4" max="37.6" id="latitude" name="LATITUDE" value="<?php echo $LATITUDE; ?>" class="button" required><br><br>
  <label for="longitude"><font color="purple">Enter Longitude:</font></label>
  <input type="number" step="any" min="68.7" max="97.25" id="Longitude" name="LONGITUDE" value="<?php echo $LONGITUDE; ?>" class="button" required>
  <br><br>
  <input type="submit" name="submit" class="button button1" value="Submit" />
</form>
</div>


</div>

</body>
<?php include('bottom.php'); ?>

</html>