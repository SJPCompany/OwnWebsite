<?php
session_destroy()
?>
<div class="container">
    <img class="dv_logo" src="<?php echo URL; ?>img/davinci-logo.png">
    <br><br><br><br>
    <h1>Welcome to the inlog page <br> for the scansystem</h1>
    <p> Please use the form below to log in on the site:</p>
    <br>
    <form method="POST" action="<?php echo URL; ?>home/dologin">
        <label> username: </label> <br>
        <input type="text" name="username"> <br> <br>
        <label> password: </label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="hidden" name="role" value="member">
        <input type="submit" name="submit" value="login"><br><br>
        <a href="<?php echo URL; ?>reset/resetpage"> Forgot password ?</a><br>
    </form>
</div>
