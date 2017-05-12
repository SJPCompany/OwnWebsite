<div class="container">
<script type="text/javascript" src="<?php echo URL; ?>/public/js/upload.js"></script>
<h1>addpartformulier</h1>
    <form method="POST" action="<?php echo URL; ?>AddPart/sendform" enctype="multipart/form-data">
        <label> parttype: </label> <br>
        <input type="text" name="parttype"> <br> <br>
        <label>partserie</label> <br>
        <input type="text" name="partserie"> <br> <br>
        <label> other: </label> <br>
        <input type="text" name="other"> <br> <br>
        <label> manufacturer: </label> <br>
        <input type="text" name="manufacturer"> <br> <br>
        <label> barcode: </label> <br>
        <input type="text" name="barcode"> <br> <br>
        <label> fru: </label> <br>
        <input type="text" name="fru"> <br> <br>
        <label> amount: </label> <br>
        <input type="number" name="amount"> <br> <br>
        <label> country: </label> <br>
        <input type="text" name="country"> <br> <br>
        <label> price: </label> <br>
        <input type="number" name="price"> <br> <br>
        <label> year: </label> <br>
        <input type="number" name="year"> <br> <br>
        <input type="file" name="image" id="image">
        <input type="submit" name="submit" value="submit"><br><br>

<!--
        <div id="wrapper">

            <div id="drop-area">
                <h3 class="drop-text">Drag and Drop Images Here</h3>
                <input type="file" name="image">
                <input type="submit" name="submit" value="submit"><br><br>
            </div>



    </form>
</div>
