<?php

//our login page
include('server.php');
//include('./includes/header.php');
?>

<h1>login page!</h1>
<form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>"
method="post">

<filedset>

<fieldset>
<label>Username</label>
<input type= "text" name= "username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST
['username']) ;?>">

<label>Password</label>
<input type= "password" name= "password">

<button type="button"
onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'
">Reset</button>
</fieldset>
</form>