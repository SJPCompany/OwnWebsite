    <script>
        var url = "<?php echo URL; ?>";
    </script>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script src="<?php echo URL; ?>js/login.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>js/bootstrap.second.js"></script>
    <script src="<?php echo URL; ?>public/js/application.js"></script>

    <!-- Jquery draggble scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( ".draggable" ).draggable();
        } );

        $('#choose').click(function(){
            $(this).siblings('select').css('width', $(this).outerWidth(true)).toggle();
        });
    </script>

        <div title="SJP is a company made by Stef Bakker, Justin van De Laar en Pieter Mourik powered by ( ͡° ͜ʖ ͡°)" class="footer">
            <p>Copyright &copy; 2017 SJP company</p>
        </div>
    </div>
    </div>
</body>
</html>
