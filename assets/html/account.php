<?php session_start();
if (isset($_SESSION['id_session'])) {
    include '../../controller/session_data.php';
} else {
    header("location: ../../index.php");
    die();
} ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>CandyJazz - Mi Cuenta</title>
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
    <link rel="stylesheet" href="../../assets/css/state.css">
    <link rel="stylesheet" href="../plugins/sweetAlert/sweetAlert.css">
</head>

<body>
    <!-- Start Header Area -->
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
                                <p>Bienvenida <?php echo $name ?> a CandyJazz, Tienda Virtual</p>
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
                                            <li class="active"><a href="">Inicio </i></a>
                                            </li>
                                            <li><a href="shop.php">Productos <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Catálogos </i></a>

                                                    </li>
                                                    <li><a href="shop.php">Productos </i></a>

                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contáctanos</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
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
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="">Inicio</a>

                            </li>

                            <li class="menu-item-has-children "><a href="#">Productos</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">Catálogos</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Productos</a>

                                    </li>
                                </ul>
                            </li>

                            <li><a href="contact-us.html">Contáctanos</a></li>
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
                                    Mi cuenta
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="my-account.html">Mi cuenta</a>
                                    <a class="dropdown-item" href="my-account.html">Cerrar Sesión</a>
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
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
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
                                <h1 class="breadcrumb-title">Mi Cuenta</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../index.php">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mi cuenta</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- my account wrapper start -->
        <div class="my-account-wrapper section-padding">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>Dashboard</a>
                                        <a href="wishlist.php"><i class="fa fa-heart"></i> Lista de deseos</a>
                                        <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Ordenes</a>
                                        <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> Mi dirrección</a>
                                        <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Mis datos</a>
                                        <a href="../../controller/logout.php"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->

                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="welcome">
                                                    <p>Hola, <strong><?php echo $name ?></strong> </p>
                                                </div>
                                                <p class="mb-0">Desde el panel de tu cuenta. puede verificar y ver fácilmente sus pedidos recientes, administrar sus direcciones de envío y facturación, editar su contraseña y los detalles de su cuenta</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Ordenes</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Orden</th>
                                                                <th>Productos</th>
                                                                <th>Estado</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include '../../controller/connection.php';
                                                            $id_user = $_SESSION['id_session'];
                                                            $exeOrders = $con->query("SELECT * FROM bill WHERE id_user = '$id_user' ORDER BY id_bill DESC");
                                                            while ($row = $exeOrders->fetch_assoc()) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $row['id_bill'] ?></td>
                                                                    <td><?php echo $row['products'] ?></td>
                                                                    <td>
                                                                        <?php
                                                                        $state = $row['state'];

                                                                        if ($state == 1) { ?>
                                                                            <div class="box_state">
                                                                                <div class="line">
                                                                                    <div class="state"></div>
                                                                                    <div class="radio"></div>
                                                                                </div>
                                                                                <div class="text">Empacando</div>
                                                                            </div>
                                                                        <?php } else if ($state == 2) { ?>
                                                                            <div class="box_state">
                                                                                <div class="line2">
                                                                                    <div class="state2"></div>
                                                                                    <div class="radio2"></div>
                                                                                </div>
                                                                                <div class="text">En camino</div>
                                                                            </div>
                                                                        <?php } else if ($state == 3) {
                                                                        ?>
                                                                            <div class="box_state">
                                                                                <div class="line3">
                                                                                    <div class="state3"></div>
                                                                                    <div class="radio3"></div>
                                                                                </div>
                                                                                <div class="text">Entregado</div>
                                                                            </div>
                                                                        <?php } ?>



                                                                    </td>
                                                                    <td>$ <?php echo number_format($row['total']) ?></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>







                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->

                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dirección de facturación</h3>
                                                <address>
                                                    <p><strong><?php echo $name ?></strong></p>
                                                    <p> Dirección: <?php echo $address ?> <br>
                                                        Ciudad: <?php echo $city ?></p>
                                                    <p>Teléfono: <?php echo $phone ?></p>
                                                </address>
                                                <a href="#" data-toggle="tab"><i class="fa fa-edit"></i> Para actualizar ve a la sección "Mis datos"</a>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                      
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Mis Datos</h3>
                                                <div class="account-details-form">
                                                    <form id="update_data">
                                                        <div class="single-input-item">
                                                            <label for="name" class="required">Nombre</label>
                                                            <input type="text" name="id" id="id" style="display: none;" placeholder="Nombre" value=" <?php echo $_SESSION['id_session'] ?>" />
                                                            <input type="text" name="name" id="name" placeholder="Nombre" value=" <?php echo $name ?>" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="phone" class="required">Teléfono</label>
                                                                    <input type="text" name="phone" id="phone" placeholder="Teléfono" value="<?php echo $phone ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="city" class="required">Ciudad</label>
                                                                    <input type="text" id="city" name="city" placeholder="Ciudad" value="<?php echo $city ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="address" class="required">Dirección</label>
                                                            <input type="text" name="address" id="address" placeholder="Correo" value="<?php echo $address ?>" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Correo</label>
                                                            <input type="text" id="email" name="email" placeholder="Correo" value="<?php echo $email ?>" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <button id="btn_update" class="btn sqr-btn ">Actualizar datos</button>
                                                        </div>
                                                    </form>
                                                    <form id="update_password">
                                                        <fieldset>
                                                            <legend>Cambio de contraseña</legend>
                                                            <div class="single-input-item">
                                                                <label for="last" class="required">Contraseña actual</label>
                                                                <input type="text" name="id" id="id" style="display: none;" placeholder="Nombre" value=" <?php echo $_SESSION['id_session'] ?>" />
                                                                <input type="password" id="last" name="last" placeholder="Contraseña actual " />
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new" class="required">Nueva contraseña</label>
                                                                        <input type="password" id="new" name="new" placeholder="Nueva contraseña " />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm" class="required">Comfirmar contraseña</label>
                                                                        <input type="password" name="confirm" id="confirm" placeholder="Comfirmar contraseña " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button id="btnUpdateSecret" class="btn sqr-btn ">Cambiar contraseña</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->
    </main>
    <!-- main wrapper end -->

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
    <script src="../js/vendor.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="../js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="../js/active.js"></script>
    <script src="../js/update.user.js"></script>
    <script src="../plugins/sweetAlert/sweetAlert.js"></script>
</body>


</html>