<?php include("admin/connect.php"); 
session_start();
$cid=$_REQUEST['cid'];
$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);
$emailpass=$_SESSION['Email'];
//print_r($data);

?>
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>AERE | Details Services</title>
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
<style>

h3.sidebar-title {
  font-size: 22px;
  color: #002147;
  text-transform: capitalize;
  margin-bottom: 35px;
  position: relative;
  font-weight: 500;
  text-align:left;
  
}
.title-default-left {
    text-transform: capitalize;
    text-align: left;
    font-weight: 700;
	font-size:28px;
    margin-bottom: 45px;
    color: #002147;
}
.course-details-inner .course-details-tab-area ul.course-details-tab-btn > li a 
{
	 font-weight: 700;
}
.related-courses-title-area h3 
{
 
  text-align:left;
  font-size:22px;
  font-weight: 700;
}
.owl-nav
{
   padding-top:15px;
}
.enroll-btn {
  color: #002147;
  padding: 18px 0;
  background: #ffffff;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 700;
  display: inline-block;
  border: #C4161C;
  width: 100%;
  border: 2px solid #C4161C;
  text-align: center;
  -webkit-transition: all 0.5s ease-out;
  -moz-transition: all 0.5s ease-out;
  -ms-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out;
}
.enroll-btn:hover {
  background-color:#C4161C;
  color: #ffffff !important;
}
h3.sidebar-title:before {
  content: "";
  height: 3px;
  width: 40px;
  position: absolute;
  left: 0;
  bottom: -15px;
  z-index: 1;
  background: #C4161C !important;
}
.courses-box1 .single-item-wrapper .courses-img-wrapper:before
{
	background-color: rgba(250, 0, 0, 0.8) !important;	
}

