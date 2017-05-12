<div class="container">
    <h1> Add a new parttype</h1>
    <form method="post" action="<?php echo URL; ?>part/PostCheck">
        <label id='choose' for='options'> Select parttype </label> <br>
        <!-- class="select-style" -->
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
        <input type="text" name="barcode"> <br> <br>
        <label>herkomst:</label> <br>
        <input type="text" name="herkomst" value=""> <br><br>
        <label>fabrikant:</label> <br>
        <input type="text" name="fabrikant" value=""> <br><br>
        <input type="submit" name="submit" value="add part"><br><br>
    </form>
</div>