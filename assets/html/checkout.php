<?php
include '../../controller/session_start.php';
include '../../controller/connection.php';
if (isset($_SESSION['id_session'])) {
    $session = $_SESSION['id_session'];
    include "../../controller/session_data.php";
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>CheckOut</title>
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
                                                    echo '<li><a href="assets/html/account.php">Mi Cuenta</a></li><li><a href="controller/logout.php">Cerrar Sesión</a></li>';
                                                } else {
                                                    echo '<li><a href="assets/html/login-register.php">Iniciar sesión</a></li>
                                                        <li><a href="assets/html/login-register.php">Registrase</a></li>';
                                                }
                                                ?>

                                            </ul>
                                        </li>

                                        <!-- Icono carrito -->



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
                                    <img src="../img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="assets/html/cart.html">
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
                                <h1 class="breadcrumb-title">Checkout</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Checkout Login Coupon Accordion Start -->
                        <div class="checkoutaccordion" id="checkOutAccordion">


                            <div class="card">
                                <h5>¿Tienes un cupón de descuento? <span data-toggle="collapse" data-target="#couponaccordion">
                                        Ingresa aquí tu Cupón</span></h5>
                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <div class="cart-update-option">
                                            <div class="apply-coupon-wrapper">
                                                <form action="#" method="post" class=" d-block d-md-flex">
                                                    <input type="text" placeholder="Ingresa tu código de descuento" required />
                                                    <button class="btn btn-sqr">Aplicar cupón</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Login Coupon Accordion End -->
                    </div>
                </div>
                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h4 class="checkout-title">Datos personales</h4>
                            <div class="billing-form-wrap">
                                <form action="#">
                                    <div class="single-input-item">
                                        <label for="name_user" class="required">Nombre</label>
                                        <input type="email" readonly name="name_user" id="name_user" placeholder="Nombre" value="<?php echo $name ?>" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="com-name">Teléfono</label>
                                        <input type="text" readonly id="phone_user" placeholder="Teléfono de contácto" value="<?php echo $phone ?>" />
                                    </div>


                                    <div class="single-input-item">
                                        <label for="address" class="required mt-20">Dirección</label>
                                        <input type="text" id="address" placeholder="Dirrección de envío de producto" value="<?php echo $address ?>" />
                                    </div>


                                    <div class="single-input-item">
                                        <label for="town" class="required">Ciudad</label>
                                        <input type="text" readonly id="city_user" placeholder="Ciudad de recidencia" value="<?php echo $city ?>" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="state" class="required">Correo </label>
                                        <input type="text" readonly id="state" placeholder="Correo electrónico" value="<?php echo $email ?>" />
                                    </div>
                                    <div class="single-input-item">
                                        <label for="town" class="required">Si necesita modificar algún dato dirijase a la sección <a href="account.php">Mi cuenta</a> </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details">
                            <h4 class="checkout-title">Detalles de tu compra</h4>
                            <div class="order-summary-content">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Talla</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $session = $_SESSION['id_session'];
                                            $exeCart = $con->query(
                                                "SELECT A.id_products, A.id_catalog, A.name, A.price, A.size, A.sold, A.img,
                                                B.id_cart, B.id_products AS cart_product, B.id_user AS cart_user, B.price,  B.size_select 
                                                FROM 
                                                products AS A  INNER JOIN 
                                                cart AS B 
                                                WHERE A.id_products = B.id_products AND B.id_user = '$session'"
                                            );
                                            while ($rowCart = $exeCart->fetch_assoc()) {
                                            ?>

                                                <tr>
                                                    <td><a href="product-details.html"><?php echo $rowCart['name'] ?> <br> <strong> Tallas: <?php echo $rowCart['size'] ?> </strong></a>
                                                    </td>
                                                    <td> <input class="size_checkout" readonly type="text" style="width: 40px; text-align: center; border:none;" value="<?php echo $rowCart['size_select'] ?>"> </td>
                                                    <td><?php echo number_format($rowCart['price']) ?></td>
                                                </tr>

                                            <?php } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Total </td>
                                                <td colspan="2"> <strong id="totalCart"></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <center>
                                    <br><br>
                                    <h4>Selecciona el método de pago</h4>
                                </center>
                                <form action="" id="method_form">
                                    <input type="text" style="display: none;" id="id_user" value="<?php echo $session ?>">
                                    <input type="text" style="display:  none;" id="products" value="<?php include '../../controller/cart.products.name.php' ?>">
                                    <input type="text" style="display:  none;" id="sizes" value="<?php include '../../controller/cart.products.sizes.php' ?>">
                                    <div class="order-payment-method">
                                        <div class="single-payment-method show">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="noData" name="paymentmethod" value="noData" class="custom-control-input" checked />
                                                    <label class="custom-control-label" for="noData">Selecciona...</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="directbank" name="paymentmethod" value="bank" class="custom-control-input" />
                                                    <label class="custom-control-label" for="directbank">Tarjeta Crédito / Débito / Transferencia bancaria</label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="bank">
                                                <p>Validaremos la información y recibiras el link de pago</p>
                                                <img src="../img/payMethods/1.jpg">
                                            </div>
                                        </div>

                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cash" name="paymentmethod" value="cash" class="custom-control-input" />
                                                    <label class="custom-control-label" for="cash">Efectivo</label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="cash">
                                                <p>
                                                    Recibiras la información de la cuenta a la cuál debes realizar tu envío de dinero
                                                </p>
                                                <img src="../img/payMethods/2.jpg" alt="">
                                            </div>
                                        </div>

                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="nequi" name="paymentmethod" value="nequi" class="custom-control-input" />
                                                    <label class="custom-control-label" for="nequi">Nequi / Daviplata</label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="nequi">
                                                <p>
                                                    Recibiras la información de la cuenta a la cuál debes realizar tu envío de dinero
                                                </p>
                                                <img src="../img/payMethods/3.jpg">
                                            </div>
                                        </div>

                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="whastApp" name="paymentmethod" value="whastApp" class="custom-control-input" />
                                                    <label class="custom-control-label" for="whastApp">Enviar pedido por WhatsApp</label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="whastApp">
                                                <p>
                                                    Selecciona esta opción y envíaras un mensaje con los datos de tu compra para continuar tu pago
                                                </p>
                                                <img src="../img/payMethods/4.jpg">
                                            </div>
                                        </div>

                                        <!-- <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="paypalpayment" name="paymentmethod" value="paypal" class="custom-control-input" />
                                                <label class="custom-control-label" for="paypalpayment">Paypal <img src="../img/paypal-card.jpg" class="img-fluid paypal-card" alt="Paypal" /></label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="paypal">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.</p>
                                        </div>
                                    </div> -->

                                        <!-- TYC -->
                                        <div class="summary-footer-area">

                                            <button type="submit" id="btn_checkout" class="btn btn-sqr">Procesar compra</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- checkout main wrapper end -->
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
                        <a href="assets/html/cart.php"><i class="fa fa-shopping-cart"></i> view cart</a>
                        <a href="assets/html/chekout.php"><i class="fa fa-share"></i> checkout</a>
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
    <script src="../plugins/sweetAlert/sweetAlert.js"></script>
    <script src="../js/checkout.js"></script>
</body>


</html>