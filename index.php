<?php
include("manage/libs/db.Connect.Open.inc"); 

$sql="SELECT Title , Image FROM tblSlider WHERE  Type=0 and Visibility=0  ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

	while($row= $result->fetch_assoc())
		{
			$strTitle = $row['Title'];
			$strImage = $row['Image'];
		}


?>

<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->

<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

 

    <meta charset="utf-8">  

    

    <title>India's 1st right brain education training center in Mumbai, India - Respond Right</title> <!--insert your title here-->  

    <meta name="description" content="The Respond Right is India's First Right Brain education program. We have created comprehensive right brain education course which Embrace your kids imaginative side"> <!--insert your description here-->  

	<meta name="keywords" content="right brain education India, right brain education in India, early childhood education program, early childhood education in India, early childhood education program in Mumbai, brain training games for kids in India, learning activities, learning activities for toddlers in Mumbai, learning activities for pre-schoolers in Mumbai, enhanced learning for kids in India, right brain education program in Mumbai, right brain education program in Mumbai, enhanced learning for kids in Mumbai, right brain education program near Mumbai, right brain education in Mumbai, activities for kids in Mumbai, activities for kids in India, accelerated learning for kids in Mumbai, brain development in India, brain development in Mumbai, right brain education in Mumbai, right brain education Mumbai, preschool in Mumbai, School in Mumbai, right brain capabilities ,Right brain power, right brain education, learning capabilities, how to increase brain power, right brain training for kids, right brain learning activities, why right brain education, about right brain education, Respond Right Learning Center in Mumbai, Respond Right Learning Center in India, Respond Right Learning Center in Gujrat, Respond Right Learning Center in Tamilnadu, Respond Right Training Center in Mumbai, Respond Right Training Center in India,Respond Right Training Center in Gujrat, right brain traning,education franchisee preschool, education franchisee preschool 5 Lac, education franchisee preschool 5 Lac,  india, right brain traning in mumbai, right brain traning in india Respond Right Training Center in Tamilnadu, Conatct Us, benefits of right brain education, FAQ's, right brain education, learning activities for kids, brain development in kids, brain development india, activities, right brain activites" />
	<meta name="google-site-verification" content="pFIga0BYxb1RT-LeSUL8L2WskS7UMXxEBqyTkMw6LTQ" />
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

<!--

    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

-->

    <!--END FAVICONS-->

    



<!-- Google Anaytics -->



<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-73532350-1', 'auto');

  ga('send', 'pageview');



</script>



<!-- /Google Anaytics -->




<style>

.nicdark_btn.extrasize {
    padding: 38px;
    font-size: 45px;
    line-height: 45px;
}


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

    <div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>









        <div class="nicdark_section nicdark_navigation fade-down">

    

            <div class="nicdark_menu_boxed">



                <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">

                    <div class="nicdark_container nicdark_clearfix">

                        <div class="grid grid_6">

                            <div class="nicdark_focus">

                                <h6 class="white">

                                <i class="icon-calendar-outlilne"></i>&nbsp;&nbsp;<a class="white" href="programs-respond-right.html">OUR PROGRAMS</a>

                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">??</span>&nbsp;&nbsp;&nbsp;&nbsp;

                                <i class="icon-phone-outline"></i>&nbsp;&nbsp;+91-98333 99883 / +91-98331 32776

                            </h6>

                            </div>

                        </div>

                        <div class="grid grid_6 right">

                            <div class="nicdark_focus right">

                                <h6 class="white">

                                    <i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white" href="https://classvita.com/admin_panelll/account/login" target="erp" title="ERP Login">LOG IN</a>

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

<section class="nicdark_section">



	<div class="tp-banner-container">

		<div class="nicdark_slide1" >

			

			<ul>

				

				<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" >

					<img src="cdn/slider/<?php echo $strImage;?>"  alt="" data-lazyload="cdn/slider/<?php echo $strImage;?>" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

				</li>





			</ul>

			

		</div>

	</div>



</section>

<!--end section--><!--start section-->

