<?php
$accountNumber = $_POST['accountNumber'];
$recipient = $_POST['recipient'];
$amount = floatval($_POST['amount']);

$accounts = [
    ['number' => '123', 'balance' => 1000, 'overdraft' => 500],
    ['number' => '456', 'balance' => 1500, 'overdraft' => 300]
];

$accountNumber = $_GET['accountNumber'] ?? '';
$account = null;

foreach ($accounts as &$acc) {
    if ($acc['number'] === $accountNumber) {
        if ($amount > 0 && $amount <= ($acc['balance'] + $acc['overdraft'])) {
            
            $acc['balance'] -= $amount;

            $account = $acc;
            break;
        } else {
            echo "Valor de pagamento inválido.";
            exit;
        }
    }
}