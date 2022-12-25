<?php
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = 'gmbr/' . $nama_file;

    //get gambar

    $sql_f = "SELECT `gambar` FROM `layanan` WHERE `id`='$id'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
    $gambar = $data_f[0];
     //echo $gambar;
} 

if(empty($judul)){
    header("Location:index.php?include=edit-layanan&notif=editkosong");
}else{
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = 'gmbr/' . $nama_file;
    if(move_uploaded_file($lokasi_file,$direktori)){
        if(!empty($gambar)){
            unlink("gmbr/$gambar");
        }
    $sql = "UPDATE `layanan` set 
    `judul`='$judul',`deskripsi`='$deskripsi', `gambar`='$nama_file' WHERE `id`='$id'";
    mysqli_query($koneksi,$sql);

}else{
$sql = "UPDATE `layanan` set 
`judul`='$judul',`deskripsi`='$deskripsi'
WHERE `id`='$id'";
mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=layanan&notif=editberhasil");
}
}
?>