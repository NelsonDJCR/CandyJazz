<?php
include 'connection.php';
session_start();
$session = $_SESSION['id_session'];
$exeCart = $con->query(
    "SELECT A.id_products, A.id_catalog, A.name, A.price, A.size, A.sold, A.img,
    B.id_cart, B.id_products AS cart_product, B.id_user AS cart_user, B.price
    FROM 
    products AS A  INNER JOIN 
    cart AS B 
    WHERE A.id_products = B.id_products AND B.id_user = '$session'"
); 



while ($rowCart = $exeCart->fetch_assoc()) {
    
?>
    <li class="minicart-item">
        <div class="minicart-thumb">
            <a href="product-details.html">
                <img src="data:image/jpg;base64,<?php echo base64_encode($rowCart['img']) ?>" alt="product">
            </a>
        </div>
        <div class="minicart-content">
            <h3 class="product-name">
                <a href="product-details.html"> <?php echo $rowCart['name'] ?> </a>
            </h3>
            <p>
                <span class="cart-quantity">1 <strong>&times;</strong></span>
                <span class="cart-price">$ <?php echo number_format($rowCart['price']) ?></span>
            </p>
        </div>
        <button onclick="removeCart('<?php echo 'cart_product='. $rowCart['cart_product'].'&cart_user= '. $rowCart['cart_user'] ?> ');" class="minicart-remove"><i class="ion-android-close"></i></button>
    </li>
<?php } ?>