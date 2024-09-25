<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="verifica_login.php" method="GET">

        <label for="nome">Login(e-mail):</label><br>
        <input type="text" id="login" name="login" placeholder="Login(e-mail)" required><br><br>

        <label for="email">Senha:</label><br>
        <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>