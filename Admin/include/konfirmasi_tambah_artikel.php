<?php 
    $judul = $_POST['judul'];
    $kategori_artikel = $_POST['kategori_artikel'];
    $isi = $_POST['isi'];
    $lokasi_f = $_FILES['gambar']['tmp_name'];
    $nama_f = $_FILES['gambar']['name'];
    $direktori = 'gmbr/'.$nama_f;

    if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-artikel&notif=tambahkosong&jenis=gambar");
    }else{ 
        $sql = "INSERT INTO `artikel` (`judul`,`isi`,`gambar`,`kategori_artikel`)
        VALUES ('$judul','$isi','$nama_f','$kategori_artikel')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?include=artikel&notif=tambahberhasil");
    }

?>