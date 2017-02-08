<?php // FMStudio Pro - do not remove comment, needed for DreamWeaver support ?>
<?php require_once('Connections/vouchers.php'); ?>
<?php

$fullname = $_REQUEST['First'] . '.' . $_REQUEST['Last'];

$new_record_add = $vouchers->newAddCommand('AGENCY');
$new_record_fields = array('Agency Name'=>$_REQUEST['Agency'],'Case Manager Email'=>$_REQUEST['Email'],'Case Manager Name'=>$fullname,'Case Manager Phone'=>$_REQUEST['Phone'],);
foreach($new_record_fields as $key=>$value) {
    $new_record_add->setField($key,$value);
}

$new_record_add->SetScript('New Account Create',''); 

$new_record_result = $new_record_add->execute(); 

if(FileMaker::isError($new_record_result)) fmsTrapError($new_record_result,"new-account-error.php"); 

$new_record_row = current($new_record_result->getRecords()); 

?>

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

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
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
					<h2 class="sectionTitle">New Account Confirmation</h2>
				  <p>Hi <?php echo $new_record_row->getField('FirstName'); ?>,</p>
                  <p>Your new account has been created successfully! </p>
                  <p>A member of the Q Foundation will be verifying the details and will get back to you with login instructions.</p>
                  <p>Accounts are verified Monday - Friday  10am-6pm only except Holidays.</p>
                  <p>You will be receiving an email shortly with this information.</p>
                  <p>Thank you.</p>
                  <p>Q Foundation<br />
                    (415) 552-3242 x108</p>
                  <p>&nbsp;</p>
                  <p>If you received  your approved account login and password you can now <a href="https://vouchers.ahasf.org/fmi/webd#financialservices">click here</a> to login.</p>
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
						  <a href="mailto:darren.kearl@ahasf.org">Email Us</a><br>
						  or<br>
						  (415) 552-3242 x108
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
					<p>Copyright &copy; 2016 The Q Foundation | San Francisco, CA 94102. All Rights Reserved</p>
					<p class="social">
						<a href="https://www.facebook.com/bootstrapbay">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://twitter.com/bootstrapbay">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://plus.google.com/+BootstrapbayThemes">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="http://www.youtube.com/user/bootstrapbayofficial">
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
		prevText: "&#171;",
		nextText: "&#187;"
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
</script>
  </body>
</html>