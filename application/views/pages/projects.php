<ul class="thumbnails">
  <?php
    // menu element = [<page url>, <thumbnail url>, <title>, <thumbnail size>, <caption size>]
    foreach ($menu as $menu_element) {?>
    <li class="text-center span<?php echo $menu_element[3]; ?>">
      <a href="<?=$menu_element[0]?>" class="thumbnail">
        <img src="<?php echo $menu_element[1]; ?>" alt="<?php echo $menu_element[2]; ?>">
        <h<?php echo $menu_element[4]; ?>><?php echo $menu_element[2]; ?></h<?php echo $menu_element[4]; ?>>
      </a>
    </li>
  <?php } ?>
</ul>
