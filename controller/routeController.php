<?php
// include "../include/autoloader.inc.php";

class RouteController extends RouteModel
{
    public static function getAllRoute()
    {
        return json_encode(self::findAll());
    }

    public static function getYourTicket($id)
    {
        return self::findYourBookingTicket($id);
    }

    public static function createSchedule($departureDate, $departureTime, $routeId)
    {
        return self::create($departureDate, $departureTime, $routeId);
    }

    public static function updateSchedule($departureDate, $departureTime, $routeId, $id)
    {
        return self::findByIdandUpdate($departureDate, $departureTime, $routeId, $id);
    }
    public static function deleteSchedule($id)
    {
        return self::findByIdandDelete($id);
    }

    public static function getToCountSchedule()
    {
        return self::findTotalSchedule();
    }
}

// print_r();