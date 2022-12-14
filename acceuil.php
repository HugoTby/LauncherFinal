<?php
session_start();

//vérification si le membre est passé par la page de login :

    if(!isset($_SESSION['Login'])) {

    $msg = 'Désolé, vous devez être identifié pour enregistrer un lieu.';

    // si la variable de session login n'est pas enregistré : retour sur la page index.php
    header('location: index.php?page=index&msg=' . $msg);

    } else { // si tu es bien connecté.

    $Login = $_SESSION['Login'];

    }

?> 

<!-- by Hugo T -->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Beta Games Launcher</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <!-- Fav icon -->
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Swiper CSS file link -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

</head>
<body oncontextmenu="return false;"  >

    <!-- Bloquer inspecter l'élément + clic droit-->

    <script>
        document.onkeydown=function(e)
        {
            if(event.keyCode == 123)
            {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0))
            {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0))
            {
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))
            {
                return false;
            }

        }
    </script>

    <!-- Custom scroll bar -->
    <div class="progress">
        <div class="progress-bar" id="scroll-bar">

        </div>
    </div>

    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <a href="index.php" class="logo">Beta games<span>launcher</span></a>
            <!-- Nav icons -->
            <div class="nav-icons">
                <i class='bx bx-bell bx-tada' id="bell-icon" ><span></span></i>
                <i class='bx bxs-download' ></i>
                <div class="menu-icon">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                </div>

            </div>
            <!-- Menu -->
            <div class="menu">
                <img src="img/menu.png" alt="menuimg">
                <div class="navbar">
                    <li><a href="index.html">Menu</a></li>
                    <li><a href="#trending">Tendances</a></li>
                    <li><a href="#new">Nouveaux jeux</a></li>
                    <li><a href="#action">Jeux d'action</a></li>
                    <li><a href="#contact">Nous contacter</a></li>
                    <li><a><form action="disconnect.php" method="post"> <input type="submit" id="disconnect" value="Déconnexion"> </form></a></li>



                </div>
            </div>
            <!-- Notification -->
            <div class="notification">
                    <div class="notification-box">
                        <i class='bx bxs-check-circle'></i>
                        <p>Félicitations, votre jeu a été téléchargé avec succès !</p>
                    </div>
                    <div class="notification-box box-color">
                        <i class='bx bxs-x-circle'></i>
                        <p>Impossible d'appliquer les changements !</p>
                    </div>
            </div>

        </div>
    </header>
    <!-- Home section start -->
    <section class="home container" id="home">
        <img src="img/home.png" alt="home image">
        <div class="home-text">
            <h1>LA VILLE DU <br> FUTUR</h1>
            <a href="#" class="btn">Disponible Maintenant</a>
        </div>
    </section>

    <!-- Home section end -->

    <!-- Trending section start -->
    <section class="trending container" id="trending">
        <div class="heading">
            <i class='bx bxs-flame' ></i>
            <h2>Jeux du Moment</h2>
        </div>
        <!-- Content -->
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending1.webp" alt="">
                        <div class="box-text">
                            <h2>Cyberpunk 2077</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>3.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending2.jpg" alt="">
                        <div class="box-text">
                            <h2>Battlefield 2042</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>8.9</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending3.jpg" alt="">
                        <div class="box-text">
                            <h2>Assassin's Creed</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>6.3</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending4.jpg" alt="">
                        <div class="box-text">
                            <h2>Ghost of Tsushima</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>3.8</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending5.png" alt="">
                        <div class="box-text">
                            <h2>GTA V</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>9.4</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending6.jpg" alt="">
                        <div class="box-text">
                            <h2>Dying Light 2</h2>
                            <h3>Post Apocalyptique</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>8.1</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending7.png" alt="">
                        <div class="box-text">
                            <h2>Halo Infinite</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>7.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending8.png" alt="">
                        <div class="box-text">
                            <h2>Resident Evil Village</h2>
                            <h3>Post Apocalyptique</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star' ></i>
                                    <span>5.6</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
              </div>

        </div>
    </section>



    <!-- Trending section end -->
    <!-- New Section start -->
        <section class="new container" id="new">
            <div class="heading">
                <i class='bx bx-game' ></i>
                <h2>Nouveaux Jeux</h2>
            </div>
    <!-- Content -->
            <div class="new-content">
                <!-- Box 1 -->
                <div class="box">
                    <img src="img/new1.jpg" alt="">
                    <div class="box-text">
                        <h2>Subway Surfers</h2>
                        <h3>Course</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.7</span>
                            </div>
                            <a href="download.php" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
                <!-- Box 2 -->
                <div class="box">
                    <img src="img/new2.jpg" alt="">
                    <div class="box-text">
                        <h2>Call of Duty: Mobile</h2>
                        <h3>Action</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.1</span>
                            </div>
                            <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
                <!-- Box 3 -->
                <div class="box">
                    <img src="img/new3.jpg" alt="">
                    <div class="box-text">
                        <h2>Beta Games: Alive</h2>
                        <h3>Action</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>10.0</span>
                            </div>
                            <a href="alive.php" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
                <!-- Box 4 -->
                <div class="box">
                    <img src="img/new4.jpg" alt="">
                    <div class="box-text">
                        <h2>Clash Royale</h2>
                        <h3>Stratégie</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>5.3</span>
                            </div>
                            <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
                <!-- Box 5 -->
                <div class="box">
                    <img src="img/new5.png" alt="">
                    <div class="box-text">
                        <h2>Minecraft</h2>
                        <h3>Aventure</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>7.9</span>
                            </div>
                            <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
                <!-- Box 6 -->
                <div class="box">
                    <img src="img/new6.png" alt="">
                    <div class="box-text">
                        <h2>PUBG</h2>
                        <h3>Action</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.6</span>
                            </div>
                            <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
                <!-- Box 7 -->
                <div class="box">
                    <img src="img/new7.png" alt="">
                    <div class="box-text">
                        <h2>Fortnite</h2>
                        <h3>Action</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8.6</span>
                            </div>
                            <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
                <!-- Box 8 -->
                <div class="box">
                    <img src="img/new8.jpg" alt="">
                    <div class="box-text">
                        <h2>Marvel of Champions</h2>
                        <h3>Action</h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="next-page">
                <a href="#">Page Suivante</a>
            </div>
        </section>
    <!-- New Section end -->
    <!-- Copyright -->

    <div class="copyright container">
        <a href="#" class="logo">Beta Games<span>launcher</span></a>
        <p>&#169; Beta Games 2022 Tout droits réservés</p>
    </div>


    






    <!-- Link swiper file-->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Link to JS -->
    <script src="js/main.js"></script>
    
</body>
</html>