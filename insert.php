<?php
include 'config.php';
$con=mysqli_connect("$dbhost","$dbuser","$dbpassword","$dbname");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO $tablename (date1, description, Deposit, Payment)
VALUES
('$_POST[date1]','$_POST[description]','$_POST[deposit]','$_POST[payment]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Record Added";

mysqli_close($con);
?>
