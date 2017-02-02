<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

   <!-- Navigation -->
          <div class="first-header">
            <div class="container">
            <div class="col-md-6 col-xs-6"><?php print render($page['header_top_left']) ?></div>
            <!-- <div class="col-md-6 col-xs-6"><button type="button" class="signin">Signin / Signup</button></div> -->
            <div class="col-md-6 col-xs-6">
               <?php print render($page['header_top_right']) ?>
            </div>
          </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-6 col-sm-6 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <h3 class="header-title"><?php print $site_slogan; ?></h3>
                <?php  print render($page['header_menu']); ?>
				<?php /*?><?php 
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            print drupal_render($main_menu_tree);
          ?><?php */?>
            </div>
            <div class="navbar-header navbar-right">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if ($logo): ?>
         <div class="navbar-brand topnav logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>"/>
          </a>
        </div>
        
      <?php endif; ?>                
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav> <!-- /menu end -->

<!-- notification -->

<!-- <div class="notification-div">
    <div class="notity-head">
    <ul class="top-home">
        <li class="notify-icon"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="notification">2</span></li>
        <li><h2>My Notifications</h2></li>
        <li><i id="notification-id" class="fa fa-times close-notify" aria-hidden="true"></i></li>
    </ul>
    </div>
    <div class="notity-content">
        
    </div>
</div> -->


<div id="mySidenav" class="sidenav">
    
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="notity-head">
        <ul class="right-notify">
            <li class="notify-icon"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="notification">2</span></li>
            <li><h2>My Notifications</h2></li>
        </ul>
    </div>
    <div class="notification-div">
        <ul class="notification-div-details">
        <li><label class="notify-title">Documentary Film Making Diploma</label></li>
        <li><label class="notify-content"><span class="red-dot"></span>Due date for Assignment 05 has changed to: 05/12/2016 10:00PM</label></li>
        <li><label class="notify-date">31 mins ago</label></li>
        </ul>

        <ul class="notification-div-details">
        <li><label class="notify-title">Documentary Film Making Diploma</label></li>
        <li><label class="notify-content"><span class="red-dot"></span>New Document “Project Description” has been uploaded.</label></li>
        <li><label class="notify-date">4 mins ago</label></li>
        </ul>

        <ul class="notification-div-details">
        <li><label class="notify-title">Documentary Film Making Diploma</label></li>
        <li><label class="notify-content"><!-- <span class="red-dot"></span> -->Assignment 3 has now been graded.</label></li>
        <li><label class="notify-date">2 days ago</label></li>
        </ul>

        <ul class="notification-div-details">
        <li><label class="notify-title">Documentary Film Making Diploma</label></li>
        <li><label class="notify-content"><!-- <span class="red-dot"></span> -->New Document “Project Description” has been uploaded.</label></li>
        <li><label class="notify-date">4 mins ago</label></li>
        </ul>

        <ul class="notification-div-details">
        <li><label class="notify-title">Documentary Film Making Diploma</label></li>
        <li><label class="notify-content"><!-- <span class="red-dot"></span> -->New Document “Project Description” has been uploaded.</label></li>
        <li><label class="notify-date">4 hrs ago</label></li>
        </ul>
    </div>
</div>


