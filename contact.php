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
			<form action="#">
				<div class="formInputLabel">Topic</div>
				<select name="subject" title="Please select a subject" class="required text-regit"> 
					<option value="Just Saying Hello">Just Saying Hello</option>
					<option value="Business Inquiry">Business Inquiry</option>
					<option value="Career Opportunities">Career Opportunities</option>
				</select>
				
				<div class="formInputLabel">Your Name</div>
				<input class="formInput" type="text" />
				
				<div class="formInputLabel">Your Email Address</div>
				<input class="formInput" type="text" />
				
				<div class="formInputLabel">Message</div>
				<textarea class="formInputMessage"></textarea>
				
				<div id="submitButton" value="SEND MESSAGE"><span>send message</span><span class="icon-btn-arrow"></span></div>
				
			</form>
			
		</div>
	</div><!-- END .contact-page-wrap -->

<?php include("footer.html"); ?>	

</div><!-- END #mainContainer -->




<script type="text/javascript"  src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="media/js/libs/validate.min.js"></script>
<script type="text/javascript"  src="media/js/libs/jquery.placeholder.js"></script>
<script type="text/javascript"  src="media/js/main.js"></script>



</body>
</html>