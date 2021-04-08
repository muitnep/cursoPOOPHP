<?php

class Account {

    private $owner;
    private $balance;
    private static $numberOfAccounts = 0;

    public function __construct(Owner $owner) {

        $this->owner = $owner;
        $this->balance = 0;

        self::$numberOfAccounts++;
    }

    public function __destruct() {

        self::$numberOfAccounts--;
    }

    public function withdrawMoney(float $amountToWithdraw): void {
        
        if($amountToWithdraw > $this->balance) {
            echo "SALDO INDISPONÍVEL";
            return;
        }

        $this->balance -= $amountToWithdraw;
    }

    public function deposit(float $amountToDeposit): void {

        if($amountToDeposit < 0) {
            echo "VALOR PRECISA SER POSITIVO";
            return;
        }

        $this->balance += $amountToDeposit;
    }

    public function transfer(float $amountToTransfer, Account $accountDestination): void {

        if($amountToTransfer > $this->balance){
            echo "SALDO INDISPONÍVEL"
            return;
        }

        $this->withdrawMoney($amountToTransfer);
        $accountDestination->deposit($amountToTransfer);
    }

    public function recoverBalance(): float {

        return $this->balance;

    }

    public function recoverOwnerName(): string {

        return $this->owner->recoverName();
    }

    public function recoverOwnerCpf(): string {

        return $this->owner->recoverCpf();
    }

    public static function recoverNumberOfAccounts(): int {

        return self::$numberOfAccounts;
    }

}







?>