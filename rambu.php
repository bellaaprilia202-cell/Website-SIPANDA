<?php

$nama=$_POST["nama"];
$nomor=$_POST["nomor"];
$tanggal=$_POST["tanggal"];
$ruas=$_POST["ruas"];
$deskrpsi=$_POST["deskripsi"];
$bukti=$_POST["bukti"];
mysqli_sql="INSERT INTO rambu(nama,nomor,tanggal,ruas,deskripi,bukti)
            VALUES ('$nama','$nomor','$tanggal','$ruas','$deskripi','$bukti')
if(mysqli_query($conn, $query_sql)) {
    header("Location:rambu.html";
}else {
echo Pendaftaran Gagal:". mysqli_error($conn)";
}
?>