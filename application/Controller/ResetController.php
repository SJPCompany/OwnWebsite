<?php

 namespace Mini\Controller;

 use Mini\Model\Account;

 class ResetController
 {

        public function resetpage()
     {
         // load views
         require APP . 'view/_templates/headerstart.php';
         require APP . 'view/reset/index.php';
         require APP . 'view/_templates/footer.php';
     }
 }