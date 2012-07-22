var cssTransitionSupported = false;

$('head').appendTo('head.html');
//$('footer').load('footer.html');

$(document).ready(function(){isCssTransitionSupported();init()});

$('#nav').load('nav.html', function() {
	$('#nav ul li').each(function(i) {
		if(window.location.href.match($('a',this).attr('href'))){
			$('div',this).addClass('select');
			$('a',this).addClass('selected');
		}else if(window.location.href.match('details') && i==0){
			
			$('#nav-collections div').addClass('select');
			$('#nav-collections a').addClass('selected');
		}
	});
	$(".nav-container .select").addClass('arrow-down');
	$(".nav-container li").on("mouseover mouseout", function(e){
	//$('div',this)[e.type=='mouseout'&!$('div',this).hasClass('select')?'removeClass':'addClass']('arrow-down'); /*REMOVED ARROW show/hide on hover/out*/
	});

});


function init(){}

$('#sendmail').click(function() {
    sendEmail();
});

/* Possibly have conditional for use with ipad only.. to eleviate the cache:false */
function getData(type,url,callback,data,errorCallback,errorCallbackArgs){ $.ajax({ type: type, url: url, data:data,  cache: false, jsonp: true, jsonpCallback: callback, dataType: 'jsonp', error:function (xhr, ajaxOptions, thrownError){ if(ajaxOptions == "error" || ajaxOptions == "timeout" || ajaxOptions == "abort") {   if(thrownError == "OK" || thrownError.replace(/\s/g, "") == "NotFound" || thrownError.replace(/\s/g, "") == "InternalServerError"){/* backup plan here */ return} }
    if(errorCallback) { onDataError(errorCallback,[errorCallbackArgs,xhr, ajaxOptions, thrownError]); /**/} } });}

//getData("POST", "/sessions.json", "gradePrepAdminData", "callbackName=gradePrepAdminData&errorCallBackName=signOnError&session[email_address]="+$('#email').val()+"&session[password]="+$('#password').val(),"signOnError");


//Success and Error event handler functions for index.html data call
function featuredCollectionDataError(data){ /*alert(data)*/ }
function featuredCollectionData(data){

	var id;
	$('#mainContainer').show();
	$.each(data, function() {
	
	
	if(this.featured == 'y'){
	$("#homeFeatured").append('<img alt="'+this.description+'" class="'+this.collectionName+'" id="'+this.itemID+'" src="media/img/photos/features-940x450/'+this.photo+'" />'); 
	}
	   
    });
	
	$('#homeFeatured img').on("click", function(){
			//document.location.href = "details.html?collection"+this.collectionName+"&id="+$(this).attr('id');
			document.location.href = "details.php?id="+$(this).attr('id');

		});
			
	$('#mainContainer').fadeIn();
   
    $('#homeFeatured').cycle({
		fx: 'fade',
		speed:3600,
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
	
	var itemId = obj.itemID;
	$(".dealer-btn").on("click", function(){
		document.location.href = "stores.php?id="+itemId;
	});
	
	
	
	$('.img-selected a').attr('href','media/img/photos/details-zoom/'+obj.photo);
	$('.img-selected a img').attr('src','media/img/photos/details-660x400/'+obj.photo);
	
	
	$('h2.trigger').unbind('click');
	$("h2.trigger").click(function(){
		$(this).toggleClass("active").prev().slideToggle("fast");
		return false; //Prevent the browser jump to the link anchor
	});
	
}

function parseDetails(obj){
		
		$.each(obj, function(i) {
		
		var type = getURLParameter('type');
		//alert(this.itemName + ' vs ' + type);
		if(type != 'null'){
			if(this.itemName == type){ setDetails(this) } 
		}else{
			if(i==0)setDetails(this);
		}
	   
		/*
$('.detail-body-tns').append('<a id="'+i+'" href="media/img/photos/details-zoom/'+this.photo+'" rel="zoom-id:Zoomer;" rev="media/img/photos/details-660x400/'+this.photo+'"><img src="media/img/photos/details-220x174/'+this.photo+'"  /><div style="text-align:center">'+this.itemName+'</div><div style="clear:left;text-align:center">'+this.priceRange+'</div></a>');
	});
*/	
		$('.detail-body-tns ul').append('<li> <a id="'+i+'~'+this.itemName+'" href="media/img/photos/details-zoom/'+this.photo+'" rel="zoom-id:Zoomer;" rev="media/img/photos/details-660x400/'+this.photo+'"><img src="media/img/photos/details-220x174/'+this.photo+'"  /><div class="detail-tn-text-wrap"><div class="detail-tn-text-name">'+this.collectionName+' '+this.itemName+'</div><div class="detail-tn-text-price">'+this.priceRange+'</div></div></a></li>');
	});	
	
	//.replace("-"," ")
	 $(".detail-body-tns a").unbind('click');
	 $(".detail-body-tns a").click(function() {
		scrollTo(165);
		$(".detail-body-tns a").removeClass('tn-selected');
		$(this).addClass('tn-selected');
		
		//id = this.id.split("-")[0];
		window.history.replaceState('Object', 'Title', location.href.split('&')[0]+"&type="+this.id.split("~")[1]);
	 	setDetails(obj[this.id.split("~")[0]]);    	
	 });
	 
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
/*$(document).bind("contextmenu",function(e){return false;});*/

function isCssTransitionSupported(){return false; cssTransitionSupported = $('#test').transition({opacity:1}) ? false : true}

function doEffect(o,props,speed,isJS){$(o)[isCssTransitionSupported()==false&isJS==false?'transition':'animate'](props,((10/speed)*1000))}

function scroll(o,offset){$('html,body').animate({scrollTop: $(o).offset().top + (!offset ? 0 : offset)}, 800);}

function sendEmail(datastr){
	var valid = true;
	var name = $("#contactName").val();
	var mail = $("#contactEmail").val();
	var message = $("#contactMessage").val();
	
	if (name.length<1) {
		valid = false;
		$("#contactName").css('borderColor','red');
		$("#contactName").attr('placeholder','Please type your name');	
		}
	
	if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
		valid = false;
		$("#contactEmail").css('borderColor','red');
	}
	
	if (message.length<1) {
		valid = false;
		$("#contactMessage").css('borderColor','red');
	}
	
	if (valid==true) {
		var params ='contactName=' + name + '&contactEmail=' + mail + '&contactMessage=' + message;
		//$("#contactFormStatus").css("display", "block");
		//$("#contactFormStatus").fadeIn("slow");
		//setTimeout("send('"+datastr+"')",2000);
		send(params)
	}
	else {
		//$("#contactFormStatus").fadeIn("slow");
		//$("#contactFormStatus").html(valid);
	}
	return false;
}

function send(data){

	$.ajax({
	type: "POST",
	url: "http://gomove.mobi/sendmail.php",
	data: data,
	cache: false,
	success: function(html){
	//$("#contactFormStatus").fadeIn("slow");
	//$("#contactFormStatus").html(html);
	//setTimeout('$("#contactFormStatus").fadeOut("slow")',2000);
	}
	})

}