<?php
  include("include/connection.php");
  extract($_GET);
  if(isset($_POST['fine_payment'])){
      extract($_POST);
      $famount = mysqli_query($conn,"INSERT INTO `payment` VALUES(null,'$fine_bid','Fine Amount')");
      $finish = mysqli_query($conn,"UPDATE `booking` SET `status`='Exit' WHERE `bid`='$fine_bid'");
      $uplt=mysqli_query($conn,"UPDATE `pslot` SET `slotstatus`='Active' WHERE `ps_id`='$ps_id'");
      header("Location:yourbookings.php");

  }
?>
<head>
	<title>PARK-iN | Card Payment</title>
        <link rel="icon" href="images/carparking-logo.png" type="images/carparking-logo.png" sizes="16x16">
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Surf Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
     <link rel="stylesheet" type="text/css" href="css/payment/checkout.css">
	<link href="css/payment/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/payment/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/payment/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/payment/shop.css" type="text/css" media="screen" property="" />
	<link href="css/payment/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
		<!-- Custom styles for this template -->
		<link href="assets/css/cover.css" rel="stylesheet">
	<!--font asesome css -->
      <link href="fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">   
      <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">	
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
	<!-- header_top -->

					<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<div class="top_nav_left">
					<nav class="cl-effect-15" id="cl-effect-15">
						<ul>
							<li><a href="booking.php "><img  src="images/icon-back-arrow.png"></img></a></li>
							
						</ul>
					</nav>
				</div>
			</div>
				
					<!-- search -->
<div class="container">	
					<!-- //search -->
			
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">
					<ul class="short">
					<center>	
						<h1>CARD PAYMENT <i class="fa fa-credit-card" aria-hidden="true"></i></h1>
						<br><h4>ONLY CREDIT/DEBIT CARDS ACCEPTED</h4>
						<img  src="images/card-p-icons.png"></img><i class="fa fa-cc-paypal" aria-hidden="true"></i> 
	                </center>
					</ul>
				</div>
		    </div>

        </div>
		<!--//banner -->

		<!-- Modal1 -->
		
		<!-- //Modal1 -->
		<!-- Modal2 -->
		
		<!-- //Modal2 -->
	<!--// header_top -->
	<!--Payment-->
	
							<!--//tab_one-->
							<div class="tab2">
								<div class="pay_info">
									<form  method="POST" action="" class="creditly-card-form agileinfo_form">
									    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
												<div class="first-row form-group">
													<div class="controls">
														<label class="control-label">Name on Card</label>
														<input class="billing-address-name form-control"  id="card_na" type="text" name="card_na" placeholder="Tony Stark" required>
	                                                </div>
													<div class="w3_agileits_card_number_grids">
														<div class="w3_agileits_card_number_grid_left">
															<div class="controls">
																<label class="control-label">Card Number</label>
																<input class="number credit-card-number form-control" type="text" name="card_no" id="card_no" inputmode="numeric" 
																minlength='16' maxlength='19'pattern="[0-9\s]{16,19}" autocomplete="cc-number"
															    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required>
															</div>
														</div>
														<div class="w3_agileits_card_number_grid_right">
															<div class="controls">
																<label class="control-label">CVV</label>
																<input class="security-code form-control"  minlength='3' maxlength='3' pattern="[0-9]{3}" Â· inputmode="numeric" type="password" name="security-code"  placeholder="&#149;&#149;&#149;" required>
															</div>
														</div>
														<div class="clear"> </div>
													</div>
													<div class="controls">
														<label class="control-label">Expiration Date</label>
														<input class="expiration-month-and-year form-control" type="text" name="exp_date" id="exp_date" minlength='5' maxlength='5'  pattern="(?:0[1-9]|1[0-2])/[0-9]{2}" placeholder="MM / YY" required>
													</div>
												</div>
                                                <input type="submit" name="fine_payment" value="Make Payment" class="brn brn-primary" id="">
												<!-- <button class="submit" ><span> </span></button> -->
											</div>
										</section>
									</form>

								</div>
							</div>
</div>



							
		<!-- //payment -->

	
	<!--//Payment-->

	<!-- footer -->
	
	<!-- //footer -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/payment/jquery-2.1.4.min.js"></script>

	<!--search-bar-->
	<script src="js/payment/search.js"></script>
	<!--//search-bar-->
	<!-- cart-js -->
	<script src="js/payment/minicart.js"></script>
	<script>
		surf.render();

		surf.cart.on('surf_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- easy-responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>

	<!-- credit-card -->
	<script type="text/javascript" src="js/payment/creditly.js"></script>
	<link rel="stylesheet" href="css/payment/creditly.css" type="text/css" media="all" />

	<script type="text/javascript">
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>
	<!-- //credit-card -->


	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/payment/move-top.js"></script>
	<script type="text/javascript" src="js/payment/jquery.easing.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Pricing-Popup-Box-JavaScript -->
	<script src="js/payment/jquery.magnific-popup.js" type="text/javascript"></script>
	<!-- //Pricing-Popup-Box-JavaScript -->
	<script type="text/javascript" src="js/payment/bootstrap.js"></script>
</body>

</html>