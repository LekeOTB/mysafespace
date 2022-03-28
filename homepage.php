<?php
include_once('functions.php');
    
    include_once('functions.php');
    if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
//..
?>


    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Homepage</title>
            <link rel="stylesheet" href="style1.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            </head>
        <body>
            <!--header here-->
            <section class="general">
                <input type="checkbox" id="check">
                <header>
                    <h2><a href="#" class="logo">Logo.</a></h2>           
                    <!--navigation here-->
                        <div class="navigation">
                        <a href="./homepage.php">Home</a>                     
                        <a href="./joinsafespace.html">Join-A-Safespace</a>
                        <a href="./aboutUs.html">About</a>
                        <a href="./home.html">Blog</a>
                        <a href="./contact.html">Contact</a>  
                        <a href="./loginfile.html">SignIn</a>
                        <a href="./loginfile.html">SignUp</a>
                        <a href="./logout.php">LogOut</a>              
                        </div>
                        <label for="check">
                            <i class="fas fa-bars menu-btn"></i>                    
                            <i class="fas fa-times close-btn"></i>
                        </label>           
                    </header>

                    <div class="content">
                        <div class="info">
                        <h2>SAFESPACES: <br><span>Express Yourself!</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies. 
                            Duis accumsan commodo tortor nec porta. Nulla cursus porttitor libero eu accumsan. 
                            Nam nec risus elementum lorem consequat molestie. Proin venenatis laoreet purus non vehicula. 
                            Vestibulum accumsan vehicula mauris, eget sollicitudin ante blandit vitae. 
                            </p>
                            <a href="login.php" class="info-button">More Info</a>
                        </div>
                    </div>
            </section>

            <!---Join a safespace section-->
            <section class="joinSafespace">
                <h1>Why do you need a safespace?</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="row">
                    <div class="joinsafespacecol">
                        <h3>Mental Health Safety!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies. 
                            Duis accumsan commodo tortor nec porta. Nulla cursus porttitor libero eu accumsan. 
                            Nam nec risus elementum lorem consequat molestie.</p>
                    </div>
                    <div class="joinsafespacecol">
                        <h3>Protection!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies. 
                            Duis accumsan commodo tortor nec porta. Nulla cursus porttitor libero eu accumsan. 
                            Nam nec risus elementum lorem consequat molestie.</p>
                    </div>
                    <div class="joinsafespacecol">
                        <h3>Share and care!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies. 
                            Duis accumsan commodo tortor nec porta. Nulla cursus porttitor libero eu accumsan. 
                            Nam nec risus elementum lorem consequat molestie.</p>
                    </div>
                </div>
            </section>

            <section class="meetingspots">
                <h1>Safespaces in Scotland</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="row">
                    <div class="meetingspots-col">
                        <img src="Imagess/comcenter1.jpg" alt="image of meeting spot">
                        <div class="layer">
                            <h3>SAFESPACE 1</h3>
                    </div>
                    </div>

                    <div class="meetingspots-col">
                            <img src="Imagess/comcenter3.jpg" alt="image of meeting spot">
                            <div class="layer">
                            <h3>SAFESPACE 2</h3>
                            </div>
                    </div>

                    <div class="meetingspots-col">
                            <img src="Imagess/comcenter2.jpg" alt="image of meeting spot">
                            <div class="layer">
                            <h3>SAFESPACE 3</h3>
                            </div>
                    </div>
                </div>
            </section>

        <!---facilities and activities-->
            <section class="facilities">
                <h1>Facilities and Activities</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="row">
                    <div class="facilities-col">
                        <img src="imagess/facility1.jpg">
                        <h3>Basketball Court</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="facilities-col">
                        <img src="imagess/cafespace.webp">
                        <h3>Cafeteria space</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="facilities-col">
                        <img src="imagess/hangouts.jpg">
                        <h3>Hangouts</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </section>

            <!---testimonials-->
            <section class="testimonials">
                <h1>Testimonials</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="row">
                    <div class="testimonial-col">
                        <img src="imagess/testimonial.jpg">
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies. 
                                Duis accumsan commodo tortor nec porta.</p>
                                <h3>Amber McLain</h3>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>                                                                          
                        </div>
                    </div>

                    <div class="testimonial-col">
                        <img src="imagess/testimonial2.jpg">
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies. 
                                Duis accumsan commodo tortor nec porta.</p>
                                <h3>Peter Cheng</h3>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                        </div>
                    </div>

                </div>
            </section>

            <!---comment call to action-->
            <section class="ccta">
                <!--<h1>Find Out More From Us</h1>-->
                <a href="./contact.html" class="info-button">CONTACT US</a>
            </section>

            <!---footer-->
            <section class="footer">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies.<br> 
                    Duis accumsan commodo tortor nec porta. Duis mattis mauris at est volutpat, sit amet iaculis tortor ultricies.</p>
                <div class="media-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <p><i class="fa-regular fa-copyright"></i> Property of LEKE with <i class="fa-solid fa-heart"></i> </p>
            </section>
        </body>
    </html>
