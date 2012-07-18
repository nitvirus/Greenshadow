<?php
/**
 * @file
 * Theme implementation to display a single Drupal page.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; ?>">
  <div id="page">
    <div id="header">
      

        <div id="name-and-slogan">
          <?php if (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
  
          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /name-and-slogan -->
     
      

	
	<?php if (!empty($search_box)): ?>
        <div id="search-box"><?php print $search_box; ?></div>
      <?php endif; ?>
    

      <?php if (!empty($header)): ?>
      
        <div id="header-region">
          <?php print $header; ?>
        </div>
       <?php endif; ?>
       <div id="logo-title">  <!-- logo moved to above the navigation-->

        <?php if (!empty($logo)): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif;?>
       </div><!--logo ends-->
         <div id="navigation" class="menu
	       <?php if (!empty($primary_links)):
  print "withprimary";
  elseif (!empty($secondary_links)):
  print "withsecondary";?><?php endif; ?>">
           
           <?php if (!empty($primary_links)): ?>
            <div id="primary" class="clear-block">
           <!--  <?php print theme_nice_menus_primary_links();
            ?> -->                                             <!-- Uncomment this for making primary menu dropdown -->
           <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>      <!--  Comment this if dropdown is activated -->
          </div>
           <?php endif; ?>

             <?php if (!empty($secondary_links)): ?>
              <div id="secondary" class="clear-block">
            <!-- <?php print theme_nice_menus_secondary_links();
            ?>-->                                                  <!-- Uncomment this for making secondary menu dropdown -->
            <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>    <!--  Comment this if dropdown is activated -->
          </div>
        <?php endif; ?>
      </div> <!-- /navigation -->

    </div> <!-- /header -->
    
    <div id="sub-header">
    
    <?php  if (!empty($sub_header)): ?>
    
           <div id="sub-header-region">
            <?php  print $sub_header?>
           </div>
      <?php endif; ?>
    </div>

    <div id="container" class="clear-block">

     

      <?php if (!empty($left)): ?>
        <div id="sidebar-left" class="column sidebar">
          <?php print $left; ?>
        </div> <!-- /sidebar-left -->
      <?php endif; ?>

      <div id="main" class="column"><div id="main-squeeze">
        <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>

        <div id="content">
          <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <?php if (!empty($help)): print $help; endif; ?>
          <div id="content-content" class="clear-block">
            <?php print $content;?>
          </div> <!-- /content-content -->
          <?php print $feed_icons; ?>
        </div> <!-- /content -->

      </div></div> <!-- /main-squeeze /main -->

      <?php if (!empty($right)): ?>
        <div id="sidebar-right" class="column sidebar">
          <?php print $right; ?>
        </div> <!-- /sidebar-right -->
      <?php endif; ?>

    </div> <!-- /container -->
   
   <?php if (!empty($footer_content_1) || !empty($footer_content_2) || !empty($footer_content_3)): ?>
		 <div id="footer-content-wrapper">
			 <div id="footer-content"><?php if (!empty($footer_content_1)): ?>
				 <div id="footer-content-1">
                     <div class="footer-content-top"></div>
                     <?php print $footer_content_1; ?>
				 </div>
			 <?php endif; ?>
 
			 <?php if (!empty($footer_content_2)): ?>
				 <div id="footer-content-2">
                     <div class="footer-content-top"></div>
                     <?php print $footer_content_2; ?>
				 </div>
			 <?php endif; ?>
 
			 <?php if (!empty($footer_content_3)): ?>
				 <div id="footer-content-3">
                     <div class="footer-content-top"></div>
					 <?php print $footer_content_3; ?>
				 </div>
			 <?php endif; ?></div>
		 </div>
		<?php endif; ?>
    <div id="footer-wrapper">
      <div id="footer">
        <?php print $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
      </div> <!-- /footer -->
    </div> <!-- /footer-wrapper -->

    <?php print $closure; ?>

  </div> <!-- /page -->

</body>
</html>
