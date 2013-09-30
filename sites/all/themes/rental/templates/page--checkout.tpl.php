<?php echo $checkout['conversion_code']; ?>
<div id="main_product" class="not-main">
    <div class="container wrapper">
        <div class="main_p1">
            <?php print '<h1>'.$checkout['title'].'</h1>'; ?>
            <?php print '<h2>'.$checkout['desc'].'</h2>';?>
    </div>
</div>
<div class="container wrapper center-content">
    <?php if($checkout['is_nav_present']): ?>
    <div class="btn-group">
        <button class="btn btn-large ">Information</button>
        <?php
        echo '<button class="btn btn-large '.$checkout['billing'].'">Billing</button>';
        echo '<button class="btn btn-large '.$checkout['review'].'">Review</button>';
        ?>
    </div>
    <?php endif; ?>
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
<!--    </section>-->

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

<!--  </div>-->
<!--  <footer class="footer container">-->
<!--    --><?php //print render($page['footer']); ?>
<!--  </footer>-->
</div>
