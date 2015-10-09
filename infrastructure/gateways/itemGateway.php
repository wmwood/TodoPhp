<?php

class ItemGateway {

    public function __construct($db) {
        $this->db = $db;
    }

    public function GetItems() {
        $sql = "SELECT * FROM `items` ORDER BY SortOrder DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

}
