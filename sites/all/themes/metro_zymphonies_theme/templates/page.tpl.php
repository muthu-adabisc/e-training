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
             <?php print render($page['header_menu']); ?>
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

<!-- ================== feature section start ================== -->


<!-- ================== feature section end ================== -->
<div id="content">
          
          <?php if (theme_get_setting('breadcrumbs', 'metro_zymphonies_theme')): ?><div id="breadcrumbs"><?php if ($breadcrumb): print $breadcrumb; endif;?></div><?php endif; ?>

          <section id="post-content" role="main">
            <?php print $messages; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>
          </section> <!-- /#main -->
        </div>
      
        <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>
      
        </div>

        <?php if ($page['sidebar_second']): ?>
          <aside id="sidebar-second" role="complementary">
            <?php print render($page['sidebar_second']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>
</div>



<!-- ================== bottom section end ================== -->

    <div class="bg-white footer-top-section">
        <div class="container">
         
  <?php print render($page['highlights']); ?>  
    
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


