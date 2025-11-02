<?php
// home.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DreamHomes - Browse Properties</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  margin: 0; background: #f9f4ef;
}
header {
  background: linear-gradient(45deg,#b08968,#d4a373);
  color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center;
}
header h1 { margin: 0; font-size: 1.8em; }
header button {
  background: white; color: #b08968; border: none; border-radius: 10px; padding: 8px 18px; cursor: pointer;
}
.search {
  padding: 20px; text-align: center;
}
.search input, select {
  padding: 10px; border: 1px solid #ccc; border-radius: 8px; margin: 5px;
}
.properties {
  display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px;
}
.card {
  background: white; border-radius: 15px; overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  width: 300px; transition: 0.3s;
}
.card:hover { transform: translateY(-5px); }
.card img { width: 100%; height: 200px; object-fit: cover; }
.card-content { padding: 15px; }
.card-content h3 { margin: 0; color: #b08968; }
.card-content p { color: #555; font-size: 0.9em; }
.view-btn {
  background: linear-gradient(45deg,#d4a373,#b08968); color: white;
  border: none; padding: 10px 15px; border-radius: 8px; cursor: pointer;
}
.view-btn:hover { opacity: 0.9; }
#modal {
  display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
  background: rgba(0,0,0,0.6); align-items: center; justify-content: center;
}
.modal-content {
  background: white; padding: 30px; border-radius: 10px; width: 400px; text-align: center;
}
</style>
</head>
<body>
<header>
  <h1>DreamHomes</h1>
  <button onclick="goDashboard()">My Dashboard</button>
</header>

<div class="search">
  <input type="text" placeholder="Search city or area...">
  <select>
    <option>Any Type</option><option>House</option><option>Apartment</option>
  </select>
  <select>
    <option>Any Price</option><option>$500 - $1000</option><option>$1000 - $2000</option>
  </select>
</div>

<div class="properties">
  <div class="card">
    <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=800&q=80">
    <div class="card-content">
      <h3>Luxury Apartment</h3>
      <p>2 Beds • 2 Baths • Riyadh</p>
      <p><b>$1200/month</b></p>
      <button class="view-btn" onclick="showDetails('Luxury Apartment in Riyadh with rooftop pool.')">View Details</button>
    </div>
  </div>

  <div class="card">
    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80">
    <div class="card-content">
      <h3>Modern Villa</h3>
      <p>4 Beds • 3 Baths • Dammam</p>
      <p><b>$2500/month</b></p>
      <button class="view-btn" onclick="showDetails('Spacious villa in Dammam with garden and private parking.')">View Details</button>
    </div>
  </div>
</div>

<div id="modal">
  <div class="modal-content" id="modalData">
    <p id="detailText"></p>
    <button onclick="closeModal()">Close</button>
  </div>
</div>

<script>
function showDetails(text){
  document.getElementById('detailText').innerText = text;
  document.getElementById('modal').style.display = 'flex';
}
function closeModal(){
  document.getElementById('modal').style.display = 'none';
}
function goDashboard(){
  window.location.href = 'dashboard.php';
}
</script>
</body>
</html>
