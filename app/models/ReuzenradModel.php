<?php

class reuzenradModel
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    public function getreuzenrad()
    {
        $sql = "SELECT Naam
                    ,  Hoogte
                    ,Land
                    ,Kosten
                    ,AantalPassagiers
            FROM    Reuzenrad";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
