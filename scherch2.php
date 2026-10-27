
<!DOCTYPE html>
<html>

<head>

<title>Search Patient File</title>

<style>

body {

margin: 0;
padding: 0;
font-family: Arial, sans-serif;
background-color: #1e73be;

height: 100vh;

display: flex;
justify-content: center;
align-items: center;

color: white;
}

.search-container {

background-color: #1e73be;

padding: 40px;

border-radius: 15px;

box-shadow: 0 0 15px rgba(0,0,0,0.2);

width: 400px;

text-align: center;
}

.search-container h2 {

margin-bottom: 25px;

font-size: 32px;
}

.search-container input {

width: 90%;

padding: 12px;

border: none;

border-radius: 8px;

font-size: 16px;

margin-bottom: 20px;
}

.search-container button {

width: 95%;

padding: 12px;

background-color: #3da0f0;

border: none;

border-radius: 8px;

color: white;

font-size: 18px;

cursor: pointer;
}

.search-container button:hover {

background-color: #66b3ff;
}

</style>

</head>

<body>

<div class="search-container">

<h2>Search Patient File</h2>

<form action="patientArchive.php" method="POST">

<input type="number"
name="mr"
placeholder="Enter MR Number"
required>

<button type="submit">Search</button>

</form>

</div>

</body>

</html>