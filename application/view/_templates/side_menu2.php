<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                   Scan System
                </a>
            </li>
            <li>
                <a href="<?php echo URL; ?>home/startpage">Home</a>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Database</a>
            </li>
            <li>
                <a href="#">empty</a>
            </li>
            <li>
                <a href="#">empty</a>
            </li>
            <li>
                <a href="#">empty</a>
            </li>
            <li>
                <a href="#">empty</a>
            </li>
            <li>
                <a href="#">empty</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    <h1>Admin Page</h1>
                    <p>This is the main page for the administrative tools.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>