<?php 
include("admin/connect.php");
include_once "allfunction.php";
$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);
$cid=$data['CourseID'];
?>
<html class="no-js" lang="">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <title>AERE | Assessment Services - Course Offerings</title>
        <link rel="apple-touch-icon" href="image/favicon-apple.png">
        <link rel="icon" href="image/favicon.png">
        <link rel="pingback" href="http://tritraining.edu.au/xmlrpc.php">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
        <link type="text/css" media="screen" rel="stylesheet" href="css/fastfonts.css" />
		
		
		
		 <!-- Normalize CSS -->
    <link rel="stylesheet" href="css_new/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css_new/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css_new/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css_new/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css_new/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css_new/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="css_new/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="css_new/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="css_new/hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css_new/style.css">
    <!-- Modernizr Js -->
    <script src="js_new/modernizr-2.8.3.min.js"></script>
		<style type="text/css">
.wrapper {
 //padding-top: 20px;
	padding-top: 50px;
}
input.parsley-error, select.parsley-error, textarea.parsley-error {
	border-color: #843534;
	box-shadow: none;
}
input.parsley-error:focus, select.parsley-error:focus, textarea.parsley-error:focus {
	border-color: #843534;
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px #ce8483
}
.parsley-errors-list {
	list-style-type: none;
	opacity: 0;
	transition: all .3s ease-in;
	color: #d16e6c;
	margin-top: 2px;
	margin-bottom: 0;
	padding-left: 0px;
}
.parsley-errors-list.filled {
	opacity: 1;
	color: #C5161D;
}
</style>
		
        
        <style type="text/css">
img.wp-smiley, img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
        <link rel='stylesheet' id='ajax-load-more-css'  href='css/ajax-load-more.css' type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.none{display:none !important;}
.pageshow{
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	padding: 0;
	margin: 0;
	float: left;
	display: inline;
	text-align: center;
	color: #337ab7;
	padding: 10px 16px;
font-size: 18px;
line-height: 1.3333333;

}
.fa
{
	margin-top:13px; 
}
.courses-box1 .single-item-wrapper .courses-content-wrapper .item-title a:hover
{
	color: #C4161C;
}
 

.courses-box1 .single-item-wrapper .courses-content-wrapper .courses-info li 
{
    
    padding-right: 0px !important;
    margin-right: 2px;
}

.courses-box1 .single-item-wrapper .courses-img-wrapper a
{
	height:70px !important;
	width:70px !important;
}
.hentry header, .homepage-article header, .blog-article header
 {
     padding: 0em 0em !important; 
}
ul 
{
    margin: 1em -15px !important;
}
.courses-page-area2 {
    padding: 50px 0 70px;
    background: #f5f5f5;
}
.registration-form .btn {
    width: 35% !important;
}
</style>
        <link rel='stylesheet' id='cpsh-shortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-boot-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-magnafic-css'  href='css/magnific-popup.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-animate-css'  href='css/animate.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-stylesheet-css'  href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-icons-css'  href='css/icons.css' type='text/css' media='all' />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' type='text/css' media='all' />
        </head>

        <body class="home page page-id-2 page-template page-template-page-home single single-team page-template-page-home-php desktop">
<div id="container">
          <div id="custom-content-popup" class="white-popup mfp-hide"> </div>
          <header class="header " role="banner">
    <div id="inner-header" class="wrap cf"> <a id="logo" href="index.php" rel="nofollow"><img src="image/logo.png" ></a>
              <div class="mobile-nav mobile-nav-collapsed "><a id="mobile-nav-button" href="javascript:void(0);"><span></span><span></span><span></span><!-- <div class="icon icon-list-1"></div> --></a></div>
            </div>
    <div id="mega-menu" class="">
              <nav role="navigation">
         <ul id="menu-main" class="nav top-nav cf">
                  <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.php">Home</a></li>
                  <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.php#home-to-scroll">About</a></li>
                  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#section-blue" >Services</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#presentations">Presentations</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#page">One Pagers</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#staff" >Staff</a></li>
				  <li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-126"><a href="allcourses.php" class="active">ALL-Institute</a></li>
                  <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-125"><a href="index.php#footer">Contact</a></li>
				 
                </ul>      </nav>
            </div>
  </header>
          <div id="content">
    <div id="inner-content" class="cf">
              <div id="main" class="m-all t-all d-all cf" role="main">
        <!--<div class="section-white page-slider home-page-slider hom inner_banner_height">
                  <div class="parallax1" > </div>
                </div>-->
	  <div class="section-white section-one">
								<article class="cf wrap post-410 team type-team status-publish has-post-thumbnail hentry profile-category-manager" role="article">
									<br>
									<header class="article-header wow fadeInUp">
										<h1 class="page-title">Forgot password</h1>
									</header>
									
	</div>								
	<!-- NEW CODE HERE  -->								
	
									
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('image/image1.jpg');">
            <div class="container">
                <div class="pagination-area">
                  
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
        </div>
	
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 2 Area Start Here -->
		
		
        <div class="courses-page-area2">
            <div class="container" id="inner-isotope">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       
					     <div class="form-top " >
                                                <div class="form-top-left">
                                                    <h3>Forgot Password <i class="fa fa-pencil pull-right"></i></h3>
                                                </div>
                                                <p class="clearfix">Please enter password:</p>
                                                <div class="form-top-divider"></div>
													</div>
					   								
			<div class="form-bottom">
            
