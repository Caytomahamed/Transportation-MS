<?php

class DriverController extends DriverModel
{
    public static function getAllDriver()
    {

        return self::findAll();
    }

    public static function createDriver($drivername, $employDate)
    {
        return self::create($drivername, $employDate);
    }

    public static function updateDriver($id, $drivername)
    {
        return self::findByIdandUpdate($id, $drivername);
    }
    public static function deleteDriver($id)
    {
        return self::findByIdandDelete($id);
    }

    public static function getToCountDriver()
    {
        return self::findTotal();
    }
}
