<?php

class BookController extends BookModel
{
    public static function getAllBooking()
    {
        return self::findAll();
    }

    public static function createBooking($userId, $scheduleId)
    {
        return self::create($userId, $scheduleId);
    }

    public static function updateBooking($id, $userId, $scheduleId)
    {
        return self::findByIdandUpdate($id, $userId, $scheduleId);
    }
    public static function deleteBooking($id)
    {
        return self::findByIdandDelete($id);
    }

    public static function getToCountBooking()
    {
        return self::findTotal();
    }
}
