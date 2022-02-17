<?php
$email='';
$comments='';
$first_name_err='';
$last_name_err='';
$email_err='';
$gender_err='';
$phone_err='';
$wines_err='';
$regions_err='';
$comments_err='';
$privacy_err='';

if($_SERVER['REQUEST_METHOD'] == 'POST') {



if(empty($_POST['first_name'])) {
$first_name_err= 'Please enter your name first name';
} else { 
$first_name = $_POST['first name'];
}


if(empty($_POST['last_name'])) {
    $last_name_err= 'Please enter your name last name';
    } else { 
    $last_name = $_POST['last name'];
    }
    

if(empty($_POST['email'])) {
        $email_err= 'Please enter your email';
        } else { 
        $email= $_POST['email'];
        }
        
if(empty($_POST['gender'])) {
            $gender_err= 'Please choose your gender';
            } else { 
            $gender= $_POST['gender'];
            }
            

 if(empty($_POST['phone'])) {
                $phone_err= 'Please enter your phone number';
                } else { 
                $phone= $_POST['phone'];
                }
                
    
                if(empty($_POST['wines'])) {
                    $wines_err = 'no wines ??';
                    } else { 
                    $wines = $_POST['wines'];
                    }
                    

                    if(empty($_POST['regions'])) {
                        $regions_err = 'please select your region';
                        } else { 
                        $regions = $_POST['regions'];
                        }
                        if(empty($_POST['comments'])) {
                            $comments_err = 'Your comments please ';
                            } else { 
                            $comments = $_POST['comments'];
                            }
    
                            if(empty($_POST['privacy'])) {
                                $privacy_err = 'You cannot pass go';
                                } else { 
                                $privacy = $_POST['privacy'];
                                }
        
                                if(isset($_POST['first_name'],
                                $_POST['last_name'],
                                $_POST['email'],
                                $_POST['gender'],
                                $_POST['phone'],
                                $_POST['regions'],
                                $_POST['wines'],
                                $_POST['comments'],
                                $_POST['privacy'])){
                          
                    $to= 'elroeyayiso123@gmail.com';
                    $subject='Test email' .date('m/d/y, h i A') ;
                    $body='
                 First Name :'.$first_name.'  '.PHP_EOL.'
                 Last Name :'.$last_name.'  '.PHP_EOL.'
               Email :'.$email.'  '.PHP_EOL.'
                Gender :'.$gender.'  '.PHP_EOL.'
                 Phone Number :'.$phone.'  '.PHP_EOL.'
                 Regions :'.$regions.'  '.PHP_EOL.'
                 comments :'.$comments.'  '.PHP_EOL.'
     ';


     mail($to, $subject, $body);
     header('Location:thx.php');

 }//close isset











} //end server request
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form class Exericse</title>
<link rel="stylesheet" href="form.css">
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

<label>Gender</label> 
<ul>
<li>
<input type="radio" name="gender" value="female"<?php if (isset
($_POST['gender']) && $_POST['gender']=='female') echo 
'checked= "checked" ';?>> Female
</li>

<li>
<input type="radio" name="gender" value="male"<?php if (isset
($_POST['gender']) && $_POST['gender']=='male') echo 
'checked= "checked" ';?>> Male
</li>

<li>
<input type="radio" name="gender" value="neither"<?php if (isset
($_POST['gender']) && $_POST['gender']=='neither') echo 
'checked= "checked" ';?>> Neither
</li>
</ul>
<span class="error"><?= $gender_err ?></span>


<label> Phone</label>
<input type="text" name="phone" value="<?php 
if(isset($_POST['phone'])) echo htmlspecialchars
 ($_POST ['phone']);?>">

<span class="error"><?= $phone_err ?></span>


<label>Favorite wines</label> 
<ul>
<li>
<input type="checkbox" name="wines[]" value="cab"<?php if (isset
($_POST['wines']) && in_array('cab', $wines)) echo 
'checked= "checked" ';?>> Cabernet
</li>

<li>
<input type="checkbox" name="wines[]" value="merlot"<?php if (isset
($_POST['wines']) && in_array('Merlot', $wines)) echo 
'checked= "checked" ';?>> Merlot
</li>

<li>
<input type="checkbox" name="wines[]" value="syrah"<?php if (isset
($_POST['wines']) && in_array('syrah', $wines)) echo 
'checked= "checked" ';?>> Syrah
</li>

<li>
<input type="checkbox" name="wines[]" value="malbec"<?php if (isset
($_POST['wines']) && in_array('malbec', $wines)) echo 
'checked= "checked" ';?>> Malbec
</li>
</ul>
<span class="error"><?= $wines_err ?></span>

<label>Region</label>
<select name= "regions">
<option value="" NULL <?php if(isset($_POST['regions']) && $_POST ['regions']
== Null) echo 'selected = "unselected" ';?>>select one </option>


<option value="nw"<?php if(isset($_POST['regions']) && $_POST ['regions']
=='nw') echo 'selected = "selected" ';?>>Northwest </option>



<option value="sw"<?php if(isset($_POST['regions']) && $_POST ['regions']
=='sw') echo 'selected = "selected" ';?>> Southwest</option>



<option value="mw"<?php if(isset($_POST['regions']) && $_POST ['regions']
=='mw') echo 'selected = "selected" ';?>> Midwest </option>


<option value="se"<?php if(isset($_POST['regions']) && $_POST ['regions']
=='se') echo 'selected = "selected" ';?>>Southeast </option>


<option value="ne"<?php if(isset($_POST['regions']) && $_POST ['regions']
=='ne') echo 'selected = "selected" ';?>>Northeast </option>
</select>
<span class="error"><?= $regions_err ?></span>


<label>Comments</label>
<textarea name="comments" value="<?php if(isset($_POST['comments']))
 echo htmlspecialchars($_POST['comments']) ;?>"></textarea>

<span class="error"><?= $comments_err ?></span>

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

<?php


      ?> 
</body>
</html>