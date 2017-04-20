<?php

namespace Mini\Controller;

use Mini\Model\Account;

class SearchController
{

    public function SearchPage()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/side_menu.php';
        require APP . 'view/search/index.php';
        require APP . 'view/_templates/footer.php';
    }
}