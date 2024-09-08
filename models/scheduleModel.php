<?php
// include ".././include/autoloader.inc.php";
class ScheduleModel extends Database
{
    public static function findAll()
    {
        $query = "SELECT
            schedule.id,
            departureDate,
            departureTime,
            price,
            start,
            finish,
            duration
            from schedule
            join route ON route.id=routeId
            join bus ON bus.id=busId
            ORDER BY schedule.id";
        $stm = self::$connection->query($query);

        $schedule = [];
        while ($row = $stm->fetch_assoc()) {
            $schedule[] = $row;
        }
        return $schedule;
    }

    public static function findYourBookingTicket($id)
    {
        $query = "SELECT
                     bookings.id,
                     scheduleId,
                     start,
                     finish,
                     price,
                     duration,
                     bookedSeat,
                     departureTime,
                     departureDate
                    FROM bookings JOIN schedule ON schedule.id = scheduleId JOIN route ON routeId = route.id WHERE userId = ?";
        $stm = self::$connection->prepare($query);
        $stm->execute([$id]);

        $result = $stm->get_result();

        $ticket = [];
        while ($row = $result->fetch_assoc()) {
            $ticket[] = $row;
        }
        return $ticket;
    }

    private static function findById($id)
    {
        $query = "SELECT * FROM schedule WHERE id = ?";
        $stm = self::$connection->prepare($query);
        $stm->execute([$id]);
        $reselt = $stm->get_result();

        $schedule = [];

        while ($row = $reselt->fetch_assoc()) {
            $schedule[] = $row;
        }

        return $schedule;

    }

   

    public static function create($departureDate, $departureTime, $routeId)
    {
        $query = "INSERT INTO schedule(departureDate,departureTime,routeId)
                   VALUES(?,?,?)";
        $stm = self::$connection->prepare($query);
        $stm->execute([$departureDate, $departureTime, $routeId]);
        $id = self::$connection->insert_id;

        return self::findById($id);
    }

    public static function findByIdandUpdate($departureDate, $departureTime, $routeId, $id)
    {
        $query = "UPDATE schedule SET departureDate = ? , departureTime= ? , routeId = ? WHERE id = ?";
        $stm = self::$connection->prepare($query);
        $stm->execute([$departureDate, $departureTime, $routeId, $id]);

        return self::findById($id);
    }

    public static function findByIdandDelete($id)
    {
        $query = "DELETE FROM `schedule` WHERE `id` = ?";
        $stm = self::$connection->prepare($query);
        $stm->execute([$id]);

        return self::findById($id);
    }

    public static function findTotal()
    {
        $query = "SELECT COUNT(id) FROM schedule";
        $stm = self::$connection->query($query);
        return $stm->fetch_column();
    }
}
