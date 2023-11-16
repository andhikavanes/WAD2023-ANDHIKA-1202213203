<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
inclue("$connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    mysqli_query($connect, "DELETE from showroom_mobil WHERE id = $id");
    header("location:home.php");
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if(mysqli_affected_rows($connect)>0){
        echo "<script>alert('DATA BERHASIL DIHAPUS');</script>";
        echo "<meta http-equiv='refresh' content='1 url=home.php'>";
    }

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connect);

?>