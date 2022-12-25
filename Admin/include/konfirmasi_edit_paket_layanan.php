<?php 
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $nama_paket = $_POST['nama'];
    $id_layanan = $_POST['layanan'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
} 

if(empty($id_layanan)){
    header("Location:index.php?include=edit-paket-layanan&data=$id&notif=editkosong&jenis=layanan");
}else{
$sql = "UPDATE `paket` set 
`nama`='$nama_paket',`id_layanan`='$id_layanan',
`keterangan`='$keterangan',`harga`='$harga' WHERE `id`='$id'";
mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=paket-layanan&notif=editberhasil");
?>
