<?php

 namespace Mini\Controller;

 use Mini\Model\Account;

 class ResetController
 {
     public function CheckUSER()
     {
         if (!isset($_SESSION['username'])) {
             header('location: ' . URL . 'home/index');
         }
     }
        public function resetpage()
     {
         $this->CheckUSER();
         // load views
         require APP . 'view/_templates/headerstart.php';
         require APP . 'view/reset/index.php';
         require APP . 'view/_templates/footer.php';
     }
 }