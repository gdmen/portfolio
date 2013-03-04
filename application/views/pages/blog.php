<div class="row">
  <div class="span9 content"><?=$content?></div>
  <div class="span3">
    <div class="well sidebar-nav">
      <ul class="nav nav-list">
        <?php foreach ($menu as $title) {?>
          <li <?php if($title === $post) echo 'class="active"';?>><a href="<?=base_url()?>blog/<?=$title?>"><?=$title?></a></li>
        <?php } ?>
      </ul>
    </div><!--/.well -->
  </div>
</div>
