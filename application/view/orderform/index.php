<div class="container">
<script type="text/javascript" src="<?php echo URL; ?>/public/js/upload.js"></script>
<h1>OrderFormulier</h1>
    <form method="POST" action="<?php echo URL; ?>home/">
        <label> parttype: </label> <br>
        <input type="text" name="parttype"> <br> <br>
        <label> manufacturer: </label> <br>
        <input type="text" name="manufacturer"> <br> <br>
        <label> barcode: </label> <br>
        <input type="text" name="barcode"> <br> <br>
        <label> fru: </label> <br>
        <input type="text" name="fru"> <br> <br>
        <label> amount: </label> <br>
        <input type="text" name="amount"> <br> <br>
        <label> country: </label> <br>
        <input type="text" name="country"> <br> <br>
        <label> price: </label> <br>
        <input type="text" name="price"> <br> <br>
        <label> year: </label> <br>
        <input type="text" name="year"> <br> <br>
    </form>
    <div id="wrapper">
        <input type="file">
        <div id="drop-area">
            <h3 class="drop-text">Drag and Drop Images Here</h3>
        </div>
</div>