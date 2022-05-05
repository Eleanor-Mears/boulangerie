<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_mobile.css" />
    <link rel="stylesheet" href="./media-queries.css" />
    <title>Header</title>
</head>
<body>
<header id="main-header">
            <a id="top"></a>
            <div class="inner-header">
                <!--flex-->
                <div id="top-navigation-desktop">
                    <div id="logo-container">
                        <a class="back-to-top" href="#top"></a>
                            <a href="index.php"><img id="logo" src="logos/Eleanor_logo_white_text_only.svg" alt="Eleanor logo" /></a>
                        <!--link back to homepage-->
                    </div>
                    <nav id="desktop-menu">
                        <ul>
                        <li><a class="menu-item menu-item1" href="index.php" <?php if ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/index.php") echo "id='menu-item-of-page'" ?>>Home</a></li>
                        <li><a class="menu-item menu-item2" href="find-us.php" <?php if ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/find-us.php") echo "id='menu-item-of-page'" ?>>Visit Us</a></li>
                        <li><a class="menu-item menu-item3" href="order-online.php" <?php if ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/order-online.php") echo "id='menu-item-of-page'" ?>>Order online</a></li>
                        <li><a class="menu-item menu-item4" href="about-us.php" <?php if ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/about-us.php") echo "id='menu-item-of-page'" ?>>About us</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="top-navigation">
                    <div class="burger-wrapper">
                        <div class="burger">
                            <span></span>
                        </div>
                        <nav id="menu">
                        <?php if ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/index.php") 
                        { echo '<ul id="mobile-menu">
                                <li id="menu-item-of-page">Home</li>
                                <li><a class="menu-item menu-item2" href="find-us.php">Visit Us</a></li>
                                <li><a class="menu-item menu-item3" href="order-online.php">Order online</a></li>
                                <li><a class="menu-item menu-item4" href="about-us.php">About us</a></li>
                            </ul>';} 
                            elseif ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/find-us.php") 
                            { echo  '<ul id="mobile-menu">
                                <li id="menu-item-of-page">Visit Us</li>
                                <li><a class="menu-item menu-item1" href="index.php">Home</a></li>
                                <li><a class="menu-item menu-item3" href="order-online.php">Order online</a></li>
                                <li><a class="menu-item menu-item4" href="about-us.php">About us</a></li>
                            </ul>';} 
                            elseif ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/order-online.php") 
                            { echo '<ul id="mobile-menu">
                                <li id="menu-item-of-page">Order online</li>
                                <li><a class="menu-item menu-item1" href="index.php">Home</a></li>
                                <li><a class="menu-item menu-item2" href="find-us.php">Visit Us</a></li>
                                <li><a class="menu-item menu-item4" href="about-us.php">About us</a></li>
                            </ul>';} 
                            elseif ($_SERVER['PHP_SELF'] == "/PROJET-DE-MOTIVATION-php/about-us.php") 
                            { echo '<ul id="mobile-menu">
                                <li id="menu-item-of-page">About us</li>
                                <li><a class="menu-item menu-item1" href="index.php">Home</a></li>
                                <li><a class="menu-item menu-item2" href="find-us.php">Visit Us</a></li>
                                <li><a class="menu-item menu-item3" href="order-online.php">Order online</a></li>
                            </ul>';}
                            
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <script src="burger.js"></script>
    <script src="subscibeForm.js"></script>
    <script src="commentForm.js"></script>

</body>
</html>
        