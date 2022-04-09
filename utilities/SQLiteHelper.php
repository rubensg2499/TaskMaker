<?php

require("Utilities.php");

class SQLiteConection extends SQLite3
{
    public function __construct()
    {
        $this->open(DB_NAME);
    }
}

class SQLiteHelper
{
    private $db_object = null;
    public function __construct($_db_object)
    {
        $this->db_object = $_db_object;
    }
    public function execute($table)
    {
        if ($this->db_object) {
            $this->db_object->exec($table);
            return true;
        } else {
            return false;
        }
    }

    public function insert($table, $values)
    {
        // code...
    }

    public function update($table, $values, $condition=false)
    {
        // code...
    }
}
