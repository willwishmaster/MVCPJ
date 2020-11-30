<?php
  class Page {
    private $db;

    public function __construct(){
      $this->db = new Database;
      $this->pageModelo = $this->modelo('Pages');
    }

    public function obtenerTurista($nombre){
      $this->db->query('SELECT * FROM explorers WHERE firstname = :nombre');
      $this->db->bind(':nombre', $nombre);
      $row = $this->db->single();
      return $row;
    }
}   