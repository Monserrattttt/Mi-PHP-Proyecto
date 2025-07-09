<?php
session_start();
require('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["email"] = $email;
        header("Location: index.php");
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>

<?php include('includes/header.php'); ?>
<h2>Iniciar sesión</h2>
<form method="post">
    Email: <input type="email" name="email" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <input type="submit" value="Ingresar">
</form>
<?php include('includes/footer.php'); ?>
