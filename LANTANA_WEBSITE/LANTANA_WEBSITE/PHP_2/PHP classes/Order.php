<?php

class Order
{
    private $Customer_User_idUser;
    private $idOrder;


    public function __construct(Customer $Customer_User_idUser, $idOrder)
    {
        $this->Customer_User_idUser = $Customer_User_idUser;
        $this->idOrder = $idOrder;
    }

    public function getCustomerUserIdUser()
    {
        return $this->Customer_User_idUser;
    }


    public function getIdOrder()
    {
        return $this->idOrder;
    }

}
?>