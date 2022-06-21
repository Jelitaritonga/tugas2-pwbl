<?php

namespace App\Models;

use App\Core\Model;

class Kategori extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_kategori";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch()) {
                  $data[] = $rows;
            }

            return $data;
      }
}
