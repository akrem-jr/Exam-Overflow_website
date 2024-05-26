<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <header class="header">

        <section class="flex">

            <a href="home.html" class="logo1">

                <img class="logo-img" src="./images/icons/logo.jpg" alt="Exam Overflow">
                <span class="logo">Exam Overflow</span>
            </a>


            <form action="search.php" method="post" class="search-form">
                <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                <button type="submit" class="fas fa-search"></button>
            </form>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="search-btn" class="fas fa-search"></div>
                <div id="toggle-btn" class="fas fa-sun"></div>
            </div>

        </section>

    </header>

    <div class="side-bar">

        <div id="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <h3 class="name">Akrem</h3>
            <p class="role">student</p>
            <a href="profile.php" class="btn">view profile</a>

        </div>

        <nav class="navbar">

            <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
            <a href="contact.php"><i class="fas fa-headset"></i><span>contact</span></a>
            <a href="login.php"><i class="fa-solid fa-right-from-bracket"></i> </i><span>Log out</span></a>
        </nav>

    </div>
    <section class="home-grid">
        <div class="box-container">
            <div class="box">
                <h3 class="title">Daily Quote</h3>
                <p class="tutor">Believe in yourself and all that you are. Know that there is something inside you that
                    is greater than any obstacle.</p>

            </div>

        </div>

    </section>

    <section class="courses">



        <div class="box-container">

            <div class="box">

                <div class="thumb">
                    <img src="images/icons/photo_2024-05-20_10-22-48.jpg" alt="">

                </div>

                <a href="material.php" class="inline-btn">material</a>
            </div>

            <div class="box">

                <div class="thumb">
                    <img src="images/icons/photo_2024-05-20_10-22-50.jpg" alt="">

                </div>

                <a href="playlist.html" class="inline-btn">Study</a>
            </div>
            <div class="box">

                <div class="thumb">
                    <img src="images/icons/photo_2024-05-20_10-22-52.jpg" alt="">

                </div>

                <a href="Exam.php" class="inline-btn">Exam</a>
            </div>
            <div class="box">

                <div class="thumb">
                    <img src="images/icons/photo_2024-05-20_10-22-47.jpg" alt="">

                </div>

                <a href="playlist.html" class="inline-btn">Progress</a>
            </div>
            <div class="box">

                <div class="thumb">
                    <img src="images/icons/photo_2024-05-20_10-22-50 (2).jpg" alt="">

                </div>

                <a href="playlist.html" class="inline-btn">Question</a>
            </div>
            <div class="box">

                <div class="thumb">
                    <img src="images/icons/photo_2024-05-20_10-22-51.jpg" alt="">

                </div>

                <a href="playlist.html" class="inline-btn">Solution</a>
            </div>
        </div>

    </section>
    <footer class="footer">

        &copy; copyright @ 2024 by <span>Solution Team</span> | all rights reserved!

    </footer>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>