<html>
<header>
    <?php require("header.php") ?>
</header>

<body>
    <?php require("navbar.php") ?>

    <div class="container">
        <div class="title">
            <h2>Product Order Form</h2>
        </div>
        <div class="d-flex">
            <form action="" method="">
                <label>
                    <span class="fname">First Name <span class="required">*</span></span>
                    <input class="input-order" name="fname">
                </label>
                <label>
                    <span class="lname">Last Name <span class="required">*</span></span>
                    <input class="input-order" name="lname">
                </label>
                <label>
                    <span>Company Name (Optional)</span>
                    <input class="input-order" name="cn">
                </label>
                <label>
                    <span>Country <span class="required">*</span></span>
                    <select name="selection">
                        <option value="select">Select a country...</option>
                        <option value="AFG">Afghanistan</option>
                        <option value="ALA">Åland Islands</option>
                        <option value="ALB">Albania</option>
                        <option value="DZA">Algeria</option>
                        <option value="ASM">American Samoa</option>
                        <option value="ARG">Argentina</option>
                        <option value="ARM">Armenia</option>
                        <option value="ABW">Aruba</option>
                        <option value="AUS">Australia</option>
                        <option value="AUT">Austria</option>
                        <option value="ITA">Italy</option>
                        <option value="KEN">Kenya</option>
                        <option value="KIR">Kiribati</option>
                        <option value="PRK">Kosova</option>
                        <option value="KOR">Korea, Republic of</option>
                        <option value="KWT">Kuwait</option>
                        <option value="KGZ">Kyrgyzstan</option>
                        <option value="WSM">Samoa</option>
                        <option value="SMR">San Marino</option>
                        <option value="STP">Sao Tome and Principe</option>
                        <option value="SAU">Saudi Arabia</option>
                        <option value="ESP">Spain</option>
                        <option value="LKA">Sri Lanka</option>
                        <option value="SDN">Sudan</option>
                        <option value="SUR">Suriname</option>
                        <option value="SJM">Svalbard and Jan Mayen</option>
                        <option value="SWZ">Swaziland</option>
                        <option value="THA">Thailand</option>
                        <option value="TLS">Timor-Leste</option>
                        <option value="TGO">Togo</option>
                        <option value="TKL">Tokelau</option>
                        <option value="TON">Tonga</option>
                        <option value="TTO">Trinidad and Tobago</option>
                        <option value="TUN">Tunisia</option>
                        <option value="TUR">Turkey</option>
                    </select>
                </label>
                <label>
                    <span>Street Address <span class="required">*</span></span>
                    <input class="input-order" name="houseadd" placeholder="House number and street name" required>
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input class="input-order" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                </label>
                <label>
                    <span>Town / City <span class="required">*</span></span>
                    <input class="input-order" name="city">
                </label>
                <label>
                    <span>State / County <span class="required">*</span></span>
                    <input class="input-order" name="city">
                </label>
                <label>
                    <span>Postcode / ZIP <span class="required">*</span></span>
                    <input class="input-order" name="city">
                </label>
                <label>
                    <span>Phone <span class="required">*</span></span>
                    <input type="input-order" name="city">
                </label>
                <label>
                    <span>Email Address <span class="required">*</span></span>
                    <input type="input-order" name="city">
                </label>
            </form>
            <div class="Yorder">
                <table>
                    <div class="shooping-cart-item">
                        <img class="shooping-cart-delete-btn" src="images/delete-icn.svg"></img>

                        <div class="shooping-cart-img">
                            <img src="images/bag.jpg" alt="" />
                        </div>

                        <div class="shooping-cart-description">
                            <span>Common Projects</span>
                            <span>White</span>
                        </div>

                        <div class="shooping-cart-quantity">
                            <div class="shooping-cart-plus-btn" type="button" name="shooping-cart-button">
                                <img src="images/plus.svg" alt="" />
                            </div>
                            <input type="shooping-cart-text" name="shooping-cart-name" value="1">
                            <div class="shooping-cart-minus-btn" type="button" name="shooping-cart-button">
                                <img src="images/minus.svg" alt="" />
                            </div>
                        </div>
                        <p class="shooping-cart-price">$12</p>
                    </div>
                    <div class="shooping-cart-item">
                        <img class="shooping-cart-delete-btn" src="images/delete-icn.svg"></img>

                        <div class="shooping-cart-img">
                            <img src="images/bag.jpg" alt="" />
                        </div>

                        <div class="shooping-cart-description">
                            <span>Common Projects</span>
                            <span>White</span>
                        </div>

                        <div class="shooping-cart-quantity">
                            <div class="shooping-cart-plus-btn" type="button" name="shooping-cart-button">
                                <img src="images/plus.svg" alt="" />
                            </div>
                            <input type="shooping-cart-text" name="shooping-cart-name" value="1">
                            <div class="shooping-cart-minus-btn" type="button" name="shooping-cart-button">
                                <img src="images/minus.svg" alt="" />
                            </div>
                        </div>
                        <p class="shooping-cart-price">$12</p>
                    </div>
                    <div class="shooping-cart-item">
                        <img class="shooping-cart-delete-btn" src="images/delete-icn.svg"></img>

                        <div class="shooping-cart-img">
                            <img src="images/bag.jpg" alt="" />
                        </div>

                        <div class="shooping-cart-description">
                            <span>Common Projects</span>
                            <span>White</span>
                        </div>

                        <div class="shooping-cart-quantity">
                            <div class="shooping-cart-plus-btn" type="button" name="shooping-cart-button">
                                <img src="images/plus.svg" alt="" />
                            </div>
                            <input type="shooping-cart-text" name="shooping-cart-name" value="1">
                            <div class="shooping-cart-minus-btn" type="button" name="shooping-cart-button">
                                <img src="images/minus.svg" alt="" />
                            </div>
                        </div>
                        <p class="shooping-cart-price">$12</p>
                    </div>
                    <tr>
                        <td>Subtotal</td>
                        <td>$88.00</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free shipping</td>
                    </tr>
                </table><br>
                <div>
                    <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
                </div>
                <p>
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                </p>
                <div>
                    <input type="radio" name="dbt" value="cd"> Cash on Delivery
                </div>
                <div>
                    <input type="radio" name="dbt" value="cd"> Paypal <span>
                        <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
                    </span>
                </div>
                <div id="send" class="send">
                    <h5 id="message" class=" ">Place Order</h5>

                    <div id="character1" class="human-wrapper">
                        <div class="head"></div>
                        <div class="body1"></div>
                        <div id="hand1" class="hand"></div>
                        <div id="package1" class="package"></div>
                    </div>

                    <div id="character2" class="human-wrapper">
                        <div class="head"></div>
                        <div class="body1"></div>
                        <div id="hand2" class="hand"></div>
                        <div id="package2" class="package"></div>
                    </div>

                </div>

                <script src="script.js"></script>
            </div><!-- Yorder -->
        </div>
    </div>
    <?php require("footer.php") ?>
</body>

</html>