<?php 
 session_start();
$email=$_SESSION['email'];
if(isset($_POST['otpbtn']))
{
	$pass=$_REQUEST['password'];
    $sql=mysql_query("SELECT * FROM tblregister WHERE Password= '$pass'");
 	$row = mysql_fetch_array($sql);
	$pas=$row['Password'];
	if($pass==$pas)
	{
		echo"<script>alert('your password is correct');
		document.location='registration2.php?cid=$cid';
		
		</script>";
	}
	else
	{
		echo"<script>alert('your password is wrong');
		document.location='forgotpass.php?cid=$cid';
		
		</script>";
	}
}

?>            
				<form name="f1" id="signupbtn"  method="post" class="registration-form">
														
					<input type="hidden" name="action" value="signUp" />
															
						<div class="form-group">
							
							<input maxlength="50" name="password" placeholder="Enter your password" class="firstname form-control" type="text" >
						</div>
						
						
																														<div class="form-group">
																															<button type="submit" class="btn" name="otpbtn">Recover Password</button>
																														</div>
															
                                                                                                                        
					</form>
			</div>
					
					   
                    </div>
                </div>
				<div class="row featuredContainer">
				
			
										
				
                    				
												
											
					
											
												
											
		
            
		
		<!-- user Profile -->
		<?php
	session_start();
	$reid=$_SESSION['RegisterId'];
	if(isset($_SESSION['RegisterId']))
	{
		$res=mysql_query("SELECT  tblcourseregistered.createdOn,tblcourse.Title,tblcourse.CourseID,tblcourse.StartDate from tblcourseregistered INNER JOIN tblcourse on tblcourseregistered.CourseID=tblcourse.CourseID where tblcourseregistered.RegisterId='$reid'  ");
		
		$noofrec=mysql_num_rows($res);
			if($noofrec>0)
			{	 
				while($data=mysql_fetch_array($res))
				{
											//print_r($data);
											//exit;
				?>										


										
				
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 user">
                        <div class="courses-box1">
                            <div class="single-item-wrapper" style="float:left">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
								  
                                    <img class="img-responsive">
									
									<div style="height:180px;width:285px; background-color:lightgrey;padding:25px" >
                                     <h style="font-size: 18px;font-weight: 500;text-align:justify ;line-height: 1.1;color:black !important;"><center style="padding-top:30px;"> <?php echo $data['Title'];?></center> </h>
									</div>
									 <a href="detail.php?cid=<?php echo $data['CourseID'];?>"><i class="logo" aria-hidden="true"></i>
									  <div style="margin-top:0px;">Click for</div>
									 <div style="margin-top:-25px;">detail</div>
									 </a>

                                </div>
								
                                <div class="courses-content-wrapper">
                                    
									
                                   
                                    <ul class="courses-info">
                                       <li><?php echo $data['StartDate'];?>
                                            <br><span> <b> StartDate </b></span></li>
                                       
									<li><?php echo $data['createdOn'];?>
                                            <br><span> <b>Registeron</b></span></li>
										</ul>
                                </div>
                            </div>
                        </div>
                    </div>  						
											
												
											
		<?php
			}
		}
		
		else
		{
			?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 user">
                        <div class="courses-box1">
                            <div class="single-item-wrapper" style="float:left">
                            	<div style="height:180px;width:1100px; background-color:lightgrey;padding:25px" >
                                    <center style="font-size:24px;margin-top:40px;">   No Course Available..</center>
									</div>
                                
                            </div>
                        </div>
                    </div> 
		<?php	
	    }	
	}
	
		?>	
			<!-- end user Profile -->
			</div>			
				</div>	
                 <!--   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse mathematics medical">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="img_new/course/9.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">GMAT</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>3 Months
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma mathematics">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="img_new/course/10.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">IELTS</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>09 am - 11 am
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse english medical">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="img_new/course/4.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">CSE</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>2 Months
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>02 pm - 04 pm
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma english">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="img_new/course/5.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Diploma</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>4 Months
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>08 am - 10 am
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse mathematics medical">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="img_new/course/6.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Mathematics</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>10 am - 12 pm
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mathematics english">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="img_new/course/7.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>3 Years
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>09 am - 11 am
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse medical">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="img_new/course/8.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">GMAT</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>8 Months
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>05 pm - 08 pm
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>		-->	
									
									
									
									
									
									
									
									
									
									
									
									
									
									
	<!-- NEW CODE END HERE  -->								

									<!-- <section class="cf">
										<div class="m-all t-all d-all table-responsive">
											<ul class="nav nav-tabs">
												<li class="active"><a href='allcourses.php'>All</a></li>
												<li><a href='current.php'>Current</a></li>
												<li><a href='upcoming.php'>Upcoming</a></li>
												<li><a href='finished.php'>Previous</a></li>
											</ul>
											<table class="table table-bordered table-striped display" id="example" width="100%" cellspacing="0">
                                                                                        <thead class="thead-inverse">
																						<tr>
                                                                                            <th width='400'>Title</th>
                                                                                            <th>Start Enrollment Date</th>
																							<th>End Enrollment Date</th>
                                                                                            <th width='200'>Location</th>
                                                                                            <th width='150'>Time</th>
                                                                                            <th>Fees</th>
																							<th>Status</th>
                                                                                            <th>Detail</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
											<?php
												
												
											/*if(isset($_GET["page"]))
												$page = (int)$_GET["page"];
											else
												$page = 1;

											$setLimit = 3;
											$pageLimit = ($page * $setLimit) - $setLimit; */
											$cnd= " AND 1=1 ";
											 $date=date('Y-m-d');
											
											//$res=mysql_query("SELECT * FROM tblcourse where IsStatus = 1 LIMIT ".$pageLimit." , ".$setLimit);
											$res=mysql_query("SELECT * FROM tblcourse where IsStatus = 1 ")	;
											$noofrec=mysql_num_rows($res);
											if($noofrec>0){	 
												while($data=mysql_fetch_array($res))
												{
												 
												echo "<tr>";    echo "<td width='400'>".$data['Title']."</td>";
												 
												
												 
												$sdate = date_create($data['StartDate']);
												$ssdate =date_format($sdate,'m/d/Y');
            									echo "<td class='text-center'>".date_format($sdate,'m/d/Y')."</td>";
												
												$edate = date_create($data['EndDate']);
												$eedate =date_format($edate,'m/d/Y');
												echo "<td class='text-center'>".date_format($edate,'m/d/Y')."</td>";
												 
												echo "<td class='text-center' width='200'>".$data['Location']."</td>";
												 
												echo "<td class='text-center' width='150'>".$data['Time']."</td>";
												$CourseFees = (is_numeric($data['CourseFees'])?"$".$data['CourseFees']:$data['CourseFees']);
												echo "<td class='text-center'>".$CourseFees."</td>";
												
												$tcapacity=$data['TotalCapacity'];
												$noofreg=$data['NoofUserRegistered'];
												$status="";
												 $cdate=date('m/d/Y');
												$ssdate=strtotime($ssdate);
												$eedate=strtotime($eedate);
												$cdate=strtotime($cdate);
												
												if($cdate>=$ssdate && $cdate<=$eedate && $tcapacity!=$noofreg ){
													$status="Current  ";
												}else if($cdate<$eedate){
													$status="Upcoming";
												}
												else if($cdate>$eedate){
													$status="Previous";
												}
												
												echo "<td class='text-center'>".$status."</td>";
												
												echo "<td class='text-center'><a href='registration.php?cid=".$data['CourseID']."' title='View'><i class='fa fa-eye'></i></a></td>";
												 
												echo "</tr>";    
												 
												}
											}else{
												echo "<tr><td colspan='7'>No Course Available</td></tr>"; 
											}	 
												
												
												 
												// receive  value(value sent  using query string )

											?>
                                                                                        </tbody>
											</table>
										</div>										
										<div><?php //displayPaginationBelow($setLimit,$page); ?></div>
									</section>
								</article>
							</div>
  </div>  -->
