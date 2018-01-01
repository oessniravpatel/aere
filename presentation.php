
<?php 
include("admin/connect.php");
include_once "allfunction.php";
?>
<!doctype html>

        <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <title>AERE | Research Services</title>
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

        <body class="home page page-id-2 page-template page-template-page-home page-template-page-home-php page-template-page-ourstory desktop">
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
                  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#section-blue" class="active">Services</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#presentations">Presentations</a></li>
				   <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#page">One Pagers</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#staff">Staff</a></li>
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
        <div class="section-white section-one services_page">
        
                
              
          
		             <div id="how-we-do-it" class=" section-two pad">
										<div class="wrap">
												<div class="hentry">
														<header class="article-header">
																<h1 class="wow fadeInUp">Presentations</h1>
														</header>
												</div>
										<div class='m-all t-all d-all pad-bottom'>
										<div class='m-all t-all d-all section-content hedi-1 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2017.png' border='0'>
										    </div>
										    <div class='section-wrap'>
										        <div class='entry-text hedi-content'>
										            <p><strong><a href="presentation/2017/ATP 2017 Common Validation and Fairness Threats When Evaluating Programs Against Accreditation, Testing, and Measurement Standards (final, feb 25, 2017).pdf" target="_blank">Common Validation and Fairness Threats When Evaluating Programs Against Accreditation, Testing, and Measurement Standards</a></strong>
										            </p>
										            <p> ATP 2017</p>

										            <p><strong><a href="presentation/2017/ATP 2017 Developing Guidance for Low Volume Exam Programs - A Foundation to Address the Challenges (final, Feb 20, 2017).pdf" target="_blank">Developing Guidance for Low Volume Exam Programs - A Foundation to Address the Challenges</a></strong>
										            </p>
										            <p> ATP 2017</p>

										            <p><strong><a href="presentation/2017/ATP2017_QA Session with Experts to Overcome Test Development Challenges (final, Feb 25, 2017).pdf" target="_blank">A Q&A Session with Experts to Overcome Test Development Challenges</a></strong>
										            </p>
										            <p> ATP 2017</p>
										        </div>
										    </div>
										</div>

										<div class='m-all t-all d-all section-content hedi-2 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2016.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>
										            <p><strong><a href="presentation/2016/2016 ICE Four Innovative Ways to Lead and Facilitate SME Groups in the Assessment Industry.pdf" target="_blank">Four Innovative Ways to Lead and Facilitate SME Groups in the Assessment Industry</a></strong>
										            </p>
										            <p> Institute for Credentialing Excellence 2016 Annual Conference</p>

										            <p><strong><a href="presentation/2016/2016 ICE Managing Change in Certification - Ensuring Relevance in Skills Assessment (November 6, 2016).pdf" target="_blank">Managing Change in Certification - Ensuring Relevance in Skills Assessment</a></strong>
										            </p>
										            <p> Institute for Credentialing Excellence 2016 Annual Conference</p>

										            <p><strong><a href="presentation/2016/2016 MARC Big Data Presentation (final, Oct 27 2016).pdf" target="_blank">High Level Strategic Approaches for Conducting Big Data Studies in Assessment Studies</a></strong>
										            </p>
										            <p> MARC Big Data Presentation</p>

										            <p><strong><a href="presentation/2016/E-ATP 2016 Presentation What Managers and Executives Should Know When Translating.pdf" target="_blank">What Managers and Executives Should Know When Translating and Adapting Assessments for a Global Market</a></strong>
										            </p>
										            <p> European Association of Test Publishers 2016 Conference</p>
										            <p><strong><a href="presentation/2016/E-ATP 2016 Leveraging Technology and Data to Facilitate Lifelong.pdf" target="_blank">Leveraging Technology and Data to Facilitate Lifelong Learning</a></strong>
										            </p>
										            <p> European Association of Test Publishers 2016 Conference</p>
										            <p><strong><a href="presentation/2016/E-ATP 2016_Are Neuroasssessments the Next Innovative Disruption.pdf" target="_blank">Are Neuroassessments the Next Disruptive Innovation in the Testing Industry?</a></strong>
										            </p>
										            <p> European Association of Test Publishers 2016 Conference</p>
										            <p><strong><a href="presentation/2016/2016 CNG Psychometrics - Going Global - Translating Your Exam (final, Jun 15 2016).pdf" target="_blank">Psychometrics – Going Global: Translating Your Exam</a></strong>
										            </p>
										            <p> Certification Network Group, June 2016</p>
										            <p><strong><a href="presentation/2016/2016 ATP Conference  - Four Innovative Ways to Lead and Facilitate SME Groups in the Assessment Industry.pdf" target="_blank">Four Innovative Ways to Lead and Facilitate SME Groups in the Assessment Industry</a></strong>
										            </p>
										            <p> Association of Test Publishers Innovations in Testing 2016 Conference</p>
										            <p><strong><a href="presentation/2016/2016 ATP Are Neuroassessments the Next Disruptive Innovation.pdf" target="_blank"> Are Neuroassessments the Next Disruptive Innovation</a></strong>
										            </p>
										            <p> Association of Test Publishers Innovations in Testing 2016 Conference</p>
										            <p><strong><a href="presentation/2016/ATP 2016 What Should Managers and Executives Know When Translating and Adapting Assessments for a Global Market.pdf" target="_blank">What Should Managers and Executives Know When Translating and Adapting Assessments for a Global Market?</a></strong>
										            </p>
										            <p> Association of Test Publishers Innovations in Testing 2016 Conference</p>

										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-1 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2015.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>
										            <p><strong><a href="presentation/2015/2015_ice_what_does_recertification_really_mean.pdf" target="_blank">What Does Recertification Really Mean?</a></strong>
										            </p>
										            <p>Institute for Credentialing Excellence 2015 Annual Conference</p>

										            <p><strong><a href="presentation/2015/2015 ICE Big Data (final, Oct 10 2015).pdf" target="_blank">Working and Managing Big Data in the Testing Industry</a></strong>
										            </p>
										            <p>Institute for Credentialing Excellence 2015 Annual Conference</p>

										            <p><strong><a href="presentation/2015/2015 ICE Standard Setting Presentation (final, Oct 12 2015).pdf" target="_blank">Issues to Consider When Undertaking a Standard Setting Exercise</a></strong>
										            </p>
										            <p>Institute for Credentialing Excellence 2015 Annual Conference </p>

										            <p><strong><a href="presentation/2015/2015_e_atp_presentation_big_data_presentation.pdf" target="_blank">Five Innovative Practices to Manage and Work with Big Data for the European Testing Industry</a></strong>
										            </p>
										            <p>European Association of Test Publishers 2015 Conference</p>

										            <p><strong><a href="presentation/2015/2015_cng_top_psychometric_tips_presentation.pdf" target="_blank">Top Psychometric Tips</a></strong>
										            </p>
										            <p>Certification Network Group - June 2015 Meeting </p>

										            <p><strong><a href="presentation/2015/2015_atp_common_challenges_in_developing_and_updating_test_content.pdf" target="_blank">Common Challenges in Developing and Updating Test Content</a></strong>
										            </p>
										            <p>Association of Test Publishers Innovations in Testing 2015 Conference</p>

										            <p><strong><a href="presentation/2015/2015_atp_presentation_big_data_presentation.pdf" target="_blank">Five Innovative Practices to Manage and Work with Big Data in the Testing Industry</a></strong>
										            </p>
										            <p>Association of Test Publishers Innovations in Testing 2015 Conference</p>

										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-2 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2014.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>

										            <p><strong><a href="presentation/2014/2014_ice_psychometric_rules_of_thumb_that_every_credentialing_manager_should_know.pdf" target="_blank">Psychometric Rules of Thumb that Every Credentialing Manager Should Know</a></strong>
										            </p>
										            <p>Institute for Credentialing Excellence 2014 Annual Conference</p>
										            <p><strong><a href="presentation/2014/2014_atp_psychometric_rules_of_thumb_that_every_credentialing_manager_should_know.pdf" target="_blank">Psychometric Rules of Thumb that Every Credentialing Manager Should Know</a></strong>
										            </p>
										            <p>Association of Test Publishers Innovations in Testing 2014 Conference</p>
										            <p><strong><a href="presentation/2014/2014_atp_results_of_a_data_visualization_competition_to_report_item_performance_statistics.pdf" target="_blank">Results of a Data Visualization Competition to Report Item Performance Statistics</a></strong>
										            </p>
										            <p>Association of Test Publishers Innovations in Testing 2014 Conference</p>

										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-3 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2013.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>
										            <p><strong><a href="presentation/2013/2013_aea_important_ingredients_to_an_internship_program.pdf" target="_blank">Important Ingredients to an Internship Program</a></strong>
										            </p>
										            <p>American Evaluation Association - 2013 Annual Conference</p>

										            <p><strong><a href="presentation/2013/2013_atp_what is_your_certification_worth_how_to_use_a_value_of_certification_study_to.pdf" target="_blank">What is Your Certification Worth? How to Use a Value-of-Certification Study to
										                    Increase the Long-term Growth of Your Program</a></strong>
										            </p>
										            <p>Association of Test Publishers Innovations in Testing - 2013 Conference</p>

										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-2 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2012.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>

										            <p><strong><a href="presentation/2012/2012_driving_success_setting_cut_scores_for_examination_programs_with_diverse_item_types.pdf" target="_blank">Driving Success: Setting Cut Scores for Examination Programs with Diverse Item Types</a></strong>
										            </p>
										            <p>Institute for Credentialing Excellence - 2012 Annual Conference </p>

										            <p><strong><a href="presentation/2012/2012_aea _one_dogmatic_paradigm_do_credentialing_programs_work.pdf" target="_blank">One Dogmatic Paradigm: Do Credentialing Programs Work?</a></strong>
										            </p>
										            <p>American Evaluation Association - 2012 Annual Conference</p>


										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-3 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2011.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>
										            <p><strong><a href="presentation/2011/atp2011_expanding_your_credentialing_testing_program.pdf" target="_blank"> Expanding Your Credentialing Testing Program to International Markets-
										                    Is it for the Mission, Money, or Both?</a></strong>
										            </p>
										            <p>Association of Test Publishers Innovations in Testing - 2011 Conference</p>
										            <p><strong><a href="presentation/2011/2011_atp_leed_fellow_program.pdf" target="_blank">On Building an Online Fellow Recognition Program: The LEED Fellow Online Program</a></strong>
										            </p>
										            <p>Association of Test Publishers Innovations in Testing - 2011 Conference</p>

										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-2 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2010.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>

										            <p><strong> <a href="presentation/2010/2010_apa_defining_the_purpose_of_the_practice_analysis_to_the_credentialing_organization_a_case_study.pdf" target="_blank"> Defining the Purpose of the Practice Analysis to the Credentialing Organization: A Case Study</a></strong>
										            </p>
										            <p>American Psychological Association - 118th Conference Convention </p>


										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-3 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2009.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>
										            <p><strong><a href="presentation/2009/2009_apa_social_desirablity_ratings_and_statding_settings.pdf" target="_blank">Role of Social Desirability and Judges’ Ratings in Standard Settings</a></strong>
										            </p>
										            <p>American Psychological Association, 117th Conference Convention</p>


										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-2 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2007.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>

										            <p><strong><a href="presentation/2007/2007_sju_are_you_in_the_slow_lane.pdf" target="_blank">Are You in the Slow Lane? Teaching Students in the Fast Lane with Podcasting</a></strong>
										            </p>
										            <p>Saint Joseph’s University 2007 - Fall Technology Open House</p>
										            <p><strong>PETAIM Golf-Mind Performance System</strong>
										            </p>
										            <p>Performing the World 4 </p>
										            <p><strong>Rapid Item Generation</strong>
										            </p>
										            <p>2006 Conference on Research in Medical Education (RIME) </p>


										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-3 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2003.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>
										            <p><strong><a href="presentation/2003/2003_apa_preventing_bullying_in_schools_a_community_action_research.pdf" target="_blank">Preventing Bullying in Schools: A Community Action Research</a></strong>
										            </p>
										            <p>American Psychological Association - 111th Conference Convention</p>
										            <p><strong><a href="presentation/2003/2003_apa_how_can_culturally_diverse_clients_benefit_from_postmodern_therapists.pdf" target="_blank">How Can Culturally Diverse Clients Benefit from Postmodern Therapists?</a></strong>
										            </p>
										            <p>American Psychological Association - 111th Conference Convention</p>
										            <p><strong><a href="presentation/2003/2003_temple_the_social_construction_of_beliefs_about_cancer_a_critical_discourse_analysis_of_racial_differences.pdf" target="_blank">The Social Construction of Beliefs about Cancer: A Critical Discourse Analysis of Racial Differences
										                    in the Popular Press</a></strong>
										            </p>
										            <p>Temple University’s First Symposium on Qualitative Research</p>

										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-2 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2002.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>

										            <p><strong><a href="presentation/2002/2002_apa_improvisation_in_counseling.pdf" target="_blank">Improvisation in Counseling</a></strong>
										            </p>
										            <p>American Psychological Association - 110th Conference Convention</p>


										        </div>
										    </div>
										</div>
										<div class='m-all t-all d-all section-content hedi-3 wow fadeInUp'>
										    <div class='entry-content hedi-image'><img src='image/2000.png' border='0'>
										    </div>
										    <div class='section-wrap'>

										        <div class='entry-text hedi-content'>
										            <p><strong>Innovative Treatment Approaches—Performing Supervision: Developmental, Learning and
										                    Postmodern Psychotherapy</strong>
										            </p>
										            <p>American Psychological Association - 108th Conference Convention</p>
										            <p><strong><a href="presentation/2000/2000_apa_creative_evolution_henri_bergson_and_psychotherapy_a_postmodern_perspective.pdf" target="_blank">Creative Evolution, Henri Bergson, and Psychotherapy: A Postmodern Perspective</a></strong>
										            </p>
										            <p>American Psychological Association - 108th Conference Convention </p>


										        </div>
										    </div>
										</div>








										</div>
												<div class="cf"></div>
										</div>
								
          
		  
		  
		  
                    
          </div>
        
        
        
        
                  <div class="clearfix"></div>
                </div>
        
      </div>
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
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><i class="fa fa-home fa-footer"></i>Gaithersburg, MD 20879 , Located only 23<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; miles away from Washington, DC </li>
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
          <p class="form-msg" style="margin-top:-14px">Send us a short message</p>
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

  <script src='https://www.google.com/recaptcha/api.js'></script>      
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