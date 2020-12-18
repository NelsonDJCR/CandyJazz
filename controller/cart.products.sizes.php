<?php 

$exeCart = $con->query(
    "SELECT A.id_products, A.id_catalog, A.name, A.price, A.size, A.sold, A.img,
    B.id_cart,B.size_select, B.id_products  AS cart_product, B.id_user AS cart_user, B.price
    FROM 
    products AS A  INNER JOIN 
    cart AS B 
    WHERE A.id_products = B.id_products AND B.id_user = '$session'"
); 

  
while ($fila = mysqli_fetch_array($exeCart)) {

 echo $revisado= $fila['size_select'] . ", ";

}

// echo 1;
