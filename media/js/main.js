//document.write(unescape("%3Cscript src='" + "media/js/libs/magiczoom/magiczoom.js' type='text/javascript'%3E%3C/script%3E"));

var cssTransitionSupported = false;
var curObj;

$('head').appendTo('head.html');


function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}


// Main nav selected states
$(document).ready(function(){isCssTransitionSupported();init()});

$('#nav').load('nav.html', function() {
	$('#nav ul li').each(function(i) {
		
		//if(window.location.href.match($('a',this).attr('href')) && i==0) { alert('hi');}
				//if(!window.location.href.match('index') && i==0) { alert('hi');}

		
		if(window.location.href.match($('a',this).attr('href'))){
			$('div',this).addClass('select');
			$('a',this).addClass('selected');
		}else if(window.location.href == "http://graysonfurniture.com/" || window.location.href == "http://www.graysonfurniture.com/" && i==0){
			
			$('#nav-home div').addClass('select');
			$('#nav-home a').addClass('selected');
		}else if(window.location.href.match('details') && i==0){
			
			$('#nav-collections div').addClass('select');
			$('#nav-collections a').addClass('selected');
		}
	});
	$(".nav-container .select").addClass('arrow-down');
	$(".nav-container li").on("mouseover mouseout", function(e){

	});
	
	
		


});


function init(){}



/* Possibly have conditional for use with ipad only.. to eleviate the cache:false */
function getData(type,url,callback,data,errorCallback,errorCallbackArgs){ $.ajax({ type: type, url: url, data:data,  cache: false, jsonp: true, jsonpCallback: callback, dataType: 'jsonp', error:function (xhr, ajaxOptions, thrownError){ if(ajaxOptions == "error" || ajaxOptions == "timeout" || ajaxOptions == "abort") {   if(thrownError == "OK" || thrownError.replace(/\s/g, "") == "NotFound" || thrownError.replace(/\s/g, "") == "InternalServerError"){/* backup plan here */ return} }
    if(errorCallback) { onDataError(errorCallback,[errorCallbackArgs,xhr, ajaxOptions, thrownError]); /**/} } });}



//Success and Error event handler functions for index.php data call
function featuredCollectionDataError(data){ /*alert(data)*/ }
function featuredCollectionData(data){
	

	var id;
	$('#mainContainer').show();
	$.each(data, function() {
	
	
	if(this.featured == 'y'){
	$("#homeFeatured").append('<img alt="'+this.itemID+'" class="'+this.collectionName+'" id="'+this.itemID+'" src="media/img/photos/features-940x450/'+this.photo+'" />'); 
	}
	   
    });
		
	$('#homeFeatured img, .homeFeaturedWording').on("click", function(){
			document.location.href = "details.php?id="+$(this).attr('id');

		});
			
	
			
	$('#mainContainer').fadeIn();
   
    $('#homeFeatured').cycle({
		fx: 'fade',
		speed:3500,
		timeout: 6000,
		before:  onBefore
	} );

}	
	

function collectionDataError(data){ }
function collectionData(data){
	$("#collections").empty();
	$.each(data, function(i) {
	
	var brandName = this.itemID.split(/[-]+/);
	var className = i+1==data.length?"collection-last":"collection";

		$("#collections").append('<div class="'+className+'"><div class="collection-text"><div class="collection-title">'+this.collectionName+'</div><div class="collection-brand">'+this.collectionType+'</div></div><img alt="'+this.collectionName+'" id="'+this.itemID+'" class="collection-photo" src="media/img/photos/collections-660x320/'+this.photo+'" /></div>');
		
	    });
	    
		
		$(".collection, .collection-last").on("click", function(){
			 //document.location.href = "details.html?collection="+$(".collection-photo",this).attr('alt')+"&id="+$(.collection-photo",this).attr('id');
			 document.location.href = "details.php?id="+$(".collection-photo",this).attr('id');
	    });
}

function collectionDetailsDataError(data){ /*alert(data)*/ }
function collectionDetailsData(data){
	//alert(data.length); /*  If length ever equals 2, then that is indication of 2 database entries with duplicate ItemID.. which is bad. :)
	
	$('#tab-wrapper').css('visibility','visible');
	parseDetails(data);	    
}

