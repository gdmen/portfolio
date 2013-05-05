<div class="row">
  <div class="span4 blog-menu">
    hallo
  </div>
  <div class="span8 blog">
    <?php foreach ($posts as $post) {?>
      <div class="well">
        <h1 class="blog-title"><?=$post['title']?></h1>
        <div class="blog-date"><i class="icon-time"></i><?=$post['date']?></div>
        <p><?=$post['post']?></p>
      </div>
    <?php } ?>
    <div class="blog-nav">
      <?php if (isset($old)) { ?>
        <a class="btn btn-large left" href="<?=$old?>"><i class="icon-chevron-left"></i>Older</a>
      <?php } ?>
      <?php if (isset($new)) { ?>
      <a class="btn btn-large right" href="<?=$new?>">Newer<i class="icon-chevron-right"></i></a>
      <?php } ?>
    </div>
  </div>
</div>
