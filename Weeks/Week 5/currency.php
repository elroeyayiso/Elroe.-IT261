<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Currency converter form!</title>
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
    htmlspecialchars($_POST['name']);?>">

<label> amount</label>
    <input type= "number" name= "amount" value="<?php if(isset($_POST['amount'])) echo
    htmlspecialchars($_POST['name']);?>">

<!--
    rubles =0.013;
    canadian =.80;
    pounds = 1.37;
    euros = 1.14;
    yen = 0.0087;-->

<label> Currency </label>
    <input type= "raido" name= "currency" value="0.013"<?php if(isset($_POST['currency'])) echo
    htmlspecialchars($_POST['name']);?>">












    <input type= "submit" name= "Convert it!">

    </form>
    <p><a href=""> Rest</a></p>
    <?php










If($_SERVER['REQUEST_METHOD']== 'POST') {

  if(empty($_POST['name'])) {
echo 'please fill out your name!';
    }
if(empty($_POST['email'])) {
    echo 'please fill out your email!';
}
    if(empty($_POST['amount'])) {
        echo 'please fill out your amount!';    

    }



?>
</body>
</html>