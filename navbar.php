<header id="site-header" class="site-header ">



    <?php require("includes/shooping-cart.php"); ?>

    <section class="site-header-flex">
        <div class="company-logo">
            <a href="index.php"><img src="images/logo.svg" alt="Urban Style"></a>
        </div>


        <div class="shooping-cart">
            <img src="images/cart-icon.svg" class="cart" alt="Shopping Cart" onclick="openShoopingCart()">
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

        <?php include("includes/login.inc.php")?>
    </section>
</header>