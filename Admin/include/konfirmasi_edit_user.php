<?php
if (isset($_SESSION['user'])) {
    $id_user = $_SESSION['user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    //get foto
    $sql_f = "SELECT `foto` FROM `user` WHERE `id_user`='$id_user'";
    $query_f = mysqli_query($koneksi, $sql_f);
    while ($data_f = mysqli_fetch_row($query_f)) {
        $foto = $data_f[0];
        //echo $foto;
    }

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto_profile/' . $nama_file;

if (empty($nama_file)) {
        if (empty($password)) {
            $sql = "UPDATE `user` set `nama`='$nama', `email`='$email', `username`='$username', `level`='$level' where `id_user`= '$id_user'";
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=user&notif=editberhasil");
        } else {
            $sql = "UPDATE `user` set `nama`='$nama', `email`='$email', `username`='$username', `password`= MD5('$password'), `level`='$level' where `id_user`= '$id_user'";
            // echo $sql;
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=user&notif=editberhasil");
        }
    } else if (empty($foto)) {
        if (move_uploaded_file($lokasi_file, $direktori)) {
            if (empty($password)) {
                $sql = "UPDATE `user` set `nama`='$nama', `email`='$email', `username`='$username', `level`='$level',`foto`='$nama_file' where `id_user`= '$id_user'";
                mysqli_query($koneksi, $sql);
                header("Location:index.php?include=user&notif=editberhasil");
            } else {
                $sql = "UPDATE `user` set `nama`='$nama', `email`='$email', `username`='$username', `password`= MD5('$password'), `level`='$level',`foto`='$nama_file' where `id_user`= '$id_user'";
                // echo $sql;
                mysqli_query($koneksi, $sql);
                header("Location:index.php?include=user&notif=editberhasil");
            }
        }
    } else if (empty($password)) {
        if (move_uploaded_file($lokasi_file, $direktori)) {
            if (!empty($foto)) {
                unlink("foto_profile/$foto");
            }
            $sql = "UPDATE `user` set `nama`='$nama', `email`='$email', `username`='$username', `level`='$level', `foto`='$nama_file' where `id_user`= '$id_user'";
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=user&notif=editberhasil");
        }
    }
}
