<?php
// signup.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Signup - DreamHomes</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: #fff7ec; display: flex; align-items: center; justify-content: center;
  height: 100vh; margin: 0;
}
form {
  background: white; padding: 40px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  width: 350px; text-align: center;
}
h2 { color: #b08968; }
input {
  width: 90%; padding: 10px; margin: 10px 0; border-radius: 10px; border: 1px solid #ccc;
}
button {
  width: 95%; padding: 12px; border: none; border-radius: 10px;
  background: linear-gradient(45deg,#d4a373,#b08968); color: white; font-size: 1em; cursor: pointer;
}
button:hover { transform: scale(1.05); }
a { color: #b08968; text-decoration: none; }
</style>
</head>
<body>
<form id="signupForm">
  <h2>Create Account</h2>
  <input type="text" placeholder="Full Name" required><br>
  <input type="email" placeholder="Email" required><br>
  <input type="password" placeholder="Password" required><br>
  <input type="password" placeholder="Confirm Password" required><br>
  <button type="submit">Sign Up</button>
  <p>Already have an account? <a href="login.php">Login</a></p>
</form>

<script>
document.getElementById('signupForm').addEventListener('submit', function(e){
  e.preventDefault();
  alert('Signup successful! Redirecting to Home...');
  window.location.href = 'home.php';
});
</script>
</body>
</html>
