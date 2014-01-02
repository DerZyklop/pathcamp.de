<?php snippet('header') ?>

<article>
  <div class="main-width-wrap">
    <h2><?php echo html($page->title()) ?></h2>
    <?php if($page->hasImages()): ?>
      <?php foreach ($page->images() as $image ) : ?>
        <?php if ( $image->link() ) : ?>
          <a href="<?php echo $image->link() ?>" class="gallery-item">
        <?php else : ?>
          <div class="gallery-item">
        <?php endif; ?>
          <?php if ( $image->caption() ) : ?>
            <div><?php echo $image->caption() ?></div>
          <?php else : ?>
            <div><?php echo $image->title() ?></div>
          <?php endif; ?>
          <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
        <?php if ( $image->link() ) : ?>
          </a>
        <?php else : ?>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
      <div class="clearit"></div>
    <?php endif; ?>
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
