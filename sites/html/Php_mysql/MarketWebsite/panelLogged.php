<html>
<?php include '.head.html';?>
<body>
		
<div id="wrapper">

<!-- Sidebar -->
		<?php include '.sidePanel/menu.html';?>
<!-- /#sidebar-wrapper -->

<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
		<?php include 'button/buttonMenuCp.html';?>
			<div class="padd" 
			
			</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
	<script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>