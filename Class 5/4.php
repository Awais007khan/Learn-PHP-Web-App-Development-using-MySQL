<?php
require '../Class 2/0.php';

echo '<pre><h1>$_GET ';
print_r($_GET);

$sql = 'INSERT INTO emails VALUES (null, "'.$_GET['email'].'"); 
	INSERT INTO users VALUES (null, "'.$_GET['name'].'", "'.$_GET['email'].'", "'.$_GET['password'].'");';
print_r("<br><br>$sql");

$result = mysqli_multi_query(
	$connection,
	$sql
);

if ($result === TRUE) {
  echo "<br><br>Query executed.";  // optional
}
else {
	echo '<br><br>Error in executing query:' . mysqli_error($connection);
}

mysqli_close($connection); // optional
?>