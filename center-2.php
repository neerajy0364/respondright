<?php
include("database_connection.php");
include("manage/libs/db.Connect.Open.inc");
?>


<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->

<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

 

    <meta charset="utf-8">  

    

    <title>Center - Respond Right Education</title> <!--insert your title here-->  

    <meta name="description" content="Respond Right"> <!--insert your description here-->  

    <meta name="author" content="Respond Right"> <!--insert your name here-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

    

    <!--START CSS--> 

    <link rel="stylesheet" href="css/nicdark_style.css"> <!--style-->

    <link rel="stylesheet" href="css/nicdark_responsive.css"> <!--nicdark_responsive-->



    <!--revslider-->

    <link rel="stylesheet" href="css/revslider/settings.css"> <!--revslider-->



    <!--END CSS-->

    

    <!--google fonts-->

    

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> <!-- font-family: 'Montserrat', sans-serif; -->

<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> <!-- font-family: 'Raleway', sans-serif; -->

<link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'> <!-- font-family: 'Montez', cursive; -->

<link href='https://fonts.googleapis.com/css?family=Arvo:400,700,400italic|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>



    



    <!--[if lt IE 9]>  

    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  

    <![endif]-->  

    

    <!--FAVICONS-->

    <link rel="shortcut icon" href="img/favicon.png">

<!--    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">-->

    <!--END FAVICONS-->

	

	







<!-- /Center script -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>

<script>
function showCustomer(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("availability_status").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("availability_status").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","data.php?q="+str,true);
xmlhttp.send();
}
function showCustomer2(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("availability_status2").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("availability_status2").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","data2.php?q="+str,true);
xmlhttp.send();
}
</script>
<!-- /Center script -->
    


<style>

.select1{
    float: left;
    border: 1;
    width: 40%;
    -webkit-appearance: none;
    cursor: pointer;
}
</style>



<style>

.sub-menu li {
    background-color: #ffffff;
}

.sub-menu a {
    color: #003b64;
}

