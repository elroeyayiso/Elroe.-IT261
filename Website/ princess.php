<?php
$people['Tiana'] = 'tiana_  49th animated feature film The Princess and the Frog.';   
$people['Mulan'] = 'mulan_36th animated feature film Mulan.';
$people['Rapunzel'] = 'rapun_ 50th animated features film Trangled.';
$people['Jasmine'] = 'jasmi_  31st animated feature film Aladdin.';
$people['Belle'] = 'belle_ 30th animated feature film Beauty and the Beast.';





// variable key               value
// $name                   $image
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7, class exercise</title>
    <style>

        table{
            border:1px solid red;
            border-collapse: collapse;
        }
        td{
            border:1px solid red;

        }

</style>



</head>
<body>
    <table>

    <?php foreach($people as $name => $image) :?>
    <tr>
  <td><img src= "princess/<?php echo substr($image, 0,5);?>.jpg" alt= 
   "<?php echo str_replace('_',' ',$name) ; ?>" width="100" height="100"> </td>
  
  
  
  <td><?php echo str_replace('_', ' ', $name) ;?></td>
<td> <?php  echo substr($image,6);?></td>
    </tr>
  <?php endforeach; ?>

    </table>
</body>
</html>