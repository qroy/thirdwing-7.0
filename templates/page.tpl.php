<?php
?>
  <?php print render($page['header']); ?>

  <div id="top"></div>

  <div id="wrapper">
    <div class="container clearfix"><div id="topbar"><?php print render($page['topbar']); ?></div></div>

    <div class="container clearfix">
      <div id="logo">
        <?php if ($logo): ?><div id="logo-img"></div><?php endif; ?>
        <?php if ($site_name): ?><div id="logo-title"><?php print $site_name; ?></div><?php endif; ?>
        <?php if ($site_slogan): ?><div id="logo-slogan"><?php print $site_slogan; ?></div><?php endif; ?>
      </div>
    </div>
    <div class="container clearfix">
      <div id="header">
        <nav id="nav" role="navigation"><a href="#" class="toggle-nav fa fa-bars">Menu</a><?php print render($page['header']); ?></nav>
      </div> <!-- /#header -->

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-left" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

      <div id="center"><div id="squeeze">
          <?php print $breadcrumb; ?>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
            <?php print render($page['content']); ?>
          </div>
          <?php print $feed_icons ?>
          <?php print render($page['footer']); ?>
      </div></div> <!-- /#squeeze, /#center -->

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-right" class="sidebar">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>

    </div> <!-- /#container -->
  </div> <!-- /#wrapper -->
