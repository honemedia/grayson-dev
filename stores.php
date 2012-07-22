<?php include("header.html"); ?>

<div id="mainContainer">
<header>
	<h1><a class="logo" href="#home">Grayson Furniture - Store Search</a></h1>
	<nav id='nav' role='navigation'></nav>
</header>

<div class="details-wrapper">
	<div id="form-container">
		<form id="user-location" method="post" action="#">
		    <div id="form-input">
				<input type="text" id="address" name="address" placeholder="Enter a City, Address, or ZIP Code" />
			</div>
		    <div id="submit-btn"><input type="image" id="submit" name="submit" src="media/img/btn-submit.png" alt="Submit" /></div>
		</form>
	</div>
	
	<div id="map-container">
	<div id="statusMessage"></div>
		<div id="loc-list">
		    <ul id="list"></ul>
		</div>
		<div id="map"></div>
	</div>
 </div><!-- END .details-wrappe -->

<?php include("footer.html"); ?>	

</div>

<script type="text/javascript" src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="media/js/main.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="media/js/libs/jquery.storelocator.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var idParam = getURLParameter('id');
		var id = idParam != 'null' ? "&id="+idParam : '';
		var url = 'db.php?inventory=dealers&query=collections'+id;
		$('#map-container').storeLocator({'jsonData': true, 'dataLocation': url});
	});
</script>
</body>
</html>