<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php
session_start();
$session = $_SESSION['id_session'];
include '../../controller/session_data.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Juan - Shoes Store HTML Template</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../img/logo/logo.png" type="image/x-icon" />
    <!--=== All Plugins CSS ===-->
    <link href="../css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="../css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="../js/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="../plugins/sweetAlert/sweetAlert.css">

</head>

<body>
    <input type="text" style="display: none ;" id="id_user" value="<?php echo $session ?>">
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
                                            <li class="active"><a href="../../">Inicio </i></a>
                                            </li>
                                            <li><a href="../html/shop.php">Productos <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="../html/shop.php">Catálogos </i></a>

                                                    </li>
                                                    <li><a href="../html/shop.php">Productos </i></a>

                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="../html/contact.php">Contáctanos</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->
                        <!-- mini cart area start -->

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
                                <a href="../../">
                                    <img src="../img/logo/logo.png" alt="Brand Logo">
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
                            <li class="menu-item-has-children"><a href="">Inicio</a>
                            </li>
                            <li class="menu-item-has-children "><a href="assets/html/shop.php">Productos</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">Catálogos</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="assets/html/shop.php">Productos</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="assets/html/contact.php">Contáctanos</a></li>
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
                                        echo ' <a class="dropdown-item" href="assets/html/account.php">Mi cuenta</a>';
                                    } else {
                                        echo '<a class="dropdown-item" href="assets/html/login-register.php"> Iniciar sesión</a><a class="dropdown-item" href="assets/html/login-register.php">Registrase</a>';
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
                                <a href="mailto:info@candyjazz.com">info@candyjazz.com</a>
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
                                <h1 class="breadcrumb-title">Ver Carrito</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ver Carrito</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <form action="checkout.php">
            <div class="cart-main-wrapper section-padding">
                <div class="container">
                    <div class="section-bg-color">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Cart Table Area -->
                                <div class="cart-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="pro-thumbnail">Miniatura</th>
                                                <th class="pro-title">Producto</th>
                                                <th class="pro-subtotal">Precio</th>
                                                <th class="pro-subtotal">Talla</th>
                                                <th class="pro-remove">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="items_cart_">


                                        </tbody>
                                    </table>
                                </div>
                                <!-- Cart Update Option -->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 ml-auto">
                                <!-- Cart Calculation Area -->
                                <div class="cart-calculator-wrapper">
                                    <div class="cart-calculate-items">
                                        <h3>Total del carrito</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr class="total">
                                                    <td>Total</td>
                                                    <td class="total-amount" id="totalCart_">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <input id="btn-redirect" type="submit" href="checkout.php" class="btn d-block" value="Realizar Pago">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- cart main wrapper end -->
    </main>
    <!-- main wrapper end -->

    <!-- Start Footer Area Wrapper -->


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
    <script src="../plugins/Jquery/jquery.js"></script>
    <script src="../plugins/sweetAlert/sweetAlert.js"></script>
    <script src="../js/cart.main.js"></script>
    <script src="../js/vendor.js"></script>
    <script src="../js/vendor.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/active.js"></script>
    <script src="../js/valide.size.js"></script>
    
</body>


</html>