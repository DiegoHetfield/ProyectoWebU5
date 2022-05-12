<?php include("./head_foot/header.php") ?>

<div class="login-box">

    <h1>Login</h1>
    <form id="form" action="redireccion.php" method="post">

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" placeholder="Correo..." id="usuario" required>

        <!-- PASSWORD INPUT -->
        <label for="contraseña">Contraseña</label>


        <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña..." required>

        <label for="Spassword">Ver contraseña</label>

        <input type="checkbox" id="Spassword" onclick="mostrar()">

        <p style="color: red; font-size:small;" id="mensaje"></p>

        <input type="button" onclick="validar()" value="Login">

        <a href="registrar.php">Registrate</a>

    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = $_POST["error"];
    if ($error == "si") {
?>
        <script>
            document.getElementById("mensaje").innerHTML = "Contraseña o usuario incorrecto";
        </script>
<?php
    }
}
?>

<script>
    var pass = document.getElementById("contraseña");
    var user = document.getElementById("usuario")
    var mensaje = document.getElementById("mensaje");
    var expreg = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/g;
    pass.onkeyup = function() {
        if (pass.value.match(expreg)) {
            mensaje.innerHTML = "";
        } else {
            mensaje.innerHTML = "La contraseña debe contener al menos 1 mayuscula 1 minuscula 1 numero y ser de 6 caracteres";
        }
    }

    function validar() {
        if (user.value != "") {
            if (pass.value.match(expreg)) {
                document.getElementById('form').submit();
            } else {
                mensaje.classList.add("invalido");
                mensaje.innerHTML = "La contraseña debe contener al menos 1 mayuscula 1 minuscula 1 numero y ser de 6 caracteres";
            }
        } else {
            mensaje.innerHTML = "Llene todos los campos antes de continuar";
        }
    }

    function mostrar() {
        var x = document.getElementById("contraseña");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?php include("./head_foot/footer.php") ?>