<?php
$email='';
$first_name_err='';
$last_name_err='';
$email_err='';
$phone_err='';
$cites_err='';
$direction_err='';
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
                
    
                if(empty($_POST['cites'])) {
                    $cites_err = 'no cites ??';
                    } else { 
                    $cites = $_POST['cites'];
                    }
                    

                    if(empty($_POST['direction'])) {
                        $direction_err = 'please select your direction';
                        } else { 
                        $direction= $_POST['direction'];
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
                                $_POST['direction'],
                                $_POST['cites'],
                                $_POST['privacy'])){
                                    
                    $to= 'elroeyayiso123@gmail.com';
                    $subject='Test email' .date('m/d/y, h i A') ;
                    $body='
                 First Name :'.$first_name.'  '.PHP_EOL.'
                 Last Name :'.$last_name.'  '.PHP_EOL.'
               Email :'.$email.'  '.PHP_EOL.'
                 Phone Number :'.$phone.'  '.PHP_EOL.'
                 direction :'.$direction.'  '.PHP_EOL.'
                 cites :'.implode(',',$cites).'  '.PHP_EOL.'          
     ';

     if(!empty($first_name &&
        $last_name &&
        $email &&
        $phone &&
        $direction &&
        $cites &&
       $privacy )) {
          

$headers = array(
'From '=> 'noreply@gmail.com',
'Reply to:'=> ' '.$email.' '
);


     mail($to, $subject, $body,$headers);
     //echo $body;
    header('Location:Thankyou.php');
            
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
    <title>Contact</title>
<link rel="stylesheet" href="contact.css">
</head>
<body>
<header>
<div id= "inner-header">
 <a href="index.php"></a>
 <img src="img/log.jpg" alt="logo"
 width="100" height="100">
</a>

    <nav>
        <ul>
            
            <li><a href= "index.php"> Home</a></li>
            <li><a href= "about.php"> About</a></li>
            <li><a href= "daily.php"> Daily</a></li>
            <li><a href= "contact.php"> Contact</a></li>
           


           
        </ul>
    </nav>
</div>
</header>
    
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


<label>Preferred retiring cites</label> 
<ul>
<li>
<input type="checkbox" name="cites[]" value="Asheville"<?php if (isset
($_POST['cites']) && in_array('Asheville', $cites)) echo 
'checked= "checked" ';?>> Asheville
</li>

<li>
<input type="checkbox" name="cites[]" value="Tampa"<?php if (isset
($_POST['cites']) && in_array('Tampa', $cites)) echo 
'checked= "checked" ';?>> Tampa
</li>

<li>
<input type="checkbox" name="cites[]" value="Charleston"<?php if (isset
($_POST['cites']) && in_array('Charleston', $cites)) echo 
'checked= "checked" ';?>> Charleston
</li>

<li>
<input type="checkbox" name="cites[]" value="San Francisco"<?php if (isset
($_POST['cites']) && in_array('San Francisco', $cites)) echo 
'checked= "checked" ';?>> San Francisco
</li>

<li>
<input type="checkbox" name="cites[]" value="Orlando"<?php if (isset
($_POST['cites']) && in_array('Orlando', $cites)) echo 
'checked= "checked" ';?>> Orlando
</li>

<li>
<input type="checkbox" name="cites[]" value="Salt Lake City"<?php if (isset
($_POST['cites']) && in_array('Salt Lake City', $cites)) echo 
'checked= "checked" ';?>> Salt Lake City
</li>

<li>
<input type="checkbox" name="cites[]" value="Miami"<?php if (isset
($_POST['cites']) && in_array('Miami', $cites)) echo 
'checked= "checked" ';?>> Miami
</li>

</ul>
<span class="error"><?= $cites_err ?></span>

<label>Which direction</label>
<select name= "direction">
<option value="" NULL <?php if(isset($_POST['direction']) && $_POST ['direction']
== Null) echo 'selected = "unselected" ';?>>select one </option>


<option value="west"<?php if(isset($_POST['direction']) && $_POST ['direction']
=='mon') echo 'selected = "selected" ';?>>West coast </option>



<option value="mid"<?php if(isset($_POST['direction']) && $_POST ['direction']
=='tue') echo 'selected = "selected" ';?>> Midwest</option>



<option value="east"<?php if(isset($_POST['direction']) && $_POST ['direction']
=='wed') echo 'selected = "selected" ';?>> East coast</option>


<option value="south"<?php if(isset($_POST['direction']) && $_POST ['direction']
=='thu') echo 'selected = "selected" ';?>>South</option>



<span class="error"><?= $_err ?></span>





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
