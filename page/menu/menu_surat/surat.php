    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Surat</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Tambah User
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">

                <thead>
                        <th>No</th>
			                  <th>Nama Surat</th>
                        <th>Nomor Surat</th>
                        <th>Perihal Surat</th>
                        <th>File Surat</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT id_surat,nama_surat,nomor_surat,perihal_surat,file_surat FROM surat");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nama_surat']; ?></td>
                        <td><?php echo $row['nomor_surat']; ?></td>
                        <td><?php echo $row['perihal_surat']; ?></td>
                        <td><?php if($row['file_surat']!="") { ?><a href='../files/<?php echo $row['file_surat'] ?>' target='_blank'><i class="fa fa-file"></i><?php echo $row['file_surat'] ?> </a><?php }?></td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id_surat'] ?>">Edit</a></button>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete<?php echo $row['id_surat'] ?>">Delete</a></button>
                        </td>


                      </tr>

                      <!-- Modal form Tambah User -->
    <div class="modal fade" id="modal-edit<?php echo $row['id_surat'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Pengguna</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=edit_surat" enctype="multipart/form-data">
                <div class="card-body">
                    
                  <div class="form-group">
                    <input type="hidden" name="id_surat" value="<?php echo $row['id_surat'] ?>">
                    <label for="exampleInputEmail1">Nama Surat</label>
                    <input type="text" class="form-control" name="nama_surat" placeholder="Nama surat" value="<?php echo $row['nama_surat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Surat</label>
                    <input type="text" class="form-control" name="nomor_surat" placeholder="nomor_surat" value="<?php echo $row['nomor_surat'] ?>">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Perihal Surat</label>
                    <textarea id="inputMessage" class="form-control" rows="4" name="perihal_surat" value="<?php echo $row['perihal_surat'] ?>"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Lampiran</label>
                      <div>
                        <input type="file" name="file_surat" class="form-control" value="<?php echo $row['file_surat'] ?>">
                      </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                            <!-- Modal form Hapus User -->
    <div class="modal fade" id="modal-delete<?php echo $row['id_surat'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Pengguna</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=delete_surat" enctype="multipart/form-data">
                <div class="card-body">


                <div class="form-group">
                    <input type="hidden" name="id_surat" value="<?php echo $row['id_surat'] ?>">
                    <label for="exampleInputEmail1">Nama User </label>
                    <input type="text" class="form-control" name="nama_surat" placeholder="Nama surat" value="<?php echo $row['nama_surat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="nomor_surat" placeholder="nomor_surat" value="<?php echo $row['nomor_surat'] ?>">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Perihal Surat</label>
                    <textarea id="inputMessage" class="form-control" rows="4" name="perihal_surat" value="<?php echo $row['perihal_surat'] ?>"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Lampiran</label>
                      <div>
                        <input type="file" name="file_surat" class="form-control" value="<?php echo $row['file_surat'] ?>">
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Delete</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


                          <?php } ?>
                    </tbody>
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


    <!-- Modal form Tambah User -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Surat Baru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create_surat" enctype="multipart/form-data">
                <div class="card-body">
                <?php
      $auto = "SELECT COUNT(id_surat) AS max_code FROM surat";
      $hasil = mysqli_query($koneksi1,$auto);
      $data = mysqli_fetch_array($hasil);

      $max_code = $data['max_code'];

      $nourut = (int) substr($max_code, 0,3);
      $nourut++;
                              //035/surat.03/II/2022
      $kodejadi = sprintf("%03s" , $nourut);
       
      ?>


      <?php
      $auto1 = "SELECT COUNT(id_surat) AS max_code1 FROM surat";
      $hasil1 = mysqli_query($koneksi1,$auto1);
      $data1 = mysqli_fetch_array($hasil1);
                        
      $max_code1 = $data1['max_code1'];
                        
      $nourut1 = (int) substr($max_code1, 0,3);
      $nourut1++;
                              //035/SK.03/II/2022
      $char1 = 'SURAT';
      
      $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
      $bln = $array_bln[date('n')];
      $thn = gmdate("Y");
      $kodejadi1 = sprintf("%03s" , $nourut1) .'/'.$char1."/".$bln."/".$thn ;
       
      ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Surat </label>
                    <input type="text" class="form-control" name="nama_surat" placeholder="Nama surat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Surat</label>
                    <input type="text" class="form-control" name="nomor_surat" placeholder="nomor_surat" value="<?php echo $kodejadi1 ?>">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Perihal Surat</label>
                    <textarea id="inputMessage" class="form-control" rows="4" name="perihal_surat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Lampiran</label>
                      <div>
                        <input type="file" name="file_surat" class="form-control">
                      </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->