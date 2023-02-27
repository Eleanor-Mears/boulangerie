<?php
if (isset($_GET['nav'])) {
    switch ($_GET['nav']) {
        case 'about-us':
            include("./controllers/aboutUsController.php");
            break;
        case 'find-us':
            include("./controllers/findUsController.php");
            break;
        case 'order-online':
            include("./controllers/orderOnlineController.php");
            break;
        case 'home' :
            include("./controllers/homeController.php");
            break;
    }
} else {
    include("./controllers/homeController.php");
};
?>