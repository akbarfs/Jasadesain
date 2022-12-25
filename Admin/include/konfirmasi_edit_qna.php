<?php
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $tanya = $_POST['tanya'];
    $jawab = $_POST['jawab'];
} 

if(empty($tanya)){
    header("Location:index.php?include=edit-qna&notif=editkosong");
}else{
$sql = "UPDATE `qna` set 
`tanya`='$tanya',`jawab`='$jawab'
WHERE `id`='$id'";
mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=qna&notif=editberhasil");
?>