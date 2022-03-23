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
$Tea= '<h2>Monday Asheville!</h2>';
$pic = 'asheville.jpg';
$alt = 'asheville';
$background ='lavender';
$content= 'Asheville is a city in western North Carolina’s Blue Ridge Mountains.
 It’s known for a vibrant arts scene and historic architecture';
break;

Case 'Tuesday' :
$Tea= '<h2>Tuesday is Tampa!</h2>';
$pic = 'Tampa.jpg';
$alt = 'Tampa';
$background='Yellowgreen';
$content= 'Tampa is a city on Tampa Bay, along Florida’s Gulf Coast. 
A major business center, it’s also known for its museums and other cultural offerings. ';
break;

Case 'Wednesday' :
$Tea= '<h2>Wenesday is Charleston !</h2>';
$pic = 'Charleston.jpg';
$alt = 'Charleston';
$background=' yellow';
$content= 'I followed my heart, and it led me to Charleston ';
break;

Case 'Thursday' :
$Tea= '<h2>Thursday is  San Francisco!</h2>';
$pic = 'SanFrancisco.jpg';
$alt = 'san';
$background='pink';
$content= '""If your alive, you cant be bored in San Francisco."';
break;

Case 'Friday' :
$Tea= '<h2>Friday is Orlando!</h2>';
$pic = 'Orlando.jpg';
$alt = 'Orlando';
$background='green';
$content= '"Orlando, a city in central Florida, is home to more than a dozen theme parks."';
break; 

Case 'Saturday' :
$Tea= '<h2>Saturday is Salt Lake City!</h2>';
$pic = 'Salt.jpg';
$alt = 'Salt Lake City';
$background='tan';
$content= 'Salt Lake City is the capital and most populous city of the U.S. state of Utah, 
as well as the seat of Salt Lake County, the most populous county in Utah.  ';
break;

Case 'Sunday' :
$Tea= '<h2>Sunday is Miami!</h2>';
$pic = 'Miami.jpg';
$alt = 'Miami';
$background= 'aqua';
$content= 'Miami, officially the City of Miami, is a coastal metropolis located in Miami-Dade County in southeastern Florida';
break;

}

?>
<!doctype html>
<html lang= "en">
<head>
    <meta charset= "UTF-8">
    <title> Switch classwork Exerise </title>
    <link rel="stylesheet" href="daily.css">
</head>


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
            <li><a href= "About.php"> About</a></li>
            <li><a href= "daily.php"> Daily</a></li>
            <li><a href= "contact.php"> Contact</a></li>
            


           
        </ul>
    </nav>

    
</div>
</header>


<body>
<div style= "background-color: <?php echo $background; ?>">

    

    
    <h1>Choose your retirement destination</h1>
    <?php
    echo $City;
    
    ?>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt;?>" width="400" height="500" align="center">



 <p><?php echo $content;?></p>

    <h2></h2>

    <ul>
    <p style="text-align:right;">
 <li><a href="daily.php?today=Monday"> Monday</a></li>
 <li><a href="daily.php?today=Tuesday"> Tuesday</a></li>
 <li><a href="daily.php?today=Wednesday"> Wednesday</a></li>
 <li><a href="daily.php?today=Thursday"> Thursday</a></li>
 <li><a href="daily.php?today=Friday"> Friday</a></li>
 <li><a href="daily.php?today=Saturday"> Saturday</a></li>
 <li><a href="daily.php?today=Sunday"> Sunday</a></li>
</p>
     
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

