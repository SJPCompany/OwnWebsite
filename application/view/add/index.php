<main>
    <div id="content-wrapper">

        <div class="main-text">
            <h1>View Users</h1>
            <table>
                <thead>
                <th>username&nbsp; &nbsp;</th>
                <th>role &nbsp;</th>
                <th>email&nbsp; &nbsp;</th>
                <th>Edit&nbsp; &nbsp;</th>
                <th>Delete </th>
                </thead>
                <tbody>
                <?php
                foreach ($usersinfo as $users) {?>
                <tr>
                    <td><?php echo htmlspecialchars($users->username, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($users->role, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($users->email, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a class="tablelink" href="<?php echo URL; ?>admin/editUser/?id=<?php echo $users->id; ?>">Edit</a></td>
                    <td><a class="tablelink" href="<?php echo URL; ?>admin/deleteUser/?id=<?php echo $users->id; ?>">delete</a></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <br>
            <a class="tablelink" href="<?php echo URL; ?>admin/Adduser"> Create an User </a>
        </div>
    </div>
</main>
