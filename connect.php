  
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'narisara.mysql.database.azure.com', 'narisara@narisara', 'Ning000000', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