ol, ul {
	padding: 0;
	list-style-type: none;
	text-align: left !important;
}
#accordion .panel-default .panel-heading a {
    outline: none;
    display: block;
    padding: 1px !important;
    text-align: center;
}
.curriculum-wrapper .panel-default .panel-heading .panel-title a ul li:nth-child(3n) {
    font-size: 16px;
    color: #002147;
    font-weight: 700;
}
dl, menu, ol, ul {
  
}
h4
{
    font-family: 'Roboto', sans-serif;
    line-height: 1.5 !important;
    font-weight: 300 !important;
    margin: 0 0 20px 0;
    color: #212121;
}
h3
{
text-align:left !important;
    font-family: 'Roboto', sans-serif;
    line-height: 1.5;
    font-weight: 600 !important;
   
    color: #212121;
}
.courses-box1 .single-item-wrapper .courses-img-wrapper a
{
	height:70px !important;
	width:70px !important;
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
.btn-t{
	margin-top:10px;
}
a:hover, a:visited:hover {
    text-decoration: none;
    color: #ffffff;
}
.areview
{
  margin-top:8px !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper .item-title a:hover
{
	 color: #C4161C !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper .courses-info li
{
	padding-right: 0px !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper
 {
    padding: 20px 0px !important;
}

.courses-box1 .single-item-wrapper
{
	width:285px !important;
}

.courses-page-area5 
{
    padding: 10px 0 70px !important;
}
.courses-page-area5 
{
    padding: 30px 0 70px !important;
}

ul 
{
    margin: 1em 0px !important;
}
.hentry header, .homepage-article header, .blog-article header {
    padding: 0em 0em !important;
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
.hentry header, .homepage-article header, .blog-article header
 {
     padding-top: 3em  !important;
    margin-top:40px;	 
}
.none{display:none !important;}
</style>
        <link rel='stylesheet' id='cpsh-shortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-boot-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-magnafic-css'  href='css/magnific-popup.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-animate-css'  href='css/animate.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-stylesheet-css'  href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-icons-css'  href='css/icons.css' type='text/css' media='all' />
        <link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' type='text/css' media='all' />
        </head>

        <body class="home page page-id-2 page-template page-template-page-home single single-team page-template-page-home-php desktop">
<div id="container">
          <div id="custom-content-popup" class="white-popup mfp-hide"> </div>
          <header class="header scrolled" role="banner">
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
                  
				  
				   <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="allcourses.php">ALL-Institute</a></li>
				  <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#footer">Contact</a></li>
				
                </ul>
      </nav>
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
										<h1 class="page-title">Course Details</h1>
									</header>

									
			</div>						
									 <!-- Inner Page Banner Area Start Here -->
       <!-- <div class="inner-page-banner-area" style="background-image: url('img_new/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Single Course - 03</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Courses Details</li>
                    </ul>
                </div>
            </div>
        </div>-->
        <!-- Inner Page Banner Area End Here -->
									<!-- Courses Page 5 Area Start Here -->
        <div class="courses-page-area5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="course-details-inner">
                            <h2 class="title-default-left title-bar-high"><?php echo $data['Title'];?></h2>
                           
							
                            <img src="img_new/course/20.jpg" class="img-responsive" alt="course">
                            <div class="course-details-tab-area">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <ul class="course-details-tab-btn">
                                            <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Description</a></li>
                                            
                                            <li><a href="#lecturer" data-toggle="tab" aria-expanded="false">Lecturer</a></li>
                                         <!--   <li><a href="#reviews" data-toggle="tab" aria-expanded="false">Reviews</a></li>  -->
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
									
                                        <div class="tab-content">
                                             <div class="tab-pane fade active in" id="description">
                                                <h3 class="sidebar-title" >Course Description</h3>
                                                
												 <p style="text-align:justify"><?php if($data['Summary']!='')
												 {
													 echo $data['Summary'];
													 } else{echo  "Not Available";}?></p>
												<div class="col-lg-6">
													<h3 class="sidebar-title" style="font-size:16px;">Start Date and Time</h3>
													
													<p><?php
													if($data['StartDate']!='')
												 {
													       echo $data['StartDate'];
												 }else{echo "Not Available";}
													?>&nbsp;/&nbsp;
													<?php if($data['Time']!='')
												 {
													echo $data['Time'];
												 }else{echo "Not Available";}
													?>
													
													</p>
													<h3 class="sidebar-title"  style="font-size:16px;">Location</h3>
													<p><?php if($data['Location']!='')
												 { echo $data['Location'];}else{echo  "Not Available";}?></p>
													<h3 class="sidebar-title"  style="font-size:16px;">Intended Audience</h3>
													<p><?php  if($data['IntendedAudience']!=''){ echo $data['IntendedAudience'];}else{echo  "Not Available";}?></p>
													
												</div>
												
												<div class="col-lg-6">
													<h3 class="sidebar-title"  style="font-size:16px;">Instructor(s)</h3>
													<p><?php if($data['Instructor']!=''){ echo $data['Instructor'];}else{echo  "Not Available";}?></p>
													<h3 class="sidebar-title"  style="font-size:16px;">Discussant/Moderator</h3>
													<p><?php  if($data['Instigator']!=''){echo $data['Instigator'];}else{echo  " Not Available";}?></p>
													<h3 class="sidebar-title" style="font-size:16px;">Total seats available</h3>
													<p><?php $noofuserreg=$data['NoofUserRegistered'];	
															$totcap=$data['TotalCapacity'];
															$setave=$totcap-$noofuserreg; 
															if($setave!=''){ echo $setave;}else{echo  "Not Avilable";}?></p>
																									
                                                </div>
                                               
                                            </div>
											
                                         
										 
										 
										 
										 
										 
                                            <div class="tab-pane fade" id="lecturer">
                                                <div class="course-details-skilled-lecturers" style="margin: 0 !important;">
                                                    <ul style="margin: 0 !important;">
                                                        <li>
                                                            <div class="skilled-lecturers-img">
                                                                <a href="#"><img src="img_new/sidebar/1.jpg" class="img-responsive" alt="skilled"></a>
                                                            </div>
                                                            <div class="skilled-lecturers-content">
                                                                <h4><a href="#"><?php  echo $data['Instructor'];?></a></h4>
                                                               
                                                            </div>
                                                            
                                                            <div class="skilled-lecturers-details">
                                                                <a href="#" class="details-accent-btn btn-t" >Details</a>
                                                            </div>
                                                        </li>
														
                                                        
                                                    </ul>
                                                </div>
                                            </div>
											
                                            <div class="tab-pane fade" id="reviews">
                                                <div class="course-details-comments">
                                                    <h3 class="sidebar-title">Student Reviews</h3>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/16.jpg" class="media-object areview">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Greg Christman</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/17.jpg" class="media-object areview">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Lora Ekram</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/18.jpg" class="media-object areview">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Mike Jones</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/16.jpg" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Greg Christman</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="leave-comments">
                                                    <h3 class="sidebar-title">Leave A Comment</h3>
                                                    <div class="row">
                                                        <div class="contact-form" id="review-form">
                                                            <form>
                                                                <fieldset>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Name" class="form-control">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="email" placeholder="Email" class="form-control">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <div class="rate-wrapper">
                                                                                <div class="rate-label">Your Rating:</div>
                                                                                <div class="rate">
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                        <div class="related-courses-title-area">
                            <h3>Related Courses</h3>
                        </div>
                        <div id="shadow-carousel" class="related-courses-carousel">
                            <div class="rc-carousel" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
							
							<?php
							$date=date('Y-m-d');
			               $cnd= " AND '$date' BETWEEN  StartDate AND EndDate";
												
			              $res=mysql_query("SELECT * FROM tblcourse Where IsStatus = 1 $cnd order by StartDate");
							$noofrec=mysql_num_rows($res);
								if($noofrec>0)
								{	
							while($data=mysql_fetch_array($res))
							{
//print_r($data);
?>
                                <div class="courses-box1">
                                    <div class="single-item-wrapper" style="300px">
                                        <div class="courses-img-wrapper hvr-bounce-to-right">
                                           
										   <div style="height:180px;width:280px; background-color:lightgrey;padding:25px" >
                                     <h style="font-size: 18px;font-weight: 500;text-align:justify ;line-height: 1.1;color:black !important;"><center style="padding-top:30px;"> <?php echo $data['Title'];?></center> </h>
									</div>
									 <a href="detail.php?cid=<?php echo $data['CourseID'];?>"><i class="logo" aria-hidden="true"></i>
									  <div style="margin-top:0px;">Click for</div>
									 <div style="margin-top:-25px;">detail</div>
									 </a>

										   
                                        </div>
                                        <div class="courses-content-wrapper">
                                            
                                           <!-- <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>-->
                                            <ul class="courses-info">
                                                <li><?php echo $data['StartDate']; ?>
                                                    <br><span><b> Start Date</b></span></li>
                                                <li><?php echo $data['TotalCapacity']; ?>
                                                    <br><span><b>Seat</b></span></li>
										<li><?php echo $data['Time']; ?>
                                                    <br><span><b> Time</b></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               
                        <?php
							}
						}else
						{?>
					
                            <div class="single-item-wrapper" style="aligin:center; ">
                            	<div style="height:180px;width:850px; background-color:lightgrey;padding:25px" >
                                    <center style="font-size:24px;margin-top:40px;">   No Course Available..</center>
									</div>
                                
                            </div>
                      
                    
                        <?php 
						}
						?>						
							   
							   
                            </div>
                        </div>
                    </div>
					 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                       	<?php include("admin/connect.php"); 
$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);
//print_r($data);

?>
  
						<div class="sidebar" style="width:262px; margin:0px 0px 10px 0px">
                            <div class="sidebar-box" >
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Course Fees</h3>
                                    <div class="sidebar-course-price">
                                        <p>$<?php echo $data['CourseFees']; ?></p>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
						<br>
						
				
 <?php
	

	
	
	$select1=mysql_query("select * from tblregister where Email='$emailpass'");
	$result1=mysql_fetch_array($select1);
	$query=mysql_num_rows($select1);
	 $isactive=$result1['IsActive'];
	 $regid=$result1['RegisterId'];
	  $fnm=$result1['FirstName'];
	  $em=$result1['Email'];
	 $pno=$result1['Phone'];
	 $lnm=$result1['LastName'];
    $add=$result1['Address'];

	 $cid=$_REQUEST['cid'];
	if($query>0)
	{ 
	
		
		if($isactive=="1")
		{
		?>
			
				<div class="alert alert-success" style="width:262px; margin:0px 0px 10px 0px">
					<strong>You are login successfully.</strong> <?php echo $emailpass ?>
				</div>

			
				<div class="sidebar-box">
                    <div class="sidebar-box-inner">	
						<a href="logout.php"><button type="submit" class="btn btn-danger btn-block" name="signinbtn">Logout</button></a>
					</div>
			</div>
						
		
					
		<?php
								   
				$selcourse=mysql_query("select * from tblcourse where CourseID='$cid'");
				$res1=mysql_fetch_array($selcourse);
				$cid=$res1['CourseID'];
				$totseat=$res1['TotalCapacity'];
				$noofseat=$res1['NoofUserRegistered'];
				$date1=date('Y-m-d');
				$edate =$res1['EndDate'];

				
				if(isset($_POST['enroll']))
				{
					$enr=mysql_query("select * from tblcourseregistered where CourseID='$cid' && RegisterId='$regid' ");
					$enrol=mysql_fetch_array($enr);

					if($edate < $date1)
					{	
					?>
                         <div class="alert alert-danger" style="width:262px; margin:0px 0px 10px 0px">
				              <strong>Deadline is closed</strong>
				         </div>	
					
					<?php	
					}
					else if($enrol!=0)
					{
					?>
					    <div class="alert alert-danger" style="width:262px; margin:0px 0px 10px 0px">
				              <strong>You are already registered in this course.</strong>
				         </div>
						
					
					<?php
					}else if($noofseat>=$totseat)
					{?>
                    <div class="alert alert-danger" style="width:262px; margin:0px 0px 10px 0px">
				               <strong>Registration is closed</strong>
				         </div>
													
					<?php	
					}

					else
					{
					
						$isactive=$result1['IsActive'];
						$regid=$result1['RegisterId'];
						$cid=$_REQUEST['cid'];
						$ins=mysql_query("insert into tblcourseregistered(RegisterId,CourseID,IsActive) values('$regid','$cid','$isactive')");
						$noofseat2=$noofseat+1;
						$upd=mysql_query("update tblcourse set NoofUserRegistered='$noofseat2' where CourseID='$cid'");
						//var_dump($res1);
						//exit();
						if($upd)
						{
									$cid=$data['CourseID'];
									$tit=$data['Title'];
									$Instructor=$data['Instructor'];
									$Instigator=$data['Instigator'];
									$StartDate=$data['StartDate'];
									$Location=$data['Location'];
									$Time=$data['Time'];
									$IntendedAudience=$data['IntendedAudience'];
									$MeetingType=$data['MeetingType'];
									$CourseFees=$data['CourseFees'];
								
									
									require_once('email/class.phpmailer.php');
									$mail = new PHPMailer(); // create a new object
									$mail->IsSMTP(); // enable SMTP
									$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
									$mail->SMTPAuth = true; // authentication enabled
									$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
									$mail->Host = "smtp.gmail.com";
									$mail->Port = 465; // or 587
									$mail->IsHTML(true);
									$mail->FromName="AERE"; 
									$mail->Username = "@gmail.com";
									$mail->Password = "";
									$mail->SetFrom("@gmail.com");
								//	$mail->AddEmbeddedImage('emailimage/logo.png','logoimg','logo.jpg');
									$mail->Subject = "AERE Cource $tit";
									$mail->Body =  "<img src='http://aerexperts.com/image/logo.png' height='80px'   width='180px'> <br><br><br>
									Dear <b>$fnm,<b><br><br>
							
									Thank you for your interest in the course $tit.We have received your 
									registration with the following detail:<br><br>
										
									<b>First name</b> : $fnm<br>
									<b>Last name</b> : $lnm<br>
									<b>Email address</b> : $em<br>
									<b>Address</b> : $add<br>
									<b>Phone number</b> : $pno<br>
									<br><br>
									Here is the course detail again:<br><br>
									
									<b>Instructors</b> : $Instructor<br>
									<b>Instigator</b> : $Instigato<br>
									<b>Date </b> : $StartDate <br>
									<b>Location </b> : $Location<br>
									<b>Venue </b> : $Venue<br>
									<b>Time </b> : $Time<br>
									<b>Intended Audience</b> : $IntendedAudience<br>
									<b>Meeting Type</b> : $MeetingType<br>
									<b>Fees</b> : $$CourseFees<br><br>
									
									If you need to make any changes to this, please do not hesitate to 
									contact us at Manny@AERExperts.com or simply reply and someone will get back
									 to you soon.<br><br>
									
									 <b>Thank you,</b><br>
									<b>AERE Team</b>";
									$mail->AddAddress($emailpass);
								
									if(!$mail->Send())
									{
										echo "Mailer Error: " . $mail->ErrorInfo;
									}
									else
									{
										
										
									require_once('email/class.phpmailer.php');
									$mail = new PHPMailer(); // create a new object
									$mail->IsSMTP(); // enable SMTP
									$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
									$mail->SMTPAuth = true; // authentication enabled
									$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
									$mail->Host = "smtp.gmail.com";
									$mail->Port = 465; // or 587
									$mail->IsHTML(true);
									$mail->FromName="AERE"; 
									$mail->Username = "@gmail.com";
									$mail->Password = "";
									$mail->SetFrom("@gmail.com");
									
									$mail->Subject = "New registration for course $tit";
									$mail->Body = "<img src='http://aerexperts.com/image/logo.png' height='80px' width='180px'> <br><br><br>
									Hey Team, <br/><br>
										
									Someone just registered to take the couese $tit:<br><br>
									
									<b>First name</b> : $fnm<br>
									<b>Last name</b> : $lnm<br>
									<b>Email address</b> : $em<br>
									<b>Address</b> : $add<br>
									<b>Phone number</b> : $pno<br>
									<br/><br/>
										
										
									<b>Thank You,</b><br/>
									<b>Your web team </b><br/>";
									$mail->AddAddress('npatelnirav8@gmail.com');
									if(!$mail->Send())
									{
										echo "Mailer Error: " . $mail->ErrorInfo;
									}
									else
									{
										?>
								   <div class="alert alert-success" style="width:262px; margin:0px 0px 10px 0px">
				                	    <strong> Thank you for registering for this course.</strong>
								   </div>

                        
							<?php
										
									}
										
										
										
									}
														
														
														
														
							
							
							
							
							
							
						}
					}
																									
				}			 
				?>         
						<form method="post">
							<div class="sidebar-box">
								<div class="sidebar-box-inner">	
									<input type="submit" onclick="return confirm('Are you sure enroll for this course?')"  class="btn btn-danger btn-block" value="Enrollment" name="enroll">	
								 </div>
							</div>
						</form>
								
									
		<?php		
		}
		else
		{
		?>
						
					 <div class="sidebar">
		                    <div class="sidebar-box" style="margin-top:-30px;">
                                <div class="sidebar-box-inner">	
				
								 <h3 class="sidebar-title">Sign In</h3>
                                    <div class="sidebar-course-price">
                                        
                                        <a href="registration2.php?cid=<?php echo $_REQUEST['cid'];?>">
										<button type="submit" class="btn btn-danger btn-block">Sign In</button></a>
                                        
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
                        <div class="sidebar">
		                    <div class="sidebar-box" style="margin-top:-30px;">
                                <div class="sidebar-box-inner">	
				
								 <h3 class="sidebar-title">Sign In</h3>
                                    <div class="sidebar-course-price">
                                        
                                        <a href="registration2.php?cid=<?php echo $_REQUEST['cid'];?>">
										<button type="submit" class="btn btn-danger btn-block">Sign In</button></a>
                                        
                                    </div>
								</div>
							</div>	
		                </div>
							
	<?php 	
	}
	?> 






						

							
							
							

								
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 5 Area End Here -->
        <!-- Footer Area Start Here -->
       
        <!-- Footer Area End Here -->
    </div>
									
									
									
										
									
							
 
	  
  </div>
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
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><i class="fa fa-home fa-footer"></i>Gaithersburg, MD 20879 , Located only 23 &nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;miles away from Washington, DC </li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><i class="fa fa-phone fa-footer"></i><a href="#">443-716-8075</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-envelope fa-footer"></i><a href="mailto:manny@aerexperts.com">manny@aerexperts.com</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-globe fa-footer"></i><a href="www.aerexperts.com" target="_blank">www.aerexperts.com</a></li>
              </ul>
                    </li>
          </ul>
                  
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
									$mail->Body = " Hello, <br/>
									
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
                            <input name="contact"  class="large"  placeholder="contact No" type="text" required data-parsley-pattern="^[0-9]+$" data-parsley-trigger="keyup">
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
							<input  class="gform_button button" style="margin-top:10px;" value="Send" type="submit" name="send" />
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
                	<img src="generatecaptcha.php?rand=<?php echo rand(); ?>" style="margin-top:10px;" id="im">
                	
                   <a href='javascript:ref();'style="margin-top:10px;    float: right;
    margin-right: 52px;">
                    <h3> Refresh</h3>
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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script> 
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
function displayOverlay(text) {
    $("<table id='overlay'><tbody><tr><td>" + text + "</td></tr></tbody></table>").css({
        "position": "fixed",
        "top": "0px",
        "left": "0px",
        "width": "100%",
        "height": "100%",
        "background-color": "rgba(0,0,0,.5)",
        "z-index": "10000",
        "vertical-align": "middle",
        "text-align": "center",
        "color": "#fff",
        "font-size": "40px",
        "font-weight": "bold",
        "cursor": "wait"
    }).appendTo("body");
}

function removeOverlay() {
    $("#overlay").remove();
}

function showsignIn(){
		$(".forgot").css("display", "none");
		$(".signUp").css("display", "none");
		$(".signIn").css("display", "block");
}
function showsignUp(){
	$(".forgot").css("display", "none");
	 $(".signUp").css("display", "block");
	 $(".signIn").css("display", "none");
}
function showforgot(){
	 $(".forgot").css("display", "block");
	 $(".signUp").css("display", "none");
	 $(".signIn").css("display", "none");
}

//////////////////
// Wait for the DOM to be ready
$("document").ready(function(){
		//Submit this form when user is not registered in course
	$("form#registration").validate({
		submitHandler: function() {
		displayOverlay("Processing...");
		data = $('form#registration').serialize();

			$("#registerdbtn").attr('disabled','disabled');
			$.ajax({
				type: "POST",
				
				url: "saveregister.php", //Relative or absolute path to response.php file
				data: data,
				success: function(data) {
					
					removeOverlay();
					$("#errormsg").php("");
							$("#errormsg").css("display","block");
							$("#errormsg").php("<div class='alert alert-info center'><strong>Thank you for registering for this course. An email has been sent out with more detail to you. See you soon</strong></div>");
							setTimeout( function(){$('#errormsg').hide();
							window.location.reload();
							window.location = "allcourses.php";
							} , 15000);
							//window.location.reload();								
				}		
			});
			return false;
		}
	});
	//Check user registration form with validation
  $("form#signupbtn").validate({
    // Specify validation rules
    rules: {
		firstname: { 
			required: true,
			rangelength: [2, 40]
		},
		lastname: { 
			required: true,
			rangelength: [2, 40]
		},
		email: {
			required: true,
			pattern: /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
			email: true
		},
		pass: {
			required: true,
			minlength: 5,
			rangelength: [2, 15]
		},
		confpass: {
			equalTo: "#pass"
		},
		Phone: {
			required: true,
			number: true,
			rangelength: [2, 12]
		},
	address: {
		required: true,
		}
    },
    // Specify validation error messages
    messages: {
      firstname: {
			required: "Please enter your first name",
			rangelength: "Invalid length for first name"
	  },
      lastname: {
			required:"Please enter your last name",
			rangelength: "Invalid length for last name"
	  },
	  email:{ required: "Please enter your email address",
			pattern: "Wrong formatted email address",
			email: "Wrong formatted email address"
		},
      pass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      confpass : "Please confirm your password",
	  Phone: {
        required: "Please enter your phone number",
		number: "Please enter valid phone number",
        minlength: "Invalid length for phone number"
      },
	  address : "Please enter your address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function() {
		displayOverlay("Processing...");
		data = $('form#signupbtn').serialize();
       $.ajax({
				type: "POST",
				
				url: "saveregister.php", //Relative or absolute path to response.php file
				data: data,
				success: function(data) {
					
					removeOverlay();
					if(data=="Error"){
						$("#errormsg").php("");
							$("#errormsg").css("display","block");
							$("#errormsg").php("<div class='alert alert-error'><strong>Sorry !</strong>  Sorry ! The email address already exists! Please login with your credentials or try registering with another email address </div>");
							setTimeout( function(){$('#errormsg').hide();} , 12000);
					}else{
							$("#firstname").val("");
							$("#lastname").val("");
							$("#email").val("");
							$("#pass").val("");
							$("#confpass").val("");
							$("#Phone").val("");
							$("#address").val("");
							$("#errormsg").php("");
							$("#errormsg").css("display","block");
							$("#errormsg").php("<div class='alert alert-success'><strong>Success!</strong>Your registration detail have been received. Please check your email to confirm and activate your account with AERE. Come back to register for offered courses</div>");
							setTimeout( function(){$('#errormsg').hide();window.location.reload();} , 12000);
					}
				}
			});
			return false;
	}
  });


  //Check user registration form with validation
  $("#signinbtn").validate({
    // Specify validation rules
    rules: {
		
      email1: {
        required: true,
        pattern: /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
        email: true
		},
      pass1: {
        required: true,
	
		},
	
    },
    // Specify validation error messages
    messages: {
     
	  email1: {required: "Please enter a valid email address",
	  pattern: "Wrong formatted email address",
	  email: "Wrong formatted email address"
	  },
      pass1: {
        required: "Please provide a password",
       
      },
      
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function() {
		displayOverlay("Processing...");
			data = $("form#signinbtn").serialize();
			$.ajax({
				type: "POST",
				url: "saveregister.php", //Relative or absolute path to response.php file
				data: data,
				success: function(data) {
				removeOverlay();
					if(data==="Success"){
					
						window.location.reload();

					} else{	$("#errormsg").php("");
							$("#errormsg").css("display","block");
							$("#errormsg").php(data);
							setTimeout( function(){$('#errormsg').hide();} , 15000);
						
					}
				}
			});
			return false;
	}
  });

  
  //Check user registration form with validation
  $("#forgotbtn").validate({
    // Specify validation rules
    rules: {
		
      email3: {
        required: true,
        pattern: /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
        email: true
		},
     	
    },
    // Specify validation error messages
    messages: {
     
	  email3:{ required: "Please enter a valid email address",
      pattern: "Wrong formatted email address",
		email: "Wrong formatted email address",
	  }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function() {
		displayOverlay("Processing...");
			data = $("form#forgotbtn").serialize();
			$.ajax({
				type: "POST",
				url: "saveregister.php", //Relative or absolute path to response.php file
				data: data,
				success: function(data) {
				removeOverlay();
					$("#errormsg").php("");
					$("#errormsg").css("display","block");
					$("#errormsg").php(data);
					setTimeout( function(){$('#errormsg').hide();} , 15000);
				}
			});
			return false;
	}
  });
showsignIn();
});

</script>
<script type='text/javascript' src='js/magnific-popup.js'></script> 
<script type='text/javascript' src='js/wow.min.js'></script> 
<script type='text/javascript' src='js/scripts.min.js'></script> 
<script type='text/javascript' src='js/jquery.sticky-kit.js'></script> 
<script>
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
    <script src="js_new/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="js_new/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="js_new/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Select2 Js -->
    <script src="js_new/select2.min.js" type="text/javascript"></script>
    <!-- Nouislider Js -->
    <script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>
    <!-- Validator js -->
    <script src="js_new/validator.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="js_new/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
<script src="js_new/main.js" type="text/javascript"></script> 
 


</body>
</html>