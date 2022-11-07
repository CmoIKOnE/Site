<?php
require_once "cnt.php";
$account = $_SESSION['user'];
$desc = 'Пополнение баланса MCSpace.me';
$sum = $_POST['sum'];
$secretKey = '7b2205c066bea03627a7225442d4c004';

$sign = getSignature($account, $desc, $sum, $secretKey);
header('Location: https://unitpay.money/pay/264041-ea448/card?account='.$account.'&sum='.$sum.'&desc=Пополнение%20баланса%20MCSpace.me&signature='.$sign);

?>