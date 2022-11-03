<?php

namespace App\Controller;

use App\Model\Model;

class Controller extends Model
{
    public function getData()
    {
        $info = $this->query("SELECT * FROM info");
        foreach ($info as $row) {
            ?>
            <tr id="table_data">
                <td id="test" ">
                    <input type="checkbox" name="delete_checkbox" value="<?= $row['id']; ?>">
                </td>
                <td><?= $row['sku'] . $row['name'] . $row['price'] . "$" . $row['sizemb'] . $row['heightcm'] . $row['widthcm'] . $row['lengthcm'] . $row['weightkg']; ?></td>
            </tr>
            <?php
        }
    }
    public function sendData()
    {
        if (isset($_POST['save_add'])) {
            $sku = $_POST['sku'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $sizemb = $_POST['sizemb'];
            $heightcm = $_POST['heightcm'];
            $widthcm = $_POST['widthcm'];
            $lengthcm = $_POST['lengthcm'];
            $weightkg = $_POST['weightkg'];
            $data = [
                ':sku' => $sku,
                ':name' => $name,
                ':price' => $price,
                ':sizemb' => $sizemb,
                ':heightcm' => $heightcm,
                ':widthcm' => $widthcm,
                ':lengthcm' => $lengthcm,
                ':weightkg' => $weightkg,
            ];
            $sql = $this->insert("INSERT INTO info(sku, name, price, sizemb, heightcm, widthcm, lengthcm, weightkg) VALUES (:sku, :name, :price, :sizemb, :heightcm, :widthcm, :lengthcm, :weightkg)");
            $sql->execute($data);
        }

    }
}
