<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>InCarEx</title>
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/return_style.css">
</head>
<body>
	
	<div class="container">
		
		
		<a href="#" id="popup__toggle" onclick="return false;">
			<div class="circlephone" style="transform-origin: center;"></div>
			<div class="circle-fill" style="transform-origin: center;"></div>
			<div class="img-circle" style="transform-origin: center;">
				<div class="img-circleblock" style="transform-origin: center;"></div>
			</div>
		</a>



		
		<div class="col-md-2 margin_top_logo">
			<img src="image/inCarex_logo.png" alt="InCarEx" id="incarex_logo">
		</div>

		<div class="col-md-8 nav-div">
			
			<div class="container-fluid">

				<!-- Navigation bar -->
				<div class="col-md-12">
					<div class="navbar navbar-default" rel="navigation">
						<div class="container-fluid">
							<div class="navbar-header">
								<img src="image/shest.png" alt="" class="img_nav">
								<img src="image/shest_r.png" alt="" class="img_nav">
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav main_nav navbar-nav">
									<li><a href="/">Главная</a></li>
									<li class="dropdown delivery">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Доставка/Оплата
											<b class="caret"></b>
										</a>
										<ul class="dropdown-menu">
											<li id="drop_main"><a href="delivery.php">Доставка</a></li>
											<li class="divider"></li>
											<li id="drop_main"><a href="pay.php">Оплата</a></li>
										</ul>
									</li>
									<li><a href="#">Возврат</a></li>
									<li><a href="contacts.php">Контакты</a></li>
								</ul>
								<div class="nav navbar-nav navbar-right">
									<img src="image/shest_r.png" alt="" class="img_nav">
									<img src="image/shest.png" alt="" class="img_nav">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="container-fluid">
						<div class="col-md-2 col-md-offset-1 cont_marks">
							<img src="image/Ford.png" alt="" class="marks ford">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/bmw.png" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/Chevypnglogo.png" alt="" class="marks chevy">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/hondalogo.png" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/nissan.png" alt="" class="marks">
						</div>
					</div>
					<div class="container-fluid">
						<div class="col-md-2 col-md-offset-1 cont_marks">
							<img src="image/330686-motorcraft.png" alt="" class="marks mc">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/mazdalogo.png" alt="" class="marks mazda">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/GM.png" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/hyundai_logo_lg.png" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/mitsubishilogo.png" alt="" class="marks micik">
						</div>
					</div>
					<div class="container-fluid">
						<div class="col-md-2 col-md-offset-1 cont_marks">
							<img src="image/kia.png" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/Land_Rover.png" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/mercedes-logo.png" alt="" class="marks mb">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/Renault-logo.png" alt="" class="marks renault">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="image/Toyota_logo.png" alt="" class="marks">
						</div>
					</div>
				</div>

			</div>

		</div>
			
		<div class="col-md-2 center null_padding margin_top_logo">
			<img src="image/kemptner_logo.png" alt="Kemptner" id="kemptner_logo">
		</div>

		<div class="col-md-12 content">
			<div class="col-md-3 brands_container">
				<div class="panel panel-default cats">
					<div class="panel-heading">
						<h2 class="panel-title">Бренды</h2>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<a href="cats.php" class="list-group-item">KEMTNER<span class="badge">256</span></a>
							<a href="cats.php" class="list-group-item">FORD<span class="badge">88</span></a>
							<a href="cats.php" class="list-group-item">NISSAN<span class="badge">145</span></a>
							<a href="cats.php" class="list-group-item">MOTORCRAFT<span class="badge">29</span></a>
							<a href="cats.php" class="list-group-item">TOYOTA<span class="badge">20</span></a>
							<a href="cats.php" class="list-group-item">MITSUBISHI<span class="badge">20</span></a>
							<a href="cats.php" class="list-group-item">MAZDA<span class="badge">3</span></a>
							<a href="cats.php" class="list-group-item">HONDA<span class="badge">9</span></a>
							<a href="cats.php" class="list-group-item">GENERAL MOTORS<span class="badge">33</span></a>
							<a href="cats.php" class="list-group-item">BMW<span class="badge">9</span></a>
							<a href="cats.php" class="list-group-item">LAND ROVER<span class="badge">4</span></a>
							<a href="cats.php" class="list-group-item">RENAULT<span class="badge">51</span></a>
							<a href="cats.php" class="list-group-item">OPEL<span class="badge">5</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container-fluid">
					<div class="col-md-12" align="center">
						<form class="form-inline" role="search">
							<div class="form-group">
								<input id="search_input" type="text" class="form-control search_in" placeholder="Поиск по артиклу...">
			    					<button type="button" class="btn btn-search btn-default">
			    						<span class="glyphicon glyphicon-search">
			    					</button>
							</div>
						</form>
					</div>
				</div>

				<!-- Contacts -->
				<div class="col-md-12 cont">
					<div class="container-fluid return_container">
						
						<h2>Возврат</h2>

						<div class="head_rule">
							<img src="image/rule.png" alt="">
							<span>Условия возврата</span>
						</div>
						
						<div class="return_rule container-fluid">
							<div class="col-md-1"><img src="image/timeout.png" alt="" style="width: 30px; height: 30px;"></div>
							<div class="col-md-11 desc_return"><span>Возврат товара принимается в течении 1 месяца.</span></div>
						</div>

						<div class="return_rule container-fluid">
							<div class="col-md-1"><img src="image/brak.png" alt="" style="width: 30px; height: 30px;"></div>
							<div class="col-md-11 desc_return"><span>Брак наша компания принимает без документов. Нам очень дороги наши постоянные клиенты!</span></div>
						</div>

						<div class="return_rule container-fluid">
							<div class="col-md-1"><img src="image/ontcomplate.png" alt="" style="width: 30px; height: 30px;"></div>
							<div class="col-md-11 desc_return"><span>В случае, если в результате нашей ошибки комплектации заказа, вам был причинен ущерб, мы готовы нести ФИНАНСОВУЮ ОТВЕТСТВЕННОСТЬ и компенсировать ущерб частично или в полном размере. Мы – профессиональная компания, а значит должны нести ответственность за свою работу.</span></div>
						</div>

					</div>
				</div>
			</div>

			<div class="col-md-3 right_sidebar">
				<div class="container-fluid">

					<a href="#" id="a_cart">
						<div class="col-md-12 cart_container" align="center">
							<span class="glyphicon glyphicon-shopping-cart"></span>
							<span class="cart">&nbsp;&nbsp;Корзина(0)</span>
						</div>
					</a>

					<div class="col-md-12 login_container">
						<div align="center">
							<span class="glyphicon glyphicon-user"></span>
							<span id="span_in">&nbsp;&nbsp;Войти в личный кабинет:</span>
							<form role="form">
								<div class="input-group input-group-sm login_input_container">
									<input type="text" class="form-control" placeholder="Логин">
								</div>
								<div class="input-group input-group-sm login_input_container">
									<input type="password" class="form-control" placeholder="Пароль">
								</div>
								<button type="submit" class="btn btn-default login_btn">Вход/Регистрация</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-12 footer">
			<footer>
				<div class="col-md-12">
					<div class="container-fluid">
						<div class="col-md-6 col-md-offset-3 nav_footer" align="center">
							<ul>
								<li><a href="delivery.php">Доставка</a></li>
								<li><a href="pay.php">Оплата</a></li>
								<li><a href="#">Возврат</a></li>
								<li><a href="contacts.php">Контакты</a></li>
								<li><a href="aboutus.php">О нас</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-5 copyright" align="center">
					<span class="red">in</span><span>CaR</span><span class="red">ex</span><span> &copy; 2018</span>
				</div>
			</footer>
		</div>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>