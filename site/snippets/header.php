<!DOCTYPE HTML>
<html lang="de-DE">
<head>
  <meta charset="UTF-8">
  <title><?php echo html($site->title()) ?> - <?php 
    if ( $page->isHomePage() ) {
      echo html($site->description());
    } else {
      echo html($page->title());
    };
  ?></title>

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Inika:400,700' rel='stylesheet' type='text/css'>

  <?php echo css('assets/styles/styles.css') ?>

</head>


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100555257); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100555257ns.gif" /></p></noscript>

<body>
  <div id="body-inner">
    <header>
      <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo html($site->title()) ?>" /></a></h1>
      <?php snippet('menu') ?>

      <!-- Don't forget to set the correct height and with, like this: -->
      <!--
        <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" height="86" width="240" alt="<?php echo html($site->title()) ?>" /></a></h1>
      -->

    </header>
    <section id="main">
