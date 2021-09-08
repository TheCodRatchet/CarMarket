<?php

class Buyer
{
    private int $wallet;

    public function __construct(int $wallet)
    {
        $this->wallet = $wallet;
    }

    public function getWallet(): int
    {
        return $this->wallet;
    }

    public function setWallet($amount)
    {
        $this->wallet = $amount;
    }
}