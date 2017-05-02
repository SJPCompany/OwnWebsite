<div class="area"></div>
        <nav id="myNavbar" class="main-menu" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul>
                        <li class="has-subnav">
                            <a href="<?php echo URL; ?>home/startpage">
                                <i class="fa fa-home fa-2x"></i>
                                <span class="nav-text">
                            Homepage
                        </span>
                            </a>
                        </li>
                        <li class="has-subnav">
                            <a href="<?php echo URL; ?>search/SearchPage">
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
                        <?php if (isset($_SESSION['admin'])) {?>
                            <li>
                                <a href="<?php echo URL; ?>admin/adduser">
                                    <i class="fa fa-user-o fa-2x"></i>
                                    <span class="nav-text">
                            Add User:
                        </span>
                                </a>
                            </li>
                        <?php } ?>
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
                        <li>
                            <a href="<?php echo URL; ?>home/index">
                                <i class="fa fa-power-off fa-2x"></i>
                                <span class="nav-text">
                            Logout
                        </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>