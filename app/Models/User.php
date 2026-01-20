<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    // CREATE
    public function create($name, $email)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO users (name, email) VALUES (:name, :email)"
        );
        return $stmt->execute([
            'name' => $name,
            'email' => $email
        ]);
    }

    // READ ALL
    public function all()
    {
        return $this->db->query("SELECT * FROM users ORDER BY id DESC")
                        ->fetchAll();
    }

    // READ SINGLE
    public function find($id)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM users WHERE id = :id"
        );
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // UPDATE
    public function update($id, $name, $email)
    {
        $stmt = $this->db->prepare(
            "UPDATE users SET name=:name, email=:email WHERE id=:id"
        );
        return $stmt->execute([
            'id' => $id,
            'name' => $name,
            'email' => $email
        ]);
    }

    // DELETE
    public function delete($id)
    {
        $stmt = $this->db->prepare(
            "DELETE FROM users WHERE id = :id"
        );
        return $stmt->execute(['id' => $id]);
    }
}
