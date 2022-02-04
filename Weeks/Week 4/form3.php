<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside our Html</title>
</head>
<body>
    
</body>
</html>

<form action="" method="post">
<label>First Name</label>
<input type= "text" name="fist_name">

<label>Last Name</label>
<input type= "text" name="last_name">

<label>Email</label>
<input type= "email" name="email">

<label>Comments</label>
<textarea name="comments"></textarea>

<input type= "submit" value= "Confirm">
</form>

<p><a href="">Reset</a></p>
';

<?php
// first_name,last_name,email,comments

if(empty($_POST['first_name']&&
    $_POST ['last_name']&&
    $_POST ['email']&&
    $_POST ['comments'] )) {

echo '<p class="error">Please fill out the fields!</p>;

} else{
    echo '<br>';
    echo $first_name;
    echo '<br>';
    echo $last_name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $comments;
} // end else

    }// isset
    
