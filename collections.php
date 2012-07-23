<?php include("header.html"); ?>

<div id="mainContainer" >
	<header>
		<h1><a class="logo" href="index.php">Grayson</a></h1>
		<nav id='nav'></nav>
	</header>
	
	<div id="collections"  style="text-align:center"></div>
	
	<?php include("footer.html"); ?>

</div><!-- END #mainContainer -->

<!-- http:\//honemedia.com/dev/grayson/r2/ -->

<script type="text/javascript" src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="media/js/main.js"></script>

<script type="text/javascript">

	$(document).ready(function(){ 
		getData("GET", "db.php?callback=collectionData&inventory=collections&query=itemID","collectionData","callback=collectionData&errorCallBackName=collectionDataError");
	});
</script>

</body>
</html>