<?php

class Payment
{
    private $Order_idOrder;
private $method_payment;
private $total_payment;

    public function __construct(Order $Order_idOrder, $method_payment, $total_payment)
    {
        $this->Order_idOrder = $Order_idOrder;
        $this->method_payment = $method_payment;
        $this->total_payment = $total_payment;
    }


    public function getOrderIdOrder()
    {
        return $this->Order_idOrder;
    }

    /**
     * @return mixed
     */
    public function getMethodPayment()
    {
        return $this->method_payment;
    }

    /**
     * @return mixed
     */
    public function getTotalPayment()
    {
        return $this->total_payment;
    }

}
?>