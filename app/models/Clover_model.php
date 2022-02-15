<?php

class Clover_model
{
  private $tabel = "clover";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllClo()
  {
    $this->db->query("SELECT * FROM $this->tabel");
    return $this->db->resultSet();
  }

  public function getClo($id)
  {
    $this->db->query("SELECT * FROM $this->tabel WHERE id = :id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function addClo($data)
  {
    $query = "INSERT INTO $this->tabel VALUES (NULL, :nama, :umur, :email)";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('umur', $data['umur']);
    $this->db->bind('email', $data['email']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function delClo($id)
  {
    $query = "DELETE FROM $this->tabel WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function upClo($data)
  {
    $query = "UPDATE $this->tabel SET nama = :nama, umur = :umur, email = :email WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('umur', $data['umur']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
