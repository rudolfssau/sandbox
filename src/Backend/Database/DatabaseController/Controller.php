<?php

namespace App\DatabaseController;

//Works with the include!
//include '../DatabaseModel/Model.php';

use App\DatabaseModel\Model;

class Controller extends Model
{
    public function getData()
    {
        $info = $this->findInfo();
        foreach ($info as $row) {
            echo $row['sku'] . "<br>" . $row['name'] . "<br>" . $row['price'] . "$" . "<br>" . $row['sizemb'] . "<br>" . $row['weightkg'] . "<br>";
        }
    }
}
