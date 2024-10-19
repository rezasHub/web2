<!DOCTYPE html>
<?php
session_start()
	?>
<html lang="zxx" class="no-js">

<head>
		<link  href="img/favicon.ico"  rel="shortcut icon" />
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>ارسال کارت</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/availability-calendar.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php
$nam = $_SESSION['nam11'];
$lnam = $_SESSION['lnam11'];
$shen = $_SESSION['shen11'];
$noe = $_SESSION['noe11'];
$con=new MySQLi("localhost","root","","nokhb");
//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
mysqli_set_charset($con,'utf8');

 ?>
	<!--================ Start Header Area =================-->
	<header class="header-area">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
					<div class="col menu-left">
						<a href="about.html">درباره ما</a>
						<a href="menu.html">منوی سایت</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="active" href="index.html">صفحه اصلی</a>
					</div>
					<div class="col-3 logo">
						<a href="index.html"><img class="mx-auto" src="img/logo.png"  alt="iran nokhbeh logo"></a>
					</div>
					<nav class="col navbar navbar-expand-md justify-content-end">

						<!-- Toggler/collapsibe Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="lnr lnr-menu"></span>
						</button>

						<!-- Navbar links -->
						<div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
							<ul class="navbar-nav justify-content-center w-100">
								<li class="nav-item hide-lg">
									<a class="nav-link" href="index.html">صفحه اصلی</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="menu.html">منوی سایت</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="about.html">درباره ما</a>
								</li>
								<!-- Dropdown -->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										ارتباط با ما
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="contact.html">ارسال پیام</a>
										<a class="dropdown-item" href="elements.html">ارسال شکایت</a> <a class="dropdown-item" href="faq.html">سوالات متداول</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										کاربران
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="submit.html">ثبت نام</a>
										<a class="dropdown-item" href="pro.html">ورود به پروفایل</a>        <a class="dropdown-item" href="work.html">همکاری با ما</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="khed.html">خدمات ما</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start banner Area =================-->
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1>تایید اطلاعات</h1>
					<hr>
					
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->
<center>
	<section class="chefs-quotes-area ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="section-title relative">
				
<img src="img/sc.png" width="100%" alt="کارت عضویت">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-6">
					<div>
						<p>
						<div class=" posts-list">
	

					<div class="single-post row">
			
						
												<div class="comment-form">
													<h2><?php echo($nam.'&nbsp;'.$lnam.'&nbsp'.'عزیز')?></h2><h4><br>
درخواست صدور کارت عضویت شما
							<?php   
	if($con->connect_error)
	echo("can not connect to data base");
else
{
$sql="insert into card(nam,lnam,shen,noe) values ('$nam','$lnam','$shen','$noe')";


if($con->query($sql)==TRUE)
	echo(' ثبت شد');
else 
	echo('ثبت نشد ، از طریق پشتیبانی درخواست خودرا پیگیری کنید');

$con->close();
}
	
	?>
							
							<br>
لطفا جهت ارسال کارت ، فرم ذیل راکامل نمایید
													</h4>
						
			
					
							<form name="sub" accept-charset="UTF-8" id="myform" method="post" action="postal.php"> 
				<br>
<br>

							<div class="form-group">
								<input type="number" maxlength="10" name="interno" class="form-control" id="interno" placeholder="کد ملی" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'کد ملی خود را وارد نمایید'" required="">
							</div>
							<div class="form-group">
								<input type="text" name="state" class="form-control" id="" placeholder="استان محل سکونت" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'استان محل سکونت خود را وارد نمایید'" required="">
							</div>
							<div class="form-group">
								<input type="text" name="city" class="form-control" id="" placeholder="شهر محل سکونت" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = ' شهر محل سکونت خود را وارد نمایید'" required="">
							</div>
							<div class="form-group">
								<input type="text" name="add" class="form-control" id="" placeholder="آدرس پستی بدونه شهر و استان" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = ' آدرس پستی خود را وارد نمایید'">
							</div>
								<div class="form-group">
								<input type="text" name="postal"  maxlength="10" class="form-control" id="" placeholder="کد پستی " onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'کد پستی خود را وارد نمایید'" required="">
							</div>
							<div class="form-group">
								<input type="tel" name="tel" maxlength="10" class="form-control" id="" placeholder="تلفن همراه" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = ' تلفن همراه خود را وارد نمایید'" required="">
							</div>
						
							
							<br> 
							 ضمن مطالعه ی قوانین سایت و قوانین رقابت ،تمامی قوانین را تائید مینمایم 
							<input type="checkbox" required >
							<br>
							<br>
							<input type="submit" value="ثبت درخواست" class="primary-btn">
						</form>
					</div>
								
						
					</div>
				</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	</center>
	
	
<!--================ Start Footer Area =================-->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">	<center><h4>گواهی تایید وزارت صنعت و معدن و تجارت</h4></center>
						<ul>
							<center><li>در دست اقدام</li></center>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<center><center><h4>گواهی تایید وزارت ارشاد</h4></center></center>
						<ul><center><img id = 'jxlzwlaorgvjnbqewlaonbqe' style = 'cursor:pointer' onclick = 'window.open("https://logo.samandehi.ir/Verify.aspx?id=143242&p=rfthaodsxlaouiwkaodsuiwk", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt = 'logo-samandehi' src = 'https://logo.samandehi.ir/logo.aspx?id=143242&p=nbpdshwlqftiodrfshwlodrf' />
						</center></ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<center><h4>گواهی تایید زرین پال</h4></center>
						<ul>
							<li><center><script src="https://cdn.zarinpal.com/trustlogo/v1/trustlogo.js" type="text/javascript"></script></center></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<center><h4>گواهی تایید بانک سامان</h4></center>
						<ul>	<center><li> در دست اقدام</li></center>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget"> 
						<p>عضویت در خبرنامه </p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="email" placeholder="آدرس ایمیل خود را وارد نمایید" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'آدرس ایمیل خود را وارد نمایید '" required="" type="email">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
									<div class="info"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center justify-content-between">
				<p class="footer-text m-0 col-lg-6 col-md-12">کلیه ی حقوق این سایت طبق قوانین کپی رایت محفوظ است </p>
				<div class="col-lg-6 col-sm-12 footer-social">
					 
					<a href="#"><i class="fa fa-twitter"></i></a>	<a href="https://www.instagram.com/iranokhbeh/"><i class="fa fa-instagram"></i></a>
					  
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area =================-->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/main.js"></script>
</body>

</html>

