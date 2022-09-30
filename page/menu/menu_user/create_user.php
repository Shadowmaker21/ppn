<?php
$username = $_POST['username'];
$nama_user = $_POST['nama_user'];
$pass_user = md5($_POST['pass_user']);
$level = $_POST['level'];

$query=mysqli_query($koneksi1, "INSERT INTO user VALUES ('','$username','$nama_user','$pass_user','$level')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=user'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>