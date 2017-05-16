<div class="container">
    <h1> Edit a parttype </h1>
    <form method="post" action="<?php echo URL; ?>part/saveEditPart">
    <?php foreach ($partinfo as $info) {?>
        <input type="hidden" name="id" value="<?= $info->id ?>">
        <label id='choose' for='options'> <?php echo $info->type ?></label> <br>
        <select name="type" id='options' size="5" style='display:none;'>
            <option value="ram">ram</option>
            <option value="processor">processor</option>
            <option value="fan">fan</option>
            <option value="voeding">voeding</option>
            <option value="case">case</option>
            <option value="processor cooler">processor cool</option>
            <option value="grafsiche kaart">grafsiche kaart</option>
            <option value="moeder board">moeder board</option>
            <option value="hardeschijf/ssd">hardeschijf/ssd</option>
            <option value="kabels">kabels</option>
        </select><br>
        <label> barcode: </label> <br>
        <input type="text" name="barcode" value="<?= $info->barcode ?>"> <br> <br>
        <label>herkomst:</label> <br>
        <input type="text" name="herkomst" value="<?= $info->herkomst ?>"> <br><br>
        <label>fabrikant:</label> <br>
        <input type="text" name="fabrikant" value="<?= $info->fabrikant ?>"> <br><br>
        <input type="submit" name="submit" value="change part"><br><br>
        <?php } ?>
    </form>
</div>