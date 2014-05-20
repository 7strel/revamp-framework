<?php defined('_JEXEC') or die;
/* =====================================================================
Template: Revamp Framework
Author:   Ben Schram - SchramDesignTeam
Version:  1.0
Created:  April 2014
Copyright:  Ben Schram - (C) 2014 - All rights reserved
Licenses: GNU/GPL v3 or later http://www.gnu.org/licenses/gpl-3.0.html
Credits: Code taken from the following:
  Seth Warburton  - https://github.com/nternetinspired/OneWeb
  Antony Doyle    - https://github.com/antonydoyle/siegeengine2
  David Childs    - https://github.com/thetemplateblog/JoomberUI
/* ===================================================================== */

// Load template framework 
include_once JPATH_THEMES . '/' . $this->template . '/framework.php'; 
?>
<!DOCTYPE html>
<!--[if IE 8]>
	<html class="no-js lt-ie9" lang="en" > 
<![endif]-->
<!--[if gt IE 8]>
<!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
	<jdoc:include type="head" />
	<?php if ($compileSass == "yes") : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/style.php/app.scss" />
	<?php elseif ($compileSass == "no") : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/app.css" />
	<?php else : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/app.css" />
    <?php endif; ?>
	<?php if ($customCSS != -1) : ?>
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $customCSS ?>" />
    <?php endif; ?> 
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/custom.modernizr.js"></script>
      <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
  	<?php if ($setWidth != $defaultWidth) : ?>
        <style>
            .row {
                max-width: <?php echo $setWidth ?><?php echo $widthUnit ?>;
            }
        </style>
    <?php endif; ?>
    <?php if ($customColor > 0) : ?>
        <style>
           <?php if ($topColor != "") : ?>
          .top-content {
            background: <?php echo $topColor ?>;
          }
          <?php endif; ?>
           <?php if ($headerColor != "") : ?>          
          .header-content {
            background: <?php echo $headerColor ?>;
          }
          <?php endif; ?>
           <?php if ($showcaseColor != "") : ?>          
          .showcase-content {
            background: <?php echo $showcaseColor ?>;
          }
          <?php endif; ?>
           <?php if ($featureColor != "") : ?>          
          .feature-content {
            background: <?php echo $featureColor ?>;
          }
          <?php endif; ?>
           <?php if ($utilityColor != "") : ?>          
          .utility-content {
            background: <?php echo $utilityColor ?>;
          }
          <?php endif; ?>
           <?php if ($maintopColor != "") : ?>          
          .maintop-content {
            background: <?php echo $maintopColor ?>;
          }
          <?php endif; ?>
           <?php if ($mainColor != "") : ?>          
          .main-content {
            background: <?php echo $mainColor ?>;
          }
          <?php endif; ?>
           <?php if ($mainbottomColor != "") : ?>          
          .mainbottom-content {
            background: <?php echo $mainbottomColor ?>;
          }
          <?php endif; ?>
           <?php if ($extensionColor != "") : ?>          
          .extension-content {
            background: <?php echo $extensionColor ?>;
          }
          <?php endif; ?>
           <?php if ($bottomColor != "") : ?>          
          .bottom-content {
            background: <?php echo $bottomColor ?>;
          }
          <?php endif; ?>
           <?php if ($footerColor != "") : ?>          
          .footer-content {
            background: <?php echo $footerColor ?>;
          }
          <?php endif; ?>
           <?php if ($copyrightColor != "") : ?>          
          .copyright-content {
            background: <?php echo $copyrightColor ?>;
          }
          <?php endif; ?>
           <?php if ($socialrowColor != "") : ?>          
          footer.footer {
            background: <?php echo $socialrowColor ?>;
          }
          <?php endif; ?>      
        </style>
    <?php endif; ?>
</head>
<body>

<?php if ($this->countModules( 'menu' )) : ?>
<div class="off-canvas-wrap"> <!-- navigation outer wrap -->
  <div class="inner-wrap"> <!-- navigation inner wrap -->
      <div class="menu">
        <jdoc:include type="modules" name="menu" style="revamp" />
      </div>
