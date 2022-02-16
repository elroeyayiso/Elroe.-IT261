<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 5 inside our html</title>
    <link href="css/style.css" type="text/css" rel= "stylesheet">
   
</head>
<body> 
<form action="" method="post">
<label>First Name</label>
<input type= "text" name="first_name">

<label>Last Name</label>
<input type= "text" name="last_name">

<label>Email</label>
<input type= "email" name="email">

<label>Comments</label>
<textarea name="comments"></textarea>

<input type= "submit" value= "Confirm">
</form>

<p><a href="">Reset</a></p>
<?php
// first_name, last_name, email, comments

if(isset($_POST['first_name'],
          $_POST['last_name'],
          $_POST['email'],
          $_POST ['comments'])) {

          }


if(empty($_POST['first_name']&&
$_POST['last_name']&&
$_POST['email']&&
$_POST['comments'])) {

echo '<p class="error">Plese fill out th fields!</p>';

} else {

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_name = $_POST['email'];
$comments_name = $_POST['comments'];

echo '
</div class= "box">
<h2> Hello '.$first_name.' ' .$last_name.' </ h2>

<p> We have recieved your email as:
'.$email.' and we also have your comments as the following ' .$comments.' </p>

</div>

';

echo '<br>';
echo $first_name;

echo '<br>';
echo $last_name;

echo '<br>';
echo $email;

echo '<br>';
echo $comments;

}// end else








?>



</body>
</html>



