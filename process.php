<?php
 include('connect.php');
 $a=$_POST['a'];
 $b=$_POST['b'];
 $c=$a+$b;
 $sql="INSERT INTO guestbook (A, B, C)
VALUES ('".$a."', '".$b."', '".$c."')";
 $result=mysqli_query($conn,$sql);
 if($result){
   echo "<script>alert('เพิ่มข้อมูลสำเร็จ')<script>";
   echo "<script>window.location='show.php'<script>";
}else{
echo "<script>alert('Error')<script>";
echo "<script>window.location='insert.html'<script>";
}
?>