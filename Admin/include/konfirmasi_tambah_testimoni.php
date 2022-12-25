<?php 
    $nama_tester = $_POST['nama'];
    $testimoni = $_POST['testimoni'];
    $lokasi_f = $_FILES['gambar']['tmp_name'];
    $nama_f = $_FILES['gambar']['name'];
    $direktori = 'gmbr/'.$nama_f;

    if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-testimoni&notif=tambahkosong&jenis=gambar");
    }else{ 
        $sql = "INSERT INTO `testimoni` (`nama`,`testimoni`,`gambar`)
        VALUES ('$nama_tester','$testimoni','$nama_f')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?include=testimoni&notif=tambahberhasil");
    }

?>