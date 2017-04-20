<div class="container">
<h1> Add a new User</h1>
    <form method="post" action="<?php echo URL; ?>admin/registerUser">
        <label> username: </label> <br>
        <input type="text" name="username"> <br> <br>
        <label> password: </label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="hidden" name="role" value="member">
        <label>Email:</label> <br>
        <input type="email" name="email" value=""> <br><br>
        <input type="submit" name="submit" value="add user"><br><br>
    </form>
</div>
