<?php

class BusModel extends Database
{
    public static function findAll()
    {
        $query = "SELECT bus.id,
                    busno,
                    driverId,
                    driverName,
                    employDate
                    FROM bus JOIN driver ON bus.driverId = driver.id GROUP BY bus.id ORDER BY bus.id";
        $stm = parent::$connection->query($query);

        $drivers = [];
        while ($row = $stm->fetch_assoc()) {
            $drivers[] = $row;
        }
        return $drivers;
    }

    public static function create($busno, $driverId)
    {
        $query = "INSERT INTO bus(busno,driverId)VALUES(?,?)";

        $stm = parent::$connection->prepare($query);
        $stm->execute([$busno, $driverId]);
        $id = parent::$connection->insert_id;

        return self::findById($id);
    }

    public static function findById($id)
    {
        $query = "SELECT * FROM bus WHERE id = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        $reselt = $stm->get_result();

        $user = [];

        while ($row = $reselt->fetch_assoc()) {
            $user[] = $row;
        }

        return $user;
    }

    public static function findByIdandUpdate($id, $busno, $driverId)
    {
        $query = "UPDATE `bus` SET busno = ?, driverId = ? WHERE `id` = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$busno, $driverId,$id]);

        return self::findById($id);
    }

    public static function findByIdandDelete($id)
    {
        $query = "DELETE FROM `bus` WHERE `id` = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        return self::findById($id);
    }
    public static function findTotal()
    {
        $query = "SELECT COUNT(id) FROM bus";
        $stm = self::$connection->query($query);
        return $stm->fetch_column();
    }
}
