<?php

class Admin extends User
{

    private $idAdmin;

    public function __construct($idAdmin)
    {
        $this->idAdmin = $idAdmin;
    }

    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

}

?>