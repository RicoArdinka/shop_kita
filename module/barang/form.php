<?php
    //jika barang id ada/ atau kondisi ketika mau update
    $barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;

    // $barang = "";
    $status = "";
    $button = "Add";

    // if($barang_id){ //jika barang ada maka ambil data dari database 
    //     $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id'");
    //     $row = mysqli_fetch_assoc($query);

    //     $barang = $row['barang'];
    //     $status = $row['status'];
    //     $button = "Update";
        
    // }
?>
<form action="<?php echo BASE_URL."module/barang/action.php?barang_id=$barang_id"; ?>" method="POST">

    <div class="element-form">
        <label>Kategori</label>
        <span>
            <select name="kategori_id">
                <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");
                    while($row = mysqli_fetch_assoc($query)){
                        echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
                    }
                ?>
            </select>
        </span>
    </div>

    <div class="element-form">
        <label>Status</label>
        <span>
            <input type="radio" name="status" value="on" <?php if($status == "on"){ echo "checked='true'" ;} ?>/> On
            <input type="radio" name="status" value="off" <?php if($status == "off"){ echo "checked='true'" ;} ?>/> Off
        </span>
    </div>

    <div class="element-form">
        <span><input type="submit" name="button" value="<?php echo $button; ?>" /></span>
    </div>


</form>