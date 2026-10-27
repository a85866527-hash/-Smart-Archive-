
<!DOCTYPE html>
<html>

<head>

<title>Smart Archive Dashboard</title>

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

.dashboard-container {

text-align: center;
}

.dashboard-title {

font-size: 48px;
font-weight: bold;
margin-bottom: 50px;
}

.cards {

display: flex;
gap: 40px;
}

.card {

background-color: #3da0f0;
width: 250px;
height: 220px;

border-radius: 20px;

display: flex;
flex-direction: column;
justify-content: center;
align-items: center;

text-decoration: none;
color: white;

font-size: 22px;
font-weight: bold;

box-shadow: 0 0 15px rgba(0,0,0,0.2);

transition: 0.3s;
}

.card:hover {

background-color: #66b3ff;
transform: scale(1.05);
}

.icon {

font-size: 60px;
margin-bottom: 20px;
}

</style>

</head>

<body>

<div class="dashboard-container">

<div class="dashboard-title">
Smart Archive
</div>

<div class="cards">

<a class="card" href="patientArchive.php">

<div class="icon">🔍</div>

Search Patient File

</a>

<a class="card" href="addfile.php">

<div class="icon">📁</div>

Add Patient File

</a>

</div>

</div>

</body>

</html>