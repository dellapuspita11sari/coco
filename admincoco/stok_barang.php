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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data barang</li>
            </ol>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>

    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card card-primary card-outline">
              <!---<div class="card-header">

              </div>
              
              </.card-header -->
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                   tambah barang
                  </button>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">nama barang</th>
                    <th scope="col">kode barang</th>
                    <th scope="col"> harga</th>
                    <th scope="col"> stok</th>
                    <th scope="col"> CRUD Operations</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>indomie
                    </td>
                    <td>123</td>
                    <td>Rp. 3000</td>
                    <td>10 dus </td>
                    <td class="project-actions text-center">
                              <a class="btn btn-primary btn-sm" href="tambah_stok?id.php=<?php echo $d['user_id'] ?>">
                                  <i class="fas fa-folder">
                                  </i>
                                  View
                              </a>
                              <a class="btn btn-info btn-sm" href="edit_stok.php?id=<?php echo $d['user_id'] ?>">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <a class="btn btn-danger btn-sm" href="user_hapusAct.php?id=<?php echo $d['user_id'] ?>">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </a>
                            </td>
                  </tr>

                  </tbody>


                  <tfoot>
                  <!-- <tr>
                  <th>No</th>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Penulis</th>
                    <th>Action</th>
                  </tr> -->
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

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
          <input type="text" name="namabarang" placeholder="nama barang" class="form-control"><br>
          <input type="text" name="deskripsi" placeholder="deskripsi barang" class="form-control"><br>
          <input type="number" name="stok" placeholder="stok barang" class="form-control"><br>
          <button type="submit" class="btn btn-primary" name="addnewbarang">submit</button>
        </div>
        </form>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>

  <?php
include "include/footer.php";
?>