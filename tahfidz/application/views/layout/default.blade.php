<!DOCTYPE html>
<html>
<head>
	<title>Tahfidz</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/bin/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="navbar navbar-default">
		<div class="navbar-heading">
			<div class="container-fluid">
				<div class="navbar-brand">Tahfidz</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		@yield('isi')
	</div>
	<script src="/bin/jquery.min.js"></script>
	<script src="/bin/ResizeSensor.min.js"></script>
	<script src="/bin/theia-sticky-sidebar.min.js"></script>
	<script>
		$('.theia').theiaStickySidebar({
			additionalMarginTop: 20,
			additionalMarginBottom: 20
		})
	</script>
</body>
</html>