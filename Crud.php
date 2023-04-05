<?php

include_once 'Dbconfig.php';

class Crud {

    private $conn;

    public function __construct() {
        $this->conn = getdbconnection();

        echo('success!');
    }

    public function create($data_array, $table)
    {
        $columns = implode(',', array_keys($data_array));
        $place_holders = ':'.implode(',:', array_keys($data_array));

        $sql = "INSERT INTO $table ($columns) VALUES ($place_holders)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute($data_array);
        return $this->conn->lastInsertId();
    }
}