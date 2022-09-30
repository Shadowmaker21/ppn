<?php
$id_user = $_POST['id_contact'];

$query=mysqli_query($koneksi1, "DELETE FROM contact WHERE id_contact='$id_user'");

    if($query){
        ?>
        <script>alert('Data Berhasil Dihapus, Terimakasih')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=contus'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>