<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Car Racing Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="page">
		<div class="header">
			@include('content.navbar')
			<div class="featured">
				<h2>Site for the championships</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lacus lorem. Nulla pellentesque, ipsum vel sodales convallis, nisl lacus pulvinar massa, ac elementum orci orci at enim. Nulla mattis, ante non gravida viverra, ante nulla laoreet massa, id molestie ipsum lorem eget quam. Sed semper
				</p>
				<a href="about.html">view more</a>
			</div>
		</div>
		<div class="body">
			<div class="sidebar">
				<div>
					@include('content.social')
				</div>
				@include('content.panel1')
				@include('content.panel2')
			</div>
			<div class="content">
				<h1>This website is for the championship</h1>
				<a href="#"><img src="images/video-player.jpg" alt=""></a>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lacus lorem. Nulla pellentesque, ipsum vel sodales convallis, nisl lacus pulvinar massa, ac elementum orci orci at enim. Nulla mattis, ante non gravida viverra, ante nulla laoreet massa, id molestie ipsum lorem eget quam. Sed semper molestie interdum. Sed eu nunc sed diam elementum laoreet non nec velit. Fusce purus ante, blandit sed porttitor vitae, vulputate id odio. Fusce id nisl in lectus posuere volutpat. Aliquam ut ipsum erat.
				</p>
				<p>
					Suspendisse id massa mi. Donec eget mi eget leo egestas lacinia. Curabitur pharetra dictum massa, sit amet commodo ante malesuada ut. Nunc imperdiet congue orci et lacinia. Suspendisse pretium erat ut risus vehicula sed porta nisi sollicitudin. Sed molestie, dolor at fermentum scelerisque, risus neque sagittis enim, eu sagittis quam turpis et enim. Morbi luctus arcu eu nisi eleifend ac consectetur ligula viverra. Sed sollicitudin pharetra quam, vitae rutrum mauris dignissim
				</p>
			</div>
		</div>
		@include('content.footer')
	</div>
</body>
</html>