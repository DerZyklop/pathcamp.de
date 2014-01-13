<?php snippet('header') ?>

<article>
  <div class="main-width-wrap">
    <h2><?php echo html($page->title()) ?></h2>
    <?php if($page->hasImages()): ?>
      <?php foreach ($page->images() as $image ) : ?>
        <?php if ( $image->link() ) : ?>
          <a href="<?php echo $image->link() ?>" class="supporter">
        <?php else : ?>
          <div class="supporter">
        <?php endif; ?>
          <?php
            echo thumb( $image, array(
              'width' => 300,
              'height'    => 300,
              'quality' => 70,
              'crop' => false
            ));
          ?>
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
