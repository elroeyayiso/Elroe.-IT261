<?php

// our server.php file - this is where our session will start
//our session is a way to store the information

session_start();
include('config.php');
//this is where eventually you will have the header include
//include ('./includes/header.php');

$iConn=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,
mysqli_connect_error()));

// register the user, using if isset reg_user
if(isset($_POST['reg_user'])) {

$first_name =mysqli_real_escape_string($iConn,$_POST['first_name']);

$last_name =mysqli_real_escape_string($iConn,$_POST['last_name']);

$email =mysqli_real_escape_string($iConn,$_POST['email']);
$username=mysqli_real_escape_string($iConn,$_POST['username']);
$password_1=mysqli_real_escape_string($iConn,$_POST['password_1']);
$password_2 =mysqli_real_escape_string($iConn,$_POST['password_2']);

// we want to makesure that all the input fileds have been filed out
// if empty, you are going to use a new function which is called array_push()
 if(empty($first_name))  {
  array_push($errors, 'First name is required!!!');
 }

 if(empty($last_name))  {
    array_push($errors, 'last name is required!!!');
   }

   if(empty($email))  {
    array_push($errors, 'email is required!!!');
   }

   if(empty($username))  {
    array_push($errors, 'username is required!!!');
   }

   if(empty($password_1))  {
    array_push($errors, 'Password is required!!!');




    

    if(empty($password_2))  {
        array_push($errors, 'passworis required!!!');
       }
    
    
   }

   $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email= '$email'
   LIMIT 1 ";

   $result= mysqli_query($iConn,$user_check_query)or die(myError(__FILE__,__LINE__,
   mysqli_connect_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// we are going to have if statment 


if ($rows) {

if($rows['username']==$username){
 array_push($errors,'Username already exists!');

}

if($rows['email']==$username){
    array_push($errors,'Email already exists!');
   
   }









}// close if statment 



//do we errors
 if(count($errors)==0 ){
     $password=md5($password_1);

//Now is the time to insert the infromation into our table!!!

$query = "INSERT INTO users(first_name,last_name,email,username,
passwords) VALUES ('$first_name', '$last_name','$email','$username','$password')";

 }

 mysqli_query($iConn,$query);

 $_SESSION['username']=$username;
 $_SESSION['success']=$success;

 // if we are successful, the we will be directed to our login page!!!

 header('Location:loging.php');



}//  close if count error




  


//} // end if isset reg_user

//now we must communicate with the login page-we will aske the same question
if(isset($_POST['reg_user'])) {
    $username =mysqli_real_escape_string($iConn,$_POST['username']);
    $password =mysqli_real_escape_string($iConn,$_POST['password']);

    if(empty($username)) {
        array_push($errors,'Username is required!!!');
    }

    if(empty($password)) {
        array_push($errors,'Password is required!!!');
    }

//we will be counting our errors

if(count($errors)==0 ){
 $password=md5($password);
 $query= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
 //below you have a new variable that is results not results
 $results= mysqli_query($iConn,$query);

 if(mysqli_num_rows($results)==1){
$_SESSION['username']=$username;
$_SESSION['success']=$success;

header('Location:index.php');



 } else {
array_push($errors,'wrong username/password combination');
 }// close else

}// close count

}//close isset login  user m