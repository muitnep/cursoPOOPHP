<?php

class Owner {

    private $cpf;
    private $name;
    private $address;

    public function __construct(CPF $cpf, 
    string $name, 
    Address $address) {

        $this->cpf = $cpf;
        $this->validOwnerName = ($name);
        $this->address = $address;
    }

    public function recoverCpf(): string {

        return $this->cpf->recoverNumber();

    }

    public function recoverName(): string {

        return $this->name

    }

    private function validOwnerName(string $ownerName) {

        if(strlen($ownerName) < 5 ) {
            echo " NOME PRECISA TER PELO MENOS 5 CARACTERES."
            exit();
        }

    }

    public function recoverAddress(): string {
        return $this->address;
    }
}


?>