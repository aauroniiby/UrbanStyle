<header id="site-header" class="site-header container">
    <section class="site-header-flex">
        <div class="company-logo">
            <a href="index.html"><img src="images/logo.svg" alt="Urban Style"></a>
        </div>

        <div class="shopping-cart">
            <img src="images/cart-icon.svg" class="cart" alt="Shopping Cart">
            <div id="cart-counter" class="cart-counter">
                <p id="counter" class="counter" type="number"></p>
            </div>
        </div>

        <div class="navigation-bar">
            <nav class="navigation-top">
                <ul>
                    <li><a href="#about" name="About">About</a></li>
                    <li><a href="#products" name="Shop">Shop</a></li>
                    <li><a href="#highlights" name="Featured">Featured</a></li>
                    <li><a onclick="document.getElementById('id01').style.display='block'">Login</a></li>
                </ul>
            </nav>
        </div>

        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>

            <form class="modal-content" name="loginForm" onsubmit="return validateLogin()" method="post">

                <div class="container">
                    <div id="username_div">
                        <label for="email"></label><b>Email</b> <span id="loginemailError" class="error"></span></label>
                        <input type="text" placeholder="Enter Email" name="login-email">
                    </div>
                    <label for="psw"><b>Password</b> <span id="loginpasswordError" class="error"></span></label>
                    <input type="password" placeholder="Enter Password" name="login-psw">

                    <input type="submit" value="Login">

                    <a class="signup-btn" onclick="document.getElementById('id02').style.display='block'">Sign Up</a>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>


                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <div id="id02" class="modal">
            <span onclick="document.getElementById('id02').style.display='none'" class="close"
                title="Close Modal">X</span>
            <form class="modal-content" name="signupForm" onsubmit="return validateForm()" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="email"><b>Email</b> <span id="emailError" class="error"></span></label>
                    <input type="email" placeholder="Enter Email" name="email">

                    <label for="psw"><b>Password</b> <span id="passwordError" class="error"></span></label>
                    <input type="password" placeholder="Enter Password" name="psw">

                    <label for="psw-repeat"><b>Repeat Password</b> <span id="passwordrepeatError" class="error"></span></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat">

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                        Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &
                            Privacy</a>.</p>
                    <input type="submit" value="Submit">
            </form>
        </div>
    </section>
</header>