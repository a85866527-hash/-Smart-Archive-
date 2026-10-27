
<?php
include "db1.php";

$result_data = null;

if(isset($_POST['mr'])){

$mr = $_POST['mr'];

$sql = "SELECT * FROM patient_files WHERE mr_number='$mr'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
$result_data = mysqli_fetch_assoc($result);
} else {
$result_data = false;
}
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Search Patient File</title>

<style>

body {
margin:0;
font-family: Arial;
background:#1e73be;
color:white;
text-align:center;
padding-top:80px;
}

.container{
background:#3da0f0;
width:400px;
margin:auto;
padding:30px;
border-radius:15px;
}

input{
width:90%;
padding:12px;
border:none;
border-radius:8px;
margin-bottom:15px;
}

button{
width:95%;
padding:12px;
border:none;
border-radius:8px;
background:#66b3ff;
color:white;
font-size:16px;
}

.result{
margin-top:20px;
font-size:20px;
}

</style>

</head>

<body>

<div class="container">

<h2>Search Patient File</h2>

<form method="POST">

<input type="number" name="mr" placeholder="Enter MR Number" required>

<button type="submit">Search</button>

</form>

<?php if(isset($result_data)): ?>

<div class="result">

<?php if($result_data): ?>

<h3>File Found ✅</h3>
<p>MR: <?php echo $result_data['mr_number']; ?></p>
<p>Shelf: <?php echo $result_data['shelf']; ?></p>
<p>Row: <?php echo $result_data['rownumber']; ?></p>
<p>Column: <?php echo $result_data['columnnumber']; ?></p>

<?php else: ?>

<h3>File Not Found ❌</h3>

<?php endif; ?>

</div>

<?php endif; ?>

</div>

</body>

</html>