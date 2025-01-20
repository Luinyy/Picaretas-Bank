<?php
include '../config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank - Retirada/Saque</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Picaretas Bank - Retirada/Saque</h1>
        <form action="withdraw_process.php" method="post">
            <input type="hidden" name="accountNumber" value="<?= $accountNumber ?>">
            <label for="amount">Valor de Retirada:</label>
            <input type="text" id="amount" name="amount" required>
            <button type="submit">Retirar</button>
        </form>
        <br>
        <a href="account.php?accountNumber=<?= $accountNumber ?>">Voltar</a>
    </div>
</body>
</html>

