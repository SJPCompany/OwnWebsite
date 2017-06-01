<div class="container">
    <h1> Edit account info </h1>
    <form method="post" action="<?php echo URL; ?>user/edituser">
        <?php foreach ($userinfo as $user) {?>
            <input type="hidden" name="id" value="<?= $user->id ?>">
            <label>email:</label> <br>
            <input type="email" name="email" value="<?= $user->email ?>"> <br><br>
            <label>voornaam:</label> <br>
            <input type="text" name="firstname" value="<?= $user->firstname ?>"> <br><br>
            <label>achternaam:</label> <br>
            <input type="text" name="lastname" value="<?= $user->lastname ?>"> <br><br>
            <label>straatnaam:</label> <br>
            <input type="text" name="streetname" value="<?= $user->streetname ?>"> <br><br>
            <label>huisnummer:</label> <br>
            <input type="number" name="huisnummer" value="<?= $user->housenumber ?>"> <br><br>
            <label>postcode:</label> <br>
            <input type="text" name="zip" value="<?= $user->zip ?>"> <br><br>
            <input type="submit" name="submit" value="edituser"><br><br>
        <?php } ?>
    </form>
</div>