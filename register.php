<?php
require('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";
    if (mysqli_query($conn, $query)) {
        echo "Usuario registrado. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<?php include('includes/header.php'); ?>
<h2>Registrar usuario</h2>
<form method="post">
    Email: <input type="email" name="email" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <input type="submit" value="Registrar">
</form>
<?php include('includes/footer.php'); ?>
