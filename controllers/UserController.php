<?php

include_once '../models/UsersModel.php';

class UserController extends Controller
{
    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new CSmarty();
    }

    /**функция которая будет вызываться с помощью аякс, и обращаться к модели User
     * Инициализация сессионной переменной
     *
     * @return json массив данных ноовго пользователя
     */
    public function register()
    {
        $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
        $email = trim($email);

        $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
        $name = trim($name);

        $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
        $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

        // в эту переменную мы будем складывать данные об ошибках или об успехе
        $resData = null;
        $resData = $this->model->checkRegisterParams($name, $pwd1, $pwd2);

        $checkEmail = $this->model->checkUserEmail($email);

        if(! $resData && $checkEmail)
        {
            $resData['success'] = 0;
            $resData['message'] = "Пользаватель с таким {$email} уже существует";
        }
        if(! $resData)
        {
            $pwdMd5 = md5($pwd1);


            $userData = $this->model->register($name, $email, $pwdMd5);
            if($userData['success'])
            {
                $resData['message'] = 'Пользователь успешно зарегестрирован!';
                $resData['success'] = 1;

                $userData = $userData[0];
                $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
                $resData['userEmail'] = $email;

                 //Заводим сессионую переменную о пользователе, чтоб лишний раз не лезть в БД
                $_SESSION['user'] = $userData;
                $_SESSION['user']['displayName'] = $resData['userName'];
            } else
                 {
                    $resData['success'] = 0;
                    $resData['message'] = 'Ошибка при регистрации';
                 }
        }

        echo json_encode($resData);
    }
    
    public function login()
    {
        $email = isset($_REQUEST['emailUser']) ? $_REQUEST['emailUser'] : null;
        $email = trim($email);

        $pwd = isset($_REQUEST['pwdUser']) ? $_REQUEST['pwdUser'] : null;

        $resData = null;
        $userData = $this->model->login($email, $pwd);
        if($userData['success'])
        {
            $resData['message'] = 'Пользователь успешно зарегестрирован!';
            $resData['success'] = 1;

            $userData = $userData[0];
            $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
            $resData['userEmail'] = $email;

            //Заводим сессионую переменную о пользователе, чтоб лишний раз не лезть в БД
            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $resData['userName'];
        } else
        {
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка при регистрации';
        }

        echo json_encode($resData);
    }
}