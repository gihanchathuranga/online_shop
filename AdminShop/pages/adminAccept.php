
    <!-- dynamic content will be here -->
<?php
//including the database connection file
include '../config/dbconn.php';



  
//getting id of the data from url
$id = $_GET['user_id'];
$order_id = $_GET['order_id'];
$oid = 'Accepted';
//deleting the row from table
$results = mysqli_query($dbconn, "UPDATE ordering SET status ='".$oid."' where status='Pending' ");
//redirecting to the display page (index.php in our case)
echo "$results";
if(mysqli_query($dbconn, $results)){
    echo "success";
} else {
    echo "erro". mysqli_error($dbconn);    
}
header("Location:orders.php");
?>
    