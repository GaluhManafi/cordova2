<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $no=$_POST['no'];
 $kelas=$_POST['kelas'];
 $judulbuku=$_POST['judulbuku'];
 $tanggal=$_POST['tanggal'];
 $q=mysqli_query($con,"UPDATE `cordova2` SET `nama`='$nama',`no`='$no',`kelas`='$kelas',`judulbuku`='$judulbuku',`tanggal`='$tanggal'   where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>