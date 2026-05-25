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

else if($menu=="transaksimasuk"){
  include "produk_masuk.php";
}

else if($menu=="hapuskeranjang"){
  include "hapus_keranjang.php";
}

else if($menu=="simpan_transaksi"){
  include "simpan_transaksi.php";
}

else if($menu=="laporan_pembelian"){
  include "laporan_pembelian.php";
  include "tampil_grafik_bulanan.php";
}

else{
  include "home.php";
}
?>