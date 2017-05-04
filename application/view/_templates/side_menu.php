<div id="sidebar">
    <ul>
        <div class="fa fa-home fa-2x" style="color: #0f0f0f;">
            <a href="<?php echo URL; ?>home/startpage">Homepage</a>
        </div>

        <div class="fa fa-search fa-2x" style="color: #0f0f0f;">
            <a href="<?php echo URL; ?>search/SearchPage">Search</a>
        </div>
        <div class="fa fa-shopping-basket fa-2x" style="color: #0f0f0f;">
            <a href="<?php echo URL; ?>orderform/index">Order&#160;Formulier</a>

        </div>
        <div class="fa fa-plus fa-2x" style="color: #0f0f0f;">
            <a href="#">Add&#160;part</a>
        </div>

        <div class="fa fa-usd fa-2x" style="color: #0f0f0f;">
            <a href="#">Price&#160;Checker</a>
        </div>

        <div class="fa fa-user-o fa-2x" style="color: #0f0f0f;">
            <a href="<?php echo URL; ?>admin/adduser">Add&#160;User</a>
        </div>

        <div class="fa fa-question fa-2x" style="color: #0f0f0f;">
            <a href="<?php echo URL; ?>contact/index">Contact/Problems</a>
        </div>

        <div class="fa fa-user-circle fa-2x" style="color: #0f0f0f;">
            <a href="#">CurrentUser: <?php if (isset($_SESSION['username'])) {
                    echo $_SESSION['username'];
                } ?></a>
        </div>

        <div class="fa fa-power-off fa-2x" style="color: #0f0f0f;">
            <a href="<?php echo URL; ?>home/logoutUser">Logout</a>
        </div>
    </ul>
</div>