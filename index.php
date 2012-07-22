<?php include("header.html"); ?>


<div id="mainContainer">
	<header>
	<!-- TESTING -->
		<h1><a class="logo" href="">Grayson Furniture</a></h1>
		<nav id='nav' role='navigation'></nav>
	</header>
	
	<div class="homeFeaturedPlay"><img src="media/img/arrow.png" alt="" /></div>
	<div class="homeFeaturedWording"></div>
	<div id="homeFeatured"></div>
	
	<div class="grayson-difference-spacer-top"></div>
	<div class="grayson-difference">
		<img class="accent-left" src="media/img/accent-left.png" alt="" />
			the grayson difference
		<img class="accent-right" src="media/img/accent-right.png" alt="" />
	</div>
	<div class="grayson-difference-spacer-btm"></div>
	
	
	<div class="grayson-difference-columns">
		<p class="home-left-column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		
		<p class="home-right-column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	
		<div class="home-module-container">
			<div class="home-info-module">
				<img src="media/img/home1.png" alt="" />
				<div class="home-info-module-title">Comfortable Cushion Covers</div>
				<p class="home-info-module-description">100% cotton cover adds comfort and effectively retains fill. Internal baffle construction prevents fill from shifting
				</p>
			</div>
			
			<div class="home-info-module">
				<img src="media/img/home1.png" alt="" />
				<div class="home-info-module-title">Seat Cushion Construction</div>
				<p class="home-info-module-description">Foam core provides additional support where it is needed most. Fill envelope surrounds foam core and provides luxurious comfort.</p>
			</div>
			
			<div class="home-info-module-last">
				<img src="media/img/home1.png" alt="" />
				<div class="home-info-module-title">FeatherBlend Filling</div>
				<p class="home-info-module-description">Featherblend filling comprised of feather and down or softness and Ultima Supreme polyester fiber for enhanced resiliency and loft.</p>
			</div>
		</div><!-- END .home-module-container -->
	</div><!-- END .grayson-difference-columns -->
	
<?php include("footer.html"); ?>

</div><!-- END #mainContainer -->


<script type="text/javascript" src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.cycle.js"></script>
<script type="text/javascript" src="media/js/main.js"></script>


<script type="text/javascript">
//$('#mainContainer').hide();
$(document).ready(function() {
	getData("GET", "http://honemedia.com/dev/grayson/r2/db.php?callback=collectionData&inventory=collections&query=itemID","featuredCollectionData","callback=featuredCollectionData&errorCallBackName=featuredCollectionDataError");
});

$('#homeFeatured').click(function() { 
    $('#homeFeatured').cycle('toggle');
    $('.homeFeaturedPlay').toggle(); 
});

function onBefore(){
	$('.homeFeaturedWording').fadeOut('fast');
	

	var collectionData = $(this).attr('id').split("-");
	var collectionName = collectionData[collectionData.length-1];
	
	$('.homeFeaturedWording').html('<span class="collection-home-title">'+$(this).attr('class')+'</span> <span class="collection-home-brand">'+collectionName+'</span> <img src="media/img/arrow.png" />')
	
	$('.homeFeaturedWording').fadeIn('slow');
	
	}

</script>



</body>
</html>