<section class="nicdark_section nicdark_margintop45_negative" >



    <!--start nicdark_container-->

    <div class="nicdark_container nicdark_clearfix">

		

		<div class="grid grid_12 percentage nomargin">    

			<div class="nicdark_textevidence center">

			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left" style="box-shadow: 0px 4px 0px 0px #5babbf;background-color: #23c1ff; height:auto;">

			        <div class="nicdark_textevidence">

			            <div class="nicdark_margin30">

			                <h2 class="white subtitle"><a class="white" href="programs-respond-right.html"> &nbsp; ACTIVITIES</a></h2>

			           </div>

			            <i class="nicdark_zoom icon-puzzle nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr" style="color: #5babbf;"></i>

			        </div>

			    </div>











			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow" style="    box-shadow: 0px 4px 0px 0px #614f88; background-color: #7b64ac; height:auto;" >

			        <div class="nicdark_textevidence">

			            <div class="nicdark_margin30">

			                <h2 class="white subtitle"><a class="white" href="Testimonials.html"> &nbsp; TESTIMONIALS</a></h2>

			           </div>

			            <i class="nicdark_zoom icon-star-half-alt nicdark_iconbg left extrabig yellow nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr" style="    color: #4b3d698a;"></i>

			        </div>

			    </div>










			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_orange nicdark_shadow"  style="box-shadow: 0px 4px 0px 0px #6ab78a;background-color: #59e290; height:auto;">

			        <div class="nicdark_textevidence">

			            <div class="nicdark_margin30">

			                <h2 class="white subtitle"><a class="white" href="Schools-Respond-Right.html"> &nbsp; OUR SCHOOLS</a></h2>

			           </div>

			            <i class="nicdark_zoom icon-building-filled nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>

			        </div>

			    </div>









			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_green nicdark_shadow nicdark_radius_right" style="box-shadow: 0px 4px 0px 0px #e0b84e;background-color: #fcc700; height: 85px;">

			        <div class="nicdark_textevidence">

			            <div class="nicdark_margin30">

			                <h2 class="white subtitle"><a class="white" href="teachers.html"> &nbsp; TEACHERS</a></h2>

			           </div>

			            <i class="nicdark_zoom icon-users nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"  style="color: #d4ad48;"></i>

			        </div>

			    </div>

			    <div class="nicdark_space5"></div>

			</div>

		</div>



	</div>

    <!--end nicdark_container-->

     

</section>

<!--end section--><!--start section-->

<section class="nicdark_section">



    <!--start nicdark_container-->

    <div class="nicdark_container nicdark_clearfix">





        <div class="nicdark_space50"><marquee><h3>Hello parents, all students enrolled with us who don't have access to the Respond Right parent app, please contact us on - 8169533799</h3></marquee>    </div>





        <div class="grid grid_12">

            <h1 class="subtitle bluerr">OUR PROGRAMS</h1>

            <div class="nicdark_space20"></div>

            <h3 class="subtitle grey">A typical class would be of around 60 minutes and will be conducted once a week.</h3>

            <div class="nicdark_space20"></div>

            <div class="nicdark_divider left big"><span class="nicdark_bg_yellow nicdark_radius"></span></div>

            <div class="nicdark_space10"></div>

        </div>





        <div class="grid grid_3 nicdark_relative">





             <div class="nicdark_btn_iconbg nicdark_bg_yellow nicdark_absolute extrabig nicdark_shadow nicdark_radius">

                <img src="img/31.png"><!-- <div>

                    <i class="icon-leaf-1 nicdark_iconbg left big white"></i> 

                </div> -->

            </div> 

            

            <div class="nicdark_activity nicdark_marginleft100">

                <h4><b>  1 - 3 Years </b></h4>                        

                <div class="nicdark_space20"></div>

                <p>Yearling</p>

                <div class="nicdark_space20"></div>

                <a href="First-To-Three-Years-Programs.html" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>

                <div class="nicdark_space20"></div>

            </div>

        

        </div>



        <div class="grid grid_3 nicdark_relative">

            

            <div class="nicdark_btn_iconbg nicdark_bg_orange nicdark_absolute extrabig nicdark_shadow nicdark_radius">

                <img src="img/32.png"><!-- <div>

                    <i class="icon-stopwatch nicdark_iconbg left big white"></i> 

                </div> -->

            </div>

            

            <div class="nicdark_activity nicdark_marginleft100">

                <h4><b>  3 - 4.5 Years </b></h4>                        

                <div class="nicdark_space20"></div>

                <p>Wunderkind </p>

                <div class="nicdark_space20"></div>

                <a href="Three-To-Four-And-Half-Years-Programs.html" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>

                <div class="nicdark_space20"></div>

            </div>   

        

        </div>



        <div class="grid grid_3 nicdark_relative">

            

            <div class="nicdark_btn_iconbg nicdark_bg_green nicdark_absolute extrabig nicdark_shadow nicdark_radius">

                <img src="img/33.png"><!-- <div>

                    <i class="icon-cab nicdark_iconbg left big white"></i> 

                </div> -->

            </div>

            

            <div class="nicdark_activity nicdark_marginleft100">

                <h4><b>   4.5 - 7 Years </b></h4>                        

                <div class="nicdark_space20"></div>

                <p>Prodigy </p>

                <div class="nicdark_space20"></div>

                <a href="Four-And-Half-To-Seven-Years-Programs.html" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>

                <div class="nicdark_space20"></div>

            </div>    

        

        </div>
        <div class="grid grid_3 nicdark_relative">

            

            <div class="nicdark_btn_iconbg nicdark_bg_green nicdark_absolute extrabig nicdark_shadow nicdark_radius">

                <img src="img/44.png"><!-- <div>

                    <i class="icon-cab nicdark_iconbg left big white"></i> 

                </div> -->

            </div>

            

            <div class="nicdark_activity nicdark_marginleft100">

                <h4><b>  7 - 10 Years </b></h4>                        

                <div class="nicdark_space20"></div>

                <p>Nexteen </p>

                <div class="nicdark_space20"></div>

                <a href="Seven-And-Ten-Years-Programs.html" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>

                <div class="nicdark_space20"></div>

            </div>    

        

        </div>





        <div class="nicdark_space50"></div>



    </div>

    <!--end nicdark_container-->

            

