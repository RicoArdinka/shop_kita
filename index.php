<?php

    include_once("function/helper.php"); //mengambil file helper 

?>

<!DOCTYPE html>
<html>

    <head>
        <title>weshop | barang-barang elektronik</title>
        <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <div id="container">
            <div id="header">
                <a href="<?= BASE_URL."index.php"; ?>">
                    <img src="<?= BASE_URL."images/logo.png"; ?>"/>
                </a>

                <div id="menu">
                    <div id="user">
                        <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a>
                        <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a>
                    </div>
                    
                    <a href="<?= BASE_URL."index.php?page=keranjang"; ?>"  id="button-keranjang">
                        <img src="<?= BASE_URL."images/cart.png"; ?>"/>
                    </a>
                </div>
            </div>

            <div id="content"></div>
    
            <div id="footer">
                <p>copyright weshop 2023</p>
            </div>
        </div>

    </body>
</html>