<!-- notification end -->
<?php print render($page['slideshow']); ?>
    

    <!-- main content -->
    <div class="container">
        <div class="height25"></div>
        <?php /*?><div class="col-md-12"><h2>Courses</h2></div>

        <div class="col-md-4"> <!-- first course -->
            <div class="home-course">
                    <div class="course-image-div">
                         <img src="img/course-img-1.png">
                    </div>
                    <div class="REGISTRATION-DIV">
                         <span class="REGISTRATION-ENDS-TO">REGISTRATION ENDS TOMORROW </span>
                    </div>
                <div class="bg-white padding-home-box">
                    <h3 class="h3-white-box">Media Training: You Can Be a Media Trainer</h3>
                    <label class="white-box-label">Starts 02 Jan 2017</label>
                            <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user-1.png" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Susan Jones</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                </div>
                        <div class="hover-div">
                           <h3 class="h3-white-box"><a href="#"> Media Training: You Can Be a Media Trainer</a></h3>
                           <label class="white-box-label">Starts 02 Jan 2017</label>
                           <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user.jpg" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Susan Jones</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                            <div class="clearfix padding-bottom-15"></div>
                            <label class="details-label">COURSE LENGTH: 10 WEEKS</label>
                            <label class="details-label">WEEKLY EFFORT: 4-5 HOURS</label>
                            <label class="details-label">LANGUAGE OF INSTRUCTION: ENGLISH</label>
                            <p class="details-p">Learn how to take your interests/experience in journalism/public relations and turn them into a media training career</p>
                        </div>
                </div>
        </div> <!-- first course end-->

        <div class="col-md-4"> <!-- first course -->
            <div class="home-course">
                    <div class="course-image-div">
                         <img src="img/course-img-2.png">
                    </div>
                   <!--  <div class="REGISTRATION-DIV">
                         <span class="REGISTRATION-ENDS-TO">REGISTRATION ENDS TOMORROW </span>
                    </div> -->
                <div class="bg-white padding-home-box">
                    <h3 class="h3-white-box">Ultimate Guide To News Writing</h3>
                    <label class="white-box-label">Self Paced</label>
                            <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user-2.png" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Rawdah Al-Qubaisi</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                </div>
                        <div class="hover-div">
                           <h3 class="h3-white-box"><a href="#">Ultimate Guide To News Writing</a></h3>
                           <label class="white-box-label">Starts 02 Jan 2017</label>
                           <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user.jpg" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Rawdah Al-Qubaisi</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                            <div class="clearfix padding-bottom-15"></div>
                            <label class="details-label">COURSE LENGTH: 10 WEEKS</label>
                            <label class="details-label">WEEKLY EFFORT: 4-5 HOURS</label>
                            <label class="details-label">LANGUAGE OF INSTRUCTION: ENGLISH</label>
                            <p class="details-p">Learn how to take your interests/experience in journalism/public relations and turn them into a media training career</p>
                        </div>
                </div>
        </div> <!-- first course end-->

        <div class="col-md-4"> <!-- first course -->
            <div class="home-course">
                    <div class="course-image-div">
                         <img src="img/course-img-3.png">
                    </div>
                    <!-- <div class="REGISTRATION-DIV">
                         <span class="REGISTRATION-ENDS-TO">REGISTRATION ENDS TOMORROW </span>
                    </div> -->
                <div class="bg-white padding-home-box">
                    <h3 class="h3-white-box">Documentary Film Making Diploma</h3>
                    <label class="white-box-label">Starts 02 Jan 2017</label>
                            <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user-3.png" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Ahmed Al Ali</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                </div>
                        <div class="hover-div">
                           <h3 class="h3-white-box"><a href="#">Documentary Film Making Diploma</a></h3>
                           <label class="white-box-label">Starts 12 Dec 2016</label>
                           <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user.jpg" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Ahmed Al Ali</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                            <div class="clearfix padding-bottom-15"></div>
                            <label class="details-label">COURSE LENGTH: 10 WEEKS</label>
                            <label class="details-label">WEEKLY EFFORT: 4-5 HOURS</label>
                            <label class="details-label">LANGUAGE OF INSTRUCTION: ENGLISH</label>
                            <p class="details-p">Learn how to take your interests/experience in journalism/public relations and turn them into a media training career</p>
                        </div>
                </div>
        </div> <!-- first course end-->
           
<!-- ================== first row end ================== -->

        <div class="col-md-4"> <!-- first course -->
            <div class="home-course">
                    <div class="course-image-div">
                         <img src="img/course-img-4.png">
                    </div>
                    <!-- <div class="REGISTRATION-DIV">
                         <span class="REGISTRATION-ENDS-TO">REGISTRATION ENDS TOMORROW </span>
                    </div> -->
                <div class="bg-white padding-home-box">
                    <h3 class="h3-white-box">Masterclass in Mobile Video Reporting</h3>
                    <label class="white-box-label">Starts 02 Jan 2016</label>
                            <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user-4.png" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Sarah Hassan</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                </div>
                        <div class="hover-div">
                           <h3 class="h3-white-box"><a href="#">Masterclass in Mobile Video Reporting</a></h3>
                           <label class="white-box-label">Starts 02 Jan 2017</label>
                           <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user.jpg" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Sarah Hassan</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                            <div class="clearfix padding-bottom-15"></div>
                            <label class="details-label">COURSE LENGTH: 10 WEEKS</label>
                            <label class="details-label">WEEKLY EFFORT: 4-5 HOURS</label>
                            <label class="details-label">LANGUAGE OF INSTRUCTION: ENGLISH</label>
                            <p class="details-p">Learn how to take your interests/experience in journalism/public relations and turn them into a media training career</p>
                        </div>
                </div>
        </div> <!-- first course end-->

        <div class="col-md-4"> <!-- first course -->
            <div class="home-course">
                    <div class="course-image-div">
                         <img src="img/course-img-5.png">
                    </div>
                    <!-- <div class="REGISTRATION-DIV">
                         <span class="REGISTRATION-ENDS-TO">REGISTRATION ENDS TOMORROW </span>
                    </div> -->
                <div class="bg-white padding-home-box">
                    <h3 class="h3-white-box">Journalism Skills for Beginners</h3>
                    <label class="white-box-label">Starts 02 Jan 2017</label>
                            <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user-5.png" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Ahmad Yousef Al-Malki</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                </div>
                        <div class="hover-div">
                           <h3 class="h3-white-box"><a href="#"> Journalism Skills for Beginners</a></h3>
                           <label class="white-box-label">Starts 02 Jan 2017</label>
                           <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user.jpg" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Ahmad Yousef Al-Malki</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                            <div class="clearfix padding-bottom-15"></div>
                            <label class="details-label">COURSE LENGTH: 10 WEEKS</label>
                            <label class="details-label">WEEKLY EFFORT: 4-5 HOURS</label>
                            <label class="details-label">LANGUAGE OF INSTRUCTION: ENGLISH</label>
                            <p class="details-p">Learn how to take your interests/experience in journalism/public relations and turn them into a media training career</p>
                        </div>
                </div>
        </div> <!-- first course end-->

        <div class="col-md-4"> <!-- first course -->
            <div class="home-course">
                    <div class="course-image-div">
                         <img src="img/course-img-6.png">
                    </div>
                    <!-- <div class="REGISTRATION-DIV">
                         <span class="REGISTRATION-ENDS-TO">REGISTRATION ENDS TOMORROW </span>
                    </div> -->
                <div class="bg-white padding-home-box">
                    <h3 class="h3-white-box">Freelance Journalism in 7 Weeks</h3>
                    <label class="white-box-label">Starts 02 Jan 2017</label>
                            <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user-6.png" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Ghosoun Al Ajmi</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                </div>
                        <div class="hover-div">
                           <h3 class="h3-white-box"><a href="#"> Freelance Journalism in 7 Weeks</a></h3>
                           <label class="white-box-label">Starts 02 Jan 2017</label>
                           <div class="col-md-9 col-xs-9 no-padding">
                                <div class="media"> 
                                    <div class="media-left"> 
                                        <img src="img/user.jpg" class="media-object"> 
                                    </div> 
                                    <div class="media-body media-middle"> 
                                        <h4 class="media-heading">Ghosoun Al Ajmi</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 no-padding certificate-div">
                                <img src="img/certificate.png" class="certificate">
                            </div>
                            <div class="clearfix padding-bottom-15"></div>
                            <label class="details-label">COURSE LENGTH: 10 WEEKS</label>
                            <label class="details-label">WEEKLY EFFORT: 4-5 HOURS</label>
                            <label class="details-label">LANGUAGE OF INSTRUCTION: ENGLISH</label>
                            <p class="details-p">Learn how to take your interests/experience in journalism/public relations and turn them into a media training career</p>
                        </div>
                </div>
        </div> <!-- first course end--><?php */?>

