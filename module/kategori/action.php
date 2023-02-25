<?php   
    //file action untuk memproses data yg dimasukkan ke form lalu diinsert ke database dan ditampilkan ke list 
    include_once("../../function/helper.php");
    include_once("../../function/koneksi.php");

    $kategori = $_POST['kategori'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    mysqli_query($koneksi, "INSERT INTO kategori (kategori, status) VALUES ('$kategori', '$status')");

    header("location: ".BASE_URL."index.php?page=my_profile&module=kategori&action=list");