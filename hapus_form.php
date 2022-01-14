<?php
    include "koneksi.php";
    if(isset($_GET['id'])){
        $nomor_id = $_GET['id'];
    }
    else{
        die ("Error No Id selected");
    }

    //proses delete barang
    if(!empty($nomor_id)){
        $query = "DELETE FROM perpustakaan WHERE nomor_id='$nomor_id'";
        $sql = mysqli_query($conn, $query);
            // kondisi jika berhasil terhapus
            if($sql){
                header("location:index.php");
            }
            else{
                echo "<h2> Barang Gagal dihapus </h2>";
            }
    }
    else{
        die ("Access Denied");
    }

?>