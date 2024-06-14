<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLoginPage</title>
    <link rel="stylesheet" href="css/login.css">

    <!-- SweetAlert for notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>   
    <div class="background">
        <img src="images/landingpage.jpg" alt="background image">
    </div>
    <div class="main">
        <form id="loginForm">
            <a href="index.php" class="close-button">×</a>
            <h1>Login</h1>

            <div class="input-box">
                <input name="username" id="username" type="text" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input name="password" id="password" type="password" placeholder="Password" required>
            </div>
            <br>
            <div class="btn-container">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

    <script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Get the values from the form
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Check credentials
    if (username === 'admin' && password === 'admin123') {
        Swal.fire({
            title: 'Success!',
            text: 'Login successful!',
            icon: 'success'
        }).then(() => {
            window.location.href = 'admin.php';
        });
    } else {
        Swal.fire({
            title: 'Error!',
            text: 'Invalid username or password!',
            icon: 'error'
        });
    }
});
</script>

</body>
</html>
