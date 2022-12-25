<?php 
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi_f = $_FILES['gambar']['tmp_name'];
    $nama_f = $_FILES['gambar']['name'];
    $direktori = 'gmbr/'.$nama_f;

    if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-layanan&notif=tambahkosong&jenis=gambar");
    }else{ 
        $sql = "INSERT INTO `layanan` (`judul`,`deskripsi`,`gambar`)
        VALUES ('$judul','$deskripsi','$nama_f')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?include=layanan&notif=tambahberhasil");
    }

?>