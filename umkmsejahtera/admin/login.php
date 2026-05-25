
<!DOCTYPE html>
<html>
<head>

<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#0d6efd,#6610f2);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.card{
border-radius:15px;
}

</style>

</head>

<body>

<div class="card shadow p-4" style="width:400px">

<h3 class="text-center mb-3">Login Admin</h3>

<form action="proses_login.php" method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="mb-3">
<img src="captcha.php">
</div>

<div class="mb-3">
<label>Masukkan CAPTCHA</label>
<input type="text" name="captcha" class="form-control" required>
</div>

<button class="btn btn-primary w-100">Login</button>

</form>

</div>

</body>
</html>