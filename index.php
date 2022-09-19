<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link rel="stylesheet" href="test.css">

        <title>Login/Sign-up Page</title>
    </head>
    <body>
        <div class="container">
            <p class="login-text">Login with Social Media</p>
            <div class="login-social">
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#" class="twitter"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#" class="google"><i class="fab fa-google-plus"></i>google plus</a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
            <form class="login-email" method="POST" action="home.php" >
                <p class="login-text">Login with Email</p>
                <div class="input-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                     <button>Login</button>
                </div>
                <p class="login-register-text">Don't have an account?&nbsp;<a href="register.php">Register Here</a></p>
            </form>
        </div>
    </body>
</html>