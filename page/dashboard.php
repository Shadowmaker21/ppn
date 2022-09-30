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
    
  <h5 class="mb-2">Card with Image Overlay</h5>
    <div class="card card-success">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-2 bg-gradient-dark">
              <img class="card-img-top" src="../assets/dist/img/photo1.png" alt="Dist Photo 1">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h5 class="card-title text-primary text-white">Card Title</h5>
                <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                <a href="#" class="text-white">Last update 2 mins ago</a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top" src="../assets/dist/img/photo2.png" alt="Dist Photo 2">
              <div class="card-img-overlay d-flex flex-column justify-content-center">
                <h5 class="card-title text-white mt-5 pt-2">Card Title</h5>
                <p class="card-text pb-2 pt-1 text-white">
                  Lorem ipsum dolor sit amet, <br>
                  consectetur adipisicing elit <br>
                  sed do eiusmod tempor.
                </p>
                <a href="#" class="text-white">Last update 15 hours ago</a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top" src="../assets/dist/img/photo3.jpg" alt="Dist Photo 3">
              <div class="card-img-overlay">
                <h5 class="card-title text-primary">Card Title</h5>
                <p class="card-text pb-1 pt-1 text-white">
                  Lorem ipsum dolor <br>
                  sit amet, consectetur <br>
                  adipisicing elit sed <br>
                  do eiusmod tempor. </p>
                <a href="#" class="text-primary">Last update 3 days ago</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Default box -->
    <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>PPNPN<strong>WEB</strong></h2>
              <p class="lead mb-5">Jalan Taman Suropati No.2 Jakarta 10310<br>
                Phone: 021 3193 6207/ 021 3145 374
              </p>
            </div>
          </div>
          <div class="col-7">
          <form role="form" method="POST" action="index.php?page=create_contact" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" name="nama_cont" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" name="email_cont"class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" id="inputSubject" name="subject_cont"class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4" name="message_cont"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
            </div>
            </form>
          </div>
        </div>
      </div>


<!-- /.content -->
  </div><!--/. container-fluid -->
</section>
<!-- /.content -->