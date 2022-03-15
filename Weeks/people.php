<?php
include('config.php');
include('./include/header.php');

?>
<main>
<h1> Welcome to my people page </h1>

<?php
$sql = 'SELECT* FROM people';
// then we are going to connect to the database!!!

//define('DB_NAME','heroku_87a4f2f78a4140a');
    //define('DB_USER','bb961ce67b079a');
   // define('DB_PASSWORD',' 46b57b87');
   // define('DB_HOST','heroku_87a4f2f78a4140a');


$iConn=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,
mysqli_connect_error()));

$result=mysqli_query($iConn,$sql);

//we are asking if the number of rows is greater then zero,then we will be able to see the table..

if(mysqli_num_rows($result) > 0) {
    // think about our one row being an array- an associative array $row['first__name']


    while($row =mysqli_fetch_assoc($result)) {

        echo '
        <h2> Information about '.$row['first_name'].'</h2>
        <ul>
       <li><b> First Name: </b> '.$row['first_name'].'</li>
       <li><b> Last Name: </b> '.$row['last_name'].'</li>
       <li><b> Email: </b> '.$row['email'].'</li>
       <li><b> Birthday: </b> '.$row['birthday'].'</li>
       <li><b> Occupation: </b> '.$row['occupation'].'</li>
       </ul>
       <p>'.$row['details'].'</p>
        
       ';
        
        



    }
}// close statement 






?>


</main>

<aside>



</aside>

</div>

<!--end wrapper-->

<?php
include('./includes/footer.php');
