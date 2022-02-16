<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Form</title>
    <link href="css/style.css" type="text/css" rel= "stylesheet">
</head>
<body class= "celcius">
    <form action="" method="post">
        <fieldset>
<legend> Our Celcius Form</legend>
<label> Enter your celcius Value </label>
<input type="number" name="cel">

<input type= "submit" value="convert it">

        </fieldset>
        <p><a href= ""> Reset!</a></p>

<?php

//introducing the intval funcation
// use this funcation when you have a non-numeric error displaying

if(isset($_POST['cel'])) {
$cel= $_POST['cel'];
$far= ($cel*9/5)+32;



if($cel == NULL) {

} elseif($far <= 32) {
echo $far;
echo ''.$cel .' degrees = '.$far.' degress and it is pretty cold! ' ;

}  elseif($far <= 40) {
    echo $far;
    echo ''.$cel .' degrees = '.$far.' fahrenheit and it is pretty cold! ' ;

}elseif($far <= 50) {

    echo $far;

    echo ''.$cel .' degrees = '.$far.' fahrenheit  and it is getting warmer! ' ;
}


}elseif($far <= 60) {

    echo $far;

 
   echo ''.$cel .' degrees = '.$far.' fahrenheit  and it is surely getting warmer! ' ;

}elseif($fare <=75){
    echo ''.$cel .' degrees = '.$far.' fahrenheit  and it is warmer! <br> AND i am reading in the park ' ;



    
    



} // end isset

?>

</body>
</html>