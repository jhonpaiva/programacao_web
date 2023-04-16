<?php

class Site{

    
    public function home(){
        require_once('views/template/header.php');
        require_once('views/pages/home.php');
        require_once('views/template/footer.php');
    }

    public function products(){
        require_once('views/template/header.php');
        require_once('views/pages/products.php');
        require_once('views/template/footer.php');
    }

    public function contact(){
        require_once('views/template/header.php');
        require_once('views/pages/contact.php');
        require_once('views/template/footer.php');
    }



}

?>