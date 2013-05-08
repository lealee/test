
<body>
<h1>
新增成功
</h1>
<?php 
  echo "<br>Firstname:".$firstname; 
  echo "<br>Lastname:".$lastname; 
  echo "<br>Age:".$age; 
 

$con=mysqli_connect("127.0.0.1","root","0000","member");
// Check connection

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";

mysqli_close($con);

?>


</body>