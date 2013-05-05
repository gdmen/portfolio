<div class="row">
  <?php foreach ($posts as $post) {?>
    <div class="container">
      <?=$post['title']?>
      <?=$post['date']?>
      <?=$post['post']?>
    </div>
  <?php } ?>
  <a href="<?=$prev?>">prev</a>
  <a href="<?=$next?>">next</a>
</div>
