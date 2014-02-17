<?php snippet('header') ?>

<article>
  <div class="main-width-wrap">
    <h2><?php echo html($page->title()) ?></h2>
    <p><?php echo kirbytext($page->text()) ?></p>
  </div>
</article>

<?php snippet('footer') ?>
