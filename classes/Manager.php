<?php

include('utils/bdd.php');

class Manager
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function selectionOperator()
    {
        $sql = "SELECT id, name FROM tour_operator";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }




    // {
    //     $sql = "SELECT DISTINCT location FROM destination";
    //     $stmt = $this->db->prepare($sql);
    //     $stmt->execute();
    //     $data = $stmt->fetchAll();

    //     return $data;
    // }


    public function add($location, int $tarif, int $tourOperatorId, $image)
    {
        try {
            $sql = "INSERT INTO destination (`location`, price, tour_operator_id, photo) VALUES (?,?,?,?)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$location, $tarif, $tourOperatorId, $image]);
        } catch (Exception $e) {
            echo "Erreur:" . $e->getMessage();
        }
    }
}
