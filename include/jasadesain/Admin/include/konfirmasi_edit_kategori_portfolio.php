<?php 
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $kategori = $_POST['kategori'];
} 

$sql = "UPDATE `kategori` set 
`kategori`='$kategori' WHERE `id`='$id'";
mysqli_query($koneksi,$sql);

header("Location:index.php?include=kategori-portfolio&notif=editberhasil");
?>
