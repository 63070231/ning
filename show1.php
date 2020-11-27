<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'narisara.mysql.database.azure.com', 'narisara@narisara', 'Ning000000', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<br><br>
<div class="container">

<table width="100%" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))

{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><a  class="btn btn-danger" href="delete.php?id=<?php echo $Result['ID'];?>">ลบ</a> <a  class="btn btn-info" href="edit.php?id=<?php echo $Result['ID'];?>">แก้ไข</a></td>

  </tr>
<?php
}
?>
</table>
<br><br>
<center>
<a  class="btn btn-success" href="form.html">เพิ่ม</a>
<?php
mysqli_close($conn);
?>
</div>
</body>
</html>
