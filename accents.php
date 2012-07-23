<?php include("header.html"); ?>

<div id="mainContainer" >
	<header>
		<h1><a class="logo" href="index.php">Grayson Furniture - Accent Pieces</a></h1>
		<nav id="nav" role="navigation"></nav>
	</header>
	
	<!-- ******** -->
	<!-- CHAIRS   -->
	<!-- ******** -->
	<div class="accent-section-spacer-top"></div>
		<div class="accent-section-title">
			<img class="accent-left" src="media/img/accent-left.png" alt="" /> 
				chairs 
			<img class="accent-right" src="media/img/accent-right.png" alt="" />
		</div>
	<div class="accent-section-spacer-btm"></div>
	
	<div id="accent-module-chairs-container" class="accent-module-container">
		<ul></ul>
	</div>
	
	
	<!-- ******** -->
	<!-- OTTOMANS -->
	<!-- ******** -->
	<div class="accent-section-spacer-top"></div>
		<div class="accent-section-title">
			<img class="accent-left" src="media/img/accent-left.png" alt="" /> 
				ottomans 
			<img class="accent-right" src="media/img/accent-right.png" alt="" />
		</div>
	<div class="accent-section-spacer-btm"></div>
	
	<div id="accent-module-ottomans-container" class="accent-module-container">
		<ul></ul>
	</div>
	
	<?php include("footer.html"); ?>	

</div><!-- END #mainContainer -->



<script type="text/javascript" src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="media/js/main.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	getData("GET", "http://honemedia.com/dev/grayson/r2/db.php?callback=collectionAccentsData&inventory=products&query=collectionID","collectionAccentsData","callback=collectionAccentsData&errorCallBackName=collectionAccentsDataError");
	
	
    
});

function doIt(collectionName,collectionID){
	alert(collectionName);
	var loc = "details.php?collection="+collectionName+"&id="+collectionID;
	document.location.href=url;
}


function collectionAccentsData(data){
	
	$.each(data, function(i) { //itemID
		
		var moduleData = '<li><a href="#"><div id="'+this.collectionID+'" class="accent-module" title="'+this.itemName+'"><img src="media/img/photos/details-220x174/'+this.photo+'" /><div class="accent-module-title" style="">'+this.collectionName+'</div><div class="accent-module-type">'+this.itemName+'</div><div class="accent-module-brand">'+this.collectionType+'</div></div></a></li>';
		
		if(this.itemType == "chair"){ 
			$("#accent-module-chairs-container ul").append(moduleData);
		}else if(this.itemType == "ottoman"){
			$("#accent-module-ottomans-container ul").append(moduleData);
		}		
	
	});
	
	function collectionAccentsDataError(data){
	
	}
	
	$(".accent-module").click(function() {
    	//alert(this.id)
    	document.location.href = "details.php?id="+this.id+"&type="+this.title; //accent=true&

   	 });
	
}
</script>

</body>
</html>