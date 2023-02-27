
<div id="main-content">
            <!-- MAIN CONTENT-->
            <div class="main-info-section">
                <div class="order-section">
                    <div class="order-grid">
                        <article class="products">
                            <img class="product-img" src="public/images/photos/order/white-bread-ds.png" alt="White Bread">
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
                            <img class="product-img" src="public/images/photos/order/rye-bread-ds.png" alt="Rye Bread">
                            <div class="product-info">
                                <h4>Rye Bread</h4>
                                <div class="price-order">
                                    <p class="product-price">€3,80</p>
                                    <button class="order-button popup" onclick="addToCart1()">Add to order<span class="popuptext" id="myPopup1">Product added to basket</span></button>
                                </div>
                            </div>
                        </article>
                        <article class="products">
                            <img class="product-img" src="public/images/photos/order/pumpernickel-bread-ds.png"
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
                            <img class="product-img" src="public/images/photos/order/pumpkin-bread-ds.png" alt="Pumpkin Bread">
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
                            <img class="product-img" src="public/images/photos/order/bagel-ds.png" alt="Bagel">
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
                            <img class="product-img" src="public/images/photos/order/cinnamon-roll-ds.png" alt="Cinnamon Roll">
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

        <p class="hidden"><?= ($_SERVER['REQUEST_URI']) ?></p> 