</section>

<!--end section--><!--start section-->



<section id="nicdark_parallax_counter" class="nicdark_section" style="background-color:rgb(252, 199, 0);">



    <div class="nicdark_filter ">



        <!--start nicdark_container-->

        <div class="nicdark_container nicdark_clearfix">



            <div class="nicdark_space40"></div>

            <center><h1 style="color:#fff;font-size:40px;font-weight:500;">Our Story at a Glance!</h1></center>

            <div class="nicdark_space50"></div>





            <div class="grid grid_3">

                <div class="nicdark_textevidence center">

                    <a class="nicdark_width50 white nicdark_btn nicdark_bg_blue nicdark_bg_white_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="75" data-speed="1000" style="font-size:28px; cursor:default;  box-shadow: 0px 4px 0px 0px #ffffff; color: #000000; background-color: #ffffff;">75</a>

                    <div class="nicdark_space20"></div>

                    <h4 class="white">SCHOOL</h4>

                </div>

            </div>

            <div class="grid grid_3">

                <div class="nicdark_textevidence center">

                    <a class="nicdark_width50 white nicdark_btn nicdark_bg_green nicdark_bg_white_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="24" data-speed="1000" style="font-size:28px; cursor:default;  box-shadow: 0px 4px 0px 0px #ffffff; color: #000000; background-color: #ffffff;">24</a>

                    <div class="nicdark_space20"></div>

                    <h4 class="white">FRANCHISEES</h4>

                </div>

            </div>

            <div class="grid grid_3">

                <div class="nicdark_textevidence center">

                    <a class="nicdark_width50 white nicdark_btn nicdark_bg_yellow nicdark_bg_white_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="130" data-speed="1000" style="font-size:28px; cursor:default;  box-shadow: 0px 4px 0px 0px #ffffff; color: #000000; background-color: #ffffff;">130</a>

                    <div class="nicdark_space20"></div>

                    <h4 class="white">TEACHERS</h4>

                </div>

            </div>

            <div class="grid grid_3">

                <div class="nicdark_textevidence center">

                    <a class="nicdark_width50 white nicdark_btn nicdark_bg_violet nicdark_bg_white_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="4200" data-speed="1000" style="font-size:28px; cursor:default;  box-shadow: 0px 4px 0px 0px #ffffff; color: #000000; background-color: #ffffff;">4200</a>

                    <div class="nicdark_space20"></div>

                    <h4 class="white">STUDENTS</h4>

                </div>

            </div>



            <div class="nicdark_space40"></div>

            <div class="nicdark_space50"></div>



        </div>

        <!--end nicdark_container-->



    </div>

            

</section>        

<!--end section--><!--start section-->

<section class="nicdark_section">



    <!--start nicdark_container-->

    <div class="nicdark_container nicdark_clearfix">





        <div class="nicdark_space50"></div>





        <div class="grid grid_12">

            <h1 class="subtitle bluerr">OUR EVENTS</h1>

            <div class="nicdark_space20"></div>

            <h3 class="subtitle grey">DON'T MISS OUR EVENTS</h3>

            <div class="nicdark_space20"></div>

            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>

            <div class="nicdark_space10"></div>

        </div>



