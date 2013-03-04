<div class="row">
  <div class="span9 content"><?=$content?></div>
  <div class="span3">
    <div class="well sidebar-nav">
      <ul class="nav nav-list">
        <?php foreach ($menu as $title) {?>
          <li <?php if($title === $active) echo 'class="active"';?>><a href="<?=base_url()?>projects/<?=$title?>"><?=preg_replace('/_/', ' ', $title)?></a></li>
        <?php } ?>
      </ul>
    </div><!--/.well -->
  </div>
</div>
