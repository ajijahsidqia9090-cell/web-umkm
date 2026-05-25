<?php


if(isset($_GET['id'])){
    unset($_SESSION['cart'][$_GET['id']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

if(isset($_GET['clear'])){
    unset($_SESSION['cart']);
}

header("Location:index.php?menu=transaksimasuk");
exit;
?>