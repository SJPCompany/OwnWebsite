<div class="container">
    <h1> Add a new part</h1>
    <form method="post">
        <label id='choose' for='options'> Select part </label> <br>
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
        <label> password: </label> <br>
        <input type="password" name="password"> <br> <br>
        <label>Email:</label> <br>
        <input type="email" name="email" value=""> <br><br>
        <input type="submit" name="submit" value="add part"><br><br>
    </form>
</div>