<div class="row">
  <?php foreach ($posts as $post) {?>
    <div class="container">
      <?=$post['title']?>
      <?=$post['date']?>
      <?=$post['post']?>
    </div>
  <?php } ?>
  <a href="<?php echo isset($old) ? $old : '#'; ?>">old</a>
  <a href="<?php echo isset($new) ? $new : '#'; ?>">new</a>
</div>
