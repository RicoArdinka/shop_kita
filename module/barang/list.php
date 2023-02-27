<div id="frame-tambah">
    <a href="<?= BASE_URL."index.php?page=my_profile&module=barang&action=form"; ?>" class="tombol-action">+ Tambah Barang</a>
</div>

<?php
    //akan menampilkan data dimana kategori_id table barang sama dengan kategori_id table kategori sehingga sesuai
    $query = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.kategori_id=kategori.kategori_id ORDER BY nama_barang ASC");

    if(mysqli_num_rows($query) == 0){ // jika tidak ada
        echo "<h3>Belum ada barang pada tabel barang</h3>";
    }else { // jika ada

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>    
                <th class='kiri'>Barang</th>    
                <th class='kiri'>Kategori</th>    
                <th class='kiri'>Harga</th>    
                <th class='tengah'>Status</th>    
                <th class='tengah'>Action</th>    
              </tr>";

        $no=1;
        while($row=mysqli_fetch_assoc($query)){

            echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[nama_barang]</td>
                    <td class='kiri'>$row[kategori]</td>
                    <td class='kiri'>$row[harga]</td>
                    <td class='tengah'>$row[status]</td>
                    <td class='tengah'>
                        <a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=barang&action=form&barang_id=$row[barang_id]'>Edit</a>
                    </td>
                  </tr>";
            $no++;
        }
        
        
        echo "</table>";
    }
?>