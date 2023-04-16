<?php

class UserController
{

    public function validateLogin()
    {

        //se os dados do usuário estiverem corretos
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        require_once('models/UserModel.php');
        $UserModel = new UserModel();

        $result = $UserModel->consultUser($userName);

        if ($line = $result->fetch_assoc()) {
            if ($password == $line['password']) {
                $_SESSION['user'] = $line;
                header('Location:index.php');
            } else {
                echo 'senha errada';
            }
        } else {
            echo 'Usuário inválido';
        }


        //cria $_SESSION['user']
    }

}