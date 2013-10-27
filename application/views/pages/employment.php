<div class="tabbable tabs-left">
  <ul class="nav nav-tabs">
    <?php
      $nav_line = '<li class="active">';
      foreach($items as $arr) {
        $nav_line .= '<a href="' . $arr[0] . '" data-toggle="tab"><img width="200px" src="' . $arr[1] . '"></a></li>';
        echo $nav_line;
        $nav_line = '<li>';
      }
    ?>
  </ul>
  <div class="tab-content">
    <?php
      $nav_line = '<div class="active ';
      foreach($items as $arr) {
        $nav_line .= 'tab-pane" id="' . $arr[2] . '">';
        $nav_line .= '<h1>' . $arr['title'] . '</h1><h3>@ ' . $arr['company'] . ', '. $arr['dates'] . '</h3>';
        $nav_line .= $arr['body'];
        $nav_line .= '</div>';
        echo $nav_line;
        $nav_line = '<div class="';
      }
    ?>
  </div><!-- /.tab-content -->
</div><!-- /.tabbable -->