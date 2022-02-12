<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Currency converter form!</title>
    <link href="css/style.css" type="text/css"
    rel="stylesheet">
</head>
<body>
    <h1> My Currency convert</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
    method="post">
    
    <label> Name </label>
    <input type= "text" name= "name" value="<?php if(isset($_POST['name'])) echo
    htmlspecialchars($_POST['name']);?>">


<label> Email </label>
    <input type= "email" name= "email" value="<?php if(isset($_POST['email'])) echo
    htmlspecialchars($_POST['email']);?>">

<label>Amount</label>
    <input type= "number" name= "amount" value="<?php if(isset($_POST['amount'])) 
    echo htmlspecialchars($_POST['amount']) ;?>">

<!--
    rubles =0.013;
    canadian =.80;
    pounds = 1.37;
    euros = 1.14;
    yen = 0.0087;-->

<label> Currency </label> 
<ul>   
 <li>
<input type="radio" name= "currency" Value="0.13" <?php if(isset($_POST['currency']) && $_POST['currency']==0.13) 
echo 'checked= "checked"';?>>Rubles
</li>

<li>
<input type="radio"  name= "currency" Value="0.80" <?php if(isset($_POST[ 'currency'])&& $_POST['currency']==0.80) 
echo 'checked= "checked"';?>>Pounds
</li>

<li>
<input type="radio"  name= "currency" Value="1.37" <?php if(isset($_POST[ 'currency'])&& $_POST['currency']==1.37) 
echo 'checked= "checked"';?>>Euros
</li>

<li>
<input type="radio"  name= "currency" Value="0.14" <?php if(isset($_POST[ 'currency'])&& $_POST['currency']==0.14) 
echo 'checked= "checked"';?>>canadian
</li>


<li>
<input type="radio"  name= "currency" Value="0.0087" <?php if(isset($_POST[ 'currency'])&& $_POST['currency']==0.0087) 
echo 'checked= "checked"';?>>Yen
</li>

</ul>

<!-- check works the same way as a radio button-->
<!-- you cannot "select one"-->
<select name="bank">
    <option value=""NULL <?php if(isset($_POST['bank']) && $_POST['bank']==NULL)echo 'selected ="unselected" ' ;?>>
      Select one </option>

      <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank']=='boa')echo 'selected ="unselected" ' ;?>>
      Bank of America </option>

      <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank']== 'chase')echo 'selected ="unselected" ' ;?>>
      Chase Bank </option>


      <option value="Wells" <?php if(isset($_POST['bank']) && $_POST['bank']== 'Wells')echo 'selected ="unselected" ' ;?>>
      Wells Fargo </option>

      <option value="becu"<?php if(isset($_POST['bank']) && $_POST['bank']== 'becu') echo 'selected ="unselected" ' ;?>>
      BECU </option>


</select>


<input type= "submit" name= "Convert it!">
    </form>
    <p><a href=""> Rest</a></p>
    <?php

//$_server[REquest_METHOD]

if($_SERVER['REQUEST_METHOD']== 'POST') {

if(empty($_POST['name'])) {
    echo 'please fill out your name!';
}
if(empty($_POST['email'])) {
    echo 'please fill out your email!';
}
   
if(empty($_POST['amount'])) {
     echo 'please fill out your amount!';    
}

if(empty($_POST['currency'])) {
    echo 'please fill out your currency!';   
}

if($_POST['bank'] == NULL) {
    echo 'Please choose your banking institution';

}
// name,email,amount,currency bank

if(isset($_POST['name'],
$_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'],
$_POST['bank'])) {

    $name= $_POST ['name'];
    $email= $_POST ['email'];
    $amount= $_POST ['amount'];
    $currencye= $_POST ['currency'];
    $bank= $_POST ['bank'];

    $total = $amount * $currency;

if(!empty($name && $email && $amount && $currency && $bank)) {

}

echo '
<p>' .$name.' </P>
<p>' .$email.' </P>
<p>' .$amount.' in foreign currency </P>
<p>' .$total.' in American Dollars</P>
<p>' .$bank.' </P>

';

} // end isset

} //close server

?>
</body>
</html>