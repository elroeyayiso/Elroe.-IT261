

<doctype html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<link href="css/Troubleshoot.css" type="text/css" rel= "stylesheet">
<style>
</style>
</head>
<body>
<header>
<div id= "inner-header">
 <h1 id= "Portal"><a href= "indext.php"> </a></h1>
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

<form action="" method="post">
<label> The first number:</label><input type="text" name="num1"><br>

<label>Enter the second number:</label><input type="text" name="num2"><br> 
<input type="submit" value="Add Em!!"></form>
<?php
echo'<p><a href="">Reset page</a></p>';
?>
<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->



    <?php
if(isset($_POST['num1'])) { 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;


    echo '
    <div class="box">

    <h2>You added '. $num1 .'&'.$num2.' </h2>

    <p style="color:red";> The answer is '.$myTotal .' !</p>

    </div>

';
}


?>



</body>
</html>
