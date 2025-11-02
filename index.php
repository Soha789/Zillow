<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DreamHomes - Real Estate Platform</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  margin: 0; padding: 0;
  background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), 
              url('https://images.unsplash.com/photo-1505691723518-36a9c67d76a8?auto=format&fit=crop&w=1600&q=80') center/cover;
  height: 100vh; display: flex; align-items: center; justify-content: center; color: white;
}
.container {
  text-align: center;
}
h1 { font-size: 3em; color: #f6e6c2; margin-bottom: 10px; }
p { font-size: 1.2em; max-width: 600px; margin: auto; color: #fff; }
button {
  margin: 15px; padding: 12px 25px; border: none; cursor: pointer;
  border-radius: 30px; font-size: 1.1em; color: white;
  background: linear-gradient(45deg,#d4a373,#b08968);
  transition: 0.3s;
}
button:hover { transform: scale(1.1); background: linear-gradient(45deg,#b08968,#d4a373);}
</style>
</head>
<body>
<div class="container">
  <h1>DreamHomes</h1>
  <p>Browse, list, and explore beautiful properties for sale or rent — inspired by Zillow’s smart real estate experience.</p>
  <button onclick="goSignup()">Sign Up</button>
  <button onclick="goLogin()">Login</button>
</div>

<script>
function goSignup(){ window.location.href = 'signup.php'; }
function goLogin(){ window.location.href = 'login.php'; }
</script>
</body>
</html>
