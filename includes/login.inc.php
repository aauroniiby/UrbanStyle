<div id="id01" class="login">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    <form class="login-content" name="loginForm" onsubmit="return validateLogin()" method="post">

        <div class="login-form">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit" class="primary-button">Login</button>
                <div class="login-cancel-form" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="primary-button">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                    <span class="psw">If you don't have an account,<a onclick="document.getElementById('id01').style.display='none'"  href="signup.php">SignUp?</a></span>
                </div>
        </div>
    </form>
</div>