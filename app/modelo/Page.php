<?php
  class Page {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function obtenerTurista($nombre){
      $this->db->query('SELECT * FROM explorers WHERE firstname = :nombre');
      $this->db->bind(':nombre', $nombre);
      $row = $this->db->single();
      return $row;
    }

    public function numeroRegistros($estado){
      $this->db->query('SELECT * FROM explorers WHERE state = :estado');
      $this->db->bind(':estado', $estado);
      $row = $this->db->resultSet();
      return $row;
      
    }
}   