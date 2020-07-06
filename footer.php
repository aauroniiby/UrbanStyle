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