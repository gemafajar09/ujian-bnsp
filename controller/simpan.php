<?php
    require "koneksi.php";
    
    $con = Database::connect();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        $simpan = $con->query("INSERT INTO tb_kontak (nama, email, pesan) VALUE ('$nama','$email', '$pesan')");

        echo json_encode($simpan);
    }