<?php endif; ?>

<?php /** Begin Top Content **/ if ( $top_content  or $top_a_content  or $top_b_content or $top_c_content  or $top_d_content or $top_e_content  or $top_f_content ) { ?>
<section class="top-content">
        <?php if ( $top_content ){ ?>
                <jdoc:include type="modules" name="top" style="xhtml" />
        <?php } ?> 
    <div class="row">

      <?php if ( $top_a_content ){ ?>
            <div class="<?php echo $topwidth_a ?> columns end">
                <jdoc:include type="modules" name="top_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $top_b_content ){ ?>
            <div class="<?php echo $topwidth_b ?> columns end">
                <jdoc:include type="modules" name="top_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $top_c_content ){ ?>
            <div class="<?php echo $topwidth_c ?> columns end">
                <jdoc:include type="modules" name="top_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $top_d_content ){ ?>
            <div class="<?php echo $topwidth_d ?> columns end">
                <jdoc:include type="modules" name="top_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $top_e_content ){ ?>
            <div class="<?php echo $topwidth_e ?> columns end">
                <jdoc:include type="modules" name="top_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $top_f_content ){ ?>
            <div class="<?php echo $topwidth_f ?> columns end">
                <jdoc:include type="modules" name="top_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End Top Content **/ } ?>

<?php /** Begin header Content **/ if ( $header_content  or $header_a_content  or $header_b_content or $header_c_content  or $header_d_content or $header_e_content  or $header_f_content ) { ?>
<section class="header-content">
        <?php if ( $header_content ){ ?>
                <jdoc:include type="modules" name="header" style="xhtml" />
        <?php } ?>
    <div class="row">
        <?php if ( $header_a_content ){ ?>
            <div class="<?php echo $headerwidth_a ?> columns end">
                <jdoc:include type="modules" name="header_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $header_b_content ){ ?>
            <div class="<?php echo $headerwidth_b ?> columns end">
                <jdoc:include type="modules" name="header_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $header_c_content ){ ?>
            <div class="<?php echo $headerwidth_c ?> columns end">
                <jdoc:include type="modules" name="header_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $header_d_content ){ ?>
            <div class="<?php echo $headerwidth_d ?> columns end">
                <jdoc:include type="modules" name="header_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $header_e_content ){ ?>
            <div class="<?php echo $headerwidth_e ?> columns end">
                <jdoc:include type="modules" name="header_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $header_f_content ){ ?>
            <div class="<?php echo $headerwidth_f ?> columns end">
                <jdoc:include type="modules" name="header_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End header Content **/ } ?>

<?php /** Begin showcase Content **/ if ( $showcase_content or $showcase_a_content  or $showcase_b_content or $showcase_c_content  or $showcase_d_content or $showcase_e_content  or $showcase_f_content ) { ?>
<section class="showcase-content">
        <?php if ( $showcase_content ){ ?>
                <jdoc:include type="modules" name="showcase" style="xhtml" />
        <?php } ?>
  <div class="row">
        <?php if ( $showcase_a_content ){ ?>
            <div class="<?php echo $showcasewidth_a ?> columns end">
                <jdoc:include type="modules" name="showcase_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $showcase_b_content ){ ?>
            <div class="<?php echo $showcasewidth_b ?> columns end">
                <jdoc:include type="modules" name="showcase_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $showcase_c_content ){ ?>
            <div class="<?php echo $showcasewidth_c ?> columns end">
                <jdoc:include type="modules" name="showcase_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $showcase_d_content ){ ?>
            <div class="<?php echo $showcasewidth_d ?> columns end">
                <jdoc:include type="modules" name="showcase_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $showcase_e_content ){ ?>
            <div class="<?php echo $showcasewidth_e ?> columns end">
                <jdoc:include type="modules" name="showcase_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $showcase_f_content ){ ?>
            <div class="<?php echo $showcasewidth_f ?> columns end">
                <jdoc:include type="modules" name="showcase_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End showcase Content **/ } ?>

<?php /** Begin feature Content **/ if ( $feature_content  or $feature_a_content  or $feature_b_content or $feature_c_content  or $feature_d_content or $feature_e_content  or $feature_f_content ) { ?>
<section class="feature-content">
        <?php if ( $feature_content ){ ?>
                <jdoc:include type="modules" name="feature" />
        <?php } ?>
  <div class="row">
        <?php if ( $feature_a_content ){ ?>
            <div class="<?php echo $featurewidth_a ?> columns end">
                <jdoc:include type="modules" name="feature_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $feature_b_content ){ ?>
            <div class="<?php echo $featurewidth_b ?> columns end">
                <jdoc:include type="modules" name="feature_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $feature_c_content ){ ?>
            <div class="<?php echo $featurewidth_c ?> columns end">
                <jdoc:include type="modules" name="feature_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $feature_d_content ){ ?>
            <div class="<?php echo $featurewidth_d ?> columns end">
                <jdoc:include type="modules" name="feature_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $feature_e_content ){ ?>
            <div class="<?php echo $featurewidth_e ?> columns end">
                <jdoc:include type="modules" name="feature_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $feature_f_content ){ ?>
            <div class="<?php echo $featurewidth_f ?> columns end">
                <jdoc:include type="modules" name="feature_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End feature Content **/ } ?>

<?php /** Begin utility Content **/ if ( $utility_content  or $utility_a_content  or $utility_b_content or $utility_c_content  or $utility_d_content or $utility_e_content  or $utility_f_content ) { ?>
<section class="utility-content">
        <?php if ( $utility_content ){ ?>
                <jdoc:include type="modules" name="utility" style="xhtml" />
        <?php } ?>
  <div class="row">  
        <?php if ( $utility_a_content ){ ?>
            <div class="<?php echo $utilitywidth_a ?> columns end">
                <jdoc:include type="modules" name="utility_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $utility_b_content ){ ?>
            <div class="<?php echo $utilitywidth_b ?> columns end">
                <jdoc:include type="modules" name="utility_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $utility_c_content ){ ?>
            <div class="<?php echo $utilitywidth_c ?> columns end">
                <jdoc:include type="modules" name="utility_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $utility_d_content ){ ?>
            <div class="<?php echo $utilitywidth_d ?> columns end">
                <jdoc:include type="modules" name="utility_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $utility_e_content ){ ?>
            <div class="<?php echo $utilitywidth_e ?> columns end">
                <jdoc:include type="modules" name="utility_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $utility_f_content ){ ?>
            <div class="<?php echo $utilitywidth_f ?> columns end">
                <jdoc:include type="modules" name="utility_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End utility Content **/ } ?>

<?php /** Begin maintop Content **/ if ( $maintop_content  or $maintop_a_content  or $maintop_b_content or $maintop_c_content  or $maintop_d_content or $maintop_e_content  or $maintop_f_content ) { ?>
<section class="maintop-content">
        <?php if ( $maintop_content ){ ?>
                <jdoc:include type="modules" name="maintop" style="xhtml" />
        <?php } ?>
  <div class="row">
        <?php if ( $maintop_a_content ){ ?>
            <div class="<?php echo $maintopwidth_a ?> columns end">
                <jdoc:include type="modules" name="maintop_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $maintop_b_content ){ ?>
            <div class="<?php echo $maintopwidth_b ?> columns end">
                <jdoc:include type="modules" name="maintop_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $maintop_c_content ){ ?>
            <div class="<?php echo $maintopwidth_c ?> columns end">
                <jdoc:include type="modules" name="maintop_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $maintop_d_content ){ ?>
            <div class="<?php echo $maintopwidth_d ?> columns end">
                <jdoc:include type="modules" name="maintop_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $maintop_e_content ){ ?>
            <div class="<?php echo $maintopwidth_e ?> columns end">
                <jdoc:include type="modules" name="maintop_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $maintop_f_content ){ ?>
            <div class="<?php echo $maintopwidth_f ?> columns end">
                <jdoc:include type="modules" name="maintop_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End maintop Content **/ } ?>

<?php /** Begin main Content **/ if ( $sidebar_a_content  or $sidebar_a_content or $content_bottom_a_content  or $content_bottom_b_content or $content_bottom_c_content or $content_top_a_content  or $content_top_b_content or $content_top_c_content or !empty($ndata)  ) { ?>
<section class="main-content">
    <div class="row">
    
        <?php if ( $sidebar_a_content ){ ?>
            <div class="<?php echo $sidebarwidth_a ?> columns">
                <jdoc:include type="modules" name="sidebar_a" style="xhtml"/>
            </div>
        <?php } ?>

        <div class="<?php echo $mainwidth ?> columns">
<?php if ( $content_top_a_content  or $content_top_b_content or $content_top_c_content ) { ?>
          <div class="row">
        <?php if ( $content_top_a_content ){ ?>
            <div class="<?php echo $content_topwidth_a ?> columns end">
                <jdoc:include type="modules" name="content_top_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $content_top_b_content ){ ?>
            <div class="<?php echo $content_topwidth_b ?> columns end">
                <jdoc:include type="modules" name="content_top_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $content_top_c_content ){ ?>
            <div class="<?php echo $content_topwidth_c ?> columns end">
                <jdoc:include type="modules" name="content_top_c" style="xhtml" />
            </div>
        <?php } ?>
          </div>
          <?php } ?>

        <?php if(!empty($ndata)) { ?>
          <div class="row">
          <div class="article small-12 columns">
            <jdoc:include type="component" /> 
          </div> 
          </div>
        <?php } ?>

<?php if ( $content_bottom_a_content  or $content_bottom_b_content or $content_bottom_c_content ) { ?>
          <div class="row">
        <?php if ( $content_bottom_a_content ){ ?>
            <div class="<?php echo $content_bottomwidth_a ?> columns end">
                <jdoc:include type="modules" name="content_bottom_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $content_bottom_b_content ){ ?>
            <div class="<?php echo $content_bottomwidth_b ?> columns end">
                <jdoc:include type="modules" name="content_bottom_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $content_bottom_c_content ){ ?>
            <div class="<?php echo $content_bottomwidth_c ?> columns end">
                <jdoc:include type="modules" name="content_bottom_c" style="xhtml" />
            </div>
        <?php } ?>
          </div>
          <?php } ?>
          
   		  </div>
		    <?php if ( $sidebar_b_content ){ ?>
            <div class="<?php echo $sidebarwidth_b ?> columns">
                <jdoc:include type="modules" name="sidebar_b" style="xhtml" />
            </div>
         <?php } ?>

</div>      
</section>
   <?php } ?>

<?php /** Begin mainbottom Content **/ if ( $mainbottom_content or $mainbottom_a_content  or $mainbottom_b_content or $mainbottom_c_content  or $mainbottom_d_content or $mainbottom_e_content  or $mainbottom_f_content ) { ?>
<section class="mainbottom-content">
        <?php if ( $mainbottom_content ){ ?>
                <jdoc:include type="modules" name="mainbottom" style="xhtml" />
        <?php } ?>
  <div class="row">  
        <?php if ( $mainbottom_a_content ){ ?>
            <div class="<?php echo $mainbottomwidth_a ?> columns end">
                <jdoc:include type="modules" name="mainbottom_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $mainbottom_b_content ){ ?>
            <div class="<?php echo $mainbottomwidth_b ?> columns end">
                <jdoc:include type="modules" name="mainbottom_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $mainbottom_c_content ){ ?>
            <div class="<?php echo $mainbottomwidth_c ?> columns end">
                <jdoc:include type="modules" name="mainbottom_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $mainbottom_d_content ){ ?>
            <div class="<?php echo $mainbottomwidth_d ?> columns end">
                <jdoc:include type="modules" name="mainbottom_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $mainbottom_e_content ){ ?>
            <div class="<?php echo $mainbottomwidth_e ?> columns end">
                <jdoc:include type="modules" name="mainbottom_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $mainbottom_f_content ){ ?>
            <div class="<?php echo $mainbottomwidth_f ?> columns end">
                <jdoc:include type="modules" name="mainbottom_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End mainbottom Content **/ } ?>

<?php /** Begin extension Content **/ if ( $extension_content or $extension_a_content  or $extension_b_content or $extension_c_content  or $extension_d_content or $extension_e_content  or $extension_f_content ) { ?>
<section class="extension-content">
        <?php if ( $extension_content ){ ?>
                <jdoc:include type="modules" name="extension" />
        <?php } ?>
  <div class="row">
        <?php if ( $extension_a_content ){ ?>
            <div class="<?php echo $extensionwidth_a ?> columns end">
                <jdoc:include type="modules" name="extension_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $extension_b_content ){ ?>
            <div class="<?php echo $extensionwidth_b ?> columns end">
                <jdoc:include type="modules" name="extension_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $extension_c_content ){ ?>
            <div class="<?php echo $extensionwidth_c ?> columns end">
                <jdoc:include type="modules" name="extension_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $extension_d_content ){ ?>
            <div class="<?php echo $extensionwidth_d ?> columns end">
                <jdoc:include type="modules" name="extension_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $extension_e_content ){ ?>
            <div class="<?php echo $extensionwidth_e ?> columns end">
                <jdoc:include type="modules" name="extension_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $extension_f_content ){ ?>
            <div class="<?php echo $extensionwidth_f ?> columns end">
                <jdoc:include type="modules" name="extension_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End extension Content **/ } ?>

<?php /** Begin bottom Content **/ if ( $bottom_content  or $bottom_a_content  or $bottom_b_content or $bottom_c_content  or $bottom_d_content or $bottom_e_content  or $bottom_f_content ) { ?>
<section class="bottom-content">
        <?php if ( $bottom_content ){ ?>
                <jdoc:include type="modules" name="bottom" />
        <?php } ?>
  <div class="row">  
        <?php if ( $bottom_a_content ){ ?>
            <div class="<?php echo $bottomwidth_a ?> columns end">
                <jdoc:include type="modules" name="bottom_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $bottom_b_content ){ ?>
            <div class="<?php echo $bottomwidth_b ?> columns end">
                <jdoc:include type="modules" name="bottom_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $bottom_c_content ){ ?>
            <div class="<?php echo $bottomwidth_c ?> columns end">
                <jdoc:include type="modules" name="bottom_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $bottom_d_content ){ ?>
            <div class="<?php echo $bottomwidth_d ?> columns end">
                <jdoc:include type="modules" name="bottom_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $bottom_e_content ){ ?>
            <div class="<?php echo $bottomwidth_e ?> columns end">
                <jdoc:include type="modules" name="bottom_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $bottom_f_content ){ ?>
            <div class="<?php echo $bottomwidth_f ?> columns end">
                <jdoc:include type="modules" name="bottom_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End bottom Content **/ } ?>

<?php /** Begin footer Content **/ if ( $footer_content  or $footer_a_content  or $footer_b_content or $footer_c_content  or $footer_d_content or $footer_e_content  or $footer_f_content ) { ?>
<section class="footer-content">
        <?php if ( $footer_content ){ ?>
                <jdoc:include type="modules" name="footer" style="xhtml" />
        <?php } ?>
  <div class="row">
        <?php if ( $footer_a_content ){ ?>
            <div class="<?php echo $footerwidth_a ?> columns end">
                <jdoc:include type="modules" name="footer_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $footer_b_content ){ ?>
            <div class="<?php echo $footerwidth_b ?> columns end">
                <jdoc:include type="modules" name="footer_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $footer_c_content ){ ?>
            <div class="<?php echo $footerwidth_c ?> columns end">
                <jdoc:include type="modules" name="footer_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $footer_d_content ){ ?>
            <div class="<?php echo $footerwidth_d ?> columns end">
                <jdoc:include type="modules" name="footer_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $footer_e_content ){ ?>
            <div class="<?php echo $footerwidth_e ?> columns end">
                <jdoc:include type="modules" name="footer_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $footer_f_content ){ ?>
            <div class="<?php echo $footerwidth_f ?> columns end">
                <jdoc:include type="modules" name="footer_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End footer Content **/ } ?>

<?php /** Begin copyright Content **/ if ( $copyright_content  or $copyright_a_content  or $copyright_b_content or $copyright_c_content  or $copyright_d_content or $copyright_e_content  or $copyright_f_content ) { ?>
<section class="copyright-content">
        <?php if ( $copyright_content ){ ?>
                <jdoc:include type="modules" name="copyright" style="xhtml" />
        <?php } ?>
  <div class="row">
        <?php if ( $copyright_a_content ){ ?>
            <div class="<?php echo $copyrightwidth_a ?> columns end">
                <jdoc:include type="modules" name="copyright_a" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $copyright_b_content ){ ?>
            <div class="<?php echo $copyrightwidth_b ?> columns end">
                <jdoc:include type="modules" name="copyright_b" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $copyright_c_content ){ ?>
            <div class="<?php echo $copyrightwidth_c ?> columns end">
                <jdoc:include type="modules" name="copyright_c" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $copyright_d_content ){ ?>
            <div class="<?php echo $copyrightwidth_d ?> columns end">
                <jdoc:include type="modules" name="copyright_d" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $copyright_e_content ){ ?>
            <div class="<?php echo $copyrightwidth_e ?> columns end">
                <jdoc:include type="modules" name="copyright_e" style="xhtml" />
            </div>
        <?php } ?>
        <?php if ( $copyright_f_content ){ ?>
            <div class="<?php echo $copyrightwidth_f ?> columns end">
                <jdoc:include type="modules" name="copyright_f" style="xhtml" />
            </div>
        <?php } ?>
</div>
</section>
<?php /** End copyright Content **/ } ?>

<!-- Credit Row Taken from https://github.com/nternetinspired/OneWeb -->         
  <footer class="footer">
    <div class="row">
    <?php if ($social > 0) : ?>
      <ul class="social">
        <?php if ($twitterLink != "") : ?>
          <li><a class="twitter" href="<?php echo ($twitterLink); ?>" title="Follow me on Twitter" target="_blank"><?php echo ($twitter); ?></a></li>
        <?php endif; ?>
        <?php if ($dribbbleLink != "") : ?>
          <li><a class="dribbble" href="<?php echo ($dribbbleLink); ?>" title="See my latest work at Dribbble" target="_blank"><?php echo ($dribbble); ?></a></li>
        <?php endif; ?>
        <?php if ($facebookLink != "") : ?>
          <li><a class="facebook" href="<?php echo ($facebookLink); ?>" title="Annoy me on Facebook" target="_blank"><?php echo ($facebook); ?></a></li>
        <?php endif; ?>
        <?php if ($googleplusLink != "") : ?>
          <li><a class="googleplus" href="<?php echo ($googleplusLink); ?>" title="Find me on G+" target="_blank"><?php echo ($googleplus); ?></a></li>
        <?php endif; ?>
        <?php if ($githubLink != "") : ?>
          <li><a class="github" href="<?php echo ($githubLink); ?>" title="All the codez" target="_blank"><?php echo ($github); ?></a></li>
        <?php endif; ?>
      </ul>
    <?php endif; ?>
      <ul class="right">
        <div class="copyright">
          <small>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($app->getCfg('sitename'));?></small>
        </div>
      </ul>
      </div>
  </footer>
  <!-- end of credit row -->

<?php if ($this->countModules( 'menu' )) : ?>
<a class="exit-off-canvas"></a> <!-- exit navigation -->
</div> <!-- navigation inner wrap -->
</div> <!-- navigation outer wrap -->
<?php endif; ?>

  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bower_components/foundation/js/foundation.min.js"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/app.js" type="text/javascript"></script>
  <script>
    $(document).foundation();
  </script>
  
    <!-- Load respond.js for shit browsers -->
  
  <!--[if lte IE 8]>  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/respond.js"></script> <![endif]-->

  <?php if ($analytics != "UA-XXXXX-X") : ?>
<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','<?php echo htmlspecialchars($analytics); ?>'],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<?php endif; ?>
<noscript>JavaScript is unavailable or disabled; so you are probably going to miss out on a few things. Everything should still work, but with a little less pzazz!</noscript>
</body>
</html>
