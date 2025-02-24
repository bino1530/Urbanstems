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
            <section class="login-form">
                <h3>Log In</h3>
                <form action="login.inc.php" method="post">
                    <div class="row">
                        <label for="">User Name</label>
                        <input type="text" name="uid" placeholder="User Name/Email...">
                    </div>
                    <div class="row">
                        <label for="">Password</label>
                        <input type="password" name="pwd" placeholder="PassWord...">
                    </div>
                    <input type="submit" name="submit" value="Log In">
                    <div class="row">
                        <p>Don’t have an account?<a href="signup.php"> Sign up</a></p>
                    </div>
                </form>
            </section>

        </div>

    </main>

</body>

</html>