<!-- ================== second row end ================== -->


<?php print render($page['featured_course']); ?>
<div class="col-md-12 right"><a href="#" class="green-txt-btn">See all courses > </a></div>
<!-- ================== feature section start ================== -->
<div class="home-blog">
<?php print render($page['featured_blog']); ?>
    <?php /*?><div class="col-md-12"><h2>Featured Blogs</h2></div>

    <div class="col-md-3">
        <div class="featured-div">
            <div class="featured-img-div">
                <img src="img/featured-1.png">
            </div>
            <label class="featured-blog-home">Has Election 2016 been a turning point for the influence of the news media?</label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="featured-div">
            <div class="featured-img-div">
                <img src="img/featured-2.png">
            </div>
            <label class="featured-blog-home">How fake news went viral and what we can do to stop it</label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="featured-div">
            <div class="featured-img-div">
                <img src="img/featured-3.png">
            </div>
            <label class="featured-blog-home">Video is giving The New Yorker a way to reach new readers</label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="featured-div">
            <div class="featured-img-div">
                <img src="img/featured-4.png">
            </div>
            <label class="featured-blog-home">The New York Times’ Dean Baquet on building a more digital newsroom</label>
        </div>
    </div><?php */?>
</div>

<!-- ================== feature section end ================== -->
</div>

<!-- ================== bottom section end ================== -->

    <div class="bg-white footer-top-section">
        <div class="container">
            <?php if ($is_front): ?>
  <?php print render($page['highlights']); ?>  
<?php endif; ?>     
        </div>
    </div>

    <div class="footer-link">
        <div class="container">
       <?php if ($page['bottom_widget_3']): ?>
            <?php print render($page['bottom_widget_3']); ?>
              <?php endif; ?>
        </div>
    </div>

<!-- ================== bottom section end ================== -->

    <!-- main content end -->

    <!-- Footer -->
    <footer>
        <div class="container">
        <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_forth']): ?>
            <div class="row">
                <div class="col-md-2">
                 <?php if ($page['footer_first']): ?>
        <?php print render($page['footer_first']); ?>
        <?php endif; ?>   
                </div>
                <div class="col-md-2">
                   <?php if ($page['footer_second']): ?>
        <?php print render($page['footer_second']); ?>
        <?php endif; ?> 
                </div>
                <div class="col-md-2 no-padding">
                   <?php if ($page['footer_third']): ?>
        <?php print render($page['footer_third']); ?>
        <?php endif; ?> 
                </div>
                <div class="col-md-6">
                    <div class="footer-image right">
                       <?php if ($page['footer_forth']): ?>
        <?php print render($page['footer_forth']); ?>
        <?php endif; ?>
                    </div>
                </div>                
            </div>
            <?php endif; ?> 
        </div>
    </footer>


