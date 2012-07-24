<?php include("header.html"); ?>

<div id="mainContainer">
<header>
	<h1><a class="logo" href="index.php">Grayson Furniture - Store Search</a></h1>
	<nav id='nav' role='navigation'></nav>
</header>
<div id="search-collection-id"></div>
<div class="stores-wrapper">



	<div id="form-container">
		<form id="user-location" method="post" action="">
		    <div id="form-input">
				<div id="dealer-search-status">Dealer Location Search:</div>
				<div class="dealer-input-wrap">
					<input type="text" id="address" name="address" value="Enter a City, Address, or ZIP Code" onfocus="if (this.value == 'Enter a City, Address, or ZIP Code') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter a City, Address, or ZIP Code';}" />
					<input type="submit" id="submitButton" value="Go" name="submit" />
				</div>
			</div>
		    
<!-- 		    <input type="submit" name="submit" class="button" id="submit" value="go"  /> -->
		    <!--<div id="goButton" value="GO" name="submit" onclick='document.forms["user-location"].submit();' value="GO"><span>GO</span><span class="icon-btn-arrow"></span></div>-->
		   <!-- <div type="submit" onclick='document.forms["dealerform"].submit();' id="goButton" class="goButton" name="submit" >Go</div> -->

		</form>
	</div>
	
	<div id="map-container">
	<div id="statusMessage"></div>
		<div id="loc-list">
		    <ul id="list"></ul>
		</div>
		<div id="map"></div>
	</div>
 </div><!-- END .details-wrapper -->

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
		$('#search-collection-id').html(idParam != 'null'?'<span class="search-collection-id-text">Search Collection ID:&nbsp; </span> ' + idParam:'');
		var url = 'db.php?inventory=dealers&query=collections'+id;
		$('#map-container').storeLocator({'jsonData': true, 'dataLocation': url});
	});
</script>
</body>
</html>