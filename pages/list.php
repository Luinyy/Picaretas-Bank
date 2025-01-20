<?php
include '../config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank - Listar Dados das Contas</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        th {
            background-color: #f2f2f2;
            color: #20de6e;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Picaretas Bank - Listar Dados das Contas</h1>
        <table>
            <thead>
                <tr>
                    <th>Número da Conta</th>
                    <th>Saldo</th>
                    <th>Limite Cheque Especial</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accounts as $acc): ?>
                    <tr>
                        <td><?= $acc['number'] ?></td>
                        <td><?= $acc['balance'] ?></td>
                        <td><?= $acc['overdraft'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>
