<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 10-4-2017
 * Time: 12:23
 */

namespace Mini\Controller;
use Mini\Model\Account;


class ContactController
{
    public function index() {
        require APP . 'view/_templates/header.php';
        require APP . 'view/contact/index.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }
}