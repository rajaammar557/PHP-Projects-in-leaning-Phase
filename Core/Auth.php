<?php

namespace Core;

use Core\App;
use Core\Database;

class Auth
{

    public function attempt($email, $password)
    {

        $db = App::resolve(Database::class);

        $user = $db->query(
            "SELECT * FROM users WHERE email = :email",
            ['email' => $email]
        )->find();

        if ((!$user || ($user && !password_verify($password, $user['password'])))) {
            return false;
        }
        $this->login([
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $email
        ]);
        return true;
    }


    public function login($user)
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }
    public static function logout()
    {
        Session::destroy();
    }
}
