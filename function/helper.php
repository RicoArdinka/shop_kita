<?php

    define("BASE_URL", "http://localhost/weshop/"); // constanta(nama, nilainya)

    function rupiah($nilai = 0){ //untuk membuat fungsi rupiah
        $string = "Rp." . number_format($nilai);
        return $string;
    }

    function kategori($kategori_id = false){
        global $koneksi;

        $string = "<div id='menu-kategori'>";

            $string .= "<ul>";

                $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");

                while($row=mysqli_fetch_assoc($query)){
                    if($kategori_id == $row['kategori_id']){
                        $string .= "<li><a href='".BASE_URL."index.php?kategori_id=$row[kategori_id]' class='active'>$row[kategori]</a></li>";
                    }else {
                        $string .= "<li><a href='".BASE_URL."index.php?kategori_id=$row[kategori_id]'>$row[kategori]</a></li>";
                    }
                }
            $string .= "</ul>";
        $string .= "</div>";

        return $string;
    }

    //function count untuk versi 8
    function count_($array) {
        return is_array($array) ? count($array) : 0;
    }