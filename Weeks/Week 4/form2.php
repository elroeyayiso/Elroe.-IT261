<?php
// the logic -if i do  not enter anything inside the input field will show up!!
// first_name, last_name, email, comments


if(isset($_POST['fist_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {


    $fist_name =$_POST ['first_name'];
    $fist_name =$_POST ['last_name'];
    $email =$_POST ['emial'];
    $comments =$_POST ['comments'];

    if(empty($_POST['first_name']&&
    $_POST ['last_name']&&
    $_POST ['email']&&
    $_POST ['comments'] )) {

echo 'please fill out the fields!';



    } else{

        echo $first_name;
        echo '<br>';
        echo $last_name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
        echo '<br>';
        }

    }else{

echo'
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
    }