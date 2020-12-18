<?php
include 'controller/session_start.php';
include 'controller/connection.php';
if (isset($_SESSION['id_session'])) {
    $session = $_SESSION['id_session'];
    include "controller/session_data.php";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>CandyJazz</title>
    <link rel="shortcut icon" href="assets/img/logo/logo.png" type="image/x-icon" />
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/vendor.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/sweetAlert/sweetAlert.css">
    <link rel="stylesheet" href="assets//footer/styles.footer.css">
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
                                <a href="index.html">
                                    <img style="width: 120px;" src="assets/img/logo/logo.png" alt="">
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
                                            <li><a href="assets/html/shop.php">Productos </i></a>

                                            </li>
                                            <li><a href="assets/html/contact.php">Contáctanos</a></li>
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
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo">
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
                <div class="mobile-navigation">
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
                                <a href="mailto:ask@candyjazz.com">info@candyjazz.com</a>
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
        <!-- hero slider section start -->
        <section class="hero-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                            <!-- single slider item start -->
                            <div class="hero-single-slide">
                                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider-1.jpg">
                                    <div class="hero-slider-content slide-1">
                                        <h5 class="slide-subtitle">Nuevo Catálogo</h5>
                                        <h2 class="slide-title">Elegante!</h2>
                                        <p class="slide-desc">Tenemos nuevos productos a la venta, para que tengas más opciones de escoger</p>
                                        <a href="assets/html/shop.php" class="btn btn-hero">Ver catálogos</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->

                            <!-- single slider item start -->
                            <div class="hero-single-slide">
                                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider-2.jpg">
                                    <div class="hero-slider-content slide-1">
                                        <h5 class="slide-subtitle">Ventas</h5>
                                        <h2 class="slide-title">Top ventas</h2>
                                        <p class="slide-desc">Animate y mira nuestros productos más vendidos y compra ahora </p>
                                        <a href="assets/html/shop.php" class="btn btn-hero">Ver productos</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero slider section end -->

        <!-- Políticas de ventas -->
        <section class="service-policy-area">
            <div class="container">
                <div class="row">
                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-1">
                            <div class="policy-icon">
                                <img src="assets/img/icon/policy-1.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">Envios Nacionales</h5>
                                <p class="policy-desc">Envios a toda Colombia</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->

                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-2">
                            <div class="policy-icon">
                                <img src="assets/img/icon/policy-2.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">24h Disponibles</h5>
                                <p class="policy-desc">Compra en cualquier momento</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->
                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-3">
                            <div class="policy-icon">
                                <img src="assets/img/icon/policy-3.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">Precios bajos</h5>
                                <p class="policy-desc">Tenemos precios muy cómodos</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->
                </div>
            </div>
        </section>
        <!-- Políticas de ventas fin -->
        <!-- top ventas -->
        <section class="top-seller-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Top ventas</h2>
                            <p class="sub-title">Nuestros productos más vendido en la plataforma</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="product-banner">
                            <img src="assets/img/banner/banner-3.png" alt="product banner">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="top-seller-carousel slick-row-15 mtn-30">
                            <!-- product item start  REPETIR * 4 -->
                            <?php
                            $exe = $con->query("SELECT * FROM products INNER JOIN catalogs WHERE products.id_catalog = catalogs.id_catalog  ORDER BY sold DESC LIMIT 4");
                            while (($row = $exe->fetch_assoc()) > 1) {
                            ?>
                                <div class="slide-item">
                                    <div class="pro-item-small mt-30">
                                        <div class="product-thumb">
                                            <a>
                                                <img description="<?php echo $row['description'] ?>" price="$ <?php echo number_format($row['price']) ?>" size="<?php echo $row['size'] ?>" name="<?php echo $row['name'] ?>" class="imgTop" style="width: 250px; height: 200px; object-fit: cover; cursor:pointer;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>">
                                            </a>
                                        </div>
                                        <div class="pro-small-content">
                                            <h6 class="product-name">
                                                <a href="product-details.html"> <?php echo $row['name'] ?> <br> Talla <?php echo $row['size'] ?> </a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$ <?php echo number_format($row['price']) ?></span>
                                                <!-- <span class="price-old"><del>$30.000</del></span> -->
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-link-2">
                                                <?php
                                                if (isset($_SESSION['id_session'])) {
                                                    $id_user_ = $_SESSION['id_session'];
                                                    $data = 'id_products=' . $row['id_products'] . '&id_user=' . $id_user_ . '&price=' . $row['price'];
                                                ?>
                                                    <a onclick="addWishlistIndex('<?php echo $data ?>')" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    <a onclick="addCart('<?php echo $data ?>')" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                <?php
                                                } else {
                                                    echo '<a title="Wishlist" data-toggle="tooltip" onclick="noSession();"><i class="ion-android-favorite-outline"></i></a> ';
                                                    echo '<a onclick="noSession();" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>';
                                                }
                                                ?>
                                                <a href="assets/html/product-details.php?id='<?php echo $row["id_products"] ?>'"> <span data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <!-- product item start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top ventas fin -->

        <!-- Dos promociones -->
        <div class="banner-statistics">
            <div class="container">
                <div class="row no-gutters mtn-30">
                    <div class="col-md-6">
                        <div class="img-container mt-30">
                            <a href="product-details.html">
                                <img src="assets/img/banner/banner-1.jpg" alt="banner-image">
                            </a>
                            <div class="banner-text">
                                <h5 class="banner-subtitle">Weekend</h5>
                                <h3 class="banner-title">5% Descuento<br>Todos los fines de semana</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-container mt-30">
                            <a href="product-details.html">
                                <img src="assets/img/banner/banner-2.jpg" alt="banner-image">
                            </a>
                            <div class="banner-text">
                                <h5 class="banner-subtitle">Obten bonos de </h5>
                                <h3 class="banner-title">10% Descuento<br> En nuestras redes </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dos promociones fin -->
        <!-- Nuestros productos -->
        <section class="our-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Nuestros productos</h2>
                            <p class="sub-title">Mira algunos de nuestros productos o si deseas <a href="assets/html/shop.php">Ver más</a></p>

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
                                                $id_user_ = $_SESSION['id_session'];
                                                $data = 'id_products=' . $row['id_products'] . '&id_user=' . $id_user_ . '&price=' . $row['price'];
                                            ?>
                                                <a onclick="addWishlistIndex('<?php echo $data ?>')" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a onclick="addCart('<?php echo $data ?>')" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <?php
                                            } else {
                                                echo '<a title="Wishlist" data-toggle="tooltip" onclick="noSession();"><i class="ion-android-favorite-outline"></i></a> ';
                                                echo '<a onclick="noSession();" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>';
                                            }
                                            ?>
                                            <a href="assets/html/product-details.php?id='<?php echo $row["id_products"] ?>'"> <span data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                    </div>
                                    <p id="descriptionModal"></p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">
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

    <!-- testimonial section start -->
    <section class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-inner bg-img" data-bg="assets/img/banner/banner-bg.jpg">
                        <h2 class="testimonial-title">Clientes Satisfechos</h2>
                        <div class="testimonial-active slick-dot-style slick-dot-style__style-2">
                            <!-- testimonial item start -->
                            <div class="slider-item">
                                <div class="testimonial-item">
                                    <div class="testimonial-thumb">
                                        <img src="https://scontent.fbog4-1.fna.fbcdn.net/v/t31.0-8/19702915_10155541462607658_1745089302976395625_o.jpg?_nc_cat=101&_nc_sid=174925&_nc_ohc=tHyxQw-tqmUAX-JQpqH&_nc_ht=scontent.fbog4-1.fna&oh=b45a4dccdad8133fc8d1118d03392720&oe=5F828582" alt="client thumb">
                                    </div>
                                    <div class="testimonial-content">
                                        <h5 class="client">Leidy Pinilla</h5>
                                        <p>Me fascinaron las pijamas, muy cómodas y lindas 😍</p>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial item end -->

                            <!-- testimonial item start -->
                            <div class="slider-item">
                                <div class="testimonial-item">
                                    <div class="testimonial-thumb">
                                        <img src="https://images.pexels.com/photos/2348018/pexels-photo-2348018.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="client thumb">
                                    </div>
                                    <div class="testimonial-content">
                                        <h5 class="client">Carolina Gomez</h5>
                                        <p>Gracias por la cumplida entrega, feliz con mi pijama</p>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial item end -->

                            <!-- testimonial item start -->
                            <div class="slider-item">
                                <div class="testimonial-item">
                                    <div class="testimonial-thumb">
                                        <img src="https://images.pexels.com/photos/2774197/pexels-photo-2774197.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="client thumb">
                                    </div>
                                    <div class="testimonial-content">
                                        <h5 class="client">Melany Hernandez</h5>
                                        <p>Feliz con mi hermosa y cómoda pijama, muchas gracias</p>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->




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
                        <ul id="items_cart">
                        </ul>
                    </div>

                    <div class="minicart-pricing-box">
                        <ul>

                            <li class="total">
                                <span>Total</span>
                                <span style="color: #E3A51E;"> <strong id="totalCart"></strong></span>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-button">
                        <a href="assets/html/cart.php"><i class="fa fa-shopping-cart"></i>Ver Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas mini cart end -->
    <!-- <link rel="stylesheet" href="assets/footer/styles.footer.css" /> -->
    <link rel="stylesheet" href="assets/plugins/font/font.css">
    <footer>
        <div class="contaner-footer">
            <div class="tittle-footer">
                <h2>Candy Jazz</h2>
            </div>
            <div class="footer1">
                <h2 class="tiitel-footer">¿Quiénes somos?</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi amet
                    voluptatum soluta, labore sequi. Dolorem nobis, officiis voluptatum
                    laborum consectetur dolor mollitia minima expedita laudantium eum
                    incidunt pariatur, perferendis quisquam!
                </p>
            </div>
            <div class="footer2">
                <h2 class="tiitel-footer">Contáctanos</h2>
                <p class="p1">Email: ask@candyjazz.com</p>
                <p>Phone: +57 301 719 2558</p>
                <br />
                <h2 class="tiitel-footer">Redes</h2>
                <div class="container-icons">

                    <a target="_blanck" href="https://www.facebook.com/CandyJazz.col"><img src="assets/footer/facebook.png" alt=""></a>
                    <a target="_blanck" href="https://www.instagram.com/candyjazz.col/"><img src="assets/footer/instagram.png" alt=""></a>
                    <a target="_blanck" href="https://api.whatsapp.com/send?phone=573017192558"><img src="assets/footer/whatsapp.png" alt=""></a>
                </div>
            </div>
            <div class="footer3">
                <h2 class="tiitel-footer">Métodos de pago</h2>
                <img src="assets/footer/paymethods.png" alt="" />
            </div>
        </div>
        <div class="bottom-footer">
            © Candy Jazz || 2020
        </div>
    </footer>
    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!--=======================Javascript============================-->
    <script src="assets/plugins/Jquery/jquery.js"></script>
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/cart.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <script src="assets/plugins/sweetAlert/sweetAlert.js"></script>
    <script src="assets/js/session.js"></script>
    <script src="assets/js/wishlist.js"></script>
</body>

</html>