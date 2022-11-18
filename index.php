<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>YATRAAHOLIC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                    YATRAA<span>HOLIC</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.html" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "gallery.html" class = "nav-link">Gallery</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "chaar_dham.html" class = "nav-link">Chaar Dham</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "hotel.html" class = "nav-link">Hotel</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Cities.html" class = "nav-link">Cities</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "food.html" class = "nav-link">Food</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "try.html" class = "nav-link"><!-- <a href="try.html" class="btn sign-up">signup</a> -->

                            <?php
                            if (isset($_SESSION['email'])) {
                                echo 'Hello User';
                            }
                            else{
                                echo '<button class="btn sign-up" onclick="document.getElementById("id01").style.display="block"">Sign Up/Login</button>';
                                
                            }
                            ?>

                            <!-- The Modal (contains the Sign Up form) -->
                            <div id="id01" class="modal">
                              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
                              <form class="modal-content" action="register.php" method="POST">
                                <div class="container">
                                  <h1>Sign Up</h1>
                                  <p>Please fill in this form to create an account.</p>
                                  <hr>
                                  <label for="email"><b>Email</b></label>
                                  <input type="email" id="email" placeholder="Enter Email" name="email" required>
                    
                                  <label for="psw"><b>Password</b></label>
                                  <input type="password" id="password" placeholder="Enter Password" name="password" required>
                    
                                  <label for="psw-repeat"><b>Repeat Password</b></label>
                                  <input type="password" id="cpassword" placeholder="Repeat Password" name="cpassword" required>
                    
                                  <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                  </label>
                    
                                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    
                                  <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                      class="cancelbtn">Cancel</button>
                                    <button type="submit" class="signup">Sign Up</button>
                                  </div>
                                </div>
                              </form>
                            </div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>WELCOME TO UTTRAKHAND</h1>
                    <p><i> DEV BHOOMI - The Land of Gods</i>  </p>
                </div>
                <!-- <div class = "header-form">
                    <h2>Choose your Travel location:</h2>
                    <form class = "flex">
                        <input type = "text" class = "form-control" placeholder="Destination name">
                        

                        <input type="submit" class = "btn" value = "Search">
                    </form>
                </div> -->
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title">featured places</h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "istockphoto-1287190599-170667a.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                KEDARNATH
                            </span>
                            <div>
                                <p class = "text">Kedarnath Dham, located in the Rudraprayag District of Uttarakhand in the lap of the Garhwal Himalayas, is an integral part of the Char Dham Yatra, which includes Yamunotri, Gangotri and Badrinath. It is said that the Pandavas sought Lord Shiva to relieve themselves from the guilt of killing their blood relatives</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "258311646.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                BADRINATH
                            </span>
                            <div>
                                <p class = "text">Badrinath is located at an elevation of around 3,100 m. Located in the Garhwal Himalayas, on the banks of the Alaknanda river, this sacred town lies between Nar and Narayana mountain ranges. The temple is believed to have been established by sage Adi Shankaracharya in the 8th century</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "download.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                YAMUNOTRI
                            </span>
                            <div>
                                <p class = "text">Yamunotri Temple is situated in the western region of Garhwal Himalayas at an altitude of 3,235 metres (10,614 ft) near the river source. The temple was built in 1839 by Sundarshan Shah who was the king of the cultural center of Tehri. There was a small shrine at the site prior to the construction of the temple</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "Gangotri-temple.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                GANGOTRI
                            </span>
                            <div>
                                <p class = "text">The river Ganga originates from the Gangotri glacier and is known as Bhagirathi. The name Ganga picks up later on after the river passes Devaprayag and merges into the river Alaknanda. The Gangotri Temple was built by a Gorkha Commander in the early years of the 18th century.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "istockphoto-1214520904-612x612.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                DEHRADHUN
                            </span>
                            <div>
                                <p class = "text">What is special about Dehradun?
                                    The town is at the foothills of the Himalayas and is primarily known for its Buddhist roots. The Mindrolling Monastery was re-established in 1965 by Khenchen Rinpoche, a well-known lama of Kagyu School of Tibetan Buddhism.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "rishikesh-3754010.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                RISHIKESH
                            </span>
                            <div>
                                <p class = "text">Rishikesh is a small serene town famous for meditation and yoga. It is Gateway to the Himalayas and being on the bank of the river Ganges it is an ideal destination for adventure activities like rafting, trekking, rock climbing, kayaking, etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- services section -->
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-hotel"></i>
                        </span>
                        <h3>Luxurious Hotels</h3>
                        <p class = "text">Most affordable Hotels with best facilities.</p>
                        <a href = "#" class = "btn">Read more</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Food & Beverages🍕</h3>
                        <p class = "text">One to fulfill your cravings</p>
                        <a href = "#" class = "btn">Read more</a>
                    </div>

                    
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what our clients say about us</span>
                    <h2 class = "lg-title">testimonials</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">Best expirence of my life</p>
                        <div class = "test-item-info">
                            <img src = "rushal.jpg" alt = "testimonial">
                            <div>
                                <h3>RUSHAL CHHABRA</h3>
                                <p class = "text">Trip to KEDARNATH</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">GREAT CONTENT YATRAAHOLIC. Helped a lot!</p>
                        <div class = "test-item-info">
                            <img src = "nimo.jpg" alt = "testimonial">
                            <div>
                                <h3>NIMISHA TOSHNIWAL</h3>
                                <p class = "text"> Trip to Kedarkantha</p>
                            </div>
                        </div>
                    </div>

                   <div class = "test-item">
                        <p class = "text">It is of great help! You can fetch various information at a single stop. Thanks Yatraaholic !👍👍</p>
                        <div class = "test-item-info">
                            <img src = "Bhai.jpg" alt = "testimonial">
                            <div>
                                <h3>ROHIT PANJWANI </h3>
                                <p class = "text">Trip to Nainital</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->

        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop autoplay>
                    <source src = "VIDEO.mp4" type = "video/mp4">
                </video>
                <!-- <button type = "button" id = "play-btn">
                    
                </button> -->
            </div>
        </section>
        <!-- end of video section -->

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        YATRAA<span>HOLIC</span>
                    </a>
                    <p class = "text"></p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">KEDARNATH</a></li>
                        <li><a href = "#">BADRINATH</a></li>
                        <li><a href = "#">YAMUNOTRI</a></li>
                        <li><a href = "#">GANGOTRI</a></li>
                        <li><a href = "#">RISHIKESH</a></li>
                        <li><a href = "#">HARIDWAR</a></li>
                        
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>