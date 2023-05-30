<?php

class BusController extends BusModel
{
    public static function getAllBus()
    {

        return self::findAll();
    }

    public static function createBus($busno, $driverId)
    {
        return self::create($busno, $driverId);
    }

    public static function updateBus($id, $busno, $driverId)
    {
        return self::findByIdandUpdate($id, $busno, $driverId);
    }
    public static function deleteBus($id)
    {
        return self::findByIdandDelete($id);
    }

    public static function getToCountBus()
    {
        return self::findTotal();
    }
}
