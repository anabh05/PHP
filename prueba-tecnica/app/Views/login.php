<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Inicio de Usuario</h1>
    <form action="/user/login" method="get">
        <label for="name">Nombre de Usuario:</label>
        <input type="text" name="username" /><br />

        <label for="email">Correo Electrónico:</label>
        <input type="text" name="email" /><br />

        <label for="password">Contraseña:</label>
        <input type="password" name="password" /><br />

        <input type="submit" name="submit" value="Entrar" />
    </form>
</body>

</html>