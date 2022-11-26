<?php

class Database extends PDO
{


    function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASSWORD)
    {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASSWORD);
    }


    //A function for insert data

    //A function for deleting data

    //A function for updating Data

    //A function for simple query
    public function getData($query)
    {
        $stmt = $this->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
