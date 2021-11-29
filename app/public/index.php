<?php
$host = 'mysql';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<h1><?php echo "Connected to MySQL successfully!"; ?></h1>
<button id="button" class="goByUrl"">Страница работы с таблицами</button>
</body>
<script>
    let button = document.getElementById("button");
    button.onclick = function () {
        window.location.assign("http://localhost:8080/work-with-db/")
    }
</script>
</html>