</div></div>
         <footer class="footer"  id="footer" role="contentinfo">
    <div id="inner-footer" class="wrap cf">
              <div class="m-all t-all d-3of4"> 
        <!--<div class="source-org copyright cf"><span>&copy; 2015. All Rights Reserved. </span>
                  <ul id="menu-terms" class="terms-nav terms-links">
            <li id="menu-item-484" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-484"><a href="http://elearning.tritraining.com.au" onclick="__gaTracker('send', 'event', 'outbound-widget', 'http://elearning.tritraining.com.au', 'eLearning Login');">eLearning Login</a></li>
            <li id="menu-item-471" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-471"><a href="terms-and-conditions/index.php">*^Terms and Conditions</a></li>
            <li id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-521"><a href="policies-and-procedures/index.php">Policies and Procedures</a></li>
            <li id="menu-item-474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-474"><a href="audit-information/index.php">Audit Info &#038; Partnering Agencies</a></li>
          </ul>
                </div>-->
        
        <nav role="navigation" class="hom">
                  <ul id="menu-footer" class="footer-nav footer-links cf" style="margin: 13px 0 14px 0;">
           <!-- <div class="m-all t-all hot d-1of2 footer-logo"> <img src="image/footer-logo.png"> </div>
          

  <li id="menu-item-145" class="m-all t-all hot d-1of3">
                      <h3 class="heading">Our Story</h3>
                      <ul class="sub-menu ">
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><a href="#">Assessment Services</a></li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><a href="#">Educational Services</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><a href="#">Research Services</a></li>
              </ul>
                    </li>

