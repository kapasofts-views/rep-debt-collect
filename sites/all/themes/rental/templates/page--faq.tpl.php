<?php //print render($page['select_product']); ?>

<!--<div class="main-container container">-->
<div id="main_product" class="not-main">
    <div class="container wrapper">
    <div class="main_p1">
        <h1>FAQ</h1>
        <h2>Frequently asked questions</h2>
    </div>
    </div>
</div>
    <div class="container wrapper center-content basic-page">

<!--    <div class="row">-->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

<!--    <section class="--><?php //print _bootstrap_content_span($columns); ?><!--">  -->
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
<!--      --><?php //if (!empty($breadcrumb)): print $breadcrumb; endif;?>
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
</div>
<script type="text/javascript">
    (function ($) {
        $("[data-toggle='popover']").popover({ html : true });
    })(jQuery);
</script>