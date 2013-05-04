<div class="hero-unit">
  <?=$blurb?>
</div>

<?php if(isset($images)) {
  $images = shuffle_assoc($images);
  foreach($images as $title=>$album) {?>
    <div class="row">
      <div class="span12">
        <h1 class="photography-header"><?=preg_replace('/-/', ' ', $title)?></h1>
        <ul class="thumbnails">
          <?php foreach($album as $image) {
            $path = pathinfo($image);
            $thumb = $path['dirname'] . '/thumbs/t-' . $path['basename'];
          ?>
            <li class="text-center span2">
              <a href="<?=$image?>" rel="<?=$title?>" class="thumbnail fancybox">
                <img src="<?=$thumb?>">
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  <?php } ?>
<?php } ?>
