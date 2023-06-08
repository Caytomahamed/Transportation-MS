<?php

class ScheduleController extends ScheduleModel
{
    public static function getAllschedule()
    {
        $schedule = self::findAll();

        if (!count($schedule)) {
            return null;
        }
        return json_encode($schedule);
    }

    public static function getYourTicket($id)
    {
        if (!$id) {
            return null;
        }
        $tickets = self::findYourBookingTicket($id);

        if (!count($tickets)) {
            return null;
        }

        return $tickets;
    }

    public static function createSchedule($departureDate, $departureTime, $routeId)
    {
        if (!$departureDate || !$departureTime || !$routeId) {
            return null;
        }
        return self::create($departureDate, $departureTime, $routeId);
    }

    public static function updateSchedule($departureDate, $departureTime, $routeId, $id)
    {
        if (!$departureDate || !$departureTime || !$routeId || !$id) {
            return null;
        }
        return self::findByIdandUpdate($departureDate, $departureTime, $routeId, $id);
    }
    public static function deleteSchedule($id)
    {
        return self::findByIdandDelete($id);
    }

    public static function getToCountSchedule()
    {
        return self::findTotal();
    }
}
