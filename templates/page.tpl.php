<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 *
 */
?>
<?php if (theme_get_setting('social_links', 'topproject')): ?>
<?php endif; ?>
<div id="masthead">
  <div id="top">
    <div class="head"> 
    <?php if ($logo): ?>
       <div id="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" /></a>
        </div>
      <?php endif; ?>
      <h1 class="sitename"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
    <div class="clear"></div>	
    </div>
  </div>
	
  <div id="botmenu" class="menu-principal">
    <div class="submenu">
    <?php 
    if (module_exists('i18n')) {
      $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
    } else {
      $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    }
    print drupal_render($main_menu_tree);
    ?>
    </div>
    <div class="corner-left"></div>
    <div class="corner-right"></div>
  </div>
</div>

<div id="wrapper">
 <div id="casing">
	
  <?php if ($is_front): ?>
  <?php if ($page['slide_portada']): ?><!-- / start second footer block -->
    <div id="slide-cover">
      <div id="slide-box">
        <?php print render($page['slide_portada']); ?>
      </div>
    </div> <!-- / end second footer -->
  <?php endif; ?>
  <?php endif; ?>
  

  <?php print render($page['header']); ?>


  <?php if ($is_front): ?>
  <div id="actmenu" class="menu-principal">
    <div class="submenu">
    <?php 
    if (module_exists('i18n')) {
      $action_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'menu-action'));
    } else {
      $action_menu_tree = menu_tree(variable_get('menu_main_links_source', 'menu-action'));
    }
    print drupal_render($action_menu_tree);
    ?>
    </div>
    <div class="corner-left"></div>
    <div class="corner-right"></div>
  </div>
  <?php endif; ?>
  
</div>
  <div id="content">
  <?php if (theme_get_setting('breadcrumbs', 'topproject')): ?><div class="breadcrumb"><?php if ($breadcrumb): print $breadcrumb; endif;?></div><?php endif; ?>
  <section id="main" role="main" class="post">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><div class="title"><h2 class="title" id="page-title"><?php print $title; ?></h2></div><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  </div>
<div class="clear"></div>
<div id="socialbar">
<div class="feedlist">
  <ul>
    <li><a href="<?php print $front_page; ?>rss.xml">RSS</a></li>
    <li><a href="http://www.facebook.com/<?php echo check_plain(theme_get_setting('facebook_username', 'topproject')); ?>" target="_blank" rel="me">Facebook</a></li> 
    <li><a href="http://www.twitter.com/<?php echo check_plain(theme_get_setting('twitter_username', 'topproject')); ?>" target="_blank" rel="me">Twitter</a></li>
  </ul>
</div>
</div>

</div> 
</div>



<div id="footer">
  <div class="corner-left"></div>
  <div class="corner-right"></div>
  <div class="fcred">
    <?php print render($page['footer']) ?>
  </div>
</div>