<?php include("header.html"); ?>

<link media="all" rel="stylesheet" href="media/css/grayson.base.css?v=2" />
<div id="mainContainer">
	<header>
	<!-- TESTING -->
		<h1><a class="logo" href="">Grayson Furniture</a></h1>
		<nav id='nav' role='navigation'></nav>
	</header>
	
	<div class="hero-mantle-wrap">
		<div class="hero-mantle-label">Featured Collections</div>
		<div class="homeFeaturedPlay"><img src="media/img/icon-btn-arrow.png?v=2" alt="" /></div>
		<div class="homeFeaturedWording"></div>
		<div id="homeFeatured"></div>
	</div>
	
		
	
	<div class="grayson-difference-spacer-top"></div>
	<div class="grayson-difference">
		<img class="accent-left" src="media/img/accent-left.png" alt="" />
			the grayson difference
		<img class="accent-right" src="media/img/accent-right.png" alt="" />
	</div>
	<div class="grayson-difference-spacer-btm"></div>
	
	
	<div class="grayson-difference-columns">
		<p>Grayson harkens back to a time when upholstered furniture was designed with the goal of improving the living environment of the Customer. Style and Quality were front and center. Mass consumerism had not yet assaulted our world. Graysonis Made in America at an Employee-owned factory. The skilled workforce has roots reaching back over 50 years. Our pledge is to deliver upholstered furniture designed to provide decades of enjoyment to your family, and to steadfastly stand behind our product.
		</p>
	
		<div class="home-module-container">
			<div class="home-info-module">
				<img src="media/img/home-grayson-fabrics.jpg" alt="" />
				<div class="home-info-module-title">Luxurious Fabrics</div>
				<p class="home-info-module-description">Grayson fabrics are selected for their luxurious feel, timeless style and lasting durability.</p>
			</div>
			
			<div class="home-info-module">
				<img src="media/img/home-grayson-cushion.jpg" alt="" />
				<div class="home-info-module-title">Cushion Construction</div>
				<p class="home-info-module-description">Grayson cushions are at the core of our furniture.  Our Ultra-soft, high density foam cores are blanketed by sumptuous Pacific Coast Featherblend casings.</p>
			</div>
			
			<div class="home-info-module-last">
				<img src="media/img/home-grayson-pacific-coast.jpg?v=2" alt="" />
				<div class="home-info-module-title">Pacific Coast Featherblend</div>
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
	getData("GET", "db.php?callback=collectionData&inventory=collections&query=itemID","featuredCollectionData","callback=featuredCollectionData&errorCallBackName=featuredCollectionDataError");
});

$('#homeFeatured').click(function() { 
    $('#homeFeatured').cycle('toggle');
    $('.homeFeaturedPlay').toggle(); 
});

function onBefore(){
	$('.homeFeaturedWording').fadeOut('fast');
	

	var collectionData = $(this).attr('id').split("-");
	var collectionName = collectionData[collectionData.length-1];
	
	$('.homeFeaturedWording').html('<span class="collection-home-title">'+$(this).attr('class')+'</span> <span class="collection-home-brand">'+collectionName+'</span> <img src="media/img/icon-btn-arrow.png" class="feature-btn-arrow" />')
	
	$('.homeFeaturedWording').fadeIn('slow');
	
}


</script>



</body>
</html>