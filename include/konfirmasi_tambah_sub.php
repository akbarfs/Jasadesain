<?php 
    $email = $_POST['EMAIL'];

if(empty($email)){ 
        header("Location:index.php?#&notif=tambahkosong&jenis=email");
    }else{ 
        $sql = "INSERT INTO `sub` 
        (`email`)
        VALUES ('$email')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?#&notif=tambahberhasil");
    }

?>