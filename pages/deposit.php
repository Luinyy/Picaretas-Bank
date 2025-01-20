<?php
include '../config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank - Depósito</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Picaretas Bank - Depósito</h1>
        <form action="deposit_process.php" method="post">
            <input type="hidden" name="accountNumber" value="<?= $accountNumber ?>">
            <label for="amount">Valor do Depósito:</label>
            <input type="text" id="amount" name="amount" required>
            <button type="submit">Depositar</button>
        </form>
    </div>
</body>
</html>
