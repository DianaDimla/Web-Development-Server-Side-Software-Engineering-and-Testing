<?php

abstract class User
{
    private $idUser;
    private $name_user;
    private $email_user;
    private $address_user;
    private $password_user;
    private $phoneNo_user;
    private $age_user;

    public function __construct($idUser, $name_user, $email_user, $address_user, $password_user, $phoneNo_user, $age_user)
    {
        $this->idUser = $idUser;
        $this->name_user = $name_user;
        $this->email_user = $email_user;
        $this->address_user = $address_user;
        $this->password_user = $password_user;
        $this->phoneNo_user = $phoneNo_user;
        $this->age_user = $age_user;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }


    public function getNameUser()
    {
        return $this->name_user;
    }

    /**
     * @return mixed
     */
    public function getEmailUser()
    {
        return $this->email_user;
    }

    /**
     * @return mixed
     */
    public function getAddressUser()
    {
        return $this->address_user;
    }

    /**
     * @return mixed
     */
    public function getPasswordUser()
    {
        return $this->password_user;
    }

    /**
     * @return mixed
     */
    public function getPhoneNoUser()
    {
        return $this->phoneNo_user;
    }

    /**
     * @return mixed
     */
    public function getAgeUser()
    {
        return $this->age_user;
    }


}
?>