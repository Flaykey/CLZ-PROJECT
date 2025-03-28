<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="index.css">
        <title>PROJECT</title>
    </head>
    <body>
        <header><a href="home.php">HOME</a></header>
        <div class="container">
            <div class="left" id="left">
                <h1>Sign Up</h1>
                <form action="" method="POST">
                <div class="username">
                    <input type="text" placeholder="Username" name ="username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="email">
                    <input type="email" placeholder="Email" name ="email">
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="password">
                    <input type="password" placeholder="Password" name ="password">
                    <i class='bx bxs-lock-alt'></i> 
                </div>
                <div class="bottom">
                    <label id="loginAcc" style="cursor: pointer;"> Already have an account?</label>
                </div>
                <div class="signup">
                    <button type="submit" name="signup">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="right" id="right">
            <h1>Login</h1>
            <form action="" method="POST">
                <div class="username">
                    <input type="text" placeholder="Username" name="username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="password">
                    <input type="password" placeholder="Password" name="password">
                    <i class='bx bxs-lock-alt'></i> 
                </div>
                <div class="bottom">
                    <div class="remember">
                        
                        <input type="checkbox"> Remember me
                    </div>
                    <label id ="createAcc" style="cursor: pointer;"> Don't have an account?</label>
                </div>
                <div class="login">
                    <button type="submit" name="login" >Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
    <?php
    include("connect.php");
    include("util.php");
    include("login.php");
    include("signup.php");
?>

</body>
</html>