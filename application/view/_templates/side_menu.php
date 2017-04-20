<body><div class="area"></div>
    <nav class="main-menu">
            <ul>
                <li>
                    <a href="<?php echo URL; ?>home/startpage">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Homepage
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-search fa-2x"></i>
                        <span class="nav-text">
                            Search Part
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="<?php echo URL; ?>orderform/index">
                       <i class="fa fa-shopping-basket fa-2x"></i>
                        <span class="nav-text">
                            Order Formulier
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-plus fa-2x"></i>
                        <span class="nav-text">
                            Add part
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-usd fa-2x"></i>
                        <span class="nav-text">
                            Price Checker
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user-o fa-2x"></i>
                        <span class="nav-text">
                            Add User:
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user-circle fa-2x"></i>
                        <span class="nav-text">
                            Current User: <?php
                            if (isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            } ?>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>contact/index">
                        <i class="fa fa-question fa-2x"></i>
                        <span class="nav-text">
                            Contact/Problems
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>