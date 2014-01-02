<?php snippet('header') ?>

<article>
  <div class="main-width-wrap">
    <h2><?php echo html($page->title()) ?></h2>
    <?php if($page->hasImages()): ?>
      <?php foreach ($page->images() as $image ) : ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
      <?php endforeach; ?>
    <?php endif; ?>
    <p><?php echo kirbytext($page->text()) ?></p>
  </div>
</article>

<?php snippet('footer') ?>
