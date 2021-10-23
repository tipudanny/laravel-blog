<?php

namespace App\Services\Payment;

class Payment
{
    public $user;

    private $amount = 0;

    public $credential = [];

    public function __construct($credential)
    {
        $this->credential = $credential;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function pay($amount)
    {
        $this->amount =- $amount;
    }
}
