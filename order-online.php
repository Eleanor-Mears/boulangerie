<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_mobile.css" />
    <link rel="stylesheet" href="./media-queries.css" />
    <title>Order Online</title>

</head>

<body>
    <div id="page-container">
        <?php include("header.php");?>
        <div id="main-content">
            <!-- MAIN CONTENT-->
            <div class="main-info-section">
                <div class="order-section">
                    <div class="order-grid">
                        <article class="products">
                            <img class="product-img" src="images/Order-Page/white-bread-ds.png" alt="White Bread">
                            <div class="product-info">
                                <h4>White Bread</h4>
                                <div class="price-order">
                                    <p class="product-price">€3,00</p>
                                    <button class="order-button popup" onclick="addToCart()">Add to order
                                    <span class="popuptext" id="myPopup">Product added to basket</span></button>
                                </div>
                            </div>
                        </article>
                        <article class="products">
                            <img class="product-img" src="images/Order-Page/rye-bread-ds.png" alt="Rye Bread">
                            <div class="product-info">
                                <h4>Rye Bread</h4>
                                <div class="price-order">
                                    <p class="product-price">€3,80</p>
                                    <button class="order-button popup" onclick="addToCart1()">Add to order<span class="popuptext" id="myPopup1">Product added to basket</span></button>
                                </div>
                            </div>
                        </article>
                        <article class="products">
                            <img class="product-img" src="images/Order-Page/pumpernickel-bread-ds.png"
                                alt="Pumpernickel Bread">
                            <div class="product-info">
                                <h4>Pumpernickel <br />Bread</h4>
                                <div class="price-order">
                                    <p class="product-price">€3,50</p>
                                    <button class="order-button popup" onclick="addToCart2()">Add to order
                                    <span class="popuptext" id="myPopup2">Product added to basket</span></button>
                                </div>
                            </div>
                        </article>
                        <article class="products">
                            <img class="product-img" src="images/Order-Page/pumpkin-bread-ds.png" alt="Pumpkin Bread">
                            <div class="product-info">
                                <h4>Pumpkin <br />Bread</h4>
                                <div class="price-order">
                                    <p class="product-price">€4,00</p>
                                    <button class="order-button popup" onclick="addToCart3()">Add to order
                                    <span class="popuptext" id="myPopup3">Product added to basket</span></button>
                                </div>
                            </div>
                        </article>
                        <article class="products">
                            <img class="product-img" src="images/Order-Page/bagel-ds.png" alt="Bagel">
                            <div class="product-info">
                                <h4>Bagel</h4>
                                <div class="price-order">
                                    <p class="product-price">€1,20</p>
                                    <button class="order-button popup" onclick="addToCart4()">Add to order
                                    <span class="popuptext" id="myPopup4">Product added to basket</span></button>
                                </div>
                            </div>
                        </article>
                        <article class="products">
                            <img class="product-img" src="images/Order-Page/cinnamon-roll-ds.png" alt="Cinnamon Roll">
                            <div class="product-info">
                                <h4>Cinnamon Roll</h4>
                                <div class="price-order">
                                    <p class="product-price">€1,20</p>
                                    <button class="order-button popup" onclick="addToCart5()">Add to order
                                    <span class="popuptext" id="myPopup5">Product added to basket</span></button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div><!-- end of main-content -->
        <?php include("footer.php"); ?>
    </div> <!-- end of page container -->
    <script src="burger.js"></script>
    <script src="subscibeForm.js"></script>
    <script>
function addToCart() {
let popup = document.getElementById("myPopup");
popup.classList.toggle("show");
}
function addToCart1() {
let popup1 = document.getElementById("myPopup1");
popup1.classList.toggle("show");
}
function addToCart2() {
let popup2 = document.getElementById("myPopup2");
popup2.classList.toggle("show");
}
function addToCart3() {
let popup3 = document.getElementById("myPopup3");
popup3.classList.toggle("show");
}
function addToCart4() {
let popup4 = document.getElementById("myPopup4");
popup4.classList.toggle("show");
}
function addToCart5() {
let popup5 = document.getElementById("myPopup5");
popup5.classList.toggle("show");
}
</script>
</body>

</html>