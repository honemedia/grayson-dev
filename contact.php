<?php include("header.html"); ?>

<div id="mainContainer" >
	<header>
		<h1><a class="logo" href="#home">Grayson Furniture</a></h1>
		<nav id='nav' role='navigation'></nav>
	</header>
	
	<div style="float:left; width:328px; height:440px;  padding:10px; border-bottom:1px solid #1c1c1c; border-right:1px solid #1c1c1c">
		<div class="sectionTitle">Contact Us</div>
		<div>Have a question about our company or our products? Please let us know lorem ipsum dolor sit amet consecetur est or drop us a line if you just want to say hi.</div>
	</div>
	
	<div style="float:left; width:520px; height:400px;border-left:1px solid #393939; padding-left:20px">
		<form action="#">
			<div class="formInputLabel">Topic</div>
			<input class="formInput" type="text" />
			
			<div class="formInputLabel">Your Name</div>
			<input class="formInput" type="text" />
			
			<div class="formInputLabel">Your Email Address</div>
			<input class="formInput" type="text" />
			
			<div class="formInputLabel">Message</div>
			<input class="formInputMessage" type="text" />
			
			<div id="submitButton" value="SEND MESSAGE"><span>SEND MESSAGE</span><span class="icon-btn-arrow"></span></div>
			
		</form>
		
	</div>

<?php include("footer.html"); ?>	

</div><!-- END #mainContainer -->




<script type="text/javascript"  src="media/js/libs/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="media/js/libs/validate.min.js"></script>
<script type="text/javascript"  src="media/js/libs/jquery.placeholder.js"></script>
<script type="text/javascript"  src="media/js/main.js"></script>



</body>
</html>