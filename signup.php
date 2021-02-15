<!DOCTYPE html>
<html>

<head>
    <?php require('header.php') ?>
    <title>Urban Style &trade; Co.</title>
</head>

<?php require('navbar.php') ?>

<body class="signup-body">
    <div id="login-box">
        <div class="left">
            <h1>Sign up</h1>

            <input type="textsignup" name="username" placeholder="Username" />
            <input type="textsignup" name="email" placeholder="E-mail" />
            <input type="passwordsignup" name="password" placeholder="Password" />
            <input type="passwordsignup" name="password2" placeholder="Retype password" />

            <button type="" class="primary-button" name="signup_submit" >Sign me up</button>
        </div>

        <div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
        </div>
        <div class="or">OR</div>
    </div>
    <?php require('footer.php') ?>
</body>

</html>