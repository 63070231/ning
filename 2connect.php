<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'narisara2.mysql.database.azure.com', 'narisara@narisara2', 'Ning0000', 'ITFIab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
