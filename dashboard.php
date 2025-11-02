<?php
// dashboard.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard - DreamHomes</title>
<style>
body { font-family: 'Poppins', sans-serif; background: #fff7ec; margin: 0; }
header {
  background: linear-gradient(45deg,#b08968,#d4a373);
  color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center;
}
.grid {
  display: flex; flex-wrap: wrap; gap: 20px; padding: 30px; justify-content: center;
}
.card {
  background: white; border-radius: 15px; padding: 20px; width: 280px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: 0.3s;
}
.card:hover { transform: translateY(-5px); }
h2 { text-align: center; color: #b08968; }
button {
  background: white; border: none; color: #b08968; border-radius: 10px;
  padding: 8px 18px; cursor: pointer; font-weight: bold;
}
button:hover { background: rgba(255,255,255,0.7); }
</style>
</head>
<body>
<header>
  <h1>My Dashboard</h1>
  <button onclick="logout()">Logout</button>
</header>

<h2>Your Listed Properties</h2>
<div class="grid">
  <div class="card">
    <h3>Cozy Apartment</h3>
    <p>Located in Jeddah • $950/month</p>
  </div>
  <div class="card">
    <h3>Beachside Villa</h3>
    <p>Located in Jubail • $3000/month</p>
  </div>
</div>

<script>
function logout(){
  alert('Logging out...');
  window.location.href = 'logout.php';
}
</script>
</body>
</html>
