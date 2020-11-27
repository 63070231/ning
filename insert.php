<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'narisara2.mysql.database.azure.com', 'narisara@narisara2', 'Ning0000', 'itfiab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id = $_POST['id'];
$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $_POST['weight'] / (($_POST['height']/100)*2)
$sql = "INSERT INTO guesbook (name, height, weight,bmi) VALUES ('$name', '$height', '$weight','$bmi')";


if (mysqli_query($conn, $sql)) {
     echo "<script>alert('New record created successfully')</script>";
      echo "<script>window.location='show.php'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
