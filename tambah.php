<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $telpon = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    $kirim = mysqli_query($db, "INSERT INTO mahasiswa (nama,nim,email,telpon,alamat) VALUES ('$nama','$nim','$email','$telpon','$alamat')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:index.php");
    }else {
        echo "gagal mengirim";
    }
}