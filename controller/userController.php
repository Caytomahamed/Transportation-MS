<?php

class UserController extends UserModel
{
    public static function createUser($firstname, $lastname, $email, $password, $phone, $imageUrl, $role)
    {
        if (count(UserController::findByEmail($email)) > 1) {
            return null;
        }
        return self::create($firstname, $lastname, $email, $password, $phone, $imageUrl, $role);
    }

    public static function updateUser($id, $firstname, $lastname, $email, $password, $phone, $imageUrl)
    {
        return self::findByIdandUpdate($id, $firstname, $lastname, $email, $password, $phone, $imageUrl);
    }

    public static function login($email, $password)
    {
        $user = self::findBy($email, $password);

        return $user;
    }
    public static function deleteUser($id)
    {
        return self::findByIdandDelete($id);

    }

    public static function getUserById($id)
    {
        return self::findById($id);
    }

    public static function getAllUsers()
    {
        return self::findAll();
    }
}
