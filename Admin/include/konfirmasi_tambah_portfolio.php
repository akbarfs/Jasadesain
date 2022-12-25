<?php 
    $id_kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $lokasi_f = $_FILES['gambar']['tmp_name'];
    $nama_f = $_FILES['gambar']['name'];
    $direktori = 'gmbr/portfolio/'.$nama_f;

    if(empty($id_kategori)){ 
        header("Location:index.php?include=tambah-portfolio&notif=tambahkosong&jenis=kategori");
    } else if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-portfolio&notif=tambahkosong&jenis=gambar");
    }else{ 
        $sql = "INSERT INTO `portfolio` (`judul`,`id_kategori`,`gambar`)
        VALUES ('$judul','$id_kategori','$nama_f')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?include=portfolio&notif=tambahberhasil");
    }
?>