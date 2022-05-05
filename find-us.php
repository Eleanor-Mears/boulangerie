<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_mobile.css" />
    <link rel="stylesheet" href="./media-queries.css" />
    <title>Find Us</title>

</head>

<body>

    <div id="page-container">
        <?php include("header.php"); ?>
        <div id="main-content">
            <div class="image-section">
                <a href="#">
                    <span class="image-wrapper">
                        <img class="top-image" src="images/cupcakes-5116009_1920.jpg" alt="coffee" />
                    </span>
                </a>
            </div>
            <div class="main-address-section">
                <article class="find-us">
                    <div class="text-outer">
                        <div id="address-section">
                            <h3>
                                <a title="Address" href="#">Where to find us</a>
                            </h3>
                            <address>
                                <span class="shop-title">Eleanor Boulangerie Artisanale<br /></span>
                                Gare Maritime<br />
                                Rue Picard 11<br />
                                1000 Bruxelles<br /><br />
                                +32 2 513 53 53
                            </address>
                        </div>
                        <div id="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=Gare%20Maritime&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br>
                            </div>
                        </div>
                        <div id="opening">
                            <h3>Opening times</h3>
                            <p class="list"><span class="days">Monday:</span> 07:00 - 19:00</p>

                            <p class="list"><span class="days">Tuesday:</span> 07:00 - 19:00</p>

                            <p class="list"><span class="days">Wednesday:</span> 07:00 - 19:00</p>

                            <p class="list"><span class="days">Thursday:</span> 07:00 - 19:00</p>

                            <p class="list"><span class="days">Friday:</span> 07:00 - 19:00</p>

                            <p class="list"><span class="days">Saturday:</span> 07:00 - 19:00</p>

                            <p class="list"><span class="days">Sunday:</span> closed</p>
                        </div>

                        <br />
                        <div class="contact-form-container">
                            <h3>Get in touch</h3>
                            <p>Write your questions and comments here and we will endeavour to get back to you as soon
                                as
                                possible:</p>
                            <form class="contact-form" name="myForm1" id="myForm1" method="post" action="javascript:void(0)">
                                <label class="contact" for="fname">First name:</label><br>
                                <input type="text" class="form-name" id="fname" name="fname">
                                <div id="fname-error" class="error-text"></div>
                                <label class="contact" for="lname">Last name:</label>
                                <input type="text" class="form-name" id="lname" name="lname">
                                <div id="lname-error" class="error-text"></div>
                                <label class="contact" for="email1">Email:</label><br>
                                <input type="email" class="form-email" id="email1" name="email1" placeholder="someone@example.com">
                                <div id="email1-error" class="error-text"></div>
                                <label class="contact" for="subject1">Subject:</label>
                                <textarea id="subject1" name="subject1" class="form-comments" placeholder="What would you like to tell us?"></textarea>
                                <div id="subject1-error" class="error-text"></div>
                                <button id="submit" type="submit" onclick="contacter()">Submit</button>
                            </form>
                        </div>
                        <div id="success-response" style="display: none;">
                            <div id="message"></div>
                            <button type="submit">Close</button>
                        </div>
                    </div>
                </article>
            </div>
        </div> <!-- end of <div> main content-->
        <?php include("footer.php"); ?>
    </div> <!-- end of page container -->
    <script src="burger.js"></script>
    <script src="subscibeForm.js"></script>
    <script src="commentForm.js"></script>
</body>

</html>