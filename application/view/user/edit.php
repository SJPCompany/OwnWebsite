<?php foreach ($users as $user) {?>
    <h1>Klanten Profiel</h1>
    <ul>
        <li><label>Postcode:</label><br><label class="notbold"><?php echo $user->zip;?></label><br></li>
        <li><label>Plaats:</label><br><label class="notbold"><?php echo $user->city;?></label><br></li>
    </ul>
    <a href="<?php echo URL; ?>user/edit/?id=<?php echo $user->id; ?>">edit info</a>
<?php } ?>

<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <A href="edit.html" >Edit Profile info</A>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">User Profile</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <form method="post" action="<?php echo URL; ?>user/saveupdate">
                                    <?php foreach ($users as $user) {?>
                                        <input type="hidden" name="id" value="<?= $user->id ?>">
                                    <tr>
                                        <td>Voornaam:</td>
                                        <td><input value="<?= $user->firstname ;?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Achternaam:</td>
                                        <td><input value="<?= $user->lastname ;?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Straatnaam en huisnummer:</td>
                                        <td><input value="<?= $user->streetname; ?>">&nbsp;<input value="<?= $user->housenumber; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Postcode en woonplaats:</td>
                                        <td><input value="<?= $user->zip; ?>">&nbsp;<input value="<?= $user->city; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><input value="<?= $user->email; ?>"></td>
                                    </tr>
                                    <?php } ?>
                                </form>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                     <span class="pull-right">
                            <a data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Discard" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                </div>
            </div>
        </div>
    </div>
</div><input type="submit" name="submit" value="update">s