<?php
include('config.php');

if(isset($_GET['id'])) {
$id=(int)$_GET['id'];
}else{
header('Location:people.php');

}


//select from the table and make sure that people_id=$id
$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

include('./includes/header.php');

$iConn=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,
mysqli_connect_error()));

$result=mysqli_query($iConn,$sql)or die(myError(__FILE__,__LINE__,
mysqli_connect_error($iConn)));

if(mysqli_num_rows($result) > 0) {

 while($row =mysqli_fetch_assoc($result)) {
     $first_name=stripslashes($row['first_name']);
     $last_name=stripslashes($row['last_name']);
     $email=stripslashes($row['email']);
     $birthdate=stripslashes($row['birtdate']);
     $occupation=stripslashes($row['occupation']);
     $details=stripslashes($row['details']);
     $feedback = '';
     





 }//closing while loop
}else{ 
    $feedback='Houston, we have a problem!';


}// closing mysquli


//place all the php here before calling it out the header page


include('./includes/header.php');

?>
<main>
    <h1> Welcome to our people view page!</h2>
    <h2>Welcome to <?= $first_name?>'s page</h2>
    <!--<h2>Welcome to   <?php echo $first_name?>'s Page</h2>-->
    <ul>
    <?php
    echo '
    <li><b>First Name:</b>'.$first_name.'</li>
    <li><b>last Name:</b>'.$last_name.'</li>
    <li><b>Birthdate:</b>'.$birthdate.'</li>
    <li><b>Email:</b>'.$email.'</li>
    <li><b>Occupation:</b>'.$occupation.'</li>
    <li>
    <p>'.$details.'</p>
    </li>
    ';
    ?>
    </ul>

    <p><a href="people.php">Return to the people.php page!</a></p>

    
</main>
<aside>

<h3> We will display the image of the politician that will see on this page! </h3>

</aside>


</div>

<!--end wrapper-->

<?php
include('./includes/footer.php');
