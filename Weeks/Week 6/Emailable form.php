<?php
$email='';
$first_name_err='';
$last_name_err='';
$email_err='';
$phone_err='';
$desserts_err='';
$days_err='';
$privacy_err='';

if($_SERVER['REQUEST_METHOD'] == 'POST') {



if(empty($_POST['first_name'])) {
$first_name_err= 'Please enter your name first name';
} else { 
$first_name = $_POST['first_name'];
}


if(empty($_POST['last_name'])) {
    $last_name_err= 'Please enter your name last name';
    } else { 
    $last_name = $_POST['last_name'];
    }
    

if(empty($_POST['email'])) {
        $email_err= 'Please enter your email';
        } else { 
        $email= $_POST['email'];
        }
        

            

 if(empty($_POST['phone'])) {
                $phone_err= 'Please enter your phone number';
                } else { 
                $phone= $_POST['phone'];
                }
                
    
                if(empty($_POST['desserts'])) {
                    $desserts_err = 'no desserts ??';
                    } else { 
                    $desserts = $_POST['desserts'];
                    }
                    

                    if(empty($_POST['days'])) {
                        $days_err = 'please select your days';
                        } else { 
                        $days= $_POST['days'];
                        }
                      
    
                            if(empty($_POST['privacy'])) {
                                $privacy_err = 'You cannot pass go';
                                } else { 
                                $privacy = $_POST['privacy'];
                                }
        
                                if(isset($_POST['first_name'],
                                $_POST['last_name'],
                                $_POST['email'],
                                $_POST['phone'],
                                $_POST['days'],
                                $_POST['desserts'],
                                $_POST['privacy'])){
                                    
                    $to= 'elroeyayiso123@gmail.com';
                    $subject='Test email' .date('m/d/y, h i A') ;
                    $body='
                 First Name :'.$first_name.'  '.PHP_EOL.'
                 Last Name :'.$last_name.'  '.PHP_EOL.'
               Email :'.$email.'  '.PHP_EOL.'
                 Phone Number :'.$phone.'  '.PHP_EOL.'
                 days :'.$days.'  '.PHP_EOL.'
                 desserts :'.$desserts.'  '.PHP_EOL.'          
     ';

     if(!empty($first_name &&
         $last_name &&
         $email &&
         $phone &&
         $days &&
         $desserts &&
         $privacy )) {
           
$headers = array(
'From '=> 'noreply@gmail.com',
'Reply to:'=> ' '.$email.' '
);


     mail($to, $subject, $body,$headers);
     header('Location:thx.php');
            
    } //close if not empty statment

 }//close isset
} //close if not empty

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form class Exericse</title>
<link rel="stylesheet" href="Emailable form.css">
</head>
<body>
    
<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<legend> Contact Elroe </legend>

<label> First Name</label>
<input type="text" name="first_name" value="<?php 
if(isset($_POST['first_name'])) echo htmlspecialchars
 ($_POST ['first_name']);?>">

<span class="error"><?= $first_name_err ?></span>


<label> Last Name</label>
<input type="text" name="last_name" value="<?php 
if(isset($_POST['last_name'])) echo htmlspecialchars
 ($_POST ['last_name']);?>">

<span class="error"><?= $last_name_err ?></span>


<label> Email</label>
<input type="text" name="email" value="<?php 
if(isset($_POST['email'])) echo htmlspecialchars
 ($_POST ['email']);?>">

<span class="error"><?= $email_err ?></span>


<label> Phone</label>
<input type="text" name="phone" value="<?php 
if(isset($_POST['phone'])) echo htmlspecialchars
 ($_POST ['phone']);?>">

<span class="error"><?= $phone_err ?></span>


<label>Favorite desserts</label> 
<ul>
<li>
<input type="checkbox" name="desserts[]" value="Ice Cream"<?php if (isset
($_POST['desserts']) && in_array('Ice Cream', $desserts)) echo 
'checked= "checked" ';?>> Ice Cream
</li>

<li>
<input type="checkbox" name="desserts[]" value="Chocolate Chip Cookies"<?php if (isset
($_POST['desserts']) && in_array('Chocolate Chip Cookies', $desserts)) echo 
'checked= "checked" ';?>> Chocolate Chip Cookies
</li>

<li>
<input type="checkbox" name="desserts[]" value="Brownies"<?php if (isset
($_POST['desserts']) && in_array('Brownies', $desserts)) echo 
'checked= "checked" ';?>> Brownies
</li>

<li>
<input type="checkbox" name="desserts[]" value="Cupcakes"<?php if (isset
($_POST['desserts']) && in_array('Cupcakes', $desserts)) echo 
'checked= "checked" ';?>> Cupcakes
</li>
</ul>
<span class="error"><?= $desserts_err ?></span>

<label>Days</label>
<select name= "days">
<option value="" NULL <?php if(isset($_POST['days']) && $_POST ['days']
== Null) echo 'selected = "unselected" ';?>>select one </option>


<option value="mon"<?php if(isset($_POST['days']) && $_POST ['days']
=='mon') echo 'selected = "selected" ';?>>Monday </option>



<option value="tue"<?php if(isset($_POST['days']) && $_POST ['days']
=='tue') echo 'selected = "selected" ';?>> Tuesday</option>



<option value="wed"<?php if(isset($_POST['days']) && $_POST ['days']
=='wed') echo 'selected = "selected" ';?>> Wednesday </option>


<option value="thu"<?php if(isset($_POST['days']) && $_POST ['days']
=='thu') echo 'selected = "selected" ';?>>Thursday </option>


<option value="fri"<?php if(isset($_POST['days']) && $_POST ['days']
=='fri') echo 'selected = "selected" ';?>>Friday </option>
</select>

<option value="sat"<?php if(isset($_POST['days']) && $_POST ['days']
=='sat') echo 'selected = "selected" ';?>>Saturday </option>
</select>

<option value="sun"<?php if(isset($_POST['days']) && $_POST ['days']
=='sun') echo 'selected = "selected" ';?>>Sunday </option>
</select>


<span class="error"><?= $days_err ?></span>





<label>privacy</label> 
<ul>
<li>
<input type="radio" name="privacy" value="yes"<?php if (isset
($_POST['privacy']) && $_POST['privacy']=='yes') echo 
'checked= "checked" ';?>> You must agree
</li>
</ul>
<span class="error"><?= $privacy_err?></span>


<input type="submit" value="send it!">
<p><a href=""> Rest!</a></p>
</fieldset>
</formset>
</form>
 
</body>
</html>
