<?php
$nama_cont = $_POST['nama_cont'];
$email_cont = $_POST['email_cont'];
$subject_cont = $_POST['subject_cont'];
$message_cont = nl2br($_POST['message_cont']);

$query=mysqli_query($koneksi1, "INSERT INTO contact VALUES ('','$nama_cont','$email_cont','$subject_cont','$message_cont')");

    if($query){
        ?>
        <script>alert('Terima Kasih Telah Menghubungi Kami, Kami akan memberi Feedback Melalui Email')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=dashboard'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>