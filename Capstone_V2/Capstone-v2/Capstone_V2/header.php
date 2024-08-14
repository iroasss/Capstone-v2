<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== ICON PAGE ===============-->
    <link rel="icon" type="image" href="img/LG-YELLOW.png" width=25px height=25px>
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <!--=============== FA ICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/styles.css" media="screen">
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo"><img src="img/logo-white.png" alt=""></a>
            <!-- <a href="#" class="nav__logo">Logo</a> -->
        <?php
            $current_page = basename($_SERVER['PHP_SELF']);
        ?>
        <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
            <a href="index.php" class="nav__link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
            </li>
            <li class="nav__item">
            <a href="browse_pet.php" class="nav__link <?= ($current_page == 'browse_pet.php') ? 'active' : '' ?>">Browse Pet</a>
            </li>
            <li class="nav__item">
            <a href="faqs.php" class="nav__link <?= ($current_page == 'faqs.php') ? 'active' : '' ?>">FAQs</a>
            </li>
        </ul>
        <!-- Close button -->
        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>
        </div>
            <div class="nav__actions">
                <!-- Search button -->
                <i class="#" id="search-btn"></i>
                <!-- Login button -->
                <i class="ri-user-line nav__login" id="login-btn"></i>
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- Search Popup -->
    <div class="search" id="search">
        <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
        </form>
        <i class="ri-close-line search__close" id="search-close"></i>
    </div>

    <!-- Login Popup -->
    <div class="login" id="login">
        <form action="" class="login__form">
            <h2 class="login__title">LOG IN</h2>
            <div class="login__group">
                <div>
                    <label for="email" class="login__label">Email</label>
                    <input type="email" placeholder="Write your email" id="email" class="login__input">
                </div>
                <div>
                    <label for="password" class="login__label">Password</label>
                    <input type="password" placeholder="Enter your password" id="password" class="login__input">
                </div>
            </div>
            <div>
                <p class="login__signup">
                    Don't have an account? <a href="#">Sign up</a>
                </p>
                <a href="#" class="login__forgot">
                    Forgot your password?
                </a>
                <button type="submit" class="login__button">LOG IN</button>
            </div>
        </form>
        <i class="ri-close-line login__close" id="login-close"></i>
    </div>


    <script src="js/script.js"></script>

</body>
</html>
