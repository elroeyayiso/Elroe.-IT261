<?php
include('server.php');
//eventually we will place our header iclude here!!!
//include ('./includes/header.php');
?>
<h1>Register today!</h2>

<form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method= "post">
<fieldset>
<label>First name</label>
<input type= "text" name= "first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST
['first_name']) ;?>">

<label>Last name</label>
<input type= "text" name= "last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST
['last_name']) ;?>">

<label>Email</label>
<input type= "email " name= "email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST
['email']) ;?>">


<label>Username</label>
<input type= "text " name= "username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST
['username']) ;?>">


<label>Password</label>
<input type= "password " name= "password_1" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST
['password_1']) ;?>">


<label>Confirm your Password</label>
<input type= "password " name= "password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST
['password_2']) ;?>">

<button type= "submit" name="reg_user" class="btn">Register</button>

<button type=  "button" onclick="window.location.href='<?php 
echo htmlspecialchars($_SERVER['PHP_SELF']);?>'"> Rest</button>







</fieldset>
</form>