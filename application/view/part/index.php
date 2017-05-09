<main>
    <div id="content-wrapper">

        <div class="main-text">
            <h1>View parts</h1>
            <table>
                <thead>
                <th>type&nbsp; &nbsp;</th>
                <th>barcode&nbsp; &nbsp;</th>
                <th>herkomst&nbsp; &nbsp;</th>
                <th>fabrikant&nbsp; &nbsp;</th>
                <th>Edit&nbsp; &nbsp;</th>
                <?php if (isset($_SESSION['admin'])) { ?>
                <th> Delete&nbsp; &nbsp;</th>
                <?php } ?>
                </thead>
                <tbody>
            <?php
            foreach ($types as $type) {?>
                <tr>
                    <td><?php echo htmlspecialchars($type->type, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($type->barcode, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($type->herkomst, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($type->fabrikant, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a class="tablelink" href="<?php echo URL; ?>part/editPart/<?php echo $type->id; ?>">Edit</a></td>
                    <?php if(isset($_SESSION['admin'])) { ?>
                    <td><a class="tablelink" href="<?php echo URL; ?>part/deletePart/<?php echo $type->id; ?>">delete</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
                </tbody>
            </table>
            <?php if(isset($_SESSION['admin'])) { ?>
            <a class="tablelink" href="<?php echo URL; ?>part/create"> Create part </a>
            <?php } ?>
        </div>

    </div>
</main>