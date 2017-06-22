<div class="container">
    <h1> Add a new parttype</h1>
    <form method="post" action="<?php echo URL; ?>part/PostCheck">
        <form>
                <label for="sel1">Select part (select one):</label>
                <select class="form-control" id="sel1">
                    <option value="ram">RAM</option>
                    <option value="processor">Processor</option>
                    <option value="fan">Fan</option>
                    <option value="voeding">Power Supply</option>
                    <option value="case">Case</option>
                    <option value="processor cooler">Processor cooler</option>
                    <option value="grafsiche kaart">Graphics card</option>
                    <option value="moeder board">Motherboard</option>
                    <option value="hardeschijf/ssd">HDD/SSD</option>
                </select>
        <br>
        <label> barcode: </label> <br>
        <input type="text" name="barcode"> <br> <br>
        <label>herkomst:</label> <br>
        <input type="text" name="herkomst" value=""> <br><br>
        <label>fabrikant:</label> <br>
        <input type="text" name="fabrikant" value=""> <br><br>
        <input type="submit" name="submit" value="add part"><br><br>
    </form>
</div>