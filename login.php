
<?php

include "db1.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM employees
WHERE username='$username'
AND passwordemployee='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

header("Location: scherch.php");
exit();

} else {

echo "
<h2>Wrong Username or Password</h2>
<a href='index.php'>Try Again</a>
";

}

?>