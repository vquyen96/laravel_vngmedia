<!DOCTYPE html>
<html>
<head>
	@yield('title')
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://demo-cgroup.com/public/layout/frontend/img/Layer 2.png">
	<base href="{{ asset('local/storage/app/public/guest') }}/">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/master.css">

	@yield('css')
</head>
<body>
	<section>	
		<div id="logo">
			<img src="../images/logo-1.png">
		</div>
		<div id="menu">
			<div id="text">Menu.</div>
			<div id="button">
				<span class="span-1"></span>
				<span></span>
				<span class="span-1"></span>
				<span></span>
			</div>
		</div>
	</section>

	<section>

		<div id="main">
			@yield('main')
		</div>

	</section>

	<section id="footer">
		<div id="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-12">
						<form>
							<p class="heading-2">Nhận bản tin</p>
							<input type="text" name="" placeholder="Họ và tên" required=""><br/>
							<input type="email" name="" placeholder="Email" required="">
							<div id="submit">
								<input class="submit-1" type="submit" name="" value="NHẬN BẢN TIN">
								<div id="sub-hover">
									NHẬN BẢN TIN
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 col-sm-12 col-12">
						<div id="middle">
							<img src="../images/Logo.png">
							<p class="text-1">
								Quy trình là nền tảng để đánh giá sự chuyên nghiệp, bài bản trong hoạt động doanh nghiệp. 
							</p>
							<p class="text-1">
								Đến với VNG Media, khách hàng sẽ được tiếp cận với một quy trình khoa học, chủ động.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12">
						<div id="contact">
							<p class="heading-2">Liên hệ với chúng tôi</p>
							<i class="fas fa-map-marker-alt"></i><p class="text-2">Tầng 5 - Tòa nhà Diamond Flower - Hoàng Đạo Thúy - Hà Nội</p>
							<i class="fas fa-phone"></i><p class="text-2">0902.129.236 - 024.730.70.688</p>
							<i class="fas fa-clock"></i><p class="text-2">Thứ 2 - 7: 8.00 - 17.30</p>
							<i class="fas fa-envelope"></i><p class="text-2">info&#64;vngmedia.vn</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer-bt">
			Copyright 2016 VNG Media, All Right Reserved
		</div>
	</section>

	<script type="text/javascript">ScrollReveal({ reset: true });</script>
	
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script src="js/scrollanimate.js"></script>
	<script type="text/javascript" src="js/master.js"></script>
@yield('script')
</body>
</html>