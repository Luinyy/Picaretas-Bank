<?php
include '../config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank - Pagamento de Faturas</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Picaretas Bank - Pagamento de Faturas</h1>
        <form action="payment_process.php" method="post">
            <input type="hidden" name="accountNumber" value="<?= $accountNumber ?>">
            <label for="recipient">Recebedor da Fatura:</label>
            <input type="text" id="recipient" name="recipient" required>
            <label for="amount">Valor da Fatura:</label>
            <input type="text" id="amount" name="amount" required>
            <button type="submit">Pagar Fatura</button>
        </form>
        <br>
        <a href="account.php?accountNumber=<?= $accountNumber ?>">Voltar</a>
    </div>
</body>
</html>

