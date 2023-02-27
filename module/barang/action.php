<?php   
    //file action untuk memproses data yg dimasukkan ke form lalu diinsert ke database dan ditampilkan ke list 
    include_once("../../function/helper.php");
    include_once("../../function/koneksi.php");

    $nama_barang = $_POST['nama_barang'];
    $kategori_id = $_POST['kategori_id'];
    $spesifikasi = $_POST['spesifikasi'];
    $status = $_POST['status'];
    $button = $_POST['button'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $nama_file = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"], "../../images/barang/".$nama_file);

    if($button == "Add"){ //jika menambahkan data pertama kali di form
        mysqli_query($koneksi, "INSERT INTO barang (nama_barang, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_barang', '$kategori_id', '$spesifikasi', '$nama_file', '$harga', '$stok', '$status')");
    }
    // else if($button == "Update"){ // jika mengupdate di form
    //     $kategori_id = $_GET['kategori_id'];

    //     mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori',status='$status' WHERE kategori_id='$kategori_id'");
    // }
    header("location: ".BASE_URL."index.php?page=my_profile&module=barang&action=list");