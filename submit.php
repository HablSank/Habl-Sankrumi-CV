<?php
include 'config.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$sql = "INSERT INTO users (name, email, message) VALUE ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil Disimpan. :)";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
