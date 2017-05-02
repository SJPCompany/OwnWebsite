<?php

namespace Mini\Controller;

use Mini\Model\Account;

class SearchController
{
    public function CheckUSER()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . URL . 'home/index');
        }
    }
    public function SearchPage()
    {
        $this->CheckUSER();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/index.php';
        require APP . 'view/_templates/side_menu.php';
        require APP . 'view/_templates/footer.php';
    }
}