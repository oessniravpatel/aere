<?php 
include("admin/connect.php");
include_once "allfunction.php";
?>
<!doctype html>

        <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <title>AERE | Assessment Services</title>
        <link rel="apple-touch-icon" href="image/favicon-apple.png">
        <link rel="icon" href="image/favicon.png">
        <link rel="pingback" href="http://tritraining.edu.au/xmlrpc.php">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
        <link type="text/css" media="screen" rel="stylesheet" href="css/fastfonts.css" />
        
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
	color:#C4161C;
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
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#staff" class="active">Staff</a></li>
                  <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-125"><a href="index.php#footer">Contact</a></li>
                </ul>
      </nav>
            </div>
  </header>
          <div id="content">
    <div id="inner-content" class="cf">
              <div id="main" class="m-all t-all d-all cf" role="main">
        <div class="section-white page-slider home-page-slider hom inner_banner_height" >
                  
                  <!-- <div class="parallax-slider" data-parallax="scroll" data-image-src="http://tritraining.edu.au/wp-content/uploads/2015/04/homepage-jul-2015.jpg" > --> 
                  <!-- <div class="parallax-slider" style="background-size:cover; background-image:url('wp-content/uploads/2015/04/homepage-jul-2015.jpg');" > -->
                  <div class="parallax1" > </div>
                  
                  
                  <!-- </div>							 -->
                  <!--<div class="skew-wrapper">
                    <div class="skew-bar"></div>
                  </div>-->
                </div>
        		<!--<div id="container">
                  <div class="parallelogram inner_banner"> </div>
                </div>-->
      
	  <div class="section-white section-one">
								<article class="cf wrap post-410 team type-team status-publish has-post-thumbnail hentry profile-category-manager" role="article">

									<header class="article-header wow fadeInUp">

										<h1 class="page-title">
											Austin Fossey  
										</h1>

									</header>

									<section class="entry-content cf wow fadeInUp">
										<div class="m-all t-1of3 d-1of3 about-the-quickfacts">
											<table>
												<tr><td><img src="image/Austin.jpg" border="0"></td><td></td></tr>												
											</table>																						
										</div>
										<div class="m-all t-2of3 d-2of3 pad about-the-course">
											<p class="p1">Austin is a psychometrician with 10 years of experience in assessment and evaluation. Austin has worked on assessment programs in both credentialing and education, as well as other related education research projects. Austin also managed the Green Building Certification Institute's assessment program when it first achieved ANSI 17024 accreditation. </p>
<p class="p1">Austin has held roles at Questionmark Corporation, American Institutes for Research (AIR), Green Building Certification Institute (GBCI), World Bank's Independent Evaluation Group (IEG), and Building Materials Resource Center (BMRC). He has experience in nearly every aspect of assessment design and delivery, including job task analyses, blueprint development, item development, standard setting, scaling, scoring, and reporting. He has also worked on assessment program research, and was the lead Reporting Project Manager for teacher evaluation studies for New York, Texas, and the Teacher Leader Evaluation Systems (TLES) projects at AIR. He served two years on the technical advisory board for International Credentialing Associates (ICA) and has worked as an independent statistical consultant for organizations like Yale University and the District Department of Transportation. </p>

<p class="p1">Austin is a doctoral candidate at the University of Maryland’s Department of Evaluation, Statistics, and Measurement (EDMS). His thesis research focuses on design, data-tagging, and data mining techniques in complex computer-based assessment. Prior to this, he earned his M.A. at EDMS, culminating in a research paper exploring methods for detecting and reporting item dependence in linear-on-the-fly testing (LOFT) designs. He earned his B.A. with a double major in Mathematics and Sociology at Boston University. </p>

<p class="p1">Austin has presented at many industry conferences, including the Institute for Credentialing Excellence (ICE), the Association for Talent Development (ATD), the Questionmark Users Conference, the Inter-American Development Bank (IADB) Education Summit series, and the Minnesota Assessment Conference. He also has conducted assessment trainings for Delaware Department of Education, Oregon Department of Education, and Questionmark Corporation, and he was the primary author for the psychometrics section for ICE's online training course, “Certification 201: Advanced Topics in Certification.”  He is also an active member of the American Educational Research Association (AERA) and the National Council on Measurement in Education (NCME).

</p>

