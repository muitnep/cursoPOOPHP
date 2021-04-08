<?php
require_once 'src/Account.php';
require_once 'src/Owner.php';
require_once 'src/CPF.php';
require_once 'src/Address.php'

$address = new Address('Vicente Pires', 
'Vila São José',
'Rua 8',
'4A');

$rodrigo = new Owner(new CPF('654.258.967-99'), 
'Rodrigo Santos', 
$address);

$firstAccount = new Account($rodrigo);
$firstAccount->deposit(5000);
$firstAccount->withdrawMoney(2500);


echo $firstAccount->recoverOwnerName() . PHP_EOL;
echo $firstAccount-.recoverOwnerCpf() . PHP_EOL;
echo $firstAccount->recoverBalance() . PHP_EOL;


?>