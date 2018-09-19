<?php
$mysqli = mysqli_connect("127.0.0.1", "root", "", "web");
$res = mysqli_query($mysqli, "SELECT 'ola_mundo' AS ola_mundo FROM teste");
$row = mysqli_fetch_assoc($res);
echo $row['ola_mundo'];
?>
