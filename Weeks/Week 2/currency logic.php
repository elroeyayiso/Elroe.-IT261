<?php

// We have travelled the world and different currency that we need to exchange
// canada - .08
// rubles 0.013
// pounds 1.37
// euros 1.14
// yen 0.0087
// we have 2000 canadian, rubles, etc

$canadian_rate=.80;
$canadian_us= 2000/ $canadian_rate;

$rubles_rate=.013;
$rubles_us= 2000/$rubles_rate;


$pounds_rate=1.37;
$pounds_us= 2000/$pounds_rate;

$euros_rate=1.37;
$euros_us= 2000/$euros_rate;

$yen_rate=1.37;
$yen_us= 2000/$yen_rate;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currency Logict</title>
<style>
     table{

width: 500px;
margin:0 auto;
border:1px solid red;
border-collapse: collapse;

     }
</style>
</head>
<body>
    <table>
        <tr>
            <th>Currency</th>
            <th>Us Dollars</th>
        </tr>

        <tr>
            <td>Rubles</ted>
            <td><?php echo number_format($rubles_us,2);          ?> 

          
           <tr>
            <td>Pounds</ted>
            <td><?php echo number_format($pounds_rate,2);          ?>
    
<tr>
       <td>Canadian</ted>
<td><?php echo number_format($canadian_rate,2);          ?>

<tr>
<td>Yen</ted>
<td><?php echo number_format($yen_rate,2);          ?>

<tr>
<td>Euros</ted>
<td><?php echo number_format($euros_rate,2);          ?>

</tr>
    </table>
</body>
</html>