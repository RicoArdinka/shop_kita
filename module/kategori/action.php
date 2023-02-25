<?php   
    //file action untuk memproses data yg dimasukkan ke form lalu diinsert ke database dan ditampilkan ke list 
    include_once("../../function/helper.php");
    include_once("../../function/koneksi.php");

    $kategori = $_POST['kategori'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    if($button == "Add"){ //jika menambahkan data pertama kali di form
        mysqli_query($koneksi, "INSERT INTO kategori (kategori, status) VALUES ('$kategori', '$status')");
    } else if($button == "Update"){ // jika mengupdate di form
        $kategori_id = $_GET['kategori_id'];

        mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori',status='$status' WHERE kategori_id='$kategori_id'");
    }
    header("location: ".BASE_URL."index.php?page=my_profile&module=kategori&action=list");