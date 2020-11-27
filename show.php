<?php
include('connect.php');
?>
<html>
<head>
</head>
<body>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
    </tr>
  </thead>

  <tbody>
<?php
$sql="SELECT * FROM guestbook;"
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
while(mysqli_fetch_array($result)){
?>
    <tr>
      <td><?php echo $result['A'] ;?></td>
      <td> <?php echo $result['B'] ;?>  </td>
      <td> <?php echo $result['C'] ;?>  </td>
    </tr>
<?php
}
}
?>


<tbody>
</table>

</body>
