<div class="container">
<h1>OrderFormulier</h1>
    <form method="POST" action="<?php echo URL; ?>orderform/email">
        <label> voornaam</label> <br>
        <input type="text" name="firstname" placeholder="voornaam" autocomplete="false"> <br> <br>
        <label> achternaam</label> <br>
        <input type="text" name="lastname" placeholder="achternaam" autocomplete="false"> <br> <br>
        <label>uw email </label> <br>
        <input type="email" name="email" placeholder="email"> <br> <br>
        <label> gewenste onderdelen: </label> <br>
        <textarea name="parts" maxlength="5000" cols="100" rows="10"> </textarea><br> <br>
        <label> eventuele toevoegingen : </label> <br>
        <textarea name="other" maxlength="1000" cols="50" rows="5"> </textarea><br> <br>
    <input type="submit" value="submit">


    </form>
</div>
