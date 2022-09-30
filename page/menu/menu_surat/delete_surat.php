<?php
$id_surat = $_POST['id_surat'];

$query=mysqli_query($koneksi1, "DELETE FROM surat WHERE id_surat='$id_surat'");

    if($query){
        ?>
        <script>alert('Surat Berhasil Dihapus')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=surat'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>