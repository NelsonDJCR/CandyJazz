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
    <title>Tienda Virtual</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../img/logo/logo.png" type="image/x-icon" />
    <link href="../css/plugins.css" rel="stylesheet">
    <link href="../css/vendor.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
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
                                <a href="../../">
                                    <img src="../img/logo/logo.png" style="width: 90px;" alt="Brand Logo">
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
                                <h1 class="breadcrumb-title">Productos</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <!-- shop main wrapper start -->
                    <div class="col-12">
                        <div class="shop-product-wrapper">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-4 col-md-3 order-2 order-md-1">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a class="active" href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                                <a href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-8 col-md-9 order-2 order-md-2">
                                        <form action="shop.php" method="POST">
                                            <div class="top-bar-right">
                                                <div class="product-short">
                                                    <p>Ordenar: </p>
                                                    <select required id="size" class="nice-select" name="size">
                                                        <option value="0">Talla:</option>
                                                        <option value="">Todas las tallas</option>
                                                        <option value="S">X</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XS">XS</option>
                                                        <option value="XXS">XXS</option>
                                                        <option value="XXXS">XXXS</option>
                                                    </select>
                                                    <p> </p>
                                                    <select required id="price" class="nice-select" name="price">
                                                        <option value="0">Precio:</option>
                                                        <option value="DESC">Precio más Alto</option>
                                                        <option value="ASC">Precio más Bajo</option>
                                                    </select>
                                                    <input id="btn_filter" style="margin-left: 15px; background: white; border: 1px solid #E8E8E8; color:#696867; padding: 5px 10px; cursor: pointer; border-radius: 5px;" type="submit" value="Ordenar">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- shop product top wrap start -->
                            
                            <!-- product item list start -->
                            <div class="shop-product-wrap grid-view row mbn-50" id="products">
                                <?php
                                include "../../controller/shop.order.php";
                                if (isset($_POST['size']) && isset($_POST['price'])) {
                                    $size = $_POST['size'];
                                    $price = $_POST['price'];
                                    $e = $con->query("SELECT A.id_products, A.name AS name_product, A.price, A.size, A.img, B.name AS name_catalog, B.description FROM products AS A INNER JOIN catalogs AS B WHERE A.id_catalog = B.id_catalog AND A.size LIKE '%$size%' ORDER BY A.id_products $price ");
                                } else {
                                    $e = $con->query("SELECT A.id_products, A.name AS name_product, A.price, A.size, A.img, B.name AS name_catalog, B.description  FROM products AS A  INNER JOIN catalogs AS B WHERE A.id_catalog = B.id_catalog");
                                }
                                $dataExits = mysqli_num_rows($e);
                                if ($dataExits == 0) {
                                    echo '<div style="text-align: center; font-size: 2em; margin-top: 50px;">No se encontarron resultados con la busqueda,  Intenta nuevamente </div>';
                                }
                                while ($row = $e->fetch_assoc()) {
                                ?>
                                
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="product-item mb-53">
                                            <div class="product-thumb">
                                                <img description="<?php echo $row['description'] ?>" price="$ <?php echo number_format($row['price']) ?>" size="<?php echo $row['size'] ?>" name="<?php echo $row['name_product'] ?>" class="abrirModal" style="width: 250px; height: 250px; object-fit: cover; cursor:pointer;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>">

                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">
                                                    <a href="product-details.html"><?php echo $row['name_product'] ?></a>
                                                </h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$ <?php echo number_format($row['price']) ?></span>
                                                </div>
                                                <div class="product-action-link">

                                                    <?php
                                                    if (isset($_SESSION['id_session'])) {
                                                        $id_user_ = $_SESSION['id_session'];
                                                        $data = 'id_products=' . $row['id_products'] . '&id_user=' . $id_user_ . '&price=' . $row['price'];
                                                    ?>
                                                        <a onclick="addWishlist('<?php echo $data ?>')" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a onclick="addCart('<?php echo $data ?>')" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    <?php
                                                    } else {
                                                        echo '<a title="Wishlist" data-toggle="tooltip" onclick="noSession();"><i class="ion-android-favorite-outline"></i></a> ';
                                                        echo '<a onclick="noSession()" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>';
                                                    }
                                                    ?>
                                                    <a href="product-details.php?id='<?php echo $row["id_products"] ?>'"> <span data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Second -->
                                        <div class="product-list-item mb-30">
                                            <div class="product-thumb">
                                                <img description="<?php echo $row['description'] ?>" price="$ <?php echo number_format($row['price']) ?>" size="<?php echo $row['size'] ?>" name="<?php echo $row['name_product'] ?>" class="abrirModal" style="width: 250px; height: 250px; object-fit: cover; cursor:pointer;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>">
                                            </div>
                                            <div class="product-content-list">
                                                <h5 class="product-name">
                                                    <a href="product-details.html"><?php echo $row['name_product'] ?></a>
                                                </h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$ <?php echo number_format($row['price']) ?></span>
                                                </div>
                                                <p><?php echo $row['description'] ?></p>

                                                <div class="product-link-2 position-static">
                                                    <?php
                                                    if (isset($_SESSION['id_session'])) {
                                                        $id_user_ = $_SESSION['id_session'];
                                                        $data = 'id_products=' . $row['id_products'] . '&id_user=' . $id_user_ . '&price=' . $row['price'];
                                                    ?>
                                                        <a onclick="addWishlist('<?php echo $data ?>')" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a onclick="addCart('<?php echo $data ?>')" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    <?php
                                                    } else {
                                                        echo '<a title="Wishlist" data-toggle="tooltip" onclick="noSession();"><i class="ion-android-favorite-outline"></i></a> ';
                                                        echo '<a onclick="noSession()" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>';
                                                    }
                                                    ?>
                                                    <a href="product-details.php?id='<?php echo $row["id_products"] ?>'"> <span data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <a href="cart.php"><i class="fa fa-shopping-cart"></i>Ver Carrito</a>
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
    <script src="../js/vendor.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/active.js"></script>
    <script src="../js/session.js"></script>
    <script src="../plugins/sweetAlert/sweetAlert.js"></script>
    <script src="../js/shop.js"></script>
    <!-- <script> $("#products").load("../../controller/shop.products.php"); </script> -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>


</html>