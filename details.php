<?php include("header.html"); ?>
<div id="mainContainer" >
	<header>
		<h1><a class="logo" href="#home">Grayson</a></h1>
		<nav id='nav' role='navigation'></nav>
	</header>
	
	<div class="inner-wrap">
		<div class="sidebar">
			<div class="sidebar-collection-name"></div>
			<div class="sidebar-item-name"></div>
			
			<div id="tab-wrapper">
				
				<ul class="tab-nav">
					<li class="nav-two"><a href="#overview" class="current">overview</a></li>
					<li class="nav-one"><a href="#fabrics" >fabrics</a></li>
					<li class="nav-three"><a href="#schematics">schematics</a></li>
				</ul>
				
					<section id="overview">
						<h3 class="item-price">Loading...</h3>
						<p class="item-description"></p>
						<p class="item-disclaimer"></p>
						<div class="sidebar-label">dimensions:</div>
						<div class="dimension-row">
							<div class="dimension-wrap dimension-wrap-first">
								<div class="dimension-icon">
									<img src="media/img/icon-dimension-width.png" alt="icon-dimension-width" width="19" height="11" />
								</div>
								<div class="dimension-value"><span class="dimension-value-width"></span><span class="dimension-unit">"</span></div>
								<div class="dimension-label">width</div>
							</div>
							
							<div class="dimension-wrap">
								<div class="dimension-icon">
									<img src="media/img/icon-dimension-height.png" alt="icon-dimension-width" width="19" height="19" />
								</div>
								<div class="dimension-value"><span class="dimension-value-height"></span><span class="dimension-unit">"</span></div>
								<div class="dimension-label">height</div>
							</div>
							
							<div class="dimension-wrap">
								<div class="dimension-icon dimension-icon-depth">
									<img src="media/img/icon-dimension-depth.png" alt="icon-dimension-width" width="19" height="19" />
								</div>
								<div class="dimension-value"><span class="dimension-value-depth"></span><span class="dimension-unit">"</span></div>
								<div class="dimension-label">depth</div>
							</div>
						</div><!-- END .dimension-row -->
						
						<a class="dealer-btn">
							Find a Dealer<span class="icon-btn-arrow"></span>
						</a>
					</section>
					
					
					<section id="fabrics">
						<div class="sidebar-featured-name">featured fabrics</div>
						<div id="fabric-collections">
						</div>
						
						<a class="dealer-btn">
							Find a Dealer<span class="icon-btn-arrow"></span>
						</a>
					</section>	
					
					<section id="schematics">
						<p>These schematics represent the configuration options available for this item.</p>
						<div class="schematic-img-wrap"></div>
						
						<a class="dealer-btn">
							Find a Dealer<span class="icon-btn-arrow"></span>
						</a>
					</section>

				
			</div><!-- END .tab-wrapper -->
		
		
		</div><!-- END .sidebar -->
		
		<div class="detail-section-spacer">&nbsp;</div>
		
		<div class="detail-body-wrap">
			<div class="img-loader"></div>
			<div class="img-selected"> 
				<a href="" id="Zoomer" class="MagicZoom" rel="zoom-position: inner; show-title:false; show-loading:false; click-to-deactivate: true; preload-selectors-big:true;  click-to-activate: true;">
					<img src="media/img/schematics/blank.png" alt="blank" width="660" height="400" />
				</a>
			</div>
			
			<div class="img-frame"></div>
			<div class="detail-body-tns"><ul></ul></div>		
		
		</div><!-- END .detail-body-wrap -->
		
		
	</div><!-- END .inner-wrap -->


	<?php include("footer.html"); ?>
	
</div><!-- END #mainContainer -->

<script type="text/javascript" src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.mousewheel.min.js"></script>

<script type="text/javascript" src="media/js/libs/organicTabs/jquery.organictabs.js"></script>
<script type="text/javascript" src="media/js/libs/magiczoom/magiczoom.js"></script>
<script type="text/javascript" src="media/js/main.js"></script>

<script type="text/javascript">		 	
	//Tab navigation system. Calls the organicTabs plugin
	$(function() {
		$("#tab-wrapper").organicTabs();
		
	});
</script>

<script type="text/javascript">

if(getURLParameter('id')=='null'){document.location.href = "collections.php"}

$(document).ready(function() {
	
	getData("GET", "http://honemedia.com/dev/grayson/r2/db.php?callback=collectionDetailsData&inventory=products&query=collectionID&id="+getURLParameter('id'),"collectionDetailsData","callback=collectionDetailsData&errorCallBackName=collectionDetailsDataError");
	
	
        
}); //end document.ready
</script>


</body>
</html>