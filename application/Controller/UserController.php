<?php

namespace Mini\Controller;
use Mini\Model\Account;


class UserController
{
    public function index() {
        require APP . 'view/_templates/header.php';
        require APP . 'view/user/index.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }
}