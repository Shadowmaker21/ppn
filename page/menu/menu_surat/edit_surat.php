<?php
$id_surat = $_POST['id_surat'];
$nama_surat = $_POST['nama_surat'];
$nomor_surat = $_POST['nomor_surat'];
$perihal_surat = $_POST['perihal_surat'];
$imgname=$_FILES['file_surat']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['file_surat']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);


$query=mysqli_query($koneksi1, "UPDATE surat SET nama_surat='$nama_surat',nomor_surat='$nomor_surat',perihal_surat='$perihal_surat',file_surat='$newname' WHERE id_surat='$id_surat'");

    if($query){
        ?>
        <script>alert('Data berhasil Update')</script>";
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