<?php

class EventController extends TableController
{
    private $conn;
    private $table;

    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
        $this->table = "events"; // Updated table name

        parent::__construct($database, $this->table);
    }
}
