<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
// Note. It is important to remove spaces between elements.
?>
<?php // The menu class is deprecated. Use nav instead. ?>
<div class="sticky">
  <nav class="top-bar hide-for-small" data-topbar>
  <ul class="title-area text-left">
    <li class="name">
      <h1><a href="/"><?php echo htmlspecialchars($app->getCfg('sitename'));?></a></h1>
    </li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="right <?php echo $class_sfx;?>"><?php
        $tag = '';
        if ($params->get('tag_id') != null)
        {
            $tag = $params->get('tag_id').'';
            echo ' id="'.$tag.'"';
        }
    ?>
    <?php
    foreach ($list as $i => &$item) :
        $class = 'item-'.$item->id;
        if ($item->id == $active_id) {
            $class .= ' current';
        }
    
        if (in_array($item->id, $path)) {
            $class .= ' active';
        }
        elseif ($item->type == 'alias') {
            $aliasToId = $item->params->get('aliasoptions');
            if (count($path) > 0 && $aliasToId == $path[count($path) - 1]) {
                $class .= ' active';
            }
            elseif (in_array($aliasToId, $path)) {
                $class .= ' alias-parent-active';
            }
        }
        if ($item->deeper) {
            $class .= 'deeper has-dropdown';
        }
        if ($item->deeper) {
            $class .= ' deeper';
        }
    
        if ($item->parent) {
            $class .= ' parent';
        }
    
        if (!empty($class)) {
            $class = ' class="'.trim($class) .'"';
        }
    
        echo '<li class="divider"></li><li'.$class.'>';
    
        // Render the menu item.
        switch ($item->type) :
            case 'separator':
            case 'url':
            case 'component':
                require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
                break;
    
            default:
                require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
                break;
        endswitch;
      
        // The next item is deeper.
        if ($item->deeper) {
            echo '<ul class="dropdown">';
        }
        // The next item is shallower.
        elseif ($item->shallower) {
            echo '</li>';
            echo str_repeat('</ul></li>', $item->level_diff);
        }
        // The next item is on the same level.
        else {
            echo '</li>';
        }
    endforeach;
    ?></ul>
      </section>
</nav>


<nav class="tab-bar  show-for-small"> <!-- navigation bar -->
			<section class="left-small">
        		<a class="left-off-canvas-toggle menu-icon" ><span></span></a> <!-- target the leftside menu -->
        	</section>
           <section class="right tab-bar-section">
        		<h1 class="title"><?php echo htmlspecialchars($app->getCfg('sitename'));?></h1>
      		</section>
      		    	</nav>

<aside class="left-off-canvas-menu"><!-- navigation left -->
			<ul class="off-canvas-list">
              <a href="/"><li><label><?php echo htmlspecialchars($app->getCfg('sitename'));?></label></li></a>
                
                
<?php
        $tag = '';
        if ($params->get('tag_id') != null)
        {
            $tag = $params->get('tag_id').'';
            echo ' id="'.$tag.'"';
        }
    ?>
    <?php
    foreach ($list as $i => &$item) :
        $class = 'item-'.$item->id;
        if ($item->id == $active_id) {
            $class .= ' current';
        }
    
        if (in_array($item->id, $path)) {
            $class .= ' active';
        }
        elseif ($item->type == 'alias') {
            $aliasToId = $item->params->get('aliasoptions');
            if (count($path) > 0 && $aliasToId == $path[count($path) - 1]) {
                $class .= ' active';
            }
            elseif (in_array($aliasToId, $path)) {
                $class .= ' alias-parent-active';
            }
        }
        if ($item->deeper) {
            $class .= 'deeper';
        }
        if ($item->deeper) {
            $class .= ' deeper';
        }
    
        if ($item->parent) {
            $class .= ' parent';
        }
    
        if (!empty($class)) {
            $class = ' class="'.trim($class) .'"';
        }
    
        echo '<li'.$class.'>';
    
        // Render the menu item.
        switch ($item->type) :
            case 'separator':
            case 'url':
            case 'component':
                require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
                break;
    
            default:
                require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
                break;
        endswitch;
      
        // The next item is deeper.
        if ($item->deeper) {
            echo '<ul>';
        }
        // The next item is shallower.
        elseif ($item->shallower) {
            echo '</li>';
            echo str_repeat('</ul></li>', $item->level_diff);
        }
        // The next item is on the same level.
        else {
            echo '</li>';
        }
    endforeach;
    ?></ul>
		</aside>                
              </div>  
                