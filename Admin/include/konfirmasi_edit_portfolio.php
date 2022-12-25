<?php
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $judul = $_POST['judul'];
    $id_kategori = $_POST['kategori'];
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = 'gmbr/portfolio/' . $nama_file;

    //get gambar

    $sql_f = "SELECT `gambar` FROM `portfolio` WHERE `id`='$id'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
    $gambar = $data_f[0];
     //echo $gambar;
} 

if(empty($id_kategori)){
    header("Location:index.php?include=edit-portfolio&data=$id&notif=editkosong&jenis=kategori");
}else{
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = 'gmbr/portfolio/' . $nama_file;
    if(move_uploaded_file($lokasi_file,$direktori)){
        if(!empty($gambar)){
            unlink("gmbr/portfolio/$gambar");
        }
    $sql = "UPDATE `portfolio` set 
    `judul`='$judul',`id_kategori`='$id_kategori', `gambar`='$nama_file' WHERE `id`='$id'";
    mysqli_query($koneksi,$sql);

}else{
$sql = "UPDATE `portfolio` set 
`judul`='$judul',`id_kategori`='$id_kategori'
WHERE `id`='$id'";
mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=portfolio&notif=editberhasil");
}
}
?>