<p class="p1"><strong>- Austin Fossey – Director of Psychometrics and Research </strong></p>
										</div>										
									</section>

								</article>
							</div>
							
							<div  class="section-white wrap pad  page-template-page-ourstory">
                                <article class="cf m-all t-1of4 d-1of4 post-410 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="manfred.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Manfred.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Dr. Manfred Straehle, GISF</h4>
                                            <p class="push-color text-center">[ Founder and President ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Andre.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Andre.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Andre DeChamplain, PhD</h4>
                                            <p class="push-color text-center">[ Distinguished Psychometrics, Assessment and Research Officer ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Liberty.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Liberty.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Liberty J. Munson, Ph.D.</h4>
                                            <p class="push-color text-center">[ Chief Psychometrics, Assessment, and Research Officer ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Michelle.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Michelle.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Michelle Nolin, CPLP</h4>
                                            <p class="push-color text-center">[ Chief Learning Officer ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Randy.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Randy.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Randy Doran</h4>
                                            <p class="push-color text-center">[ Chief Marketing Officer ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Trushant.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Trushant.png" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Trushant Mehta</h4>
                                            <p class="push-color text-center">[ Chief Technology Officer ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Vesna.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Vesna.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Vesna Champagne, MS, SPHR</h4>
                                            <p class="push-color text-center">[ Assistant Vice President ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Jennifer.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Jennifer.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Jennifer Naughton, SPHR, Masters in Education</h4>
                                            <p class="push-color text-center">[ Principal Consultant ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of4 d-1of4 post-424 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="stacy.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/stacy.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Stacy Jones</h4>
                                            <p class="push-color text-center">[ Project Manager and Director of Research Services ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of4 d-1of4 post-424 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="sherryl.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Sherryl.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Sherryl Hering </h4>
                                            <p class="push-color text-center">[ Manager of Business Development and Research Services ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of4 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="dasha.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Dasha.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image: url('image/gradient.png');">
                                            <h4>Dasha Bukreyeva </h4>
                                            <p class="push-color text-center">[ Assistant Manager of Research ]</p>
                                        </div>
                                    </a>
                                </article>

                                <article class="cf m-all t-1of6 d-1of4 post-439 team type-team status-publish has-post-thumbnail hentry profile-category-manager wow fadeInUp glwidth" role="article">
                                    <a class="course-button scrolled manager" href="Emily.php">
                                        <div class="article-image">
                                            <div class="article-hover push-bg-color">
                                                <h4>VIEW PROFILE</h4>
                                            </div>
                                            <img src="image/Emily.jpg" border="">
                                        </div>
                                        <div class="article-text" style="background-image:url('image/gradient.png');">
                                            <h4>Emily Kim</h4>
                                            <p class="push-color text-center">[ Research Associate ]</p>
                                        </div>
                                    </a>
                                </article>
										<div class="cf"></div>
								</div>
	  
	  
	  
  </div>
  
  
       <footer class="footer"  id="footer" role="contentinfo">
    <div id="inner-footer" class="wrap cf">
              <div class="m-all t-all d-3of4"> 
        <!--<div class="source-org copyright cf"><span>&copy; 2015. All Rights Reserved. </span>
                  <ul id="menu-terms" class="terms-nav terms-links">
            <li id="menu-item-484" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-484"><a href="http://elearning.tritraining.com.au" onclick="__gaTracker('send', 'event', 'outbound-widget', 'http://elearning.tritraining.com.au', 'eLearning Login');">eLearning Login</a></li>
            <li id="menu-item-471" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-471"><a href="terms-and-conditions/index.html">*^Terms and Conditions</a></li>
            <li id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-521"><a href="policies-and-procedures/index.html">Policies and Procedures</a></li>
            <li id="menu-item-474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-474"><a href="audit-information/index.html">Audit Info &#038; Partnering Agencies</a></li>
          </ul>
                </div>-->
        
        <nav role="navigation" class="hom">
                  <ul id="menu-footer" class="footer-nav footer-links cf">
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
                      <ul class="sub-menu">
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><i class="fa fa-home fa-footer"></i>Gaithersburg, MD 20879 , Located only 23<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; miles away from Washington, DC </li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><i class="fa fa-phone fa-footer"></i><a href="#">443-716-8075</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-envelope fa-footer"></i><a href="mailto:manny@aerexperts.com">manny@aerexperts.com</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-globe fa-footer"></i><a href="www.aerexperts.com" target="_blank">www.aerexperts.com</a></li>
              </ul>
                    </li>
          </ul>
                
        </nav>
      </div>
       	<div class="m-all t-all hot d-1of4 footer-form d-form">
          <p class="form-msg" style="margin-top:-13px">Send us a short message</p>
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
									$mail->Body = " <img src='http://aerexperts.com/image/logo.png' height='80px' width='180px'> <br><br><br>
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
<script src='https://www.google.com/recaptcha/api.js'></script>
        
   
 <script src="js_new/main.js" type="text/javascript"></script> 
<script src="js/jquery-1.12.4-jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="parsleyjs/dist/parsley.min.js"></script> 
<script>
$(document).ready(function(){
	$('form').parsley();
});
</script>      
        
        
</body>
</html>