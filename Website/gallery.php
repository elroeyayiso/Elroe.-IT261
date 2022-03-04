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
    <title>Your Table of images</title>
    <link href="gallery.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
<div id= "inner-header">
 <h1 id= "Portal"><a href= "index.php"> </a></h1>
</h1>

    <nav>
        <ul>
        <li><a href= "index.html"> Home</a></li>
            <li><a href= "about.php"> About</a></li>
            <li><a href= "daily.php"> Daily</a></li>
            <li><a href= "project.php"> project</a></li>
            <li><a href= "Contact.php"> contact</a></li>
            <li><a href= "gallery.php"> Gallery</a></li>


           
</ul>
</nav>
</div>


    
    
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
   "<?php echo str_replace('_',' ',$name) ; ?>" width="150" height="300"> </td>
  
  
  
  <td><?php echo str_replace('_', ' ', $name) ;?></td>
<td> <?php  echo substr($image,6);?></td>
    </tr>
  <?php endforeach; ?>

    </table>
</body>
</html>
