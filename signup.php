<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/login.css">
    <link rel="stylesheet" href="./asset/css/bass.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="logo-image">
            <a href="index.php"><img src="./asset/image/index/floom.png" alt=""></a>
        </div>
    </header>
    <hr>
    <main>
        <div class="grid">
            <section class="signup-form">
                <h3>Sign Up</h3>
                <form action="includes/signup.inc.php" method="post">
                    <div class="row">
                        <label for="">Full Name</label>
                        <input type="text" name="name" placeholder="Full Name...">
                    </div>
                    <div class="row">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="Email...">
                    </div>
                    <div class="row">
                        <label for="">User Name</label>
                        <input type="text" name="uid" placeholder="User Name...">
                    </div>
                    <div class="row">
                        <label for="">Password</label>
                        <input type="password" name="pwd" placeholder="PassWord...">
                    </div>
                    <div class="row">
                        <label for="">Password Repeat</label>
                        <input type="password" name="pwdrepeat" placeholder="PassWord Repeat...">
                    </div>
                    <input type="submit" name="submit" value="Sign Up">
                    <div class="row">
                        <p>Already have an account? <a href="login.php"> Sign in</a></p>
                    </div>
                </form>
            </section>

        </div>

    </main>

</body>

</html>