<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel calculator form!</title>
    <link href="Calcultor.css" rel="stylesheet" type="text/css"/>   
 <style>
 </style>   
</head>
<body>
<header>
<div id= "inner-header">
</h1>

    <nav>
        <ul>
            <li><a href= "index.php"> Home</a></li>
            <li><a href= "Switch.php"> Switch-3</a></li>
            <li><a href= "Troubleshoot.php"> Troubleshoot-4</a></li>
            <li><a href= "Calcultor.php"> Calcultor</a></li>
            <li><a href= "Email.php"> Email</a></li>
            <li><a href= "Gallery.php"> Gallery</a></li>

           
</ul>
</nav>
</div>
<div id= "wrapper">

    <h1> My Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
    method="post">
    
<label> Name </label>
    <input type= "text" name= "Name" value="<?php if(isset($_POST['Name'])) {echo
    htmlspecialchars($_POST['Name']);}?>">


<label> Total miles driving? </label>
    <input type= "number" name= "total" value="<?php if(isset($_POST['total'])) {echo
    htmlspecialchars($_POST['total']);}?>">

<label> How fast do you typically drive? </label>
    <input type= "number" name= "fast" value="<?php if(isset($_POST['fast'])){echo
    htmlspecialchars($_POST['fast']);}?>">


<label>How many hours per day do you plan on driving?</label>
    <input type= "number" name= "hours" value="<?php if(isset($_POST['hours'])) 
    {echo htmlspecialchars($_POST['hours']) ;}?>">


<label> Price of gas </label> 
<ul> 
 <li>
    <input type="radio" name= "price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price']== 3.00)
{echo 'checked= "checked"';}?>>$3.00
</li>

<li>
<input type="radio"  name= "price" value="3.50" <?php if(isset($_POST['price'])&& $_POST['price']==3.50) 
{echo 'checked= "checked"';}?>>$3.50
</li>

<li>
<input type="radio"  name= "price" value="4.00" <?php if(isset($_POST['price'])&& $_POST['price']==4.00) 
{echo 'checked= "checked"';}?>>$4.00
</li>

</ul>


<!-- check works the same way as a radio button-->
<!-- you cannot "select one"-->
<label> Fuel Efficiency </label>
<select name="fuel">
    <option value="NULL" <?php if(isset($_POST['fuel']) && $_POST['fuel']=="NULL") {echo 'selected ="unselected" ' ;}?>>
      Select one </option>

      <option value="10" <?php if(isset($_POST['fuel']) && $_POST['fuel']=='Terrible @10mpg'){echo 'selected ="unselected" ' ;}?>>
      Terrible @10mpg </option>

      <option value="40" <?php if(isset($_POST['fuel']) && $_POST['fuel']== 'Great @ 40mpg'){echo 'selected ="unselected" ' ;}?>>
      Great @ 40mpg </option>

</select>

<input type= "submit" name= "Convert it!">
    </form>
    <button><a href=""> Rest</a></button>
    <?php

//$_server[REquest_METHOD]

if($_SERVER['REQUEST_METHOD']== 'POST') {

if(empty($_POST['Name'])) {
    echo 'please fill out your name!';
}
if(empty($_POST['total'])) {
    echo 'please fill out your total miles driving?';
}
   
if(empty($_POST['fast'])) {
     echo 'please fill out your how fast you typically drive?';    
}

if(empty($_POST['hours'])) {
    echo 'please fill out your How many hours per day you plan on driving?';   
}

if(empty($_POST['price'])) {
    echo 'please choose your price';

}
if($_POST['fuel'] == "NULL") {
    echo 'please choose your Fuel efficiency';
}





if(isset($_POST['Name'],
$_POST['total'],
$_POST['fast'],
$_POST['hours'],
$_POST['price'])&&
$_POST['fuel']!= "NULL")

{
  

    $name= $_POST['Name'];
    $Totalmilesdriving= $_POST['total'];
    $Howfastyoutypicallydrive= $_POST['fast'];
    $Howmanyhoursperdayyouplanondriving= $_POST['hours'];
    $price= $_POST['price'];
    $Fuelefficiency= $_POST['fuel'];

   $totaltravelinghours= ($Totalmilesdriving / $Howfastyoutypicallydrive);
    $totaltravelingdays=($totaltravelinghours/$Howmanyhoursperdayyouplanondriving);
   $totalgallonsofgas=($Totalmilesdriving/$Fuelefficiency);
   $totalcostofgas=($totalgallonsofgas*$price);

if(!empty($name && $Totalmilesdriving && $Howfastyoutypicallydrive && 
$Howmanyhoursperdayyouplanondriving && $price && $Fuelefficiency)) {

    echo '
    <div class= "box">
    <h2>Hello, <b>'.$name.'</b> </h2>
    <p> You will be travelling a total of' . number_format($totaltravelinghours,2).' hours</p>
    <p> Taking ' .number_format($totaltravelingdays,2).'days </p>
    <p> And you will be using' .number_format($totalgallonsofgas,2).'gallons of gas</p>
    <p> Costing you' .number_format($totalcostofgas,2).' dollars </p>
    </div>
    
    ';

}



  
} // end isset
    
} //close server

?>
</body>
</html>
