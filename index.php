<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
    <img class="logo" src="images/logo.png" alt="Logo do Picaretas Bank">
        <h1>Picaretas Bank</h1>
        <form action="pages/account.php" method="get">
            <label for="accountNumber">Número da Conta:</label>
            <input type="text" id="accountNumber" name="accountNumber" required>
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>
