<?php
include 'connection.php';
session_start();
$session = $_SESSION['id_session'];
$exeCart = $con->query(
    "SELECT A.id_products, A.id_catalog, A.name, A.price, A.size, A.sold, A.img,
    B.id_cart, B.id_products AS cart_product, A.img , B.id_user AS cart_user, B.price, B.size_select
    FROM 
    products AS A  INNER JOIN 
    cart AS B 
    WHERE A.id_products = B.id_products AND B.id_user = '$session'"
);

$dataExits = mysqli_num_rows($exeCart);

if ($dataExits == 0) {
    echo "Sin datos";

?>

    <tr>
        <td colspan="5" style="height: 150px;">No has agregado nungun producto al carrito <a style="color:lightseagreen;" href="shop.php">Ir a comprar</a></td>
    </tr>

<?php
}


while ($rowCart = $exeCart->fetch_assoc()) {

    $data = "cart_product=" . $rowCart["cart_product"] . "&cart_user= " . $rowCart["cart_user"];
?>
    <tr>
        <td class="pro-thumbnail"><a><img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($rowCart['img']) ?>" alt="Product" /></a></td>
        <td class="pro-title"><?php echo $rowCart['name'] . "<br> Tallas disponibles: <b style='color:green'>" . $rowCart['size'] . "</b>" ?></td>
        <td class="pro-price"><span>$ <?php echo number_format($rowCart['price']) ?></span></td>

        <td class="pro-subtotal">
            <input product="<?php echo  $rowCart['id_products']?>" class="in" type="text" style="width: 40px; text-align: center;" value="<?php echo  $rowCart['size_select']?>" placeholder="Talla" required>
            <br>
        </td>
        <td>
            <button onclick="removeCart('<?php echo $data ?>');" class="minicart-remove"><a><i class="fa fa-trash-o"></i></a></button>
        </td>
        <!-- <td onclick="removeCart('<?php  ?> ');" style="cursor: pointer;" ><a><i class="fa fa-trash-o"></i></a></td> -->
    </tr>

<?php
}

?>
