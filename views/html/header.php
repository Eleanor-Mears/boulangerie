<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style_mobile.css" />
    <link rel="stylesheet" href="public/css/media-queries.css" />

    <title>Header</title>
</head>

<body>
    <div id="page-container">
        <header id="main-header">
            <a id="top"></a>
            <div class="inner-header">
                <!--flex-->
                <div id="top-navigation-desktop">
                    <div id="logo-container">
                        <a class="back-to-top" href="#top"></a>
                        <a href="?nav=home"><img id="logo" src="public/images/photos/logos/Eleanor_logo_white_text_only.svg" alt="Eleanor logo" /></a>
                        <!--link back to homepage-->
                    </div>
                    <nav id="desktop-menu">
                        <!-- <ul> -->
                            <li><a class="menu-item menu-item1" href="?nav=home" <?php if ($_SERVER['REQUEST_URI'] == ("/boulangerie/?nav=home.php" or "/boulangerie/?nav=home.php")) echo "id='menu-item-of-page'" ?>>Home</a></li>
                            <li><a class="menu-item menu-item2" href="?nav=find-us" <?php if ($_SERVER['REQUEST_URI'] == "/boulangerie/?nav=find-us.php") echo "id='menu-item-of-page'" ?>>Visit Us</a></li>
                            <li><a class="menu-item menu-item3" href="?nav=order-online" <?php if ($_SERVER['REQUEST_URI'] == "/boulangerie/?nav=order-online.php") echo "id='menu-item-of-page'" ?>>Order online</a></li>
                            <li><a class="menu-item menu-item4" href="?nav=about-us" <?php if ($_SERVER['REQUEST_URI'] == "/boulangerie/?nav=about-us.php") echo "id='menu-item-of-page'" ?>>About us</a></li>
                        <!-- </ul> -->
                    </nav>
                </div>
                <div id="top-navigation">
                    <div class="burger-wrapper">
                        <div class="burger">
                            <span></span>
                        </div>
                        <nav id="menu">
                            <?php if ($_SERVER['REQUEST_URI'] == ("/boulangerie/?nav=home.php" or "/boulangerie/?nav=home.php")) {
                                echo '<ul id="mobile-menu">
                                <li id="menu-item-of-page">Home</li>
                                <li><a class="menu-item menu-item2" href="?nav=find-usp">Visit Us</a></li>
                                <li><a class="menu-item menu-item3" href="?nav=order-online">Order online</a></li>
                                <li><a class="menu-item menu-item4" href="?nav=about-us">About us</a></li>
                            </ul>';
                            } elseif ($_SERVER['REQUEST_URI'] == "/boulangerie/?nav=find-us.php") {
                                echo  '<ul id="mobile-menu">
                                <li id="menu-item-of-page">Visit Us</li>
                                <li><a class="menu-item menu-item1" href="?nav=home">Home</a></li>
                                <li><a class="menu-item menu-item3" href="?nav=order-online">Order online</a></li>
                                <li><a class="menu-item menu-item4" href="?nav=about-us">About us</a></li>
                            </ul>';
                            } elseif ($_SERVER['REQUEST_URI'] == "/boulangerie/?nav=order-online.php") {
                                echo '<ul id="mobile-menu">
                                <li id="menu-item-of-page">Order online</li>
                                <li><a class="menu-item menu-item1" href="?nav=home">Home</a></li>
                                <li><a class="menu-item menu-item2" href="?nav=find-us">Visit Us</a></li>
                                <li><a class="menu-item menu-item4" href="?nav=about-us">About us</a></li>
                            </ul>';
                            } elseif ($_SERVER['REQUEST_URI'] == "/boulangerie/?nav=about-us.php") {
                                echo '<ul id="mobile-menu">
                                <li id="menu-item-of-page">About us</li>
                                <li><a class="menu-item menu-item1" href="?nav=home">Home</a></li>
                                <li><a class="menu-item menu-item2" href="?nav=find-us">Visit Us</a></li>
                                <li><a class="menu-item menu-item3" href="?nav=order-online">Order online</a></li>
                            </ul>';
                            }

                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>