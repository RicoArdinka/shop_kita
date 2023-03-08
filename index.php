<?php

    session_start();

    include_once("function/helper.php"); //mengambil file helper 
    include_once("function/koneksi.php");
    $page = isset($_GET['page']) ? $_GET['page'] : false; //jika get dg nilai page ada , maka dimasukkan ke variable page
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false; // untuk menampilkan list berdasar id yg dipilih user

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
    $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
    $keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : false;
    $totalBarang = count_($keranjang);

?>

<!DOCTYPE html>
<html>

    <head>
        <title>weshop | barang-barang elektronik</title>
        <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo BASE_URL."css/banner.css"; ?>" type="text/css" rel="stylesheet" />

        <script src="<?php echo BASE_URL."js/jquery-3.1.1.min.js"; ?>"></script>
        <script src="<?php echo BASE_URL."js/Slides-SlidesJS-3/source/jquery.slides.min.js"; ?>"></script>

        <script>
         $(function() {
            $('#slides').slidesjs({
               height: 350,
               play: { auto: true,
                       interval: 3000
                     },
               navigation: false
            });
        });
        </script>
    </head>

    <body>
        <div id="container">
            <div id="header">
                <a href="<?= BASE_URL."index.php"; ?>">
                    <img src="<?= BASE_URL."images/logo.png"; ?>"/>
                </a>

                <div id="menu">
                    <div id="user">
                        <?php
                            if($user_id){ //jika udah login 
                                echo "Hi <b>$nama</b>, 
                                      <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>
                                      <a href='".BASE_URL."logout.php'>Logout</a>";
                            }else{   // jika belum login
                                echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
                                      <a href='".BASE_URL."index.php?page=register'>Register</a>";
                            }
                        ?>
                    </div>
                    
                    <a href="<?= BASE_URL."index.php?page=keranjang"; ?>"  id="button-keranjang">
                        <img src="<?= BASE_URL."images/cart.png"; ?>"/>
                        <?php
                            if($totalBarang != 0 ){
                                echo "<span class='total-barang'>$totalBarang</span>";
                            }
                        ?>
                    </a>
                </div>
            </div>

            <div id="content">
                <?php
                    $filename = "$page.php";
                    
                    if(file_exists($filename)){ //apakah file didalam variable filename ada?
                        include_once($filename);
                    }else{
                        include_once("main.php");
                    }
                ?>
            </div>
    
            <div id="footer">
                <p>copyright weshop 2023</p>
            </div>
        </div>

    </body>
</html>