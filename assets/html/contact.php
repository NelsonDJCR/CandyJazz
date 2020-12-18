<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Contáctanos</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <!--=== All Plugins CSS ===-->
    <link href="../css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="../css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="../js/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-message">
                                <?php
                                if (isset($sesion)) {
                                    echo '<p>Bienvenida ' . $name . ' a CandyJazz, Tienda Virtual</p>';
                                } else {
                                    echo '<p>Bienvenida a CandyJazz, Tienda Virtual</p>';
                                }
                                ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- header top end -->
            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="../../">
                                    <img style="width: 120px;" src="../img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->
                        <!-- main menu area start -->
                        <div class="col-lg-8 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li> <a href="../../">Inicio </i></a></li>
                                            <li class="active"><a>Productos </i></a></li>
                                            <li><a href="contact.php">Contáctanos</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->
                        <!-- mini cart area start -->
                        <div class="col-lg-2">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <!-- Nelson &nbsp; -->
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="fa fa-user-circle-o"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                                <?php
                                                if (isset($_SESSION['id_session'])) {
                                                    echo '<li><a href="account.php">Mi Cuenta</a></li><li><a href="controller/logout.php">Cerrar Sesión</a></li>';
                                                } else {
                                                    echo '<li><a href="login-register.php">Iniciar sesión</a></li>
                                                        <li><a href="login-register.php">Registrase</a></li>';
                                                }
                                                ?>

                                            </ul>
                                        </li>

                                        <!-- Icono carrito -->

                                        <?php
                                        if (isset($_SESSION['id_session'])) {
                                            echo '
                                                <li>
                                                    <a class="minicart-btn">
                                                        <i class="ion-bag"></i>
                                                        <div id="dataCart_number" class="notification"></div>
                                                    </a>
                                                </li>';
                                        } else {
                                            echo '
                                                <li  onclick="noSession()">
                                                    <a onclick="noSession()"; class="">
                                                        <i class="ion-bag"></i>
                                                        <div class="notification">0</div>
                                                    </a>
                                                </li>';
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img src="ogo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.html">
                                        <i class="ion-bag"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-navicon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>
            <div class="off-canvas-inner">
                <!-- search box start -->
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="../../">Inicio</a>
                            </li>
                            <li class="menu-item-has-children "><a href="shop.php">Productos</a>
                            
                            </li>
                            <li><a href="contact.php">Contáctanos</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <!-- user setting option start -->
                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Iniciar sesión
                                    <i class="fa fa-user"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <?php
                                    if (isset($_SESSION['id_session'])) {
                                        echo ' <a class="dropdown-item" href="account.php">Mi cuenta</a>';
                                    } else {
                                        echo '<a class="dropdown-item" href="login-register.php"> Iniciar sesión</a><a class="dropdown-item" href="assets/html/login-register.php">Registrase</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- user setting option end -->

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">301 719 2558</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="mailto:info@candyjazz.com">ask@candyjazz.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a target="_blank" href="https://www.facebook.com/CandyJazz.col"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/candyjazz.col"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area bg-img" data-bg="../img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">Contáctanos</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contáctanos</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- contact wrapper area start -->
        <div class="contact-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message">
                            <h2 class="contact-title">¡Déjanos un mensaje!</h2>
                            <form id="contact-form" action="http://whizthemes.com/mail-php/genger/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="first_name" placeholder="Nombre *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Teléfono *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="email_address" placeholder="Correo *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="contact_subject" placeholder="Asunto *" type="text">
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Message *" name="Mensaje" class="form-control2" required=""></textarea>
                                        </div>
                                        <div class="contact-btn">
                                            <button class="btn" type="submit">¡Envíar mensaje!</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info pt-0">
                            <h2 class="contact-title">Contáctanos</h2>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                                formas human.</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> Dirección : No 40 Baria Sreet 133/2 NewYork City</li>
                                <li><i class="fa fa-phone"></i> ask@candyjazz.com</li>
                                <li><i class="fa fa-envelope-o"></i> +57 305 707 8275</li>
                            </ul>
                            <div class="working-time">
                                <h3>Working Hours</h3>
                                <p class="pb-0"><span>Lunes – Sábado:</span>08AM – 22PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact wrapper area end -->
    </main>
    <!-- main wrapper end -->

    <!-- Start Footer Area Wrapper -->
    
    <!-- End Footer Area Wrapper -->

    <!-- offcanvas search form start -->
    <div class="offcanvas-search-wrapper">
        <div class="offcanvas-search-inner">
            <div class="offcanvas-close">
                <i class="ion-android-close"></i>
            </div>
            <div class="container">
                <div class="offcanvas-search-box">
                    <form class="d-flex bdr-bottom w-100">
                        <input type="text" placeholder="Search entire storage here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i>search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas search form end -->

    <!-- offcanvas mini cart start -->
    <div class="offcanvas-minicart-wrapper">
        <div class="minicart-inner">
            <div class="offcanvas-overlay"></div>
            <div class="minicart-inner-content">
                <div class="minicart-close">
                    <i class="ion-android-close"></i>
                </div>
                <div class="minicart-content-box">
                    <div class="minicart-item-wrapper">
                        <ul>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.html">
                                        <img src="../img/cart/cart-1.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.html">Flowers bouquet pink for all flower lovers</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$100.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="ion-android-close"></i></button>
                            </li>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.html">
                                        <img src="../img/cart/cart-2.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.html">Jasmine flowers white for all flower lovers</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$80.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="ion-android-close"></i></button>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-pricing-box">
                        <ul>
                            <li>
                                <span>sub-total</span>
                                <span><strong>$300.00</strong></span>
                            </li>
                            <li>
                                <span>Eco Tax (-2.00)</span>
                                <span><strong>$10.00</strong></span>
                            </li>
                            <li>
                                <span>VAT (20%)</span>
                                <span><strong>$60.00</strong></span>
                            </li>
                            <li class="total">
                                <span>total</span>
                                <span><strong>$370.00</strong></span>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-button">
                        <a href="cart.html"><i class="fa fa-shopping-cart"></i> view cart</a>
                        <a href="cart.html"><i class="fa fa-share"></i> checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas mini cart end -->
    <?php include 'footer.php' ?>
    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!--=======================Javascript============================-->
    <!--=== All Vendor Js ===-->
    <script src="../js/vendor.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="../js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="../js/active.js"></script>
</body>
    

</html>