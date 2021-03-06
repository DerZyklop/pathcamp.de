<?php snippet('header') ?>

<article>
  <div class="main-width-wrap">
    <h2><?php echo html($page->title()) ?></h2>
    <p><?php echo kirbytext($page->text()) ?></p>
    <?php if ( $page->tags() || $page->date() ) : ?>
      <aside>
        <?php if ( $page->tags() ) : ?>
          <span class="left">Tags: <?php echo html($page->tags()) ?></span>
        <?php endif; ?>
        <?php if ( $page->date() ) : ?>
          <span class="right"><?php echo html($page->date('d. m. Y')) ?></span>
        <?php endif; ?>
        <div class="clearit"></div>
      </aside>
    <?php endif; ?>
  </div>
</article>

<?php snippet('footer') ?>
