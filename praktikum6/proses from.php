<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tmp_lahir = $_POST['tmp_lahir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_kartu_id = $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jk;// 3
   $ar_data[]=$_tmp_lahir;
   $ar_data[]=$_tgl_lahir;
   $ar_data[]=$_email; // ? 7
   $ar_data[]=$_kartu_id; // ? 7<?php 
   require_once 'dbkoneksi.php';
   ?>
   <?php 
      $_kode = $_POST['kode'];
      $_nama = $_POST['nama'];
      $_harga_beli = $_POST['harga_beli'];
      $_stok = $_POST['stok'];
      $_min_stok = $_POST['min_stok'];
      $_jenis_proses_id = $_POST['jenis_proses_id'];
   
      $_produk = $_POST['produk'];
   
      // array data
      $ar_data[]=$_kode; // ? 1
      $ar_data[]=$_nama; // ? 2
      $ar_data[]=$_harga_beli;// 3
      $ar_data[]=$_stok;
      $ar_data[]=$_min_stok;
      $ar_data[]=$_jenis_produk_id; // ? 7
   
      if($_proses == "Simpan"){
       // data baru
       $sql = "INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,
       min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
      }else if($_proses == "Update"){
       $ar_data[]=$_POST['idedit'];// ? 8
       $sql = "UPDATE produk SET kode=?,nama=?,harga_beli=?,harga_jual=?,
       stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
      }
      if(isset($sql)){
       $st = $dbh->prepare($sql);
       $st->execute($ar_data);
      }
   
      header('location:list_produk.php');
   ?>

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,
    email,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "edit"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,
    tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php');
?>