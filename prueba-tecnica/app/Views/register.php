<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Registro</title>
</head>

<body>
    <h1>Registro de Usuario</h1>
    <form action="/user/register" method="post">
        <label for="name">Nombre de Usuario:</label>
        <input type="text" name="username" /><br />

        <label for="email">Correo Electrónico:</label>
        <input type="text" name="email" /><br />

        <label for="password">Contraseña:</label>
        <input type="password" name="password" /><br />

        <label for="password_confirm">Confirmar Contraseña:</label>
        <input type="password" name="password_confirm" /><br />

        <input type="submit" name="submit" value="Registrar" />
    </form>
</body>

</html>