<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

if (!isset($_GET['controller'])) {
    require_once('controllers/Site.php');
    $Site = new Site();
    $Site->home();
} else {
    switch ($_REQUEST['controller']) {
        case 'site':
            require_once('controllers/Site.php');
            $Site = new Site();
            if (!isset($_GET['action'])) {
                $Site->home();
            } else {
                switch ($_REQUEST['action']) {
                    case 'home':
                        $Site->home();
                        break;
                    case 'products':
                        $Site->products();
                        break;
                    case 'contact':
                        $Site->contact();
                        break;

                    default:
                        $Site->home();
                        break;
                }
            }


            break;

        case 'client':
            require_once('controllers/Client.php');
            $Client = new Client();
            if (!isset($_GET['action'])) {
                //chamada padrao
            } else {
                switch ($_REQUEST['action']) {
                    case 'register':
                        $Client->register();
                        break;

                    case 'registerView':
                        $Client->registerView();
                        break;

                    case 'listClients':
                        $Client->listClients();
                        break;
                }
            }
            break;

        default:
            require_once('controllers/site.php');
            $Site = new Site();
            $Site->home();
            break;
    }
}

?>