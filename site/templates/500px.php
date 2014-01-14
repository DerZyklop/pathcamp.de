<?php snippet('header') ?>

<article>
  <div class="main-width-wrap">

    <h2><?php echo html($page->title()) ?></h2>
    <?php if ($page->title()): ?>
      <p><?php echo kirbytext($page->text()) ?></p>
    <?php endif ?>
    <section>

    <?php
    $contentfrom500px = load500px('8QD27m6Mi3ke2Kxs63bLL2GDIU8gEF6Ps2pY9A4u', array(
        'limit'    => 12,
        'username' => 'dotdean'
    ));
    $images     = $contentfrom500px->photos;

    ?>
    <section class="photos500px clearfix">
      <?php foreach ($images as $image): ?>
        <a class="img-inner-wrap img-link" href="http://500px.com/photo/<?php echo $image->id ?>" rel="galery">
          <img class="addshadow" src="<?php echo $image->thumb ?>" title="" />
        </a>
      <?php endforeach ?>
      <div class="clearit"></div>
    </section>

  </div>
</article>

<?php snippet('footer') ?>
