<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link rel="stylesheet" href="test.css">

        <title>Register Form</title>
    </head>
    <body>
        <div class="container">
            <form class="login-email" method="POST" action="home.php" >
                <p class="login-text" >Register</p>
                <div class="input-group">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Confirm Password" name="cpassword" required>
                </div>
                <div class="input-group">
                     <button>Register</button>
                </div>
                <p class="login-register-text">Have an account?&nbsp;<a href="index.php">Login Here</a></p>
            </form>
        </div>
    </body>
</html>