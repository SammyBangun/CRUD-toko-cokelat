<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./login/style.css">
    <link rel="web icon" type="png" href="./assets/img/choco.png">
    <!-- Include SweetAlert CSS and JS from a CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>

<body>
    <script>
    </script>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form class="form-signup" action="login/signup.php" method="post">
                <h2>Buat Akun</h2>
                <label for="inputName" class="sr-only">Name</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required autofocus>
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <button type="submit" value="Daftar">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form class="form-signin" action="login/logcek.php" method="POST">
                <?php if (isset($_GET['data']) == 'error') { ?>
                    <h2 class="center-text">Username/Password Salah </h2>
                <?php } else { ?>
                    <h2 class="form-signin-heading">Silahkan Sign In</h2>
                <?php } ?>
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" id="usernameSignIn" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPasswordSignIn" name="password" class="form-control" placeholder="Password" required>
                <button type="submit" value="Login">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali !</h1>
                    <p>Masukkan username dan password</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo !</h1>
                    <p>Tolong masukkan username dan password dengan benar</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./functions/mode.js"></script>
</body>

</html>