
<html>
<body>


<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Free Skype Resolver - vBooter.org</title>
	<link rel="stylesheet" href="assets/css/app.css" />
	<link rel="stylesheet" href="assets/css/jquery-parallax.css" />
	<link rel="stylesheet" href="assets/css/core.css" />
	<script src="assets/js/vendor/custom.modernizr.js"></script>
	
</head>
<body>

	<div class="parallax-container">
		<div class="parallax-item parallax-size-cover" style="background-image: url('assets/gfx/parallax_1.png')"></div>
		<div class="parallax-item parallax-repeat parallax-overlay"></div>
	</div>

	<section class="wrap">
		<section class="section subscribe">
			<div class="content">
				<div class="row">
					<div class="small-12 columns header">
						<div class="logo">
							<a href="https://www.vbooter.org"><img src="http://i.imgur.com/lqkfxzH.png" height="75px" width="400px" alt="vBooter's Logo"></a>
						</div>
						
					<h2>
					<?php

					if (isset($_POST['resolveBtn']) and strlen($_POST['name'])>3 and strlen($_POST['name'])<32) {
			
			           $resolved = @file_get_contents("http://vbooter.org/api/skype.php?username={$name}&proxy-detect=1");
		                  echo $resolved;
		}
		else {
		
		
				echo'Awesome Skype Resolver';
						}
							
							
							
							
							
							
							
							
						
							?>
							
							<br />
						</h2>
					</div>
				</div>
				<div class="row msgbox">
					<div class="small-1 large-2 columns">&nbsp;</div>
					<div class="small-10 large-8 columns">
						<div data-alert class="alert-box custom-alert-box"><span class="msg"></span><a href="#" class="close">&times;</a></div>
					</div>
					<div class="small-1 large-2 columns">&nbsp;</div>
				</div>
				<div class="row form">
					<div class="small-1 large-2 columns">&nbsp;</div>
					<div class="small-10 large-8 columns">
						<div class="row collapse">
							<div class="small-12 large-8 columns">
							<form action="index.php" method="post">

								<input class="inputsubs" name="name" type="text" placeholder="Enter skype name" minlength=4 maxlength="20" required>
							</div>
							<div class="small-12 large-4 columns">
								<button name="resolveBtn" class="button prefix buttonsubs">Resolve IP</button>
							</div>
						</div>
						</form>
					</div>
					<div class="small-1 large-2 columns">&nbsp;</div>
				</div>
				
			</div>
		</section>
		<section class="section countdown">
			<div class="row content">
				<div class="small-12 columns wrapclock">
					<!--<div class="clock">
						<div class="point pdays">
							<div class="pvalue">00</div>
							<div class="ptext">days</div>
						</div>
						<div class="point phours">
							<div class="pvalue">00</div>
							<div class="ptext">hours</div>
						</div>
						<div class="point pminutes">
							<div class="pvalue">00</div>
							<div class="ptext">minutes</div>
						</div>
						<div class="point pseconds">
							<div class="pvalue">00</div>
							<div class="ptext">seconds</div>
						</div>
					</div>-->
					<!--<div class="wrappbar">
						<div class="pbar"></div>
					</div>-->
									<div style="color:#fff;">		
					<center>Powered by <a href="https://www.vbooter.org">vBooter</a></center>
</div>
				</div>
			</div>
		</section>
	</section>
<script type="text/javascript">
		var countdownDate = '2015/06/01 20:55:55';
	</script>
	<script src="assets/js/vendor/jquery-1.10.1.min.js"></script>
	<script src="assets/js/foundation.min.js"></script>
	<script src="assets/js/jquery.countdown.js"></script>
	<script src="assets/js/jquery.parallax.js"></script>
	<script src="assets/js/core.js"></script>
	<script type="text/javascript">$(document).foundation();</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-43493541-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html>
