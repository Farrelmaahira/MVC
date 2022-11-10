<?php

class ItemsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get()
    {
        $this->db->query('SELECT * FROM items');
        return $this->db->result();
    }

    public function create($name, $description, $relased, $image)
    {
        $query = "INSERT INTO items (name, description, released, image) VALUES (:name, :description, :released, :file)";
        $this->db->query($query);
        $this->db->bind(':name', $name);
        $this->db->bind(':description', $description);
        $this->db->bind(':released', $relased);
        $this->db->bind(':file', $image);
        $this->db->execute();
       
    }
    
    public function update()
    {

    }

    public function delete($id)
    {
        $this->db->query('DELETE FROM items WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    
}