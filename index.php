<!DOCTYPE html>
<html>
<head>
    <title>Urban Style &trade; Co.</title>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
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
    <section id="banner" class="banner container">
        <div class="banner-label">
            <p class="season-title">New Collection</p>
            <p class="season">Spring/Summer 2020</h2>
        </div>
    </section>
    <div id=>""
        <section id="about" class="about container">
            <div class="about-text">
                <h2>
                    Hand-Crafted
                    <span class="emboss">
                        Styles
                    </span>
                </h2>
                <p>
                    Urban Style Co. sells only the finest ready-to-travel clothing.
                </p>
                <p>
                    Browse our current selection of products or <br /> sign-up for updates below.
                </p>
            </div>
        </section>
        <div id=>
            <section id="products" class="products">
                <div class=product-category>

                    <div class="wide-sizea men">
                        <span class="product-text">
                            <a href="#" name="Men">Men</a>
                        </span>
                    </div>

                    <div class="normal-sizea">
                        <div class="normal-size bags">
                            <span class="product-text">
                                <a href="#" name="Bags">Bags</a>
                            </span>
                        </div>

                        <div class="normal-size glasses">
                            <span class="product-text">
                                <a href="#" name="Glasses">Glasses</a>
                            </span>
                        </div>
                    </div>

                    <div class="normal-sizeb">
                        <div class="normal-size trends">
                            <span class="product-text">
                                <a href="#" name="Trends">Trends</a>
                            </span>
                        </div>
                        <div class="normal-size sale">
                            <span class="product-text">
                                <a href="#" name="Sale">Sale</a>
                            </span>
                        </div>
                    </div>

                    <div class="wide-sizeb women">
                        <span class="product-text">
                            <a href="#" name="Women">Women</a>
                        </span>
                    </div>

                </div>
        </div>
        </section>
        <section id="highlights" class="highlights container">
            <div class="highlights-content">
                <h2>
                    Most-Loved
                    <span class="emboss">
                        Products
                    </span>
                </h2>

                <div id="carousel" class="carousel">
                    <div class="cell">
                        <img src="images/pants1.jpg" alt="Pants bought on zara">
                        <p class="product-type">
                            Pants
                        </p>
                        <h3>
                            Plain summer pants
                        </h3>
                        <p class="product-price">
                            Priceless!
                        </p>
                    </div>
                    <div class="cell">
                        <img src="images/shoes.jpg" alt="Shoues bought on 2nd hand">
                        <p class="product-type">
                            Shoes
                        </p>
                        <h3>
                            The not dad shoes
                        </h3>
                        <p class="product-price">
                            $119
                        </p>
                    </div>
                    <div class="cell">
                        <img src="images/skirt.jpg" alt="made from ur granny kule">
                        <p class="product-type">
                            Shirts
                        </p>
                        <h3>
                            The not your granny skirt
                        </h3>
                        <p class="product-price">
                            $39
                        </p>
                    </div>
                    <div class="cell">
                        <img src="images/pantsWoman.jpg" alt="blue-hipster-denims">
                        <p class="product-type">
                            Pants
                        </p>
                        <h3>
                            #UrbanSTYLE&trade; Denim Pants
                        </h3>
                        <p class="product-price">
                            $69
                        </p>
                    </div>
                    <div class="cell">
                        <img src="images/jacket.jpg" alt="found on lost and found">
                        <p class="product-type">
                            Jackets
                        </p>
                        <h3>
                            Denim Jacket
                        </h3>
                        <p class="product-price">
                            $99
                        </p>
                    </div>
                    <div class="cell">
                        <img src="images/bag.jpg" alt="90s baby">
                        <p class="product-type">
                            Bags
                        </p>
                        <h3>
                            Look good
                        </h3>
                        <p class="product-price">
                            $89
                        </p>
                    </div>
                    <div class="cell">
                        <img src="images/socks.jpg" alt="amazing socks">
                        <p class="product-type">
                            Socks
                        </p>
                        <h3>
                            Smelless socks
                        </h3>
                        <p class="product-price">
                            $169
                        </p>
                    </div>
                    <div class="cell">
                        <img src="images/fortnite.jpg" alt="cmon bruhhh">
                        <p class="product-type">
                            Hoodies
                        </p>
                        <h3>
                            The "I have no friends" hoodie
                        </h3>
                        <p class="product-price">
                            FREE
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer id="site-footer" class="site-footer container">
            <section class="site-footer-flex">
                <div class="footer-text">
                    <div class="copyright">
                        <p>&copy; 2020 Urban Style&trade; Co.</p>
                        <p>Powered by 2 legends</p>
                    </div>
                    <div class="contact">
                        <p>69-69-69</p>
                        <a href="#" target="_blank" name="Email">
                            info@urbanstyle.com
                        </a>
                    </div>
                    <div class="address">
                        <p>rr.Pazari. PN <br /> Prishtinë, KS Kovova</p>
                    </div>
                </div>
                <div class="social-media">
                    <ul class="social-media-list">
                        <li>
                            <a href="www.facebook.com">
                                <i class="fab fa-facebook"></i>
                                <span class="social-media-name">
                                    Facebook
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="www.twitter.com">
                                <i class="fab fa-twitter"></i>
                                <span class="social-media-name">
                                    Twitter
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="www.instagram.com">
                                <i class="fab fa-instagram"></i>
                                <span class="social-media-name">
                                    Instagram
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="www.pinterest.com">
                                <i class="fab fa-pinterest"></i>
                                <span class="social-media-name">
                                    Pinterest
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </footer>
        <script src="script.js">
        </script>
        <script>
            function validateForm() {
                var emailInput = document.forms["signupForm"]["email"].value;
                var passwordInput = document.forms["signupForm"]["psw"].value;
                var passwordrepeatInput = document.forms["signupForm"]["psw-repeat"].value;
                var error = false
                if (emailInput == "" || !(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(emailInput))) {
                    document.getElementById("emailError").innerHTML = " Check your email again";
                    error = true
                } else {
                    document.getElementById("emailError").innerHTML = "";                    
                }
                if (passwordInput == "" || !(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/).test(passwordInput)) {
                    document.getElementById("passwordError").innerHTML = " Your password must have at least 1 uppercase character, 1 lower case character and 1 number";
                    error = true
                } else {
                    document.getElementById("passwordError").innerHTML = "";
                }
                if (passwordrepeatInput == "" || passwordInput !== passwordrepeatInput) {
                    document.getElementById("passwordrepeatError").innerHTML = " Check your password again";
                    error = true
                } else {
                    document.getElementById("passwordrepeatError").innerHTML = "";
                }
                if (error) {
                    return false
                }
            }

            function validateLogin() {
                var emailInput = document.forms["loginForm"]["login-email"].value;
                var passwordInput = document.forms["loginForm"]["login-psw"].value;
                var error = false
                if (emailInput == "" || !(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(emailInput))) {
                    document.getElementById("loginemailError").innerHTML = " Check your email again";
                    error = true
                } else {
                    document.getElementById("loginemailError").innerHTML = "";                    
                }
                if (passwordInput == "" || !(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/).test(passwordInput)) {
                    document.getElementById("loginpasswordError").innerHTML = " Your password must have at least 1 uppercase character, 1 lower case character and 1 number";
                    error = true
                } else {
                    document.getElementById("loginpasswordError").innerHTML = "";
                }
                if (error) {
                    return false
                }
            }
        </script>
</body>

</html>
