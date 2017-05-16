<div class="container">
    <h1> delete part </h1>
    <form method="post" action="<?php echo URL; ?>part/removePart">
        <?php foreach ($partinfo as $info) {?>
            <input type="hidden" name="id" value="<?= $info->id ?>" readonly >
            <label> Type: </label> <br>
            <input type="text" name="type" value="<?= $info->type ?>" readonly ><br><br>
            <label> barcode: </label> <br>
            <input type="text" name="barcode" value="<?= $info->barcode ?>" readonly > <br> <br>
            <label>herkomst:</label> <br>
            <input type="text" name="herkomst" value="<?= $info->herkomst ?>" readonly > <br><br>
            <label>fabrikant:</label> <br>
            <input type="text" name="fabrikant" value="<?= $info->fabrikant ?>" readonly > <br><br>
            <input type="submit" name="yes" value="yes">
            <input type="submit" name="no" value="no"><br><br>
        <?php } ?>
    </form>
</div>