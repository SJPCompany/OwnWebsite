<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 10-4-2017
 * Time: 12:23
 */

namespace Mini\Controller;
use Mini\Model\Account;


class AboutController
{
    public function index() {
        require APP . 'view/_templates/header.php';
        require APP . 'view/about/index.php';
        require APP . 'view/_templates/footer.php';
    }
}