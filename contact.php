<?php include("header.html"); ?>



<div id="mainContainer" >
	<header>
		<h1><a class="logo" href="#home">Grayson Furniture</a></h1>
		<nav id='nav' role='navigation'></nav>
	</header>
	<div class="contact-page-wrap">
		<div class="sidebar">
			<div class="section-title">Contact Us</div>
			<p>
			Feel free to contact us directly about any Grayson furniture inquiry. Please allow one business day for a response.</p>
			
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
						(662) 534-9800
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
						(662) 534-9805
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
						<a href="mailto:sales@graysonfurniture.com?subject=A%20message%20from%20Graysonfurniture.com">sales@graysonfurniture.com</a>
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
						<a href="mailto:support@graysonfurniture.com?subject=A%20message%20from%20Graysonfurniture.com">support@graysonfurniture.com</a>
					</div>
				</div>
			</div>
			
		</div><!-- END .sidebar -->
		
		<div class="detail-section-spacer">&nbsp;</div>
		
		<div id="contact-form">	
			<form id="contact-us" method="post" action="process.php">
				<fieldset>
					<div class="formInputLabel">Topic *</div>
					<select name="subject" title="Required: please select a topic" class="required text-regit"> 
						<option value="">please select a topic</option>
						<option value="Just Saying Hello">Just Saying Hello</option>
						<option value="Business Inquiry">Business Inquiry</option>
						<option value="Career Opportunities">Career Opportunities</option>
					</select>
					
					<div class="formInputLabel">Your Name *</div>
					<input type="text" name="name" placeholder="" title="Required: please enter your name" class="required">
					
					<div class="formInputLabel">Your Email Address *</div>
					<input type="text" name="email" placeholder="" title="Required: please enter your email address" class="required email">
					
					<div class="formInputLabel">Message</div>
					<textarea class="formInputMessage" name="message"></textarea>
					
					<input type="submit" name="submit" class="button" id="submit" value="send message"  />
				</fieldset>
			</form>
		</div>
		<div id="contact-form-thanks">
			<p>Thanks! Your message has been sent.</p>
		</div>
	</div><!-- END .contact-page-wrap -->

<?php include("footer.html"); ?>	

</div><!-- END #mainContainer -->




<script type="text/javascript"  src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.validate.min.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.placeholder.js"></script>
<script type="text/javascript" src="media/js/libs/jquery.form.min.js"></script>
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



</script>



</body>
</html>