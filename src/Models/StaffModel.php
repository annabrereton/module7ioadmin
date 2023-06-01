<?php

namespace App\Models;

use App\Entities\Staff;
use PDO;

class StaffModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getStaff(): array
    {
        $sql = 'SELECT `id`, `first_name`, `last_name`, `job_title`
            FROM `staff` ';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Staff::class); //FETCH_CLASS doesn't like constructors with parameters
        $query->execute();
        return $query->fetchAll();
    }
}