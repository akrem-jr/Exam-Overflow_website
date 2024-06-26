<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="padding-left: 0;">
    <div class="container">
        <header class="header">
            <div class="flex">
                <a href="home.php" class="logo">Exam Overflow</a>
                <form action="search.php" method="post" class="search-form">
                    <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                    <button type="submit" class="fas fa-search"></button>
                </form>
                <div class="icons">
                    <div id="search-btn" class="fas fa-search"></div>
                    <div id="toggle-btn" class="fas fa-sun"></div>
                </div>
            </div>
        </header>

        <div class="content">
            <div class="big-text">Exam Overflow</div>
            <div class="paragraph">
                <p>Exam Overflow provide valuable resources to enhance their exam preparation. With Exam Overflow,
                    students can access
                    a vast collection of previous exams, share study materials, and find valuable resources to excel in
                    their academic journey. Our platform aims to empower students by fostering a collaborative learning
                    environment and facilitating the exchange of knowledge and insights.</p>
            </div>
            <div class="buttons-container">
                <a href="login.php" class="button">Login</a>
                <a href="register.php" class="button">Register</a>
            </div>
        </div>
    </div>
    <footer class="footer">
        &copy; copyright @ 2024 by <span>Solution Team</span> | all rights reserved!
    </footer>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>