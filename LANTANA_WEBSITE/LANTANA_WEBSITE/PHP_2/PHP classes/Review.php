<?php

class Review
{
    private $Product_idProduct;
    private $Admin_User_idUser;
    private $Customer_User_idUser;
    private $description_Review;

    /**
     * @param $Product_idProduct
     * @param $Admin_User_idUser
     * @param $Customer_User_idUser
     * @param $description_Review
     */
    public function __construct(Product $Product_idProduct, Admin $Admin_User_idUser, Customer $Customer_User_idUser, $description_Review)
    {
        $this->Product_idProduct = $Product_idProduct;
        $this->Admin_User_idUser = $Admin_User_idUser;
        $this->Customer_User_idUser = $Customer_User_idUser;
        $this->description_Review = $description_Review;
    }

    /**
     * @return Product
     */
    public function getProductIdProduct()
    {
        return $this->Product_idProduct;
    }

    /**
     * @return Admin
     */
    public function getAdminUserIdUser()
    {
        return $this->Admin_User_idUser;
    }

    /**
     * @return Customer
     */
    public function getCustomerUserIdUser()
    {
        return $this->Customer_User_idUser;
    }

    /**
     * @return mixed
     */
    public function getDescriptionReview()
    {
        return $this->description_Review;
    }


}
?>