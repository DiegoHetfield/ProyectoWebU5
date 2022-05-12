<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "proyectowebu5";

$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
if (!$db) {
    die("La conexión falló: " . mysqli_connect_error());
} else {
    mysqli_query($db, "SET NAMES 'UTF8'");
}

$sql = "SELECT * FROM usuarios WHERE CORREO='$usuario' AND CONTRASEÑA='$contraseña';";
$resultado = mysqli_query($db, $sql);
$fila = mysqli_fetch_assoc($resultado);
mysqli_close($db);

if ($fila != null) {
    session_start();
    $rol = $fila['rol'];
    $_SESSION["usuario"] = $fila['nombre'];
    if ($rol == 'lector') {
        header("location:lector.php");
    } elseif ($rol == 'escritor') {
        header("location:escritor.php");
    } else {
?>
        <form id="myForm" action="login.php" method="post">
            <?php
            echo '<input type="hidden" name="error" value="si">';
            ?>
        </form>
        <script type="text/javascript">
            document.getElementById('myForm').submit();
        </script>
    <?php
    }
} else {
    ?>
    <form id="myForm" action="login.php" method="post">
        <?php
        echo '<input type="hidden" name="error" value="si">';
        ?>
    </form>
    <script type="text/javascript">
        document.getElementById('myForm').submit();
    </script>
<?php
}
?>