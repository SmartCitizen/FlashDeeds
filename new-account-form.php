
<!DOCTYPE html>
	<html lang="en"><head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">

			<title>Q Foundation: Financial Services Board (Q-FAB)</title>

			<!-- Bootstrap core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
			<link href="css/custom.css" rel="stylesheet">
			<link href="css/flexslider.css" rel="stylesheet">
			
		     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
			<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
			<style type="text/css">
			body,td,th {
	font-family: "Noto Sans", sans-serif;
}
            </style>
			<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
            </script>
	</head>

		<body>
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#topWrap">
						  <span class="fa-stack fa-lg">
							 <img src="assets/img/Qfoundationlogo.png" width="190" height="63" alt=""/></i>
					  </span></a>
					</div>
					<div class="collapse navbar-collapse appiNav">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li></li>
							<li><a href="#contactWrap">Contact Us</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		<div id="featureWrap"></div> <!-- /featureWrap --><!-- /productWrap -->
	
	<div id="pricingWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">Sign Up Now</h2>
                    <p>Please complete this form and click submit.</p>
<form id="form1" name="form1" method="post" action="new-account-confirm.php">
 
   <table width="710" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <th width="194" scope="row">First Name</th>
    <td width="285"><span id="sprytextfield3">
      <input type="text" name="First" id="First" />
      <span class="textfieldRequiredMsg">First Name is required.</span></span></td>
  </tr>
  <tr>
    <th scope="row">Last Name</th>
    <td><span id="sprytextfield4">
      <input type="text" name="Last" id="Last" />
      <span class="textfieldRequiredMsg">Last Name is required.</span></span></td>
  </tr>
  <tr>
    <th scope="row">Agency Name</th>
    <td><span id="sprytextfield5">
      <input type="text" name="Agency" id="Agency" />
      <span class="textfieldRequiredMsg">Agency Name is required.</span></span></td>
  </tr>
  <tr>
    <th scope="row">Phone</th>
    <td><span id="sprytextfield2">
    <input type="text" name="Phone" id="Phone" /> e.g. (415) 555-1212
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid Phone format. Enter like (415) XXX-XXXX </span></span></td>
  </tr>
  <tr>
    <th scope="row">Email Address</th>
    <td><span id="sprytextfield1">
    <input name="Email" type="text" required id="Email" onBlur="MM_validateForm('First','','R','Last','','R','Agency','','R','Phone','','R','Email','','RisEmail');return document.MM_returnValue" size="40" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid Email format. Check and try again.</span></span></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
  </tr>
</table>

</form>
                    <p></p>
<p>&nbsp;</p>
					<p>&nbsp;</p>
				</div>
			</div>
			<div class="row"></div>
		</div>
	</div> <!-- /pricingWrap -->
	
	<div id="testimonialsWrap" class="altWrap">
		<div class="container">
			<div class="row"></div>
			<div class="row"></div>
		</div>
	</div> <!-- /testimonialsWrap -->
	
	<div id="contactWrap">
		<div class="overlay">
			<div class="container">
				<div class="row">
						<div class="col-xs-12">
						<h2 class="sectionTitle">Contact us</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="blurb">
						Want to chat? Send us a message. We'd love to hear from you!
						  <br>
						  <br>
						  <a href="mailto:info@flashdeeds.org">Email Us</a><br>
						  <br>
					  </div>
					</div>
				</div>
					<div class="row"></div>
			</div>
		</div>
	</div> <!-- /contactWrap -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<p>Copyright &copy; 2017 FlashDeeds | San Francisco, CA 94110. All Rights Reserved</p>
					<p class="social">
						<a href="https://www.facebook.com/flashdeeds">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://twitter.com/flashdeeds">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://plus.google.com/+flashdeeds">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="http://www.youtube.com/user/flashdeeds">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.js"></script>
	
<script type="text/javascript">
$(document).ready(function() {

	$('.mobileSlider').flexslider({
		animation: "slide",
		slideshowSpeed: 3000,
		controlNav: false,
		directionNav: true,
		prevText: "«",
		nextText: "»"
	});
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false
	});
		
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if ($(window).width() < 768) {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar-header').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}
			else {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}

		}
	});
	
	$('#toTop').click(function() {
		$('html,body').animate({
			scrollTop: 0
		}, 1000);
	});
	
	var timer;
    $(window).bind('scroll',function () {
        clearTimeout(timer);
        timer = setTimeout( refresh , 50 );
    });
    var refresh = function () {
		if ($(window).scrollTop()>100) {
			$(".tagline").fadeTo( "slow", 0 );
		}
		else {
			$(".tagline").fadeTo( "slow", 1 );
		}
    };
		
});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "phone_number");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
  </body>
</html>