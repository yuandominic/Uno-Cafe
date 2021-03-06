<?php

include("header.php") ?>

<!------- CART -->

<div class="container-fluid cart">
    <h1 class="title-cart">Shopping Cart</h1>
    <div class="shopping-cart">
        <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
        </div>
        <!-- <form class="cart-form"> -->
        <?php
        if (isset($_SESSION["cart"])) :
            foreach ($_SESSION["cart"] as $i => $value) : ?>
                <div class="product">
                    <input type="hidden" class="product-id" name="product-id" value="<?= $_SESSION["cart"][$i]["id"]?>">
                    <div class="product-image">
                        <img src="<?= $_SESSION["cart"][$i]["img"] ?>" />
                    </div>
                    <div class="product-details">
                        <div class="product-title"><?= $_SESSION["cart"][$i]["products"] ?></div>
                        <p class="product-description">
                            <?= $_SESSION["cart"][$i]["desc"] ?>
                        </p>
                    </div>
                    <div class="product-price"><?= $_SESSION["cart"][$i]["price"] ?></div>
                    <div class="product-quantity">
                        <input type="number" value="1" min="1" />
                    </div>
                    <div class="product-removal" id="<?= $i ?>">
                        <button class="remove-product">
                            Remove
                        </button>
                    </div>
                    <div class="product-line-price"><?= $_SESSION["cart"][$i]["price"] ?></div>
                </div>
        <?php endforeach;
        endif; ?>
        <div class="totals">
            <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal"></div>
            </div>
            <div class="totals-item">
                <label>Shipping</label>
                <div class="totals-value" id="cart-shipping"></div>
            </div>
            <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total"></div>
            </div>
        </div>
        <input type="hidden" name="checkout" value="checkout">
        <button class="checkout" data-toggle="modal" data-target="#exampleModal">
            Checkout
        </button>
        <!-- </form> -->
    </div>
</div>

<!-- Checkout Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CheckOut</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="place-order">
                <div class="modal-body">
                    <p>Enter Address</p>
                    <textarea name="address" cols=55" rows="5" placeholder="Deliver Address.." required></textarea>
                </div>
                <div class="modal-footer">
                    </button>
                    <!-- <input type="hidden" name="order" value = "place-order"> -->
                    <button type="submit" class="btn btn-order">Place Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>