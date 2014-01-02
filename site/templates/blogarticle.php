<?php 
  snippet('header');
  $item = $page;
?>
<article>
  <div class="main-width-wrap">
    <h1><?php echo html($item->title()) ?></h1>
    <?php if($item->hasImages()): ?>
      <?php foreach ($item->images() as $image ) : ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
      <?php endforeach; ?>
    <?php endif; ?>
    <?php echo kirbytext($item->text()) ?>
    <?php if ( $item->autor() != '' || $item->date() ) : ?>
      <aside>
        <div class="left">
          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="de" data-related="pathcamper" data-hashtags="pathcamp">Twittern</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div class="left">
          <!-- Place this tag where you want the +1 button to render. -->
          <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300"></div>
          
          <!-- Place this tag after the last +1 button tag. -->
          <script type="text/javascript">
            (function() {
              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/plusone.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
          </script>
        </div>
        <?php if ( $item->date() ) : ?>
          <span class="right"><?php echo html($item->date('d. m. Y')) ?></span>
        <?php endif; ?>
        <div class="clearit"></div>
      </aside>
    <?php endif; ?>
  </div>
</article>

<?php snippet('footer') ?>
