<?
require_once "cnt.php";

$login = safeGet($_GET, 'login');
$type = safeGet($_GET, 'type');
$amount = safeGet($_GET, 'amount');

if($type == 'rub') $type = 'rub';
else if($type == 'credit') $type = 'credit';
else $type = '';


$query = $pdo->query("SELECT $type FROM users WHERE login='$login'");
$row = $query->fetchAll();

echo $row[0][$type];

?>