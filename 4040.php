<!DOCTYPE html>
<html>
<head>
<title>404</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ALCHEMIST Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--Start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--end-smoth-scrolling-->
<!--start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
<!--End-top-nav-script-->
</head>
<body>
	<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>  
			</div>
			<div class="quote">
				<a href="userreg.php">注册</a>
			</div>
			<!--start-top-nav-->
			<nav class="top-nav">
				<ul class="top-nav">
					<li><a href="index.php"  class="active">主页</a></li>
					<li><a href="book_Query.php">图书查询</a></li>
					<li><a href="book_tuijian.php">新书推荐</a></li>
					<li><a href="contact.html">个人中心</a></li>
					<li><a href="userlogin.html">登陆</a></li>
					
				</ul>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--end-header-->
	<!--start-error-->
	<div class="error">
			<div class="container">
				<div class="error-main">
					<div class="clients-top">
				<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;该功能尚未完善！</h3>
			</div>
					<h1>4<span>0</span>4</h1>
					<div class="err-bttn">
						<a href="index.php">回到主页</a>
					</div>
				</div>
			</div>
	</div>
	<!--end-error-->
	<!--start-touch-->	
	<div class="touch">
		<div class="container">
			<div class="touch-main">
				<div class="col-md-4 touch-left">
					
				</div>
				<div class="col-md-4 touch-left">
					<h3>联系我们</h3>
					<p>Add：大连东软信息学院</p>
					<p>Call: 123456<p>
					<p>E-mail:<a href="mailto:563898102@qq.com">石岳恒</a>&nbsp;&nbsp;
	   					<a href="mailto:364405824@qq.com">生春浩</a></p>
				</div>
				
				<div class="col-md-4 touch-right">
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twt"> </span></a></li>
						<li><a href="#"><span class="g"> </span></a></li>
						<li><a href="#"><span class="p"> </span></a></li>
						<li><a href="#"><span class="drb"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-touch-->	
	<!--start-footer-->	
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>Copyright &copy; 2015.生春浩 石岳恒 All rights reserved.   <li ><button class="tn btn-link"><a href="admin_login.php">管理员登陆</button></li></p>
				<a href="#home" class="scroll"><img src="images/top-img.png" alt=""></a>
			</div>
		</div>
	</div>
	<!--End-footer-->			
</body>
</html>