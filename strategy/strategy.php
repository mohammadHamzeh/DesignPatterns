<?php

interface Pay
{
    public function pay($amount):string;
}

class Mellat implements Pay
{
    public function pay($amount):string
    {
        return 'Pay from mellat';
    }
}

class Saman implements Pay
{
    public function pay($amount):string
    {
        return 'Pay form saman';
    }
}

class Payment
{
    /**
     * @var Pay
     */
    private $pay;

    /**
     * Payment constructor.
     */
    public function __construct(Pay $pay)
    {
        $this->pay = $pay;
    }

    public function pay($amount):string
    {
        return $this->pay->pay($amount);
    }
}

$payment = new Payment(new Mellat());
echo $payment->pay('10000').PHP_EOL;