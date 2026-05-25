<?php 
if(isset($_GET['menu'])){
  $menu=$_GET['menu'];
}
else{
  $menu="";
}
if($menu=="produk"){
  include "produk.php";
}
else if($menu=="staf"){
  include "staf.php";
}
else if($menu=="edit_produk"){
  include "edit_produk.php";
}

else if($menu=="hapus_produk"){
  include "hapus_produk.php";
}

else if($menu=="tambah_produk"){
  include "tambah_produk.php";
}

else if($menu=="update_produk"){
  include "update_produk.php";
}

else if($menu=="simpan_produk"){
  include "simpan_produk.php";
}

else if($menu=="tambah_staf"){
  include "tambah_staf.php";
}

else if($menu=="edit_staf"){
  include "edit_staf.php";
}

else{
  include "home.php";
}
?>