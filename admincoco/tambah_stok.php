<?php
include "include/header.php";
?>

  <!-- Navbar -->
  <?php
include "include/navbar.php";
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
include "include/sidebar.php";
?>
<?php
if (isset($_POST['addnewbarang'])) {
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    
    // SQL query to insert user data into the users table 
    $query = "INSERT INTO users(namabarang, deskripsi, stok) VALUES('{$namabarang}','{$deskripsi}','{$stok}')";
    $add_stok = mysqli_query($conn, $query);

// displaying proper message for the user to see whether the query executed perfectly or not 
    if (!$add_) {
        echo "something went wrong " . mysqli_error($conn);
    } else {
        echo "<script type='text/javascript'>alert('User added successfully!')</script>";
    }
}
?>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
          <input type="text" name="nama_brg" placeholder="nama barang" class="form-control"><br>
          <input type="text" name="deskripsi" placeholder="deskripsi barang" class="form-control"><br>
          <input type="number" name="stok" placeholder="stok barang" class="form-control"><br>
          <button type="submit" class="btn btn-primary" name="addnewbarang">submit</button>
        </div>
        </form>
        
      </div>
    </div>
  </div>
<!-- a BACK button to go to the home page -->

<!-- <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back 
</a>
<div> -->
<!-- Footer -->
<?php 
include "include/footer.php";
?>