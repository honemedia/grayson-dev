<?php include("header.html"); ?>



<div id="mainContainer" >
	<header>
		<h1><a class="logo" href="#home">Grayson Furniture</a></h1>
		<nav id='nav' role='navigation'></nav>
	</header>
	<div class="contact-page-wrap">
		<div class="sidebar">
			<div class="section-title">Contact Us</div>
			<p>Send a message from the contact form or you can contact us directly from the details provided below. Please allow one business day for a response.</p>
			
			<div class="contact-title">
				<div class="contact-arrow-wrap">
					<img class="contact-title-arrow" src="media/img/arrow.png">
				</div>
				<div class="contact-title-wrap">
					<p>address</p>
					<div class="contact-description">
						504 N Glenfield Road<br />New Albany, MS 38652
					</div>
				</div>
			</div>
			
			<div class="contact-title">
				<div class="contact-arrow-wrap">
					<img class="contact-title-arrow" src="media/img/arrow.png">
				</div>
				<div class="contact-title-wrap">
					<p>phone</p>
					<div class="contact-description">
						(662)534-9800
					</div>
				</div>
			</div>
			
			<div class="contact-title">
				<div class="contact-arrow-wrap">
					<img class="contact-title-arrow" src="media/img/arrow.png">
				</div>
				<div class="contact-title-wrap">
					<p>fax</p>
					<div class="contact-description">
						(662)534-9805
					</div>
				</div>
			</div>
			
			<div class="contact-title">
				<div class="contact-arrow-wrap">
					<img class="contact-title-arrow" src="media/img/arrow.png">
				</div>
				<div class="contact-title-wrap">
					<p>email sales</p>
					<div class="contact-description">
						<a href="mailto:sales@graysonfurntiture.com?subject=A%20message%20from%20Graysonfurniture.com">sales@graysonfurniture.com</a>
					</div>
				</div>
			</div>
			
			<div class="contact-title">
				<div class="contact-arrow-wrap">
					<img class="contact-title-arrow" src="media/img/arrow.png">
				</div>
				<div class="contact-title-wrap">
					<p>email support</p>
					<div class="contact-description">
						<a href="mailto:support@graysonfurntiture.com?subject=A%20message%20from%20Graysonfurniture.com">support@graysonfurniture.com</a>
					</div>
				</div>
			</div>
			
		</div><!-- END .sidebar -->
		
		<div class="detail-section-spacer">&nbsp;</div>
		
		<div id="contact-form">	
							<form id="contact-us" method="post" action="process.php">
								<fieldset>
									<input type="text" name="firstname" placeholder="First Name" title="required: please enter your first name" class="required">
									<input type="text" name="lastname" placeholder="Last Name" title="required: please enter your last name" class="required">
									<input type="text" name="org" placeholder="Organization" title="required: please enter your organization" class="required">
									<input type="text" name="phone" placeholder="Phone Number" title="required: please enter your phone number" class="required">
									<input type="text" name="email" placeholder="Email Address" title="required: please enter your email address" class="required email">
									<input type="text" name="offer" placeholder="Offer Code" >
									<input type="submit" name="submit" class="button" id="submit" value="Download Free Trial Now"  />
								</fieldset>
							</form>
						</div>
						<div id="contact-form-thanks">
							<p>Thanks! Your request has been sent.</p>
						</div>
	</div><!-- END .contact-page-wrap -->

<?php include("footer.html"); ?>	

</div><!-- END #mainContainer -->




<script type="text/javascript"  src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.validate.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.placeholder.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.form.js"></script>
<script type="text/javascript"  src="media/js/main.js"></script>

<script type="text/javascript">
	//CONTACT FORM
$(function(){
	$('#contact-form-thanks').hide();
	$('#contact-us').validate({
		submitHandler: function(form) {
			$(form).ajaxSubmit({ url: 'process.php', success: function() 
				{ $('#contact-form-thanks').show(); }
			});
		}
	});         
});



/* TEXT SELECT FUNCTION */ 
function highlight(field) {
	field.focus();
	field.select();
}

/* MAKE HTML5 PLACEHOLDERS WORK FOR FIREFOX */
function activatePlaceholders() {
		var detect = navigator.userAgent.toLowerCase(); 
		if (detect.indexOf("safari") > 0) return false;
		var inputs = document.getElementsByTagName("input");
		for (var i=0;i<inputs.length;i++) {
			if (inputs[i].getAttribute("type") == "text") {
				var placeholder = inputs[i].getAttribute("placeholder");
				if (placeholder.length > 0) {
					inputs[i].value = placeholder;
					inputs[i].onclick = function() {
						if (this.value == this.getAttribute("placeholder")) {
							this.value = "";
						}
						return false;
					}
					inputs[i].onblur = function() {
						if (this.value.length < 1) {
							this.value = this.getAttribute("placeholder");
						}
					}
				}
			}
		}
		
	}
	
	window.onload = function() {
		activatePlaceholders();
	}


</script>



</body>
</html>