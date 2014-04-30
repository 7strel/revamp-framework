<?php defined('_JEXEC') or die;
/* =====================================================================
Template: Based on Foundation 5 for Joomla
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

// Define shortcuts for template parameters
$loadMoo 				= $this->params->get('loadMoo');
$setGeneratorTag		= $this->params->get('setGeneratorTag');
$analytics 				= $this->params->get('analytics');
$jQuery					= $this->params->get('jQuery');
$jQueryOff				= $this->params->get('jQueryOff');
$customCSS    			= $this->params->get('customCSS');
$defaultWidth    		= '1024';
$setWidth    			= $this->params->get('setWidth');
$widthUnit 				= $this->params->get('widthUnit');
$compileSass			= $this->params->get('compileSass');
$topbarTitle			= $this->params->get('topbarTitle');
$googleplus             = $this->params->get('googleplus');
$googleWebFonts         = $this->params->get('googleWebFonts');
$twitter                = $this->params->get('twitter');
$twitterLink            = $this->params->get('twitterLink');
$dribbble               = $this->params->get('dribbble');
$dribbbleLink           = $this->params->get('dribbbleLink');
$facebook               = $this->params->get('facebook');
$facebookLink           = $this->params->get('facebookLink');
$googleplus             = $this->params->get('googleplus');
$googleplusLink         = $this->params->get('googleplusLink');
$github                 = $this->params->get('github');
$githubLink             = $this->params->get('githubLink');
$active                 = JFactory::getApplication()->getMenu()->getActive();
$topColor				= $this->params->get('topColor');
$headerColor			= $this->params->get('headerColor');
$showcaseColor			= $this->params->get('showcaseColor');
$featureColor			= $this->params->get('featureColor');
$utilityColor			= $this->params->get('utilityColor');
$maintopColor			= $this->params->get('maintopColor');
$mainColor				= $this->params->get('mainColor');
$mainbottomColor		= $this->params->get('mainbottomColor');
$extensionColor			= $this->params->get('extensionColor');
$bottomColor			= $this->params->get('bottomColor');
$footerColor			= $this->params->get('footerColor');
$copyrightColor			= $this->params->get('copyrightColor');
$socialrowColor			= $this->params->get('socialrowColor');

// Do we have social links?
$social                = ($twitterLink?1:0)+ ($dribbbleLink?1:0)+ ($facebookLink?1:0)+ ($googleplusLink?1:0)+ ($githubLink?1:0);
// Do we have Custom Colors?
$customColor           = ($topColor?1:0)+ ($headerColor?1:0)+ ($showcaseColor?1:0)+ ($featureColor?1:0)+ ($utilityColor?1:0)+ ($maintopColor?1:0)+ ($mainColor?1:0)+ ($mainbottomColor?1:0)+ ($extensionColor?1:0)+ ($bottomColor?1:0)+ ($footerColor?1:0)+ ($copyrightColor?1:0)+ ($socialrowColor?1:0);



if ($this->countModules('top_a') == 0)  {$topwidth_a = 0;} else {$topwidth_a = (int) ($this->params->get('topwidth_a'));}
if ($this->countModules('top_b') == 0)  {$topwidth_b = 0;} else {$topwidth_b = (int) ($this->params->get('topwidth_b'));}
if ($this->countModules('top_c') == 0)  {$topwidth_c = 0;} else {$topwidth_c = (int) ($this->params->get('topwidth_c'));}
if ($this->countModules('top_d') == 0)  {$topwidth_d = 0;} else {$topwidth_d = (int) ($this->params->get('topwidth_d'));}
if ($this->countModules('top_e') == 0)  {$topwidth_e = 0;} else {$topwidth_e = (int) ($this->params->get('topwidth_e'));}
if ($this->countModules('top_f') == 0)  {$topwidth_f = 0;} else {$topwidth_f = (int) ($this->params->get('topwidth_f'));}
if ($this->countModules('header_a') == 0)  {$headerwidth_a = 0;} else {$headerwidth_a = (int) ($this->params->get('headerwidth_a'));}
if ($this->countModules('header_b') == 0)  {$headerwidth_b = 0;} else {$headerwidth_b = (int) ($this->params->get('headerwidth_b'));}
if ($this->countModules('header_c') == 0)  {$headerwidth_c = 0;} else {$headerwidth_c = (int) ($this->params->get('headerwidth_c'));}
if ($this->countModules('header_d') == 0)  {$headerwidth_d = 0;} else {$headerwidth_d = (int) ($this->params->get('headerwidth_d'));}
if ($this->countModules('header_e') == 0)  {$headerwidth_e = 0;} else {$headerwidth_e = (int) ($this->params->get('headerwidth_e'));}
if ($this->countModules('header_f') == 0)  {$headerwidth_f = 0;} else {$headerwidth_f = (int) ($this->params->get('headerwidth_f'));}
if ($this->countModules('showcase_a') == 0)  {$showcasewidth_a = 0;} else {$showcasewidth_a = (int) ($this->params->get('showcasewidth_a'));}
if ($this->countModules('showcase_b') == 0)  {$showcasewidth_b = 0;} else {$showcasewidth_b = (int) ($this->params->get('showcasewidth_b'));}
if ($this->countModules('showcase_c') == 0)  {$showcasewidth_c = 0;} else {$showcasewidth_c = (int) ($this->params->get('showcasewidth_c'));}
if ($this->countModules('showcase_d') == 0)  {$showcasewidth_d = 0;} else {$showcasewidth_d = (int) ($this->params->get('showcasewidth_d'));}
if ($this->countModules('showcase_e') == 0)  {$showcasewidth_e = 0;} else {$showcasewidth_e = (int) ($this->params->get('showcasewidth_e'));}
if ($this->countModules('showcase_f') == 0)  {$showcasewidth_f = 0;} else {$showcasewidth_f = (int) ($this->params->get('showcasewidth_f'));}
if ($this->countModules('feature_a') == 0)  {$featurewidth_a = 0;} else {$featurewidth_a = (int) ($this->params->get('featurewidth_a'));}
if ($this->countModules('feature_b') == 0)  {$featurewidth_b = 0;} else {$featurewidth_b = (int) ($this->params->get('featurewidth_b'));}
if ($this->countModules('feature_c') == 0)  {$featurewidth_c = 0;} else {$featurewidth_c = (int) ($this->params->get('featurewidth_c'));}
if ($this->countModules('feature_d') == 0)  {$featurewidth_d = 0;} else {$featurewidth_d = (int) ($this->params->get('featurewidth_d'));}
if ($this->countModules('feature_e') == 0)  {$featurewidth_e = 0;} else {$featurewidth_e = (int) ($this->params->get('featurewidth_e'));}
if ($this->countModules('feature_f') == 0)  {$featurewidth_f = 0;} else {$featurewidth_f = (int) ($this->params->get('featurewidth_f'));}
if ($this->countModules('utility_a') == 0)  {$utilitywidth_a = 0;} else {$utilitywidth_a = (int) ($this->params->get('utilitywidth_a'));}
if ($this->countModules('utility_b') == 0)  {$utilitywidth_b = 0;} else {$utilitywidth_b = (int) ($this->params->get('utilitywidth_b'));}
if ($this->countModules('utility_c') == 0)  {$utilitywidth_c = 0;} else {$utilitywidth_c = (int) ($this->params->get('utilitywidth_c'));}
if ($this->countModules('utility_d') == 0)  {$utilitywidth_d = 0;} else {$utilitywidth_d = (int) ($this->params->get('utilitywidth_d'));}
if ($this->countModules('utility_e') == 0)  {$utilitywidth_e = 0;} else {$utilitywidth_e = (int) ($this->params->get('utilitywidth_e'));}
if ($this->countModules('utility_f') == 0)  {$utilitywidth_f = 0;} else {$utilitywidth_f = (int) ($this->params->get('utilitywidth_f'));}
if ($this->countModules('maintop_a') == 0)  {$maintopwidth_a = 0;} else {$maintopwidth_a = (int) ($this->params->get('maintopwidth_a'));}
if ($this->countModules('maintop_b') == 0)  {$maintopwidth_b = 0;} else {$maintopwidth_b = (int) ($this->params->get('maintopwidth_b'));}
if ($this->countModules('maintop_c') == 0)  {$maintopwidth_c = 0;} else {$maintopwidth_c = (int) ($this->params->get('maintopwidth_c'));}
if ($this->countModules('maintop_d') == 0)  {$maintopwidth_d = 0;} else {$maintopwidth_d = (int) ($this->params->get('maintopwidth_d'));}
if ($this->countModules('maintop_e') == 0)  {$maintopwidth_e = 0;} else {$maintopwidth_e = (int) ($this->params->get('maintopwidth_e'));}
if ($this->countModules('maintop_f') == 0)  {$maintopwidth_f = 0;} else {$maintopwidth_f = (int) ($this->params->get('maintopwidth_f'));}
if ($this->countModules('sidebar_a') == 0)  {$sidebarwidth_a = 0;} else {$sidebarwidth_a = (int) ($this->params->get('sidebarwidth_a'));}
if ($this->countModules('sidebar_b') == 0)  {$sidebarwidth_b = 0;} else {$sidebarwidth_b = (int) ($this->params->get('sidebarwidth_b'));}
if ($this->countModules('content_top_a') == 0)  {$content_topwidth_a = 0;} else {$content_topwidth_a = (int) ($this->params->get('content_topwidth_a'));}
if ($this->countModules('content_top_b') == 0)  {$content_topwidth_b = 0;} else {$content_topwidth_b = (int) ($this->params->get('content_topwidth_b'));}
if ($this->countModules('content_top_c') == 0)  {$content_topwidth_c = 0;} else {$content_topwidth_c = (int) ($this->params->get('content_topwidth_c'));}
if ($this->countModules('content_bottom_a') == 0)  {$content_bottomwidth_a = 0;} else {$content_bottomwidth_a = (int) ($this->params->get('content_bottomwidth_a'));}
if ($this->countModules('content_bottom_b') == 0)  {$content_bottomwidth_b = 0;} else {$content_bottomwidth_b = (int) ($this->params->get('content_bottomwidth_b'));}
if ($this->countModules('content_bottom_c') == 0)  {$content_bottomwidth_c = 0;} else {$content_bottomwidth_c = (int) ($this->params->get('content_bottomwidth_c'));}
if ($this->countModules('mainbottom_a') == 0)  {$mainbottomwidth_a = 0;} else {$mainbottomwidth_a = (int) ($this->params->get('mainbottomwidth_a'));}
if ($this->countModules('mainbottom_b') == 0)  {$mainbottomwidth_b = 0;} else {$mainbottomwidth_b = (int) ($this->params->get('mainbottomwidth_b'));}
if ($this->countModules('mainbottom_c') == 0)  {$mainbottomwidth_c = 0;} else {$mainbottomwidth_c = (int) ($this->params->get('mainbottomwidth_c'));}
if ($this->countModules('mainbottom_d') == 0)  {$mainbottomwidth_d = 0;} else {$mainbottomwidth_d = (int) ($this->params->get('mainbottomwidth_d'));}
if ($this->countModules('mainbottom_e') == 0)  {$mainbottomwidth_e = 0;} else {$mainbottomwidth_e = (int) ($this->params->get('mainbottomwidth_e'));}
if ($this->countModules('mainbottom_f') == 0)  {$mainbottomwidth_f = 0;} else {$mainbottomwidth_f = (int) ($this->params->get('mainbottomwidth_f'));}
if ($this->countModules('extension_a') == 0)  {$extensionwidth_a = 0;} else {$extensionwidth_a = (int) ($this->params->get('extensionwidth_a'));}
if ($this->countModules('extension_b') == 0)  {$extensionwidth_b = 0;} else {$extensionwidth_b = (int) ($this->params->get('extensionwidth_b'));}
if ($this->countModules('extension_c') == 0)  {$extensionwidth_c = 0;} else {$extensionwidth_c = (int) ($this->params->get('extensionwidth_c'));}
if ($this->countModules('extension_d') == 0)  {$extensionwidth_d = 0;} else {$extensionwidth_d = (int) ($this->params->get('extensionwidth_d'));}
if ($this->countModules('extension_e') == 0)  {$extensionwidth_e = 0;} else {$extensionwidth_e = (int) ($this->params->get('extensionwidth_e'));}
if ($this->countModules('extension_f') == 0)  {$extensionwidth_f = 0;} else {$extensionwidth_f = (int) ($this->params->get('extensionwidth_f'));}
if ($this->countModules('bottom_a') == 0)  {$bottomwidth_a = 0;} else {$bottomwidth_a = (int) ($this->params->get('bottomwidth_a'));}
if ($this->countModules('bottom_b') == 0)  {$bottomwidth_b = 0;} else {$bottomwidth_b = (int) ($this->params->get('bottomwidth_b'));}
if ($this->countModules('bottom_c') == 0)  {$bottomwidth_c = 0;} else {$bottomwidth_c = (int) ($this->params->get('bottomwidth_c'));}
if ($this->countModules('bottom_d') == 0)  {$bottomwidth_d = 0;} else {$bottomwidth_d = (int) ($this->params->get('bottomwidth_d'));}
if ($this->countModules('bottom_e') == 0)  {$bottomwidth_e = 0;} else {$bottomwidth_e = (int) ($this->params->get('bottomwidth_e'));}
if ($this->countModules('bottom_f') == 0)  {$bottomwidth_f = 0;} else {$bottomwidth_f = (int) ($this->params->get('bottomwidth_f'));}
if ($this->countModules('footer_a') == 0)  {$footerwidth_a = 0;} else {$footerwidth_a = (int) ($this->params->get('footerwidth_a'));}
if ($this->countModules('footer_b') == 0)  {$footerwidth_b = 0;} else {$footerwidth_b = (int) ($this->params->get('footerwidth_b'));}
if ($this->countModules('footer_c') == 0)  {$footerwidth_c = 0;} else {$footerwidth_c = (int) ($this->params->get('footerwidth_c'));}
if ($this->countModules('footer_d') == 0)  {$footerwidth_d = 0;} else {$footerwidth_d = (int) ($this->params->get('footerwidth_d'));}
if ($this->countModules('footer_e') == 0)  {$footerwidth_e = 0;} else {$footerwidth_e = (int) ($this->params->get('footerwidth_e'));}
if ($this->countModules('footer_f') == 0)  {$footerwidth_f = 0;} else {$footerwidth_f = (int) ($this->params->get('footerwidth_f'));}
if ($this->countModules('copyright_a') == 0)  {$copyrightwidth_a = 0;} else {$copyrightwidth_a = (int) ($this->params->get('copyrightwidth_a'));}
if ($this->countModules('copyright_b') == 0)  {$copyrightwidth_b = 0;} else {$copyrightwidth_b = (int) ($this->params->get('copyrightwidth_b'));}
if ($this->countModules('copyright_c') == 0)  {$copyrightwidth_c = 0;} else {$copyrightwidth_c = (int) ($this->params->get('copyrightwidth_c'));}
if ($this->countModules('copyright_d') == 0)  {$copyrightwidth_d = 0;} else {$copyrightwidth_d = (int) ($this->params->get('copyrightwidth_d'));}
if ($this->countModules('copyright_e') == 0)  {$copyrightwidth_e = 0;} else {$copyrightwidth_e = (int) ($this->params->get('copyrightwidth_e'));}
if ($this->countModules('copyright_f') == 0)  {$copyrightwidth_f = 0;} else {$copyrightwidth_f = (int) ($this->params->get('copyrightwidth_f'));}

$colcount = $sidebarwidth_a + $sidebarwidth_b;
$coltotal = 12 - $colcount;

$mainwidth = 'medium-'.$coltotal;
$sidebarwidth_b = 'medium-'.$sidebarwidth_b;
$sidebarwidth_a = 'medium-'.$sidebarwidth_a;
$topwidth_a = 'medium-'.$topwidth_a;
$topwidth_b = 'medium-'.$topwidth_b;
$topwidth_c = 'medium-'.$topwidth_c;
$topwidth_d = 'medium-'.$topwidth_d;
$topwidth_e = 'medium-'.$topwidth_e;
$topwidth_f = 'medium-'.$topwidth_f;
$headerwidth_a = 'medium-'.$headerwidth_a;
$headerwidth_b = 'medium-'.$headerwidth_b;
$headerwidth_c = 'medium-'.$headerwidth_c;
$headerwidth_d = 'medium-'.$headerwidth_d;
$headerwidth_e = 'medium-'.$headerwidth_e;
$headerwidth_f = 'medium-'.$headerwidth_f;
$showcasewidth_a = 'medium-'.$showcasewidth_a;
$showcasewidth_b = 'medium-'.$showcasewidth_b;
$showcasewidth_c = 'medium-'.$showcasewidth_c;
$showcasewidth_d = 'medium-'.$showcasewidth_d;
$showcasewidth_e = 'medium-'.$showcasewidth_e;
$showcasewidth_f = 'medium-'.$showcasewidth_f;
$featurewidth_a = 'medium-'.$featurewidth_a;
$featurewidth_b = 'medium-'.$featurewidth_b;
$featurewidth_c = 'medium-'.$featurewidth_c;
$featurewidth_d = 'medium-'.$featurewidth_d;
$featurewidth_e = 'medium-'.$featurewidth_e;
$featurewidth_f = 'medium-'.$featurewidth_f;
$utilitywidth_a = 'medium-'.$utilitywidth_a;
$utilitywidth_b = 'medium-'.$utilitywidth_b;
$utilitywidth_c = 'medium-'.$utilitywidth_c;
$utilitywidth_d = 'medium-'.$utilitywidth_d;
$utilitywidth_e = 'medium-'.$utilitywidth_e;
$utilitywidth_f = 'medium-'.$utilitywidth_f;
$maintopwidth_a = 'medium-'.$maintopwidth_a;
$maintopwidth_b = 'medium-'.$maintopwidth_b;
$maintopwidth_c = 'medium-'.$maintopwidth_c;
$maintopwidth_d = 'medium-'.$maintopwidth_d;
$maintopwidth_e = 'medium-'.$maintopwidth_e;
$maintopwidth_f = 'medium-'.$maintopwidth_f;
$content_topwidth_a = 'medium-'.$content_topwidth_a;
$content_topwidth_b = 'medium-'.$content_topwidth_b;
$content_topwidth_c = 'medium-'.$content_topwidth_c;
$content_bottomwidth_a = 'medium-'.$content_bottomwidth_a;
$content_bottomwidth_b = 'medium-'.$content_bottomwidth_b;
$content_bottomwidth_c = 'medium-'.$content_bottomwidth_c;
$mainbottomwidth_a = 'medium-'.$mainbottomwidth_a;
$mainbottomwidth_b = 'medium-'.$mainbottomwidth_b;
$mainbottomwidth_c = 'medium-'.$mainbottomwidth_c;
$mainbottomwidth_d = 'medium-'.$mainbottomwidth_d;
$mainbottomwidth_e = 'medium-'.$mainbottomwidth_e;
$mainbottomwidth_f = 'medium-'.$mainbottomwidth_f;
$extensionwidth_a = 'medium-'.$extensionwidth_a;
$extensionwidth_b = 'medium-'.$extensionwidth_b;
$extensionwidth_c = 'medium-'.$extensionwidth_c;
$extensionwidth_d = 'medium-'.$extensionwidth_d;
$extensionwidth_e = 'medium-'.$extensionwidth_e;
$extensionwidth_f = 'medium-'.$extensionwidth_f;
$bottomwidth_a = 'medium-'.$bottomwidth_a;
$bottomwidth_b = 'medium-'.$bottomwidth_b;
$bottomwidth_c = 'medium-'.$bottomwidth_c;
$bottomwidth_d = 'medium-'.$bottomwidth_d;
$bottomwidth_e = 'medium-'.$bottomwidth_e;
$bottomwidth_f = 'medium-'.$bottomwidth_f;
$footerwidth_a = 'medium-'.$footerwidth_a;
$footerwidth_b = 'medium-'.$footerwidth_b;
$footerwidth_c = 'medium-'.$footerwidth_c;
$footerwidth_d = 'medium-'.$footerwidth_d;
$footerwidth_e = 'medium-'.$footerwidth_e;
$footerwidth_f = 'medium-'.$footerwidth_f;
$copyrightwidth_a = 'medium-'.$copyrightwidth_a;
$copyrightwidth_b = 'medium-'.$copyrightwidth_b;
$copyrightwidth_c = 'medium-'.$copyrightwidth_c;
$copyrightwidth_d = 'medium-'.$copyrightwidth_d;
$copyrightwidth_e = 'medium-'.$copyrightwidth_e;
$copyrightwidth_f = 'medium-'.$copyrightwidth_f;








// Modules
$top_content = (int) ($this->countModules('top') > 0); 
$top_a_content = (int) ($this->countModules('top_a') > 0); 
$top_b_content = (int) ($this->countModules('top_b') > 0); 
$top_c_content = (int) ($this->countModules('top_c') > 0); 
$top_d_content = (int) ($this->countModules('top_d') > 0); 
$top_e_content = (int) ($this->countModules('top_e') > 0); 
$top_f_content = (int) ($this->countModules('top_f') > 0); 
$header_content = (int) ($this->countModules('header') > 0); 
$header_a_content = (int) ($this->countModules('header_a') > 0); 
$header_b_content = (int) ($this->countModules('header_b') > 0); 
$header_c_content = (int) ($this->countModules('header_c') > 0); 
$header_d_content = (int) ($this->countModules('header_d') > 0); 
$header_e_content = (int) ($this->countModules('header_e') > 0); 
$header_f_content = (int) ($this->countModules('header_f') > 0); 
$showcase_content = (int) ($this->countModules('showcase') > 0); 
$showcase_a_content = (int) ($this->countModules('showcase_a') > 0); 
$showcase_b_content = (int) ($this->countModules('showcase_b') > 0); 
$showcase_c_content = (int) ($this->countModules('showcase_c') > 0); 
$showcase_d_content = (int) ($this->countModules('showcase_d') > 0); 
$showcase_e_content = (int) ($this->countModules('showcase_e') > 0); 
$showcase_f_content = (int) ($this->countModules('showcase_f') > 0); 
$feature_content = (int) ($this->countModules('feature') > 0); 
$feature_a_content = (int) ($this->countModules('feature_a') > 0); 
$feature_b_content = (int) ($this->countModules('feature_b') > 0); 
$feature_c_content = (int) ($this->countModules('feature_c') > 0); 
$feature_d_content = (int) ($this->countModules('feature_d') > 0); 
$feature_e_content = (int) ($this->countModules('feature_e') > 0); 
$feature_f_content = (int) ($this->countModules('feature_f') > 0); 
$utility_content = (int) ($this->countModules('utility') > 0); 
$utility_a_content = (int) ($this->countModules('utility_a') > 0); 
$utility_b_content = (int) ($this->countModules('utility_b') > 0); 
$utility_c_content = (int) ($this->countModules('utility_c') > 0); 
$utility_d_content = (int) ($this->countModules('utility_d') > 0); 
$utility_e_content = (int) ($this->countModules('utility_e') > 0); 
$utility_f_content = (int) ($this->countModules('utility_f') > 0); 
$maintop_content = (int) ($this->countModules('maintop') > 0); 
$maintop_a_content = (int) ($this->countModules('maintop_a') > 0); 
$maintop_b_content = (int) ($this->countModules('maintop_b') > 0); 
$maintop_c_content = (int) ($this->countModules('maintop_c') > 0); 
$maintop_d_content = (int) ($this->countModules('maintop_d') > 0); 
$maintop_e_content = (int) ($this->countModules('maintop_e') > 0); 
$maintop_f_content = (int) ($this->countModules('maintop_f') > 0); 
$sidebar_a_content = (int) ($this->countModules('sidebar_a') > 0); 
$sidebar_b_content = (int) ($this->countModules('sidebar_b') > 0); 
$content_top_a_content = (int) ($this->countModules('content_top_a') > 0); 
$content_top_b_content = (int) ($this->countModules('content_top_b') > 0); 
$content_top_c_content = (int) ($this->countModules('content_top_c') > 0); 
$content_bottom_a_content = (int) ($this->countModules('content_bottom_a') > 0); 
$content_bottom_b_content = (int) ($this->countModules('content_bottom_b') > 0); 
$content_bottom_c_content = (int) ($this->countModules('content_bottom_c') > 0); 
$mainbottom_content = (int) ($this->countModules('mainbottom') > 0); 
$mainbottom_a_content = (int) ($this->countModules('mainbottom_a') > 0); 
$mainbottom_b_content = (int) ($this->countModules('mainbottom_b') > 0); 
$mainbottom_c_content = (int) ($this->countModules('mainbottom_c') > 0); 
$mainbottom_d_content = (int) ($this->countModules('mainbottom_d') > 0); 
$mainbottom_e_content = (int) ($this->countModules('mainbottom_e') > 0); 
$mainbottom_f_content = (int) ($this->countModules('mainbottom_f') > 0); 
$extension_content = (int) ($this->countModules('extension') > 0); 
$extension_a_content = (int) ($this->countModules('extension_a') > 0); 
$extension_b_content = (int) ($this->countModules('extension_b') > 0); 
$extension_c_content = (int) ($this->countModules('extension_c') > 0); 
$extension_d_content = (int) ($this->countModules('extension_d') > 0); 
$extension_e_content = (int) ($this->countModules('extension_e') > 0); 
$extension_f_content = (int) ($this->countModules('extension_f') > 0); 
$bottom_content = (int) ($this->countModules('bottom') > 0);
$bottom_a_content = (int) ($this->countModules('bottom_a') > 0);
$bottom_b_content = (int) ($this->countModules('bottom_b') > 0);
$bottom_c_content = (int) ($this->countModules('bottom_c') > 0); 
$bottom_d_content = (int) ($this->countModules('bottom_d') > 0); 
$bottom_e_content = (int) ($this->countModules('bottom_e') > 0); 
$bottom_f_content = (int) ($this->countModules('bottom_f') > 0); 
$footer_content = (int) ($this->countModules('footer') > 0); 
$footer_a_content = (int) ($this->countModules('footer_a') > 0); 
$footer_b_content = (int) ($this->countModules('footer_b') > 0); 
$footer_c_content = (int) ($this->countModules('footer_c') > 0); 
$footer_d_content = (int) ($this->countModules('footer_d') > 0); 
$footer_e_content = (int) ($this->countModules('footer_e') > 0); 
$footer_f_content = (int) ($this->countModules('footer_f') > 0); 
$copyright_content = (int) ($this->countModules('copyright') > 0); 
$copyright_a_content = (int) ($this->countModules('copyright_a') > 0); 
$copyright_b_content = (int) ($this->countModules('copyright_b') > 0); 
$copyright_c_content = (int) ($this->countModules('copyright_c') > 0); 
$copyright_d_content = (int) ($this->countModules('copyright_d') > 0); 
$copyright_e_content = (int) ($this->countModules('copyright_e') > 0); 
$copyright_f_content = (int) ($this->countModules('copyright_f') > 0); 



#----------------------------- Construct Code Snippets-----------------------------#
// GPL code taken from Construct template framework by Matt Thomas http://construct-framework.com/

// To enable use of site configuration
$app 					= JFactory::getApplication();
$pageParams             = $app->getParams();
$sitename				= $app->getCfg('sitename');
// Returns a reference to the global document object
$doc = JFactory::getDocument();

// Define relative path to the current template directory
$template = 'templates/'.$this->template;

// Change generator tag
$this->setGenerator($setGeneratorTag);

// Remove MooTools if set to no.
if ( !$loadMoo ) {
	unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-core.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-more.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/core.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/modal.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools.js']);
    unset($doc->_scripts[$this->baseurl.'/plugins/system/mtupgrade/mootools.js']);
}

#-------------End Construct Code--------------------------------------#
$data  = $doc->getBuffer('component');
$sPattern = '/\s*/m'; 
$sReplace = '';
$ndata = preg_replace( $sPattern, $sReplace, $data );
