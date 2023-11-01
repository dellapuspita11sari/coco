<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'coco';

//koneksi databse
$conn = mysqli_connect("localhost", "root", "" ,"coco");

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal Tersambung dengan database.')</script>");
    // die('gagal terhubung dengan database.');
}
//menambah barang baru
if(isset($_POST['addnewbarang'])) {
    $namabarang=$_POST['namabarang'];
    $deskripsi=$_POST['deskripsi'];
    $stok=$_POST['stok'];

    $addtotable = mysqli_query($conn,"insert into stock(namabarang, deskripsi,stock) values('$namabarang','$deskripsi','$stock')");
    if($addtotable){
        // echo "something went wrong " . mysqli_error($conn);
        header('location:dasboard.php');
    } else {
        // echo "<script type='text/javascript'>alert('User added successfully!')</script>";
        echo 'gagal';
        header('location:stok_barang.php');
    }
}
?>
