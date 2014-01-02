<nav>
  <ul id="nav">
    <!--
      # - - - Nav-Element with Icon - - - #
      <li><a href="#"><span class="icon-marker"></span> <span>Nav</span></a></li>
    -->
    <?php foreach($pages->visible() AS $p): ?>
    <li<?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>

<!--
      <?php 
        // find the open/active page on the first level
        $open  = $pages->findOpen();
        $items = ($open) ? $open->children()->visible() : false; 
      ?>

      <?php if($p->children() && $p->children()->count()): ?>
      <nav class="submenu">
        <ul>
          <?php foreach($p->children() AS $item): ?>
          <li><a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
          <?php endforeach ?>            
        </ul>
      </nav>
      <?php endif ?>
-->
    </li>
    <?php endforeach ?>
  </ul>
</nav>