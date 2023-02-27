<?php

    define("BASE_URL", "http://localhost/weshop/"); // constanta(nama, nilainya)

    function rupiah($nilai = 0){ //untuk membuat fungsi rupiah
        $string = "Rp." . number_format($nilai);
        return $string;
    }