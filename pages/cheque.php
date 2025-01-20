<?php
include '../config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank - Desconto de Cheques</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Picaretas Bank - Desconto de Cheques</h1>
        <form action="cheque_process.php" method="post">
            <input type="hidden" name="accountNumber" value="<?= $accountNumber ?>">
            <label for="amount">Valor do Cheque:</label>
            <input type="text" id="amount" name="amount" required>
            <button type="submit">Descontar Cheque</button>
        </form>
        <br>
        <a href="account.php?accountNumber=<?= $accountNumber ?>">Voltar</a>
    </div>
</body>
</html>