-->
            <li id="menu-item-42" class="m-all t-all hot d-1of2">
                      <h3 class="heading">Contact Us</h3>
                      <ul class="sub-menu" style="margin-top:21px;">
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><i class="fa fa-home fa-footer"></i>Gaithersburg, MD 20879 , Located only 23 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;miles away from Washington, DC </li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><i class="fa fa-phone fa-footer"></i><a href="#">443-716-8075</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-envelope fa-footer"></i><a href="mailto:manny@aerexperts.com">manny@aerexperts.com</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-globe fa-footer"></i><a href="www.aerexperts.com" target="_blank">www.aerexperts.com</a></li>
              </ul>
                    </li>
          </ul>
                  <div id="recent-posts-2" class="widget widget_recent_entries">
            <h3 class="widgettitle">From the Blog</h3>
            <ul>
                      <li> <a href="#">Risky Business – Overcoming the fear of failure</a> </li>
                    </ul>
          </div>
        </nav>
      </div>
        <div class="m-all t-all hot d-1of4 footer-form d-form">
          <p class="form-msg">Send us a short message</p>
        <div id="message" style="color:blue;text-align:center;font-size:12px;"></div>
        

       <?php
	
	if(isset($_POST['send']))
	{
		$fname=$_POST['fname'];
		
		
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$remark=$_POST['remark'];
		$code=$_POST['code'];
		
		
		session_start();
		if(strcmp($_SESSION['code'],$_POST['code']) !=0)
		{
			$errors["code"]="You entered Wrong Captcha Code";
			echo "<script>alert('please try again code is wrong');
				
			</script>";
		}
		else
		{
	
						$insert=mysql_query("insert into tablcontact(Fname,Contact,Email,Remark)
						values('$fname','$contact','$email','$remark')");
						
						//var_dump($insert);
						//exit;
	
						if($insert)
						{?>
                        
							
							<?php 
							
							       require_once('email/class.phpmailer.php');
									$mail = new PHPMailer(); // create a new object
									$mail->IsSMTP(); // enable SMTP
									$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
									$mail->SMTPAuth = true; // authentication enabled
									$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
									$mail->Host = "smtp.gmail.com";
									$mail->Port = 465; // or 587
									$mail->IsHTML(true);
									$mail->FromName="OpenEyes Software Solutions Pvt.Ltd"; 
									$mail->Username = "npatelnirav8@gmail.com";
									$mail->Password = "tanupatel";
									$mail->SetFrom("npatelnirav8@gmail.com");
									
									$mail->Subject = "User Visited";
									$mail->Body = "<img src='http://aerexperts.com/image/logo.png' height='80px' width='180px'> <br><br><br>
									Hello, <br/>
									
										User Visited  Email :$email<br/>
										User Visited Name : $fname<br/>
										User Visited contact Number : $contact<br/>
										
										User Contact :$pno<br/><br/><br/>
										
										Kind Regards, <br/>
										Thank You,<br/>
										Our Team <br/>";
									$mail->AddAddress('npatelnirav8@gmail.com');
									if(!$mail->Send())
									{
										echo "Mailer Error: " . $mail->ErrorInfo;
									}
									else
									{
								
										echo ("<script>alert('record inserted...!');</script>");	
									}
							
						}
		}
		
	

	}
	
?>

		

        <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_6' >
          <form method="post" enctype="multipart/form-data" >
            <div class="gform_body">
                  <ul id="gform_fields_6" class="gform_fields top_label form_sublabel_below description_below">
                       <li id="field_6_1" class="gfield gfield_contains_required field_sublabel_below field_description_below">
                          <label class="gfield_label" for="input_6_1">First Name<span class="gfield_required">*</span></label>
                          <div class="ginput_container">
                            <input name="fname"  class="large" placeholder="First Name*" type="text" required data-parsley-pattern="^[a-zA-Z ]+$"  data-parsley-trigger="keyup">
                          </div>
                      </li>
                    <li id="field_6_4" class="gfield field_sublabel_below field_description_below">
                        <label class="gfield_label" for="input_6_2">Phone</label>
                        <div class="ginput_container">
                            <input name="contact"  class="large"  placeholder="Contact No" type="text" required data-parsley-pattern="^[0-9]+$" data-parsley-trigger="keyup">
                        </div>
                    </li>
                    <li id="field_6_3" class="gfield gfield_contains_required field_sublabel_below field_description_below">
                          <label class="gfield_label" for="input_6_3">Email<span class="gfield_required">*</span></label>
                        <div class="ginput_container">
                          <input name="email"   class="large" placeholder="Email*" type="email" required  data-parsley-trigger="keyup">
                        </div>
                    </li>
					<li>
						<div class="m-all t-all hot d-1of2">
							<input  class="gform_button button" value="Send" type="submit" name="send" 
							style="margin-top:5px;"/>
						</div> 
					</li>
					</ul>
              
            </div>
			
           <div class="gform_body">
              <div class="ginput_container">
                 <textarea name="remark"  placeholder="Remarks" required></textarea>
				
              </div>
              <tr>
					    <div class="ginput_container">
                          <input name="code" id="code" class="large" required placeholder="Enter captcha code" type="text">
						   <?php
								if(isset($errors["code"]))
								{
									echo $errors["code"];
								}
							?>
                        </div>
			  </tr>
            <tr>
            	
				
                <td>
                	<img src="generatecaptcha.php?rand=<?php echo rand(); ?>" id="im" style="margin-top:5px;">
                	
                   <a href='javascript:ref();' style="float :right;margin-top:10px; margin-right:50px;">
						<h3>Refresh</h3>
                    </a>
                    
                	<script language="javascript">
						function ref()
						{
							var img=document.images['im'];	
							
							img.src=img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
						}
					</script>
                    
                </td>
                
            </tr>
           
      </div>
        </form>  
    </div>
  </footer>
        </div>
<link rel='stylesheet' id='gforms_reset_css-css'  href='css/formreset.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='css/formsmain.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css'  href='css/readyclass.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css'  href='css/browsers.min.css' type='text/css' media='all' />

<script type='text/javascript'  src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">


$('#mega-menu ul li a').on('click',function(){
   $('.menu-main').addClass('none');
   $('.mobile-nav').addClass('menu-open1');
   $('.menu-main').removeClass('menu-open');
});

$('#mobile-nav-button').on('click',function(){
   $('.menu-main').addClass('menu-open');
   $('.menu-main').removeClass('none');
});
</script>
<script type='text/javascript' src='js/magnific-popup.js'></script> 
<script type='text/javascript' src='js/wow.min.js'></script> 
<script type='text/javascript' src='js/scripts.min.js'></script> 
<script type='text/javascript' src='js/jquery.sticky-kit.js'></script> 
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 

<script class="init" type="text/javascript">
$(document).ready(function() {
     $('#example').dataTable( {
    "oLanguage": {
      "sLengthMenu": "Show _MENU_ of Course",
      "sInfo": "Showing _START_ to _END_ of _TOTAL_ Course"
    }
});
} );

</script>
<script>
/*
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
*/
$(".about-the-quickfacts").stick_in_parent({
    offset_top: 70
});
</script>

<!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="js_new/jquery-2.2.4.min.js" type="text/javascript"></script>
   
    <script src="js/bootstrap.min.js"></script> 
<script src="parsleyjs/dist/parsley.min.js"></script> 
<script>
$(document).ready(function(){
	$('form').parsley();
});
</script>
    <!-- Plugins js -->
    <script src="js_new/plugins.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="js_new/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="js_new/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="vendor/slider/home.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="js_new/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="js_new/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="js_new/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="js_new/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="js_new/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="js_new/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="js_new/main.js" type="text/javascript"></script>

</body>
</html>