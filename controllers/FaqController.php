<?php

class FaqController extends TableController
{


    private $conn;
    private $table;
    private $primary_key;
    private $foreign_key;


    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
        $this->table = "faq";

        parent::__construct($database, $this->table);
    }




 }
