<?php
// class tea exercise 


//$variable = 'Life is good';
//if(isset($variable)) {
//echo 'Yippy-skippy!!!';

//} else {
 //   echo 'Not';
//}

// starting the switch
// if something is set, today, then all is well
// else, today is Today

//Global variables are capitalized and start with $_ GET




if(isset($_GET['today'])) {
$today=$_GET['today'];
} else {
$today= date('l');
}

//Switch

Switch($today) {

Case 'Monday' :
$Tea= '<h2>Monday is Black tea day!</h2>';
$pic = 'Black tea.jpg';
$alt = 'Black tea';
$background ='brown';
$content= '<b> Black tea</b> also translated to red tea in various Asian languages, is a type of tea that is more 
oxidized than oolong, yellow, white and green teas. Black tea is generally stronger in flavor than other teas
 All five types are made from leaves of the shrub Camellia sinensis';
break;

Case 'Tuesday' :
$Tea= '<h2>Tuesday is Green tea!</h2>';
$pic = 'Green tea.jpg';
$alt = 'Green tea';
$background='Yellowgreen';
$content= '“No matter where you are in the world, you are at home when tea is served.” by Earlene Grey';
break;

Case 'Wednesday' :
$Tea= '<h2>Wenesday is Lemon tea day!</h2>';
$pic = 'lemon tea.jpg';
$alt = 'lemon tea';
$background=' yellow';
$content= ' Lemon tea is prepared using black tea or green tea and by adding the right amount of lemon juice to it.
 When you add lemon juice to your tea, it changes the colour of tea. ';
break;

Case 'Thursday' :
$Tea= '<h2>Thursday is Ginger day!</h2>';
$pic = 'Ginger tea.jpg';
$alt = 'Ginger tea';
$background='pink';
$content= 'Every cup of tea tells a story.';
break;

Case 'Friday' :
$Tea= '<h2>Friday is Herbal tea day!</h2>';
$pic = 'herbal tea.jpg';
$alt = 'herbal tea';
$background='orange';
$content= 'A cup of tea meakes everything better';
break; 

Case 'Saturday' :
$Tea= '<h2>Saturday is peppermint tea day!</h2>';
$pic = 'peppermint tea.jpg';
$alt = 'Peppermint tea';
$background='tan';
$content= '“Life is like a cup of tea. It’s all in how you make it.” ';
break;

Case 'Sunday' :
$Tea= '<h2>Sunday is Red tea day!</h2>';
$pic = 'red tea.jpg';
$alt = 'red tea';
$background= 'chocolate';
$content= 'Rooibos, meaning "red bush"; is a broom-like member of the plant family Fabaceae that grows in 
South Africa s fynbos. The leaves are used to make a herbal tea that is called by the names: rooibos, bush
tea, red tea, or redbush tea';
break;

}

?>
<!doctype html>
<html lang= "en">
<head>
    <meta charset= "UTF-8">
    <title> Switch classwork Exerise </title>
    <link href="css/styles.css" type="text/css" rel= "stylesheet">
</head>

<body>
<div style= "background-color: <?php echo $background; ?>">

    

    
    <h1>Good Moring! </h1>
    <?php
    echo $Tea;
    
    ?>
    <img src="Image/<?php echo $pic; ?>" alt="<?php echo $alt;?>" width="600" height="600">

 <p><?php echo $content;?></p>

    <h2> Check out our Daily speicals</h2>
    
    <ul>
 <li><a href="daily.php?today=Monday"> Monday</a></li>
 <li><a href="daily.php?today=Tuesday"> Tuesday</a></li>
 <li><a href="daily.php?today=Wednesday"> Wednesday</a></li>
 <li><a href="daily.php?today=Thursday"> Thursday</a></li>
 <li><a href="daily.php?today=Friday"> Friday</a></li>
 <li><a href="daily.php?today=Saturday"> Saturday</a></li>
 <li><a href="daily.php?today=Sunday"> Sunday</a></li>

     
    </ul>
    </div>
   
    <footer>
        <div id= "inner-footer">
    <ul>
        <li>copyright &copy;</li>
        <li>All Rights Reserved;</li>
        <li><a href= "../index.php"> Web Design By Elroe</a></li>
    
    <li><a href= "">HTML Validation</a></li>
    <li><a href= "">CSS Validation</a></li>
    </ul>
    </div> <!--end inner footer-->
    </footer>
    
    </body>
    </html>
    

</body>

</html>

