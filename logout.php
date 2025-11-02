<?php
// logout.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Logout - DreamHomes</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(45deg,#d4a373,#b08968);
  color: white; display: flex; align-items: center; justify-content: center; height: 100vh;
  flex-direction: column;
}
h2 { font-size: 2em; }
p { margin-top: 10px; }
</style>
</head>
<body>
<h2>You have successfully logged out.</h2>
<p>Redirecting to homepage...</p>

<script>
setTimeout(()=>{ window.location.href = 'index.php'; }, 3000);
</script>
</body>
</html>
