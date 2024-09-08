<?php

class DriverModel extends Database
{
    public static function findAll()
    {
        $query = "SELECT * FROM driver";
        $stm = parent::$connection->query($query);

        $drivers = [];
        while ($row = $stm->fetch_assoc()) {
            $drivers[] = $row;
        }
        return $drivers;
    }

    public static function create($drivername,$employDate)
    {
        $query = "INSERT INTO driver(drivername,employDate)VALUES(?,?)";

        $stm = parent::$connection->prepare($query);
        $stm->execute([$drivername,$employDate]);
        $id = parent::$connection->insert_id;

        return self::findById($id);
    }

    public static function findById($id)
    {
        $query = "SELECT * FROM driver WHERE id = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        $reselt = $stm->get_result();

        $user = [];

        while ($row = $reselt->fetch_assoc()) {
            $user[] = $row;
        }

        return $user;
    }

    public static function findByIdandUpdate($id, $drivername)
    {
        $query = "UPDATE `driver` SET `drivername` = ? WHERE `id` = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$drivername,$id]);

        return self::findById($id);
    }

    public static function findByIdandDelete($id)
    {
        $query = "DELETE FROM `driver` WHERE `id` = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        return self::findById($id);
    }
    public static function findTotal()
    {
        $query = "SELECT COUNT(id) FROM driver";
        $stm = self::$connection->query($query);
        return $stm->fetch_column();
    }
}
