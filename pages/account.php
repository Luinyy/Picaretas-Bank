<?php
$accounts = [
    ['number' => '123', 'balance' => 1000, 'overdraft' => 500],
    ['number' => '456', 'balance' => 1500, 'overdraft' => 300]
];

$accountNumber = $_GET['accountNumber'] ?? '';
$account = null;

foreach ($accounts as $acc) {
    if ($acc['number'] === $accountNumber) {
        $account = $acc;
        break;
    }
}

if ($account === null) {
    echo "Conta não encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank - Conta <?= $accountNumber ?></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Picaretas Bank - Conta <?= $accountNumber ?></h1>
        <p>Saldo: <?= $account['balance'] ?></p>
        <p>Limite Cheque Especial: <?= $account['overdraft'] ?></p>
        <ul>
            <li><a href="deposit.php?accountNumber=<?= $accountNumber ?>">Depósito</a></li>
            <li><a href="withdraw.php?accountNumber=<?= $accountNumber ?>">Retirada/Saque</a></li>
            <li><a href="cheque.php?accountNumber=<?= $accountNumber ?>">Desconto de Cheques</a></li>
            <li><a href="payment.php?accountNumber=<?= $accountNumber ?>">Pagamento de Faturas</a></li>
            <li><a href="list.php">Listar Dados das Contas</a></li>
        </ul>
    </div>
</body>
</html>
