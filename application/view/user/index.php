<div class="container">
   <?php foreach ($users as $user) {?>
    <h1>Klanten Profiel</h1>
    <label>email</label><br>
    <label><?php echo $user->email;?></label><br>
    <label>voornaam</label><br>
    <label><?php echo $user->firstname;?></label><br>
    <label>achternaam</label><br>
    <label><?php echo $user->lastname;?></label><br>
    <label>straatnaam</label><br>
    <label><?php echo $user->streetname;?></label><br>
    <label>huisnummer</label><br>
    <label><?php echo $user->housenumber;?></label><br>
    <label>postcode</label><br>
    <label><?php echo $user->zip;?></label><br>
    <label>plaats</label><br>
    <label><?php echo $user->city;?></label>
    <br>
    <a href="<?php echo URL; ?>user/edit/?id=<?php echo $user->id; ?>">edit info</a>
<?php } ?>
    <table>
        <thead>
            <th>onderdeel</th>
            <th>prijs</th>
            <th>datum</th>
        </thead>
        <tbody>

        </tbody>

    </table>
</div>