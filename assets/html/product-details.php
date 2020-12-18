<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php
if (isset($_REQUEST['id'])) {
    include '../../controller/connection.php';
    $id = $_REQUEST['id'];
    $exe = $con->query("SELECT * FROM products INNER JOIN catalogs WHERE products.id_catalog = catalogs.id_catalog AND id_products = $id");
    $row = $exe->fetch_assoc();
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Ver producto</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../img/logo/logo.png" type="image/x-icon" />
    <!--=== All Plugins CSS ===-->
    <link href="../css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="../css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->

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
                                <p>Bienvenido(@) a CandyJazz, Tienda Virtual</p>
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
                                <a href="../../index.php">
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
                                                    <li><a href="shop.php?id=catalogs">Catálogos </i></a>

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
                                <h1 class="breadcrumb-title">Detalles del Producto</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="shop.php">Tienda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detalles del Producto</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- product details wrapper start -->
        <div class="product-details-wrapper section-padding">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider mb-20">
                                        <div class="pro-large-img img-zoom">
                                            <img style="width: 450px; height: 450px; object-fit: cover;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>" alt="" />
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <h3 class="pro-det-title"><?php echo $row['name'] ?></h3>
                                        <div class="availability mb-20">
                                            <h5 class="cat-title">Tallas disponibles:</h5>
                                            <span> <b><?php echo $row['size'] ?></b></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$ <?php echo number_format($row['price']) ?></span>
                                            <!-- <span class="old-price"><del>$80.00</del></span> -->
                                        </div>
                                        <p><?php echo $row['description'] ?></p>
                                        <div class="quantity-cart-box d-flex align-items-center mb-20">
                                            <?php
                                            if (isset($_SESSION['id_session'])) {
                                                $data = 'id_products=' . $row['id_products'] . '&id_user=' . $id_user_ . '&price=' . $row['price'];
                                            ?>
                                                <button onclick="addCart('<?php echo $data ?>')" class="btn btn-default">Añadir al Carrito</button>
                                            <?php
                                            } else {
                                            ?>
                                                <button onclick="noSession();" class="btn btn-default">Añadir al Carrito</button>
                                            <?php
                                            }

                                            ?>




                                        </div>
                                        <div class="availability mb-20">
                                            <h5 class="cat-title">Diponibilidad:</h5>
                                            <span>En Stock</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->
                        <br>
                        <br>
                        <br>
                        <br>
                        <!-- featured product area start -->
                        <!-- Nuestros productos -->
                        <section class="our-product section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="section-title text-center">
                                            <h2 class="title">Quizas te pueda interesar</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">

                                            <!-- product single item start Repetir X 5 -->

                                            <?php
                                            $exe = $con->query("SELECT * FROM products INNER JOIN catalogs WHERE products.id_catalog = catalogs.id_catalog ORDER BY RAND() DESC LIMIT 5 ");
                                            while ($row = $exe->fetch_assoc()) {

                                            ?>
                                                <div class="product-item mb-50">

                                                    <div class="product-thumb">
                                                        <a>
                                                            <img description="<?php echo $row['description'] ?>" price="$ <?php echo number_format($row['price']) ?>" size="<?php echo $row['size'] ?>" name="<?php echo $row['name'] ?>" class="imgTop" style="object-fit: cover; height: 260px; width: 260px;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="product-name">
                                                            <a class="nameProducto_top" href="product-details.html"><?php echo $row['name'] ?></a>
                                                        </h5>
                                                        <div class="price-box">
                                                            <span class="price-regular">$ <?php echo number_format($row['price']) ?></span>
                                                            <!-- <span class="price-old"><del>$70.00</del></span> -->
                                                        </div>
                                                        <div class="product-action-link">

                                                            <?php
                                                            if (isset($_SESSION['id_session'])) {
                                                                echo '';
                                                            } else {
                                                                echo '<a title="Wishlist" data-toggle="tooltip" onclick="noSession();"><i class="ion-android-favorite-outline"></i></a> ';
                                                                echo '<a onclick="noSession();" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>';
                                                                echo '<a href="product-details.php?id=' . $row["id_products"] . '"> <span data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>';
                                                            }
                                                            ?>

                                                            <!-- <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a> -->

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php  } ?>
                                            <!-- product single item start -->


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Nuestros productos fin -->
                        <!-- featured product area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- product details wrapper end -->
    </main>
    <!-- main wrapper end -->

    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img img-zoom">
                                        <img src="" class="imgTop_modal" alt="" />
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title" id="nameModal"></h3>
                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Tallas disponibles:</h5>
                                        <b> <span id="sizeModal"></span></b>
                                    </div>

                                    <div class="price-box">
                                        <span class="regular-price" id="priceModal"></span>
                                        <!-- <span class="old-price"><del>$80.00</del></span> -->
                                    </div>

                                    <p id="descriptionModal"></p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">

                                        <a href="cart.html" class="btn btn-default">Add To Cart</a>
                                    </div>

                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Disponibilidad:</h5>
                                        <span>En Stock</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

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
    <script src="../plugins/Jquery/jquery.js"></script>
    <!--=== All Vendor Js ===-->
    <script src="../js/vendor.js"></script>
    <script src="../js/cart.details.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="../js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="../js/active.js"></script>
    <script src="../js/session.js"></script>
    <script src="../plugins/sweetAlert/sweetAlert.js"></script>
    <script src="../js/modernizr-2.8.3.min.js"></script>
    <script src="../js/session.js"></script>
</body>


</html>