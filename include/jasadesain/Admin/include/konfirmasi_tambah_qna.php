<?php 
    $tanya = $_POST['tanya'];
    $jawab = $_POST['jawab'];

    if(empty($tanya)){
        header("Location:index.php?include=tambah-qna&notif=tambahkosong&jenis=tanya");
    }else{ 
        $sql = "INSERT INTO `qna` (`tanya`,`jawab`)
        VALUES ('$tanya','$jawab')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?include=qna&notif=tambahberhasil");
    }

?>