<?php

			$sql="SELECT EventID, WebsiteID, EventName, Image, Address, Time, Date, PhoneNo, ShortDesc, Color, URL, Type, Visibility FROM tblEvent where Type=1 and Visibility=0 ORDER BY EventID DESC";
			$result= $conn->query($sql);

			if ($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{     

						$strID=$row['EventID'];
						$strEventName=$row['EventName']; 
						$strImage=$row['Image'];       
						$strAddress=$row['Address'];
						$strTime=$row['Time'];
						$strDate=$row['Date'];
						$strPhoneNo=$row['PhoneNo'];
						$strShortDesc=$row['ShortDesc'];
						$strColor=$row['Color'];
						$strURL=$row['URL'];

?>

      <div class="grid grid_3">
            <!--archive1-->
            <div class="nicdark_archive1 <?php echo $strColor;?> nicdark_radius nicdark_shadow">
                <img alt=""  src="cdn/event/<?php echo $strImage;?>">
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20"><?php echo $strEventName;?></h4>
                </div>
                <div class="nicdark_margin20">
                    <h5 class="white"><i class="icon-pin-outline"></i><?php echo $strAddress;?></h5>
                    <div class="nicdark_space10"></div>
                    <h5 class="white"><i class="icon-clock-1"></i> <?php echo $strTime;?></h5>
                    <div class="nicdark_space20"></div>
                    <h5 class="white"><i class="icon-calendar"></i> <?php echo $strDate;?></h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white"><?php echo $strPhoneNo;?> <br><?php echo $strShortDesc;?></p>
                    <div class="nicdark_space20"></div>
                </div>
            </div>
            <!--archive1-->
        </div>

<?php

				}

			}

?>








        <div class="nicdark_space50"></div>
	</div>
   <!--end nicdark_container-->
</section>





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



    <!--start nicdark_container-->

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

    <!--end nicdark_container-->

            

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





		//START SLIDE

		jQuery('.nicdark_slide1').show().revolution(

		{

			dottedOverlay:"none",

			delay:16000,

			startwidth:1170,

			startheight:650,

			hideThumbs:200,

			

			thumbWidth:100,

			thumbHeight:50,

			thumbAmount:5,

			

			navigationType:"none",

			navigationArrows:"solo",

			navigationStyle:"preview2",

			

			touchenabled:"on",

			onHoverStop:"on",

			

			swipe_velocity: 0.7,

			swipe_min_touches: 1,

			swipe_max_touches: 1,

			drag_block_vertical: false,

									

			parallax:"mouse",

			parallaxBgFreeze:"on",

			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

									

			keyboardNavigation:"off",

			

			navigationHAlign:"center",

			navigationVAlign:"bottom",

			navigationHOffset:0,

			navigationVOffset:20,



			soloArrowLeftHalign:"left",

			soloArrowLeftValign:"center",

			soloArrowLeftHOffset:20,

			soloArrowLeftVOffset:0,



			soloArrowRightHalign:"right",

			soloArrowRightValign:"center",

			soloArrowRightHOffset:20,

			soloArrowRightVOffset:0,

					

			shadow:0,

			fullWidth:"on",

			fullScreen:"off",



			spinner:"spinner4",

			

			stopLoop:"off",

			stopAfterLoops:-1,

			stopAtSlide:-1,



			shuffle:"off",

			

			autoHeight:"off",						

			forceFullWidth:"off",						

									

			hideTimerBar: "on",					

									

			hideThumbsOnMobile:"off",

			hideNavDelayOnMobile:1500,						

			hideBulletsOnMobile:"off",

			hideArrowsOnMobile:"off",

			hideThumbsUnderResolution:0,

			

			hideSliderAtLimit:0,

			hideCaptionAtLimit:0,

			hideAllCaptionAtLilmit:0,

			startWithSlide:0,

			videoJsPath:"rs-plugin/videojs/",

			fullScreenOffsetContainer: ""	

		});

		//END SLIDE

		

		



		//START PARALLAX SECTIONS

		$('#nicdark_parallax_big_image').parallax("50%", 0.3);

		$('#nicdark_parallax_2_btns').parallax("50%", 0.3);

		$('#nicdark_parallax_countdown').parallax("50%", 0.3);

		$('#nicdark_parallax_counter').parallax("50%", 0.3);

		//END PARALLAX SECTIONS



		



		//START COUNTDOWN GRID SECTION

		//variables

		var endDate = "May 26, 2017 20:00:00";

		var grid = "grid_3";

		//insert the class nicdark_displaynone in the var if you wnat to hide the visualization

		var display_years = "nicdark_displaynone";

		var display_days = "";

		var display_hours = "";

		var display_minutes = "";

		var display_seconds = "";

		//call

		$(".nicdark_countdown").countdown({

		  date: endDate,

		  render: function(data) {

		    $(this.el).html("<div class=\"grid "+ grid +" "+ display_years +" \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.years, 4) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">YEARS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_days +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.days, 3) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">DAYS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_hours +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.hours, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white\">HOURS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_minutes +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.min, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white\">MINUTES</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_seconds +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.sec, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white\">SECONDS</a><div class=\"nicdark_space5\"></div></div></div>");

		  }

		});

		//END COUNTDOWN GRID SECTION



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

