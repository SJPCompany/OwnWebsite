<div class="container">
    <h1> Edit a user </h1>
    <form method="post" action="<?php echo URL; ?>admin/saveEditUser">
        <?php foreach ($usersinfo as $user) {?>
            <input type="hidden" name="id" value="<?= $user->id ?>">
            <label>Username:</label><br>
            <input type="text" name="username" value="<?= $user->username ?>"> <br><br>
            <label> role: </label> <br>
            <select class="select-style" name="role">
            <option style="display:none;" selected><?php echo $user->role; ?></option>
            <option value="admin">admin</option>
            <option value="owner">owner</option>
            <option value="member">member</option>
            <option value="student">student</option>
            </select><br><br>
            <label>email:</label> <br>
            <input type="email" name="email" value="<?= $user->email ?>"> <br><br>
            <input type="submit" name="submit" value="change user"><br><br>
        <?php } ?>
    </form>
</div>