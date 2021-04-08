<?php

class Address {

    private $city;
    private $district;
    private $street;
    private $number;

    public function __construct(string $city, 
    string $district, 
    string $street, 
    string $number) 
    {
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
    }

    public function recoverCity(): string {
        return $this->city;
    }

    public function recoverDistrict(): string {
        return $this->district;
    }

    public function recoverStreet(): string {
        return $this->street;
    }

    public function recoverNumber(): {
        return $this->number;
    }
}

?>