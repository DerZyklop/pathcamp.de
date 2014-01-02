<?php 
  snippet('header');
  $articles = $page->children()->visible(); 
  if ( $page->children()->visible()->count() ) :
  foreach ( $articles->flip() as $item ) :
?>

<article>
  <div class="main-width-wrap">
    <h2><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h2>
    <?php if($item->hasImages()): ?>
      <?php foreach ($item->images() as $image ) : ?>
        <a href="<?php echo $item->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" /></a>
      <?php endforeach; ?>
    <?php endif; ?>
    <p><?php echo excerpt($item->text(), 390) ?> <a href="<?php echo $item->url() ?>">weiterlesen</a></p>
    <?php if ( $item->autor() != '' || $item->date() ) : ?>
      <aside>
        <?php if ( $item->autor() != '' ) : ?>
          <span class="left">Autor: <?php echo html($item->autor()) ?></span>
        <?php else : ?>
          <span class="left">Autor: Florian Krakau</span>
        <?php endif; ?>
        <?php if ( $item->date() ) : ?>
          <span class="right"><?php echo html($item->date('d. m. Y')) ?></span>
        <?php endif; ?>
        <div class="clearit"></div>
      </aside>
    <?php endif; ?>
  </div>
</article>

<?php 
endforeach;
else :
?>

<article>
  <div class="main-width-wrap">
    <h2>Oh no!</h2>
    <p>There is no article jet. I'm sorry!</p>
  </div>
</article>

<?php 
endif;
?>
<?php snippet('footer') ?>
