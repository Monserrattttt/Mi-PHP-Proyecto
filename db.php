<?php
$conn = mysqli_connect("sqlXXX.infinityfree.com", "epiz_XXXXXX", "yourpassword", "epiz_XXXXXX_jerseypro");
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
