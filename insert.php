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
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
|   <a href="https://wab-narisara.azurewebsites.net/show.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Show Table</a>
</body>
</html>