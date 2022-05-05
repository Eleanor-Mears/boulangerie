<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_mobile.css" />
    <link rel="stylesheet" href="./media-queries.css" />
    <title>Footer</title>
</head>
<body>
<footer id="main-footer">
            <!-- Newsletter sign-up form -->
            <div class="form-popup" id="myForm">
                <div id="overlay">
                    <form class="subscribe" onsubmit="return false">
                        <div class="cancel-button">
                            <button class="btn__cancel" type="button" onclick="closeForm1()"><img src="icons/icons8-close-window-24.png" alt="close button"></button>
                        </div>
                        <h2 class="subscribe__title" id="remove-title">Let's keep in touch</h2>
                        <p class="subscribe__copy" id="remove-paragraph">Subscribe to keep up with fresh news and exciting updates. We promise
                            not
                            to
                            spam
                            you!</p>
                        <p id="errorMessage"></p>
                        <div class="form">
                            <input type="text" class="form-name" placeholder="Enter your first name" id="firstName" />
                            <!-- <span class="popuptext" id="myPopup">Enter your first name</span> -->
                            <div id="firstname-error" class="error-text"></div>
                            <input type="text" class="form-name" placeholder="Enter your last name" id="lastName" />
                            <div id="lastname-error" class="error-text"></div>
                            <input type="email" class="form-email" placeholder="Enter your email address" id="email" />
                            <div id="email-error" class="error-text"></div>
                            <button class="form-button" type="button" id="formButton" onclick="sendContact(), closeForm()">Send</button>
                        </div>
                        <div class="notice">
                            <input type="checkbox" id="checkbox">
                            <span class="notice-copy">I agree to my email address being stored and used to recieve the
                                monthly
                                newsletter.</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-newsletter"><a id="footer-anchor"></a>
                <!--flex-->
                <button class="open-button" onclick="openForm()"><img id="signup-mobile" src="icons/email.png" alt="email icon"/>
                    <a id="signup" href="#">Sign up to our newsletter</a></button>
            </div>
            <div class="footer-content">
                <div class="footer-logo-wrapper">
                    <a href="index.php"><img id="footer-logo-1" src="logos/Eleanor_white.svg" /></a>
                </div>
                <!--flex-->
                <div class="footer-menus-wrapper">
                    <div id="f-m-container-1" class="footer-menu-container">

                        <ul id="menu-footer-1" class="menu-footer">
                            <a href="https://goo.gl/maps/vW5bEdV2gYgQ8Hf89" target="_blank">
                                <li class="f-menu-item">Rue Picard 11<br />1000 Bruxelles</li>
                            </a>
                            <a href="tel:3225135353">
                                <li class="f-menu-item">+32 2 513 53 53</li>
                            </a>
                        </ul>
                    </div>
                    <div id="f-m-container-2" class="footer-menu-container">
                        <ul id="menu-footer-2" class="menu-footer">
                            <a class="footer-order" href="order-online.php" target="_blank">
                                <li class="f-menu-item-linked">Order Online</li>
                            </a>
                            <a class="footer-order" href="https://deliveroo.be/fr/" target="_blank">
                                <li class="f-menu-item-linked">Order through Deliveroo</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-social-media">
                <!--flex-->
                <a href="https://www.facebook.com/" target="_blank"><img id="icon-facebook" class="icon-sm" src="icons/icons8-facebook-60.png" alt="Facebook icon" /></a>
                <a href="https://twitter.com/?lang=fr" target="_blank"><img id="icon-twitter" class="icon-sm" src="icons/icons8-twitter-60.png" alt="Twitter icon" /></a>
                <a href="https://www.instagram.com/?hl=fr" target="_blank"><img id="icon-insta" class="icon-sm" src="icons/icons8-instagram-60.png" alt="Instagram icon" /></a>
            </div>

        </footer>
    <script src="burger.js"></script>
    <script src="subscibeForm.js"></script>
    <script src="commentForm.js"></script>

</body>
</html>

