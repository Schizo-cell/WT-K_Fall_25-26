<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
<body>


<?php
$name= "";
$nameerr= "";
$email= "";
$emailerr= "";
$doberr= "";
$dob= "";
$gender= "";
$gendererr= "";
$bg= "";
$bgerr= "";
$deg= "";
$degerr= "";

if (empty ($_POST["name"]))
{
$nameerr="Name is req"; 
}
else{
$name= test_input($_POST["name"]); 
if (!preg_match("/^[a-zA-Z ]*$/",$name))  
{
    $nameerr ="Only letters and white space allowed";
}
}


if (empty ($_POST["email"]))
{
$emailerr="Email is req"; 
}
else{
$email= test_input($_POST["email"]); 
if (!preg_match("/^[a-zA-Z ]*+@$/",$email))  
{
    $emailerr ="Invalid format";
}
}

if (empty ($_POST["dob"]))
{
$doberr="DOB is req"; }
else{
$dob= test_input($_POST["dob"]); 

}

if (empty ($_POST["gender"]))
{
$gendererr="Gender is req"; 
}
else{
$gender= test_input($_POST["gender"]); 

}
if (empty ($_POST["deg"]))
{
$degerr="Selection is req"; 
}
else{
$deg= test_input($_POST["deg"]);

}


function test_input($data)
{
$data = trim($data); 
return $data;
}

?>



<form method="post" action="">

<fieldset>

<legend>NAME</legend>

<input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerr; ?><hr>
<input type="submit" name="submit" value="Submit">



<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerr))
{
echo "<h3> Your Input: </h3>";

echo "Name: ".$name. "<br>";
}
?>

</fieldset>
<fieldset>

<legend>EMAIL</legend>

<input type="text" name="email" value="<?php echo $name;?>">
<?php echo $emailerr; ?><hr>
<input type="submit" name="submit" value="Submit">



<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($emailerr))
{
echo "<h3> Your Email: </h3>";

echo "Email: ".$email. "<br>";
}
?>

</fieldset>
<fieldset>

<legend>Date Of Birth</legend>

<input type="date" name="dob" value="<?php echo $dob;?>">
<?php echo $doberr; ?><hr>
<input type="submit" name="submit" value="Submit">



<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($doberr))
{
echo "<h3> Your DOB: </h3>";

echo "dob: ".$dob. "<br>";
}
?>

</fieldset>

<fieldset>

<legend>Gender</legend>


<input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <?php echo $gender;?>
<?php echo $gendererr; ?><hr>
<input type="submit" name="submit" value="Submit">



<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($gendererr))
{
echo "<h3> Your Gender: </h3>";

echo "gender: ".$gender. "<br>";
}
?>

</fieldset>

<fieldset>

<legend>Degree</legend>

<input type="checkbox" name="deg" value="ssc">SSC
<input type="checkbox" name="deg" value="hsc">HSC
<input type="checkbox" name="deg" value="bsc">BSC
<input type="checkbox" name="deg" value="msc">MSC
<?php echo $deg;?>

<?php echo $degerr; ?><hr>
<input type="submit" name="submit" value="Submit">



<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($degerr))
{
echo "<h3> Your Degree: </h3>";

echo "deg: ".$deg. "<br>";
}
?>

</fieldset>
<fieldset>
<legend>Blood Group</legend>


<label for="bg">Choose your blood group:</label>

<select id="bg" name="bg">
  <option value="">-- Select --</option>
  <option value="b+">B+</option>
  <option value="a+">A+</option>
  <option value="o+">O+</option>
</select>


<?php echo $bgerr; ?><hr>
<input type="submit" name="submit" value="Submit">



<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($doberr))
{
echo "<h3> Your Blood Group: </h3>";

echo "dob: ".$bg. "<br>";
}
?>

</fieldset>

</form>
</body>
</html>