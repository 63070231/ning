<html>
<head>
<title>ITF Lab</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'narisara2.mysql.database.azure.com', 'narisara@narisara2', 'Ning0000', 'itfiab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guesbook');
?>
<table width="600" border="1" class="table table-dark table-striped">
  <tr>
  <th width="150"> <div align="center">ชื่อ </div></th>
  <th width="150"> <div align="center">น้ำหนัก </div></th>
  <th width="150"> <div align="center">ส่วนสูง </div></th>
  <th width="150"> <div align="center">bmi </div></th>
  <th width="150"> <div align="center">การจัดการ </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
  <td><?php echo $Result['ชื่อ'];?></div></td>
    <td><?php echo $Result['น้ำหนัก'];?></td>
    <td><?php echo $Result['ส่วนสูง'];?></td>
    <td><?php echo $Result['bmi'];?></td>
    <td><a  class="btn btn-info" href="edit.php?id=<?php echo $Result['ID'];?>">update</a></td>
  </tr>
<?php
}
?>
</table>
<form action = "insert.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
    Height:<br>
    <input type="text" name = "height" id="idHeight" placeholder="Enter Height"> <br>
    Weight:<br>
    <input type="text" name = "Weight" id="idWeight" placeholder="Enter Weight"> <br><br>
    <input type="submit" id="commentBtn">
  </form> 

<?php
mysqli_close($conn);
?>
</body>
</html>