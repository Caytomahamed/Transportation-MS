<?php

class userModel extends Database
{
    public static function findAll()
    {
        $query = "SELECT * FROM users";
        $stm = parent::$connection->query($query);

        $users = [];
        while ($row = $stm->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    public static function create($firstname, $lastname, $email, $password, $phone, $imageUrl, $role)
    {
        $query = "INSERT INTO users(firstname, lastname, email, password, phone, imageUrl,role) VALUES(?, ?, ?, ?, ?, ?,?)";

        $stm = parent::$connection->prepare($query);
        $stm->execute([$firstname, $lastname, $email, $password, $phone, $imageUrl, $role]);

        $id = parent::$connection->insert_id;

        return self::findById($id);
    }

    public static function findById($id)
    {
        $query = "SELECT * FROM users WHERE id = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        $reselt = $stm->get_result();

        $user = [];

        while ($row = $reselt->fetch_assoc()) {
            $user[] = $row;
        }

        return $user;
    }

    public static function findBy($username, $password)
    {
        $query = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$username, $password]);

        $reselt = $stm->get_result();

        $user = [];

        while ($row = $reselt->fetch_assoc()) {
            $user[] = $row;
        }

        return $user;
    }

    public static function findByEmail($email)
    {
        $query = "SELECT * FROM users WHERE email = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$email]);

        $reselt = $stm->get_result();

        $user = [];

        while ($row = $reselt->fetch_assoc()) {
            $user[] = $row;
        }

        return $user;
    }

    public static function findByIdandUpdate($id, $firstname, $lastname, $email, $password, $phone, $imageUrl)
    {
        $query = "UPDATE users SET firstname = ?, lastname =  ?, email = ?, password = ?, phone = ? , imageUrl = ? WHERE id = ?";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$firstname, $lastname, $email, $password, $phone, $imageUrl, $id]);

        return self::findById($id);
    }

    public static function findByIdandDelete($id)
    {
        $query = "DELETE FROM users WHERE id = ? ";
        $stm = parent::$connection->prepare($query);
        $stm->execute([$id]);

        return self::findById($id);
    }
     public static function findTotal()
    {
        $query = "SELECT COUNT(id) FROM users";
        $stm = self::$connection->query($query);
        return $stm->fetch_column();
    }
}
