<html>
<body>
<form action="insert.php" method="post">
Date: <input type="date" name="date1" required>
Description: <input type="text" name="description" required>
Deposit: <input type="number" name="deposit" step="any" >
Payment: <input type="number" name="payment" step="any" >
<input type="submit">
</form>

</body>
</html>

<?php
include 'config.php';
$con=mysqli_connect("$dbhost","$dbuser","$dbpassword","$dbname");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM $tablename");


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Date</th>
<th>Description</th>
<th>Deposit</th>
<th>Payment</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {

  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['date1'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>$" . $row['Deposit'] . "</td>";
  echo "<td>$" . $row['Payment'] . "</td>";
 
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>

Your Current balance is: $
<?php
include 'config.php';
$con = mysql_connect("$dbhost", "$dbuser", "$dbpassword");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("$dbname",$con);
$sql = "SELECT SUM(Deposit) as Total FROM $tablename";
$sql2 = "SELECT SUM(Payment) as Total FROM $tablename";
$result = mysql_query($sql,$con);
$result2 = mysql_query($sql2,$con);
while ($row = mysql_fetch_array($result)) 
while ($row2 = mysql_fetch_array($result2)) {
	printf ($row[0] - $row2[0]);
}
mysql_close($con);
?>

<html>
</div>
    </div>
   <p class="text-center">Created by <a target="_blank" href="http://www.clevercoding.co/">CleverCoding.co</a>. Open Source at <a target="_blank" href="http://www.github.com/cloding/mysqlledger">Github</a>!</p>
</div>
</html>