<?php

class Client
{

    public function register()
    {
        require_once('views/template/header.php');
        require_once('views/client/register.php');
        require_once('views/template/footer.php');
    }

    public function registerView()
    {
        $arrayClient = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address']
        );

        require_once('views/template/header.php');
        require_once('views/client/registerView.php');
        require_once('views/template/footer.php');
    }

    public function listClients()
    {

        require_once('models/ClientModel.php');
        $ClientModel = new ClientModel();
        $result = $ClientModel->listClients();

        $arrayClients = array();
        while ($line = $result->fetch_assoc()) {
            array_push($arrayClients, $line);
        }

        require_once('views/template/header.php');
        require_once('views/client/listClients.php');
        require_once('views/template/footer.php');
    }

}

?>