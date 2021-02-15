<?php require('header.php') ?>
<div class="shooping-cart-form" id="shooping-cart-form">
    <h1 class="shooping-cart-title">Shooping Cart</h1>
    <span onclick="document.getElementById('shooping-cart-form').style.display='none'" class="close" title="Close Modal">&times;</span>
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

    <div class="shooping-cart-total-price">$549</div>
    <a class="primary-button order-btn" type ="button" href="order.php" >Order</a>
    
</div>