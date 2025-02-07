<?php
class VedioController extends TableController
{
    private $conn;
    private $table;
    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
        $this->table = "vedios";
        parent::__construct($database, $this->table);
    }
 }
