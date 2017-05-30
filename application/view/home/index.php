<?php
session_destroy()
?>
<div class="container">
    <img class="dv_logo" src="<?php echo URL; ?>img/davinci-logo.png">
    <br><br>
    <h1>Welcome to the inlog page <br> for the scansystem</h1>

    <p> Please use the form below to log in on the site:</p>
        <div id="login">
            <form name='form-login' method="POST" action="<?php echo URL; ?>home/dologin">
                <span class="fontawesome-user"></span>
                <input type="text" id="user" name="username" placeholder="Username">

                <span class="fontawesome-lock"></span>
                <input type="password" id"pass" name="password" placeholder="Password">

                <input type="submit" name="submit" value="login">

            </form>
            <br>
            <a style="color: black;" href="<?php echo URL; ?>home/ForgotPassword"> Forgot password ?</a>
        </div>
</div>