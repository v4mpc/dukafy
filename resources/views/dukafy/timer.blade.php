<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dukafy — Coming Soon</title>
	<!-- Modernizr -->
	<script src="{{asset('timer/js/modernizr.js')}}"></script>
	<!-- Open Sans from Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Main styles file -->
	<link rel="stylesheet" href="{{asset('timer/css/styles.css')}}" />
	<!-- Icons via Font Awesome -->
	<link rel="stylesheet" href="{{asset('timer/css/font-awesome.min.css')}}" />
</head>

<body class="color-scheme-neue">
	<!-- Animated background -->
	<canvas id="bg-canvas"></canvas>
	<div class="bg-img" style="width: 100%; height: 100%; position: fixed; background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url({{asset('timer/images/resized.jpg')}}) no-repeat center center; background-size: cover; "></div>
	<!-- First screen -->
	<div class="splash">
		<div class="centered-unit">
			<div class="container">
				<!-- Main header -->
				<h1>We're launching Soon!</h1>
				<!-- Sub header -->
				<p class="lead">Stay tuned!</p>

				<!-- Countdown -->
				<div class="countdown circled large">
					<!-- Days -->
					<div class="time days">
						<div class="value">00</div>
						<div class="unit">Days</div>
					</div>
					<!-- Hours -->
					<div class="time hours">
						<div class="value">00</div>
						<div class="unit">Hours</div>
					</div>
					<!-- Minutes -->
					<div class="time minutes">
						<div class="value">00</div>
						<div class="unit">Minutes</div>
					</div>
					<!-- Seconds -->
					<div class="time seconds">
						<div class="value">00</div>
						<div class="unit">Seconds</div>
					</div>
				</div>
				<!-- Countdown end -->
			</div>
			<p><i class="fa fa-envelope"></i> info@dukafy.co.tz</p>
		</div>
		
	</div>

	



	<!-- JavaScripts -->

	<script src="{{asset('timer/js/jquery.js')}}"></script>
	<script src="{{asset('timer/js/countdown.js')}}"></script>
	<script src="{{asset('timer/js/bezierCanvas.js')}}"></script>
	<script src="{{asset('timer/js/notifyMe.js')}}"></script>

	<script type="text/javascript">
		$().ready(function () {

			// Activate countdownTimer plugin on a '.countdown' element
			$(".countdown").countdownTimer({
				// Set the end date for the countdown
				// endTime: new Date("{{$timer->created_at}}")
				
				endTime: new Date('2018-02-18T15:00:48')
			});


			// Activate notifyMe plugin on a '#notifyMe' element	
			$("#notifyMe").notifyMe();


			// Activate bezierCanvas plugin on a #bg-canvas element
			$("#bg-canvas").bezierCanvas({
				maxStyles: 3,
				maxLines: 80,
				strokeWidth: 0.5,
				lineSpacing: 0.07,
				spacingVariation: 0.07,
				colorBase: { r: 100, g: 120, b: 200 },
				colorVariation: { r: 50, g: 50, b: 50 },
				moveCenterX: 0,
				moveCenterY: 0,
				delayVariation: 4,
				globalAlpha: 0.4,
				globalSpeed: 200,
			});

			// Add handler on 'Scroll down to learn more' link
			$().ready(function () {
				$(".overlap .more").click(function (e) {
					e.preventDefault();
					$("body,html").animate({ scrollTop: $(window).height() });
				});
			});


		});
	</script>

</body>

</html>