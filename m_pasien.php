<?php
class Pasien
{
    private $mysqli;
    
    function __construct($conn)
    {
        $this->mysqli = $conn;
    }
    
    public function tampil($id = null)
    {
        $db = $this->mysqli->conn;
        $sql = "SELECT*FROM pendaftaran1";
        if($id != null)
        {
            $sql .= " WHERE id_pasien = $id";
        }
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }
}