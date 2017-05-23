<?php if (isset($_SESSION['admin'])) { ?>
<div>
    <nav class="menu" id="ps" tabindex="0">
        <div class="smartphone-menu-trigger"></div>
        <header class="avatar">
            <img src="<?php echo URL; ?>img/davinci-logo.png">
            <h2>ScanSystem</h2>
        </header>
        <ul>
            <li tabindex="0" class="icon-dashboard"  ><a href="<?php echo URL; ?>home/startpage"><span>Dashboard</a></span></li>
            <li tabindex="0" class="icon-search"     ><a href="<?php echo URL; ?>search/SearchPage"><span>Search Part</span></a></li>
            <li tabindex="0" class="icon-ordeform"   ><a href="<?php echo URL; ?>orderform/index"><span>Order Formulier</span></li>
            <li tabindex="0" class="icon-addpart"    ><a href="<?php echo URL; ?>part/viewpart"><span>part</span></a></li>
            <li tabindex="0" class="icon-price"      ><a href="checker/pricechecker"><span>Price Checker</span></a></li>
            <li tabindex="0" class="icon-currentuser"><a href="<?php echo URL; ?>admin/viewUser"><span>View users</span></a></li>
            <li tabindex="0" class="icon-currentuser"><span>Current User:<br>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                    ?></span></li>
            <li tabindex="0" class="icon-contact"    ><a href="<?php echo URL; ?>contact/index"><span>Contact/Problems</span></a></li>
            <li tabindex="0" class="icon-logout"     ><a href="<?php echo URL; ?>home/index"><span>Logout</span></a></li>

        </ul>
    </nav>
</div>
<?php } else { ?>
<div>
    <nav class="menu" id="ps" tabindex="0">
        <div class="smartphone-menu-trigger"></div>
        <header class="avatar">
            <img src="<?php echo URL; ?>img/davinci-logo.png">
            <h2>ScanSystem</h2>
        </header>
        <ul>
            <li tabindex="0" class="icon-dashboard"  ><a href="<?php echo URL; ?>home/startpage"><span>Dashboard</a></span></li>
            <li tabindex="0" class="icon-search"     ><a href="<?php echo URL; ?>search/SearchPage"><span>Search Part</span></a></li>
            <li tabindex="0" class="icon-addpart"    ><a href="<?php echo URL; ?>part/viewpart"><span>part</span></a></li>
            <li tabindex="0" class="icon-ordeform"   ><a href="<?php echo URL; ?>orderform/index"><span>Order Formulier</span></li>
            <li tabindex="0" class="icon-price"      ><a href="#"><span>Price Checker</span></a></li>
            <li tabindex="0" class="icon-currentuser"><span>Current User:
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                    ?></span></li>
            <li tabindex="0" class="icon-contact"    ><a href="<?php echo URL; ?>contact/index"><span>Contact/Problems</span></a></li>
            <li tabindex="0" class="icon-logout"     ><a href="<?php echo URL; ?>home/index"><span>Logout</span></a></li>

        </ul>
    </nav>
</div>
<?php } ?>
