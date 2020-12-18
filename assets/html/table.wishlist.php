<?php
session_start();
$id = $_SESSION['id_session'];
include '../../controller/connection.php';

$r = $con->query("SELECT A.id_products, A.img, A.name, A.price FROM products AS A INNER JOIN wishlist AS B WHERE B.id_user = '$id' AND A.id_products = B.id_product ");
while ($row = $r->fetch_assoc()) {
    $data = 'id_products=' . $row['id_products'] . '&id_user=' . $id . '&price=' . $row['price'];
?>
    <tr>
        <td class="pro-thumbnail"><img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>" alt="Product" /></td>
        <td class="pro-title"><a href="#"><?php echo $row['name'] ?></a></td>
        <td class="pro-price"><span>$ <?php echo number_format($row['price']) ?></span></td>
        <td class="pro-quantity"><span class="text-success">In Stock</span></td>
        <td class="pro-remove"><a href="product-details.php?id=<?php echo $row['id_products'] ?>"><i class="fa fa-eye"></i></a></td>
        <td class="pro-remove"><a onclick="addCart('<?php echo $data ?>')"><i class="fa fa-shopping-cart"></i></a></td>
        <td class="pro-remove"><a onclick="removeWishlist('<?php echo $data ?>')"><i class="fa fa-trash-o"></i></a></td>
    </tr>
<?php } ?>