function setDetails(obj){
	
	

	
	scrollTo(166);
	$('.img-frame').hide();
	
	$('.detail-body-tns ul').removeClass('tn-selected');
	
	$('.img-selected a').attr('href','media/img/photos/details-zoom/'+obj.photo);
	$('.img-selected a img').attr('src','media/img/photos/details-660x400/'+obj.photo);
	
	$("#fabric-collections").empty();
	$(".schematic-img-wrap").empty();
		
	$('.sidebar-collection-name').html(obj.collectionName+" Collection");
	$('.item-price').html(obj.priceRange);
	$('.item-description').html(obj.description);
	$('.item-disclaimer').html(obj.disclaimer);
	$('.sidebar-item-name').html(obj.collectionName+' '+obj.itemName);
	
	var dimensions = obj.dimensions.split('x');
	$('.dimension-value-width').html(dimensions[0]);
	$('.dimension-value-height').html(dimensions[1]);
	$('.dimension-value-depth').html(dimensions[2]);
	
	
	if(obj.fabricOptions || obj.fabricFeatured){
	
	if(obj.fabricFeatured){$("#fabric-collections").append($("<div class='fabric-collection'>").load('fabric-collections/'+obj.fabricFeatured+'.html'));}

	if(obj.fabricOptions){$.each(obj.fabricOptions.split(','), function(i) {
		$("#fabric-collections").append('<div class="sidebar-featured-name">optional fabrics</div>')
		$("#fabric-collections").append($("<div class='fabric-collection'>").load('fabric-collections/'+this+'.html'));
	});
	}
	}
	
	$('.tab-nav .nav-three').toggle(obj.schematics != '');
	
	if(obj.schematics != ''){$.each(obj.schematics.split(','), function() {
		$(".schematic-img-wrap").append('<img alt="'+this+'" src="media/img/schematics/'+this+'" />');
	});}
	
	//var itemId = obj.itemID;
	//getURLParameter('id')
	$(".dealer-btn").on("click", function(){
		document.location.href = "stores.php?id="+getURLParameter('id');
	});
	
	
	
	$('h2.trigger').unbind('click');
	$("h2.trigger").click(function(){
		$(this).toggleClass("active").prev().slideToggle("fast");
		return false; //Prevent the browser jump to the link anchor
	});
	
	$.getScript('media/js/libs/magiczoom/magiczoom.js', function() {  });
	//.replace("-"," ")
	
$('.MagicZoomBigImageCont img').load(function() {
	 		$('.img-frame').show();
	     	
  		});
	 
	
	 	
	
}



function parseDetails(obj){
		
		//alert(parseDetails); 
		
		
		curObj = obj;
		selectedClass = '';
		
		
		
		$.each(obj, function(i) {
		
		var type = getURLParameter('type');
		//alert(this.itemName + ' vs ' + type);
		//alert(type != 'null');
		if(type != 'null'){
			if(this.itemName == type){selectedClass = "tn-selected"; setDetails(this) } else{selectedClass = "";}
		}else if(i==0){
			selectedClass = "tn-selected";
			setDetails(this);
		}else{selectedClass = "tn";}		
		
		
		$('.detail-body-tns ul').append('<li> <a class="'+selectedClass+'" id="'+i+'~'+this.itemName+'" href="media/img/photos/details-zoom/'+this.photo+'" rel="zoom-id:Zoomer;" rev="media/img/photos/details-660x400/'+this.photo+'"><img src="media/img/photos/details-220x174/'+this.photo+'"  /><div class="detail-tn-text-wrap"><div class="detail-tn-text-name">'+this.collectionName+' '+this.itemName+'</div><div class="detail-tn-text-price">'+this.priceRange+'</div></div></a></li>');
		
	});	
	
	
	
	$(".detail-body-tns a").click(function() {
				
	     		
	     		$(".detail-body-tns a").removeClass('tn-selected');
	     		$(this).addClass('tn-selected');
	     		
	     		setDetails(curObj[this.id.split("~")[0]]);
	     		 
	     		window.history.replaceState('Object', 'Title', location.href.split('&')[0]+"&type="+this.id.split("~")[1]);
	     	});
	
	 /**/
	 
	

}


function scrollTo(yPos){ $('html, body').animate({"scrollTop": yPos});}

function getPageHash(){if(window.location.hash) {var hash_val = window.location.hash.replace('#', '');return hash_val}}

function getURLParameter(name) {return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);}


function contactSuccess(){
	alert('contactSuccess'); 
}  

function contactFail(){
	alert('contactFail');
}
 
var curProductImgURL = "";

/* EVENTS ********************************************* */

$(window).resize(function() {});

function isCssTransitionSupported(){return false; cssTransitionSupported = $('#test').transition({opacity:1}) ? false : true}

function doEffect(o,props,speed,isJS){$(o)[isCssTransitionSupported()==false&isJS==false?'transition':'animate'](props,((10/speed)*1000))}

function scroll(o,offset){$('html,body').animate({scrollTop: $(o).offset().top + (!offset ? 0 : offset)}, 800);}

