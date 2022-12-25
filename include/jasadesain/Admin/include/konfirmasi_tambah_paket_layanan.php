<?php 
    $id_layanan = $_POST['layanan'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];

if(empty($id_layanan)){ 
        header("Location:index.php?include=tambah-produk&notif=tambahkosong&jenis=layanan");
    }else{ 
        $sql = "INSERT INTO `paket` 
        (`nama`,`id_layanan`,`keterangan`,`harga`)
        VALUES ('$nama','$id_layanan','$keterangan','$harga')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id_produk = mysqli_insert_id($koneksi);

        header("Location:index.php?include=paket-layanan&notif=tambahberhasil");
    }

?>