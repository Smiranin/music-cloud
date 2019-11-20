<?php

class UserModel extends Model
{
    // Регистрация нового пользователя
    public function register($name, $email, $password)
    {
        $name = htmlspecialchars($this->mysqli->real_escape_string($name));
        $email = htmlspecialchars($this->mysqli->real_escape_string($email));

        $newUser = $this->query("INSERT INTO users(`name`, `email`, `password`) VALUES(?,?,?)", $name, $email, $password);

        if ($newUser)
        {
            $newUser = $this->query("SELECT * FROM users WHERE `email` = ? ", $email, $name)->all();

            if ($newUser[0])
            {
                $newUser['success'] = 1;
            } else
            {
                $newUser['success'] = 0;
            }
        } else
        {
            $newUser['success'] = 0;
        }

        return $newUser;
    }

    // Проверка переданных параметров
    public function checkRegisterParams($email, $pwd1, $pwd2)
    {
        $res = null;

        if(! $email)
        {
            $res['success'] = 0;
            $res['message'] = 'Введите email';
        } if(! $pwd1)
        {
            $res['success'] = 0;
            $res['message'] = 'Введите пароль';
       }if(! $pwd2)
       {
            $res['success'] = 0;
            $res['message'] = 'Введите пароль повторно';
       }if($pwd2 != $pwd1)
       {
            $res['success'] = 0;
            $res['message'] = 'Пароли не совпадают';
       }

        return $res;
    }

    // Проверка существование пользователя по Email
    public function checkUserEmail($email)
    {
//        $email = mysqli_real_escape_string($email);

        $rs = $this->query("SELECT id FROM users WHERE email = ?", $email)->assoc();
        return $rs;
    }

    public function login($email, $pwd)
    {
        $email = htmlspecialchars($this->mysqli->real_escape_string($email));
        $pwd = md5($pwd);

        $user = $this->query("SELECT * FROM users WHERE (`email` = ? AND `password` = ?)", $email, $pwd)->all();
        if($user[0])
        {
            $user['success'] = 1;
        }else
        {
            $user['success'] = 0;
        }
        return $user;

    }
}