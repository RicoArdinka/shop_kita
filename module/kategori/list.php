<div id="frame-tambah">
    <a href="<?= BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action">+ Tambah Kategori</a>
</div>

<?php

    $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");

    if(mysqli_num_rows($queryKategori) == 0){ // jika tidak ada
        echo "<h3>Belum ada kategori pada tabel kategori</h3>";
    }else { // jika ada

        echo "<table class='table-list'>";

        echo "<tr>
                <th>No</th>    
                <th>Kategori</th>    
                <th>Status</th>    
                <th>Action</th>    
              </tr>";

        $no=1;
        while($row=mysqli_fetch_assoc($queryKategori)){

            echo "<tr>
                    <td>$no</td>
                    <td>$row[kategori]</td>
                    <td>$row[status]</td>
                    <td>
                        <a href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
                    </td>
                  </tr>";
            $no++;
        }
        
        
        echo "</table>";
    }
?>