<!DOCTYPE html>
<html>
<head>
	<title>SAVAGE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<script src="https://use.fontawesome.com/39c34a8de4.js"></script>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="JS.js"></script>
	<script src="js/jssor.slider-23.1.1.mini.js" type="text/javascript"></script>
	<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">
	<div id="main-container">
		<header>
			<div class="header-con"></div>
			<div class="header-con">
				<p id="emblem">SAVAGE</p>
			</div>
			<div class="header-con-three">
				<button id="but-input">Войти/Регистрация</button>
			</div>
		</header>
		<div id="conteiner">
			<div id="container-menu">
				<div class="menu-wraper">
					<div>
						<p class="menu-item">HOME</p>
						<p class="menu-item">STORE</p>
					</div>
				</div>
				<div id="menu-but">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<div class="menu-wraper">
					<div>
						<p class="menu-item">ACCOUNT</p>
						<p class="menu-item">ABOUT AS</p>
					</div>
				</div>
			</div>
					<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
		            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		        </div>
		        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
		            <div>
		                <img data-u="image" src="img/red.jpg" />
		                <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">TOUCH SWIPE SLIDER</div>
		                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
		                <div style="position:absolute;top:120px;left:650px;width:470px;height:220px;z-index:0;">
		                    <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;z-index:0;" src="img/c-phone-horizontal.png" />
		                    <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0; overflow:hidden;">
		                        <img data-u="caption" data-t="0" style="position:absolute;top:0px;left:0px;width:379px;height:213px;z-index:0;" src="img/c-slide-1.jpg" />
		                        <img data-u="caption" data-t="1" style="position:absolute;top:0px;left:379px;width:379px;height:213px;z-index:0;" src="img/c-slide-3.jpg" />
		                    </div>
		                    <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0;" src="img/c-navigator-horizontal.png" />
		                    <img data-u="caption" data-t="2" style="position:absolute;top:476px;left:454px;width:63px;height:77px;z-index:0;" src="img/hand.png" />
		                </div>
		            </div>
		            <div>
		                <img data-u="image" src="img/purple.jpg" />
		            </div>
		            <div>
		                <img data-u="image" src="img/blue.jpg" />
		            </div>
		        </div>
		        <!-- Bullet Navigator -->
		        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
		            <!-- bullet navigator item prototype -->
		            <div data-u="prototype" style="width:16px;height:16px;"></div>
		        </div>
		        <!-- Arrow Navigator -->
		        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
		        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
		    </div>
			<a href="toStore.php"><button id="but-toStore">TO STORE</button></a>
		</div>
	</div>
</body>
</html>