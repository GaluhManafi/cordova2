<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $no=$_POST['no'];
 $kelas=$_POST['kelas'];
 $judulbuku=$_POST['judulbuku'];
 $tanggal=$_POST['tanggal'];
 $q=mysqli_query($con,"INSERT INTO `cordova2` (`nama`,`no`,`kelas`,`judulbuku`,`tanggal`) VALUES ('$nama','$no','$kelas','$judulbuku','$tanggal')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>