.nicdark_menu > .whitemenu > .sub-menu li, .nicdark_megamenu.red ul li ol li a{ border-bottom:1px solid #666666a3; }

.nicdark_menu > .whitemenu > a:after, .nicdark_menu > .whitemenu .sub-menu li:first-child:before, .nicdark_menu > .whitemenu .sub-menu li ul li:first-child:before{ color: #666666; }

.nicdark_menu > .whitemenu:not(.nicdark_megamenu) > .sub-menu li:hover, .nicdark_megamenu.whitemenu > ul > li > a{ background-color: #fcc700; }

</style> 


</head>  

<body id="start_nicdark_framework">



<div class="nicdark_site">

    <div class="nicdark_site_fullwidth nicdark_clearfix">

        <div class="nicdark_overlay"></div>

        <div class="nicdark_section nicdark_navigation fade-down">

    

        <div class="nicdark_menu_boxed">



            <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">

                <div class="nicdark_container nicdark_clearfix">

                    <div class="grid grid_6">

                        <div class="nicdark_focus">

                            <h6 class="white">

                                <i class="icon-calendar-outlilne"></i>&nbsp;&nbsp;<a class="white" href="programs-respond-right.html">OUR PROGRAMS</a>

                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;

                                <i class="icon-phone-outline"></i>&nbsp;&nbsp;+91-98333 99883 / +91-98331 32776 / +91-99530 02742

                            </h6>

                        </div>

                    </div>

                    <div class="grid grid_6 right">

                        <div class="nicdark_focus right">

                            <h6 class="white">                              

                                <i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white" href="#">LOG IN</a>

                            </h6>

                        </div>

                    </div>                  



                </div>

            </div>



            <div class="nicdark_space3 nicdark_bg_gradient" style="display:none;"></div>



            <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom" style="background-color:#ffffff;box-shadow: 0px 4px 0px 0px #fbc71f;     height: 91px; ">

            <div class="nicdark_container nicdark_clearfix">



                <div class="grid grid_12 percentage">

                        

                        

                        <div class="nicdark_logo nicdark_marginleft10">

                            <a href="index.php"><img alt="" src="img/logo.png"></a>

                        </div>



                        <div class="nicdark_space20"></div>

                          <nav>         

                                 <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                                    <li class="whitemenu"><a href="index.php">Home</a></li>

                                    <li class="whitemenu">

                                        <a href="#">About</a>

                                        <ul class="sub-menu">

                                            <li><a href="initiative-respond-right.html">Initiative</a></li>

                                            <li><a href="founder-respond-right.html">Founder</a></li>

                                            <li><a href="Advisorypanel-respond-right.html">Advisory Panel</a></li>

                                            <li><a href="certification-respond-right.html">Certifications</a></li>

                                            

                                        </ul>

                                    </li>

                                    <li class="whitemenu"><a href="why-right-brain-education-respond-right.html">Why Right Brain Education</a></li>

                                    <li class="whitemenu">

                                        <a href="programs-respond-right.html">Programs</a>

                                    <ul class="sub-menu">

                                         <li><a href="programs-respond-right.html">Activities</a></li>

                                            <li><a href="First-To-Three-Years-Programs.html">1 - 3 years</a></li>

                                            <li><a href="Three-To-Four-And-Half-Years-Programs.html">3 - 4.5 years</a></li>

                                            <li><a href="Four-And-Half-To-Seven-Years-Programs.html">4.5 - 7 years</a></li>
											
											<li><a href="Seven-And-Ten-Years-Programs.html">7 - 10 years</a></li>


                                            

                                        </ul>

                                    </li>

                                    

                                    <li class="whitemenu"><a href="#">Franchise</a>

                                     <ul class="sub-menu"><li><a href="Our-franchise.html">Our Franchise</a></li>

                                        <li><a href="partner-us-respond-right.html">Partner Us</a></li></ul>

                                    

                                    

                                    <li class="whitemenu"><a href="#">Events</a>

                                   		 <ul class="sub-menu">

                                         	<li><a href="happenings-respond-right.php">Happenings</a></li>

                                            <li><a href="gallery-respond-right.html">Gallery</a></li>

											<li><a href="blogs-respond-right-training.html">Blogs</a></li>

                                        </ul>

									</li>

                                    <li class="whitemenu"><a href="faq-respond-right.html">FAQ</a></li>

                                    <li class="whitemenu"><a href="center-2.php">Centers</a></li>

                                    <li class="whitemenu"><a href="#">Contact</a>

                                   		 <ul class="sub-menu">

                                         	<li><a href="contact-respond-right.html">Contact Us</a></li>

                                            <li><a href="career-respond-right.html">Career</a></li>

                                        </ul>

									</li>

                                </ul>

                            </nav>
                            <div class="nicdark_space20"></div>



                    </div>



                </div>

                <!--end container-->



            </div>

            <!--end header-->



        </div>



</div>

<!--start-->

<!--start section-->

<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-event">



    <div class="nicdark_filter greydark">



        <!--start nicdark_container-->

        <div class="nicdark_container nicdark_clearfix">



            <div class="grid grid_12">

                <div class="nicdark_space100"></div>

                <div class="nicdark_space100"></div>

                <h1 class="white subtitle">RESPOND RIGHT CENTERS</h1>

                <div class="nicdark_space10"></div>

                <div class="nicdark_space20"></div>

                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>

                <div class="nicdark_space40"></div>

                <div class="nicdark_space50"></div>

            </div>



        </div>

        <!--end nicdark_container-->



    </div>

     

</section>

<!--end section-->









<!--start section-->
<section class="nicdark_section">
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_space50"></div>       <br>
			<div class="grid grid_12">
				<section class="ulockd-about2">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="ulock-about">
									<b style='font-size: 26px; font-family: PT Sans;' >Largest Training Centers of  Right Brain Education in India </b><br>
									<form action='' method='post'><br><br>
										<div class="col-md-3"></div>
										<div class="col-md-3" style="padding-right:30%;">
											<center>
												<select id="username" name="city" class="select1"  onchange="showCustomer(this.value)" style="font-size: 26px;    background-color: #fbc556a8;" required>
														<option value=''>Select City</option>
																<?php
 
																	$sql5="select city from newlocation123 where city<>'' group by city";
																		$result5= $conn->query($sql5);
																			if ($result5->num_rows > 0)
																				{
																				while($row5 = $result5->fetch_assoc())
																					{  
																						$strstate=$row5['city'];   
			
																?>
	
																					<option value="<?php echo $strstate; ?>"><?php echo $strstate; ?></option>
																<?php 			} 	
																					} 	  ?>
												</select>
											</center>
										</div>
										<div class="col-md-3"></div>
										<div class="col-md-3" style="padding-left:30%;">
											<center>
													<span id=availability_status>
													<select id='username2'  class="select1" style="font-size: 26px;    background-color: #e16c6ca8;"  name='location' >
													<option value=''></option>
													</select> &nbsp; 				
													</span>
											</center>			
										</div>

									</form>	 
								</div>
							</div><br><br>
							<div class="col-sm-12 col-md-12">
								<div class="ulockd-about-box ulockd-mrgn1260">
									<div class="ab-thumb">
										<span id=availability_status2>
											<br><br><br><br><br><br><br>
										</span>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="nicdark_space20"></div>
			</div>
			<div class="nicdark_space20"></div>
		</div>
    <!--end nicdark_container-->
</section>
<!--end section-->



















        

<!--start section-->
			<section id="nicdark_parallax_text" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-2" >
				<div class="nicdark_filter blue" style="background: rgb(252, 199, 0);">



        <!--start nicdark_container-->

        <div class="nicdark_container nicdark_clearfix">



            <div class="grid grid_12">

                <div class="nicdark_space40"></div>

                <div class="nicdark_space50"></div>

                <h2 class="white center adage">"Boost your right brain; open your pathway to love"</h2>

                <div class="nicdark_space20"></div>

                <div class="nicdark_divider big center"><span class="nicdark_bg_white nicdark_radius"></span></div>

                <div class="nicdark_space20"></div>

                <h1 class="signature white center">Respond Right</h1>                

                <div class="nicdark_space40"></div>

                <div class="nicdark_space50"></div>

            </div>



        </div>

        <!--end nicdark_container-->



    </div>

     

</section>

<!--end section-->









<div class="nicdark_space3 nicdark_bg_gradient" style="display:none;"></div>



<!--start section-->

<section class="nicdark_section nicdark_bg_greydark">



    <!--start nicdark_container-->

    <div class="nicdark_container nicdark_clearfix">



        <div class="nicdark_space30"></div>



        <div class="grid grid_3 nomargin percentage">



            <div class="nicdark_space20"></div>



            <div class="nicdark_margin10">

                <h4 class="white">RESPOND RIGHT</h4>

                <div class="nicdark_space20"></div>

                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>

                <div class="nicdark_space20"></div>

                <p class="white">Respond Right Education (RRE) is a creatively designed curriculum by Jay Dhami and Kavisha Sheth for the early right brain development of your child. By travelling across different countries they have deeply studied the right brain exercises for kids and come up with a successful method.<a href="initiative-respond-right.html" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a> </p>

                

                <div class="nicdark_space20"></div>

                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>

					<div class="nicdark_space10"></div>

						<a href="certification-respond-right.html"><h4 style="color: #ffff00;">An ISO Certified Company</h4></a>

					<div class="nicdark_space10"></div>

                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>

                <div class="nicdark_space20"></div>

                <a href="contact-respond-right.html" class="nicdark_btn_icon nicdark_bg_orange small nicdark_shadow nicdark_radius white"><i class="icon-mail-1 nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                <a href="index.php" class="nicdark_btn_icon nicdark_bg_yellow small nicdark_shadow nicdark_radius white"><i class="icon-home nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                <a href="contact-respond-right.html" class="nicdark_btn_icon nicdark_bg_red small nicdark_shadow nicdark_radius white"><i class="icon-phone-outline nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>

        </div>



        <div class="grid grid_3 nomargin percentage">

            

            <div class="nicdark_space30"></div>



            <div class="nicdark_marginleft10">

                <h4 class="white">OUR LINKS</h4>

                 <div class="nicdark_space20"></div>

                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>

                <div class="nicdark_space20"></div>

            </div>

            <div class="nicdark_space10"></div>



            <a href="initiative-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Initiative</a>

            <a href="founder-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Founder</a>

            <a href="gallery-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Gallery</a>

            <a href="programs-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Programs</a>

            <a href="Advisorypanel-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Advisory Panel</a>

            <a href="Our-franchise.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Franchise</a>

            <a href="faq-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">FAQ</a>

            <a href="career-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Career</a>

            <a href="teachers.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teachers</a>

            <a href="partner-us-respond-right.html" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Partner Us</a>



        </div>



        <div class="grid grid_3 nomargin percentage">



            <div class="nicdark_space20"></div>

            

            <div class="nicdark_margin10">

                <h4 class="white">CONNECT  US&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h4>

                <div class="nicdark_space20"></div>

                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>

                <div class="nicdark_space20"></div>

            </div>

            



            <div class="grid nomargin grid_3 percentage">

                <div class="nicdark_margin10">

                    <a href="https://www.facebook.com/respondrighteducation" target="_blank" class="nicdark_facebook nicdark_press right nicdark_btn_icon medium nicdark_radius white" title="Facebook"><i class="icon-facebook-1"></i></a>

                </div>

            </div>

            

            <div class="grid nomargin grid_3 percentage">

                <div class="nicdark_margin10">

                    <a href="https://twitter.com/RespondRightedu" target="_blank" class="nicdark_press right nicdark_btn_icon nicdark_bg_blue nicdark_shadow medium nicdark_radius white" title="Twitter"><i class="icon-twitter-1"></i></a>

                </div>

            </div>            

            

            <div class="grid nomargin grid_3 percentage">

                <div class="nicdark_margin10">

                    <a href="https://www.youtube.com/channel/UCymkJ3kZMJk-gmSfJqQCIWA" target="_blank" class="nicdark_press right nicdark_btn_icon nicdark_bg_red nicdark_shadow medium nicdark_radius white" title="Youtube" style="background-color:#E02A26;box-shadow: 0px 4px 0px 0px #E02A26;"><i class="icon-youtube-play"></i></a>

                </div>

            </div>

            

            <div class="grid nomargin grid_3 percentage">

                <div class="nicdark_margin10">

                    <a href="https://www.instagram.com/respondrightedu/"  target="_blank" class="nicdark_press right nicdark_btn_icon nicdark_bg_red nicdark_shadow medium nicdark_radius white" title="Instagram" ><i class="icon-instagramm"></i></a>

                </div>

            </div>   

            

		</div>



        <div class="grid grid_3 nomargin percentage">



            <div class="nicdark_space20"></div>



            <div class="nicdark_margin10">

                <h4 class="white">CONTACT US</h4>

                <div class="nicdark_space20"></div>

                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>

                <div class="nicdark_space20"></div>

                

                <form method="post" action="https://www.salespeach.in/restapi/httpapi.php?c=NDU4eDZNMWdNKytvNzBMeVBwQ1J5dz09&k=6asTMXeApHOWfF2y&a=iG8LUSTCWj0fcvH2 ">
 					<input type="hidden" value="https://www.respondright.in/Thank-You.html" name="Redirect">
                    <input type="hidden" value="Enquiry from Website" name="s">

                    <input class="nicdark_bg_greydark2 nicdark_radius nicdark_shadow white small subtitle" type="text" required name="e" placeholder="EMAIL">

                    <div class="nicdark_space20"></div>

                    <textarea rows="3" name="f1" class="nicdark_bg_greydark2 nicdark_radius nicdark_shadow white small subtitle" placeholder="MESSAGE"></textarea>

                    <div class="nicdark_space20"></div>

                    <input type="submit" required class="nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white nicdark_press" value="Submit">

                </form>

            </div>

        </div> 



        <div class="nicdark_space50"></div> 



    </div>

    <!--end nicdark_container-->

            

</section>

<!--end section-->





<!--start section-->

<div class="nicdark_section nicdark_bg_greydark2 nicdark_copyrightlogo">



    <div class="nicdark_container nicdark_clearfix">



        <div class="grid grid_5 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">

            <div class="nicdark_space20"></div>

            <p class="white">&copy; Copyright 2016 <span style="color:#ffff00;">Respond Right</span> Made with <i class="icon-heart-filled red nicdark_zoom"></i> by <a href="https://www.wemakewebsites.in/" target="_blank" style="color:#ffff00;">We Make Websites</a></p>       

        </div>





        <div class="grid grid_4">

            <div class="nicdark_focus right nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">



                <br>

                    <a target="_blank" href="terms-conditions.html"  style="color:#fff;font-family:'PT Sans';">Terms & Conditions</a> <span style="color:#fff;">&emsp; | &emsp;</span> <a href="privacy-policy.html" target="_blank" style="color:#fff;font-family:'PT Sans';">Privacy Policy</a>&emsp;<a href="#start_nicdark_framework" class="nicdark_zoom nicdark_internal_link right nicdark_btn_icon nicdark_bg_greydark2 small nicdark_radius white"><i class="icon-up-outline"></i></a>

                

            </div>

        </div>

        

        <div class="grid grid_3"></div>



    </div>

            

</div>

<!--end section-->        </div>

    </div>



    <!--main-->

    <script src="js/main/jquery.min.js"></script> <!--Jquery-->

    <script src="js/main/jquery-ui.js"></script> <!--Jquery UI-->

    <script src="js/main/excanvas.js"></script> <!--canvas need for ie-->



    <!--plugins-->

    <script src="js/plugins/revslider/jquery.themepunch.tools.min.js"></script> <!--revslider-->

    <script src="js/plugins/revslider/jquery.themepunch.revolution.min.js"></script> <!--revslider-->



    <!--menu-->

    <script src="js/plugins/menu/superfish.min.js"></script> <!--superfish-->

    <script src="js/plugins/menu/tinynav.min.js"></script> <!--tinynav-->



    <!--other-->

    <script src="js/plugins/isotope/isotope.pkgd.min.js"></script> <!--isotope-->

    <script src="js/plugins/mpopup/jquery.magnific-popup.min.js"></script> <!--mpopup-->

    <script src="js/plugins/scroolto/scroolto.js"></script> <!--Scrool To-->

    <script src="js/plugins/nicescrool/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->

    <script src="js/plugins/inview/jquery.inview.min.js"></script> <!--inview-->

    <script src="js/plugins/parallax/jquery.parallax-1.1.3.js"></script> <!--parallax-->

    <script src="js/plugins/countto/jquery.countTo.js"></script> <!--jquery.countTo-->

    <script src="js/plugins/countdown/jquery.countdown.js"></script> <!--countdown-->

    

    <!--settings-->

    <script src="js/settings.js"></script> <!--settings-->



<!--custom js-->

<script type="text/javascript">

    jQuery(document).ready(function() {



        //START PARALLAX SECTIONS

        $('#nicdark_parallax_title').parallax("50%", 0.3);

        //END PARALLAX SECTIONS





        //START SLIDE

        jQuery('#nicdark_slide1').show().revolution(

        {

            startheight:650, 

        });

        //END SLIDE





        //START SLIDE

        jQuery('#nicdark_slide2').show().revolution(

        {

            startheight:650,

            hideTimerBar: "on",

            navigationStyle: "preview1",

            spinner: "spinner1",

        });

        //END SLIDE



    });

</script>

<!--custom js-->



    <!--Start of Tawk.to Script-->

<script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

(function(){

var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

s1.async=true;

s1.src='https://embed.tawk.to/58e37f57f7bbaa72709c416f/default';

s1.charset='UTF-8';

s1.setAttribute('crossorigin','*');

s0.parentNode.insertBefore(s1,s0);

})();

</script>

<!--End of Tawk.to Script-->





</body>   

</html>

