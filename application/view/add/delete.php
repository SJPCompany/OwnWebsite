<div class="container">
    <h1> delete user </h1>
    <form method="post" action="<?php echo URL; ?>admin/deleteUserCheck">
        <?php foreach ($usersinfo as $user) {?>
            <input type="hidden" name="id" value="<?= $user->id ?>" readonly >
            <label> Username: </label> <br>
            <input type="text" name="username" value="<?= $user->username ?>" readonly ><br><br>
            <label> Role: </label> <br>
            <input type="text" name="role" value="<?= $user->role ?>" readonly > <br> <br>
            <label>Email:</label> <br>
            <input type="email" name="email" value="<?= $user->email ?>" readonly > <br><br>
            <input type="submit" name="yes" value="yes">
            <input type="submit" name="no" value="no"><br><br>
        <?php } ?>
    </form>
</div>