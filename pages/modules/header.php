<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Tienda de artículos relacionados con la practica del yoga, el pilates y la meditacion">
    <meta name="keywords"
        content="yoga, pilates, salud, welthness, deporte, espiritual, mujer, aviles, gijon, oviedo, asturias">
    <meta name="author" content="Jose Luis García Pelayo">
    <title>Yogini Nana</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <base href="/Yoguini_Nana_Shop/">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/base.css">
</head>

<body>
    <header>
        <nav class="mobile nav">

            <section class="flex main-header">
                <a class="brand g-1 f-align" href="/proyecto/">
                    <img src="./assets/img/logo-sin-fondo.png" class="" alt="logo" width="55">
                    <p>YOGUINI NANA</p>
                </a>

                <div class="f-align g-1">
                    <div class="">
                        <?php
                        echo '<div class="cart-counter">';
                        if (isset($_SESSION['cart'])) {
                            echo count($_SESSION['cart']);
                        }
                        echo '</div>';
                        ?>
                        <a href="/proyecto/cart" class="cart-link">
                            <?php include '../../assets/svg/cart-icon.php'; ?>
                        </a>
                    </div>

                    <a href="#" class="icon-menu-responsive-link">
                        <?php include '../../assets/svg/icon-menu-container.php'; ?>
                    </a>
                </div>
            </section>

            <section id="nav-m-links">
                <div id="user-login-container" class="f-align">
                    <?php if (isset($user)) { ?>
                        <a href="/proyecto/my_account">
                            <img class="user-login-img" src="<?php if (isset($user)) {
                                if ($user->getPhoto() != '') {
                                    echo './repo/user/' . $user->getPhoto();
                                } else {
                                    echo './assets/img/sinlog.png';
                                }
                            } else {
                                echo './assets/img/sinlog.png';

                            } ?>" alt="user_photo">
                        </a>
                    <?php } else { ?>
                        <img class="user-login-img" src="./assets/img/sinlog.png" alt="user_photo">
                        <a href="" id="m-nav-login-btn">Inicia sesión</a>
                        <a href="" id="m-nav-singin-btn">Registrate</a>
                    <?php } ?>
                </div>

                <ul class="nav-m-items">
                    <li class="nav-m-item">
                        <a href="/proyecto/" class="nav-m-link">Inicio</a>
                    </li>
                    <li class="nav-m-item-dropdown">
                        <a href="/proyecto/products" class="nav-m-link dropdown-toggle">
                            Productos
                            <?php include '../../assets/svg/arrow-down.php'; ?>
                            <?php include '../../assets/svg/arrow-up.php'; ?>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="/proyecto/products/1" class="dropdown-m-item">Moda</a></li>
                            <li><a href="/proyecto/products/5" class="dropdown-m-item">Accesorios</a></li>
                            <li><a href="/proyecto/products/3" class="dropdown-m-item">Esterillas</a></li>
                            <li><a href="/proyecto/products/4" class="dropdown-m-item">Mantas</a></li>
                            <li><a href="/proyecto/products/2" class="dropdown-m-item">Zafus</a></li>
                            <li><a href="/proyecto/products/6" class="dropdown-m-item">Meditación</a></li>
                        </ul>
                    </li>

                    <li class="nav-m-item">
                        <a href="/proyecto/blog" class="nav-m-link">Blog</a>
                    </li>

                    <li class="nav-m-item">
                        <a href="/proyecto/contact" class="nav-m-link">Contacto</a>
                    </li>

                    <?php
                    if ((isset($user) && $_SESSION['rol'] == 1) or (isset($user) && $_SESSION['rol'] == 4)) {
                        ?>
                        <li class="nav-m-item-dropdown">
                            <a href="" class="nav-m-link dropdown-toggle">
                                Administracion
                                <?php include '../../assets/svg/arrow-down.php'; ?>
                                <?php include '../../assets/svg/arrow-up.php'; ?>

                                <ul class="dropdown-menu">
                                    <li><a href="/proyecto/admin_users" class="dropdown-m-item">Usuarios</a></li>
                                    <li><a href="" class="dropdown-m-item">Productos</a></li>
                                </ul>
                        </li>
                    <?php } ?>

                    <li class="nav-m-item-dropdown social-media">
                        <p class="nav-m-item-dropdown">Si te gusta mi trabajo, visita mi repositorio o contacta.</p>
                        <?php include './about-me.php'; ?>
                    </li>
                </ul>
            </section>
        </nav>

        <nav class="nav desktop">
            <section class="flex main-header">
                <section class="f-align link-section">
                    <a class="brand g-1" href="/proyecto/">
                        <div class="brand g-1 f-align">
                            <img src="./assets/img/logo-sin-fondo.png" class="" alt="logo" width="55">
                            <p>YOGUINI NANA</p>
                        </div>
                    </a>

                    <ul class="f-align g-2">
                        <li class="d-navbar-link"><a href="/proyecto/">Home</a></li>

                        <li class="d-navbar-link drop">
                            <a class="nav-d-link" href="/proyecto/products">
                                Productos
                                <?php include '../../assets/svg/arrow-down.php'; ?>
                                <?php include '../../assets/svg/arrow-up.php'; ?>
                            </a>

                            <ul class="d dropdown-menu">
                                <li><a href="/proyecto/products/1" class="dropdown-d-item">Moda</a></li>
                                <li><a href="/proyecto/products/5" class="dropdown-d-item">Accesorios</a></li>
                                <li><a href="/proyecto/products/3" class="dropdown-d-item">Esterillas</a></li>
                                <li><a href="/proyecto/products/4" class="dropdown-d-item">Mantas</a></li>
                                <li><a href="/proyecto/products/2" class="dropdown-d-item">Zafus</a></li>
                                <li><a href="/proyecto/products/6" class="dropdown-d-item">Meditación</a></li>
                            </ul>
                        </li>

                        <li class="d-navbar-link"><a href="/proyecto/blog">Blog</a></li>

                        <li class="d-navbar-link"><a href="/proyecto/contact">Contacto</a></li>
                        <?php
                        if ((isset($user) && $_SESSION['rol'] == 1) or (isset($user) && $_SESSION['rol'] == 4)) {
                        ?>
                        <li class="d-navbar-link ">
                            <a class="nav-d-link">
                                Admin
                                <?php include '../../assets/svg/arrow-down.php'; ?>
                                <?php include '../../assets/svg/arrow-up.php'; ?>
                            </a>
                            <ul class="d dropdown-menu">
                                <li><a href="/proyecto/admin_users" class="dropdown-d-item">Usuarios</a></li>
                                <li><a href="/proyecto/admin_products" class="dropdown-d-item">Productos</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </section>

                <section class="f-align g-1">
                    <article id="h-cart-container">
                        <?php
                        echo '<div class="cart-counter">';
                        if (isset($_SESSION['cart'])) {
                            echo count($_SESSION['cart']);
                        }
                        echo '</div>';
                        ?>
                        <a href="" class="f-align">
                            <?php include '../../assets/svg/cart-icon.php'; ?>
                        </a>
                    </article>
                    <article class="icon-login-container f-align">
                        <div class="login-btns f-align">
                            <a class="login-account" href="/proyecto/login/">Inicia sesion</a>
                            <a class="create-account" href="/proyecto/register/">Registrarse</a>
                        </div>

                        <?php if (isset($user)) { ?>
                            <a class="login-link f-align g-1"><?php echo $user->takeInitials(); ?>
                                <img src="<?php if (isset($user)) {
                                    if ($user->getPhoto() != '') {
                                        echo './repo/user/' . $user->getPhoto();
                                    } else {
                                        echo './assets/img/sinlog.png';
                                    }
                                } else {
                                    echo './assets/img/sinlog.png';

                                } ?>" alt="user image" class="user-login-img"></a>
                        <?php } ?>
                    </article>
                </section>
            </section>
        </nav>
        </section>
    </header>

    <script>
        let iconMenu = document.querySelector('.menu-icon');
        let dropdowns = document.querySelectorAll('.dropdown-toggle');
        let navMLinks = document.querySelector('#nav-m-links');

        iconMenu.addEventListener('click', (e) => {
            e.preventDefault();
            navMLinks.classList.toggle('active');
            iconMenu.classList.toggle('active');
        })

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', (e) => {
                e.preventDefault();
                dropdown.classList.toggle('active');
            })
        })

    </script>

</body>

</html>