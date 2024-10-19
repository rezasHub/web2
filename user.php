<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<link  href="img/favicon.ico"  rel="shortcut icon" />
		<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/availability-calendar.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/main.css">
        <meta charset="utf-8">
        <title>پنل کاربری</title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="css/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="css/main1.css"><link rel="stylesheet" href="css/main.css">
	<style>
		.button {
  background-color: #F5F27B;
  border: none;
  color: #000000;
  padding: 8px 16px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.6s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
</style>
    </head>
	
    <body id="welcome">
	
    	<?php 
		$shen = $_SESSION['int'] ;
		
		$con=new MySQLi("localhost","root","","nokhb");
		//$con=new MySQLi("irannokhbeh.ir","irannokh_nokh","^9][be&]tp@B","irannokh_nokh");
	mysqli_set_charset($con,'utf8');

		?>
        <aside class="left-sidebar" style="background: #E2E2E2 center url(./img/logo1.png)">
            <div class="logo">
                <a href="#welcome">
                    
                </a>
            </div>
			<center>	<br> <br> <br><h3>	<?php 
		
			if($con->connect_error)require_once "not.html";
else{
	$res=mysqli_query($con,"SELECT * FROM submit where shen='$shen'");
		
while($crs=mysqli_fetch_assoc($res))
{
	print($crs["nam"]."&nbsp;");
	print($crs["lnam"]);
}

}

			?> </h3><br> 
			 خوش آمدید
			</center>
			<br><br> <br><br>

            <nav class="left-nav">
 <ul id="nav">
                    <li class="current"><a href="#welcome">میز کار</a></li>
                    <li><a href="#installation">رقابت میان کاربران</a></li>
                    <li><a href="#tmpl-structure">ثبت نام در رویداد</a></li>
                    <li><a href="#css-structure">درخواست چاپ مقاله</a></li>
	 				<li><a href="#javascript">درخواست چاپ کتاب</a></li>
                    <li><a href="#contact-form">ثبت نام در  نمایشگاه ها و مسابقات </a></li>
                    <li><a href="#subscription-form">آزانس ایده و نوآوری نخبه ایرانی</a></li>
                    <li><a href="#video">درخواست صدور کارت عضویت</a></li>
					
          
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
		    <div class="main-content">
		        <section id="welcome">
		            <div class="content-header">
		                <img src="img/heder.png" width="100%" alt="header">
		            </div>
		            <div class="welcome">
                        
                                     <h2 class="twenty">به پنل کاربری خوش آمدید</h2>

                        <p>از طریق این پنل میتوانید از خدمات نخبه ی ایرانی استفاده کنید</p>

                        <p>
							در صورت داشتن هر گونه ایده در زمینه ی رشد و توسعه ی مجموعه نخبه ی ایرانی ، از طریق قسمت 
					<a href="#subscription-form">	"ایده برای نخبه ی ایرانی" </a>
							برای ما ارسال کنید و پس از تائید کارشناسان نوآوری ، اکانت الماس دریافت کنید 
						</p>
		            </div>
		    
	 <div class="features">
		                <h2 class="twenty">مختصر توضیح پیرامون عضویت الماس </h2>
		                
		             <p>عضویت الماس یکی از انواع عضویت افتخاری مجموعه ی نخبه ی ایرانی بوده که به مدیران عامل ، مدیران ارشد و حامیان مجموعه ی نخبه ایرانی اعطا میگردد 
						<br> 
						از جمله خدمات این نوع عضویت میتوان به استفاده رایگان از خدمات مراکز تفریحی ، تجاری و سایر مراکز همکار با مجموعه ی نخبه ی ایرانی اشاره نمود 
						</p>
		            </div>


		        </section>
		       <!-------------------------------------------------------> 
		        <section id="installation">
                    <div class="content-header">
		               <img src="img/tour.png" width="100%" alt="رقابت میان اعضا">

                    </div>
                 <center> <h3 class="title">این رقابت برای ایجاد انگیزه در بین اعضای سایت طراحی شده، برای اطلاعات بیشتر میتونید به 
					<a href="./ganoon.html">	قوانین رقابت </a>
						میان اعضا مراجعه کنید </h3></center>
                    
                    <div class="section-content">
                       	<section class="about-area">
		<div class="">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-4">
									<div class="section-title relative">
										<center>
											<div class=" posts-list">
	

					<div class="single-post row">
					
						<div >
												<div class="comment-form">
						<h2>ورود اطلاعات</h2>
						<form name="sub" accept-charset="UTF-8" id="myform" method="post" action="send.php"> 
	
							<div class="form-group">
								<input type="number" maxlength="10" name="shen" class="form-control" id="interno" placeholder="کد ملی" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'کد ملی خود را وارد نمایید'" required="">
							</div>
								
										<div class="form-group form-inline">
								<div class="form-group col-lg-6 col-md-12 name">
									<input type="text" maxlength="2"  name="year" class="form-control" id="year" placeholder="سال کسب دستاورد" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'سال کسب دستاورد خود را وارد نمایید'" required="">
								</div>
								<div class="form-group col-lg-6 col-md-12 email">
									<input type="text" name="onvan" class="form-control" id="tel" placeholder="عنوان دستاورد" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'عنوان دستاورد خود را وارد نمایید'" required="">
								</div>
							</div>
							<div class="form-group">
								<select class="form-control" id="noe" name="sath" required>
									<option value="" id="1">لطفا سطح دستاورد خود را انتخاب نمایید</option>
									<option value="5" id="2">فرا ملی ( بین المللی و آسیایی )</option>
									<option value="3" id="3">ملی</option>
									<option value="1" id="4">استانی</option></select>
							</div>
								<div class="form-group">
								<select class="form-control" id="noe" name="noe" required>
									<option value="" id="1">لطفا نوع دستاورد خود را انتخاب نمایید</option>
									<option value="5" id="2">نگارش مقاله</option>
									<option value="10" id="3">تالیف / گردآوری کتاب</option>
									<option value="6" id="4">حضور در همایش / کنفرانس / سمینار </option>
									<option value="7" id="4">حضور در نمایشگاه/ مسابقه  </option>
									<option value="15" id="4">کسب جایزه در کنفرانس / مسابقه / نمایشگاه و سایر رویداد ها</option>
									<option value="12" id="4">ثبت اختراع یا انتشار اثر </option>
									
									</select>
				
							</div><br> <br>
							 ضمن مطالعه ی قوانین سایت و قوانین رقابت ،تمامی قوانین را تائید مینمایم 
							<input type="checkbox" required >
							<br>
							<br>
							<input type="submit" value="ثبت" class="primary-btn">
						</form>
													
					</div>
								
						</div>
					</div>
				</div>
						
						
						
								
	
						
						
					</center></div>	
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-6">
					<div class="">
					
							<center>
							
							
							<h2>فهرست فعالیت های شما</h2>
							<table dir="rtl" border="1px" bordercolor="#E5EE6B" align="center">
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;سطح فعالیت&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;نوع فعالیت&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;عنوان&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;سال&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<?php
						if($con->connect_error)
	require_once "not.html"; 
else
{

$result1=mysqli_query($con,"SELECT * FROM rez where shen='$shen'");
while($crs1=mysqli_fetch_assoc($result1))
  {
  print("<tr>");
  print("<td>".$crs1["sath"]."</td>"."<td>".$crs1["noe"]."</td>"."<td>".$crs1["onvan"]."</td>"."<td>".$crs1["year"]."</td>"."<td>".$crs1["emtiaz"]."امتیاز</td>");
  print("</tr>");
  }	


}
?></table>
						
						</center>
						
					</div>

				</div>
			</div>
		</div>
	</section>
					
						
					
						
                    </div>
		            
		        </section>


		        <section id="tmpl-structure">
		            <img src="img/sginupevent.png" width="100%" alt="event">
					<br> 
				<center>	<h2> ثبت نام در تمامی رویداد ها 30 روز پیش از برگزاری هر رویداد امکان پذیر است | ظرفیت رویداد ها محدود است </h2>
		           	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90" id="menu_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>	
							<a href="uhighlife.php">
								
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/highl.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">گروه همایش های هایلایف </h4>
									<span></span>
									<p>قسمت اول - 12 اردیبهشت ماه </p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
											<div class="overlay overlay-bg"></div>		
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/hislife.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">گروه همایش های هیستوریلایف</h4>
									<span></span>
									<p>قسمت اول - 1 تیر ماه </p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
												<div class="overlay overlay-bg"></div>			<a href="cal.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/calender.png" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">رویداد های بیشتر</h4>
									<span></span>
									<p>تقویم اجرایی</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-category-widget Area -->
		        </center>
		        </section>
<br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br>

		        <section id="css-structure">
		            <img src="img/mag.png" width="100%" alt="event">
					<br><br><br><br>
		              	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90" id="menu_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>	
							<a href="smag.html">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">نشریه ی اختصاصی نخبه ی ایرانی </h4>
									<span></span>
									<p>درخواست چاپ - نوبت تیر ماه</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="mag.html">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">سایر نشریات داخلی</h4>
									<span></span>
									<p>درخواست چاپ - توبت خرداد ماه</p>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="imag.html">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">نشریات بین المللی</h4>
									<span></span>
									<p>درخواست چاپ - نوبت سپتامبر</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div><br>


						<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>	
							<a href="ganon.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">قوانین چاپ مقاله</h4>
									<span></span>
									<p>قوانین سایت </p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="bmag.html" >
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">بانک مقالات نخبه ی ایرانی</h4>
									<span></span>
									<p>مقالات ارسال شده به نخبه ی ایرانی</p>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="mshop.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">فروشگاه نشریات</h4>
									<span></span>
									<p>خرید آسان مقالات چاپ شده در نشریات </p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
					<br><br><br><br><br><br><br><br>
		        </section>
		        
		        <section id="javascript">
		      <img src="img/book.png" width="100%" alt="book">
					<br>
<br>
<br>
<br>

					  <!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90" id="menu_area">
		<div class="container">
			<div class="row">
								<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>	
							<a href="lineb.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">چاپ کتاب</h4>
									<span></span>
									<p>ثبت درخواست - نوبت تیر ماه</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="ganon.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/suidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">قوانین چاپ کتاب</h4>
									<span></span>
									<p>قوانین سایت</p>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="bshop.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/biidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">فروشگاه کتاب</h4>
									<span></span>
									<p> خرید آسان کتب چاپ شده توسط نخبه ی ایرانی</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-category-widget Area -->
		             <br>
<br>
<br>
<br>
<br>
<br>

		          
		        </section>
		        
				<!-------------------------------------------------------------------------------------------------------->
				
				<section id="contact-form">
		     <center>   <img src="img/expo.png" width="70%" alt="expo and tu"></center>
					
					
					
					<center>	<h2> ثبت نام در تمامی رویداد ها 30 روز پیش از برگزاری هر رویداد امکان پذیر است  </h2></center><br>

		                 <!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90" id="menu_area">
		<div class="container">
			<div class="row">
								<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>	
							<a href="expo.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">نمایشگاه</h4>
									<span></span>
									<p>عرضه محصولات - 23 الی 27 شهریور</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="cal.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/calender.png" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">فهرست نمایشگاه ها و مسابقات</h4>
									<span></span>
									<p>تقویم اجرایی</p>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/biidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">مسابقات</h4>
									<span></span>
									<p>سامانه ثبت نام در مسابقات</p>
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-category-widget Area -->
		            <br>
<br>
<br>
<br>
<br>
<br>

		        </section>
		    <!---------------------------------------------------------->
				<section id="subscription-form">
		         <center>   <img src="img/agency.png" width="100%" alt="r&d"></center><br><br><br><br>
		         <!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90" id="menu_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>	
							<a href="iranidia.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/iranidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">ایده برای نخبه ی ایرانی</h4>
									<span></span>
									<p>اصلاح یا توسعه ی نخبه ی ایرانی</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="suidia.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/suidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">حمایت نخبه ی ایرانی </h4>
									<span></span>
									<p>درخواست حمایت از ایده</p>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>							<a href="biidia.html" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/biidia.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">تجاری سازی ایده ها</h4>
									<span></span>
									<p>درخواست تجاری سازی ایده ها</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-category-widget Area -->
					<br><br><br><br>
		        </section>
		        <section id="video">
					<center>  	<img src="img/sucard.png" width="70%" alt="card exports"></center>
					<
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
						<div class="col-lg-8 posts-list">
	

					<div class="single-post row">
			
						<div >
												<div class="comment-form">
						<h2>کد ملی خود را وارد نمایید</h2>
						<form name="sub" accept-charset="UTF-8" id="myform" method="post" action="verifycard.php"> 
				<br>
<br>

							<div class="form-group">
								<input type="number" maxlength="10" name="interno" class="form-control" id="interno" placeholder="کد ملی" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'کد ملی خود را وارد نمایید'" required="">
							</div>
								
							<br> 
							 ضمن مطالعه ی قوانین سایت و قوانین رقابت ،تمامی قوانین را تائید مینمایم 
							<input type="checkbox" required >
							<br>
							<br>
							<input type="submit" value="مرحله ی بعد" class="primary-btn">
						</form>
													
					</div>
								
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
					<br><br>
		        </section>
		      
		    </div>
		</div>
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
        <script type="text/javascript" src="js/custom.js"></script>
		
    </body>
</html>





