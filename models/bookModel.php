<?php

class BookModel extends Database
{
    public static function findAll()
    {
        $query = "SELECT * FROM bookings";
        $stm = parent::$connection->query($query);

        $drivers = [];
        while ($row = $stm->fetch_assoc()) {
            $drivers[] = $row;
        }
        return $drivers;
    }

    public static function create($userId, $scheduleId)
    {
        $randomNumber = rand(1231, 7879);
        $seat = 'SE-' . $randomNumber;
        $booked = 1;

        $qeury = "INSERT INTO `bookings` (userId, bookedSeat,scheduleId,booked) VALUES
    (?, ?,?,?)";
        $stm = self::$connection->prepare($qeury);
        $stm->execute([$userId, $seat, $scheduleId, $booked]);

        $id = self::$connection->insert_id;

        return self::findById($id);

    }

    public static function findById($id)
    {
        $query = "SELECT * FROM bookings WHERE id = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        $reselt = $stm->get_result();

        $user = [];

        while ($row = $reselt->fetch_assoc()) {
            $user[] = $row;
        }

        return $user;
    }

    public static function findByIdandUpdate($id, $userId, $scheduleId)
    {
        $query = "UPDATE `bookings` SET `userId` = ? , `scheduleId`= ? WHERE `id` = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$userId, $scheduleId, $id]);

        return self::findById($id);
    }

    public static function findByIdandDelete($id)
    {
        $query = "DELETE FROM `bookings` WHERE `id` = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        return self::findById($id);
    }
    public static function findTotal()
    {
        $query = "SELECT COUNT(id) FROM bookings";
        $stm = self::$connection->query($query);
        return $stm->fetch_column();
    }
}
