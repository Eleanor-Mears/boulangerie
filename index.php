<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_mobile.css" />
    <link rel="stylesheet" href="./media-queries.css" />
    <title>Bakery</title>
</head>

<body>
    <div id="page-container">
    <?php include("header.php");?>  
        <div id="main-content">
            <div class="slideshow-container">
                <!-- sliding header -->
                <div class="slideshow">
                    <h1 id="slider-text">Sourdough is our passion</h1>
                    <a href="#article-1"><img id="slider-icon" src="icons/white-arrow.png"></a>
                    <img class="mySlides cover animate-right" src="images/croissants-4077812.jpg">
                    <img class="mySlides cover animate-right" src="images/boulangerie-1868925_1280.jpg">
                    <img class="mySlides cover animate-right" src="images/pate-943245_1280.jpg">
                    <img class="mySlides cover animate-right" src="images/boulanger-1868396_1280.jpg">
                </div>
            </div>

            <!-- end of sliding header -->
            <div class="main-info-section">
                <div class="main-articles">
                    <article class="article article-1">
                        <div class="text-inner">
                            <a id="article-1">
                                <h3 class="home-article">Our Café</h3>
                            </a>
                            <p>What better way to savour our artisanal bread and pastries than over a delicious gourmet
                                coffee? Our warm and inviting café is the perfect place to sit back with a good book,
                                catch up with friends, or watch the passers-by in the beautiful Gare Maritime.</p>
                        </div>
                        <div class="small-titles">
                            <h5 class="back-to-top-h5">
                                <a class="back-to-top" href="#top">Back to top</a>
                            </h5>
                        </div>
                        <div class="image-section">
                            <img class="article-image" src="images/cinnamon-rolls-1417494_1280.jpg" alt="cinnamon rolls" />
                        </div>
                    </article>
                    <article class="article article-2">
                        <div class="text-inner">
                            <h3 class="home-article">Spring Specials</h3>
                            <p>Eleanor Boulangerie is proud to present two tasty new offerings for the Spring season.
                                Our sourdough cinnamon roll is a tempting combination of sweet cinnamon with the
                                mouthwatering tartness of sourdough pastry: the result is a match made in heaven. On the
                                savoury side, our moreish pumpernickel bread is a hearty option that pairs perfectly
                                with a fresh seasonal soup. Why not <a href="order-online.php" id="order-yours-today" target="_blank">order yours today?</a></p>
                        </div>
                        <div class="small-titles">
                            <h5 class="back-to-top-h5">
                                <a class="back-to-top" href="#top">Back to top</a>
                            </h5>
                        </div>
                        <div class="image-section">
                            <img class="article-image" src="images/coffee-4334647_1280.jpg" alt="coffee" />
                        </div>
                    </article>
                    <article class="article article-3">
                        <div class="text-inner">
                            <h3 class="home-article">Sourdough: the perfect brunch partner</h3>
                            <p>Whether you prefer smashed avocado and chia seeds, or traditional scrambled eggs with
                                black pepper, our sourdough bread is the perfect base for a delicious brunch. We have a
                                range of different breads on offer, from farmhouse white to rye bread, not to mention
                                our speciality flavours guaranteed to add an extra layer of deliciousness to your meal.
                                On top of that, sourdough bread is excellent for your digestion, so your stomach will
                                thank you just as much as your tastebuds.</p>
                        </div>
                        <div class="small-titles">
                            <h5 class="back-to-top-h5">
                                <a class="back-to-top" href="#top">Back to top</a>
                            </h5>
                        </div>
                        <div class="image-section">
                            <img class="article-image" src="images/egg-1836411_1280.jpg" alt="Boulangerie" />
                        </div>
                    </article>
                </div> <!-- end of div class="main-articles" -->
            </div> <!-- end of div class="main-info-section" -->
        </div> <!-- end of <div> main content-->
        <?php include("footer.php"); ?>     
    </div> <!-- end of page container -->
    <script src="burger.js"></script>
    <script src="subscibeForm.js"></script>
    <script src="carousel.js"></script>
</body>

</html>