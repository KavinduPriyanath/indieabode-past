<?php

class Assets_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getAllAssets()
    {
        return $this->db->getData("SELECT * FROM freeasset");
    }

    function showAllAssets()
    {
        $stmt = $this->db->prepare("SELECT * FROM freeasset");

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
