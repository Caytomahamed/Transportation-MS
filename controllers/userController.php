<?php

class UserController extends UserModel
{
    public static function createUser($firstname, $lastname, $email, $password, $phone, $imageUrl, $role)
    {
        if (count(UserController::findByEmail($email)) > 1) {
            return null;
        }
        $user= self::create($firstname, $lastname, $email, $password, $phone, $imageUrl, $role);

        if (!count($user)) {
            return null;
        }
        return $user;
    }

    public static function updateUser($id, $firstname, $lastname, $email, $password, $phone, $imageUrl)
    {
        if (!$id || !$firstname || !$lastname || !$email || !$password || !$phone) {
            return null;
        }

        $user = self::findByIdandUpdate($id, $firstname, $lastname, $email, $password, $phone, $imageUrl);

        if (count($user) == 0) {
            return null;
        }
        return $user;
    }

    public static function login($email, $password)
    {

        $user = self::findBy($email, $password);

        if (!count($user)) {
            return null;
        }
        return $user;
    }
    public static function deleteUser($id)
    {
        self::findByIdandDelete($id);

        $user = self::getUserById($id);

        if (!$user) {
            return null;
        }
        return $user;
    }

    public static function getUserById($id)
    {
        $user = self::findById($id);
        if (!count($user)) {
            return null;
        }
        return $user;
    }

    public static function getAllUsers()
    {
        $users = self::findAll();
        if (!count($users)) {
            return null;
        }
        return $users;
    }
    public static function getToCountUser()
    {
        return self::findTotal();
    }
}
