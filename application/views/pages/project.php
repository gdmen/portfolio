<div class="row">
  <div class="span3">
    <div id="scrollspy" class="sidebar-nav bs-docs-sidenav affix">
      <ul class="nav nav-list bs-docs-sidenav">
        <li class="nav-header"><?=$project_title?></li>
        <?php foreach ($project_menu as $link) {?>
            <li><a href="#<?=$link?>"><?=ucfirst($link)?></a></li>
        <?php } ?>
    </div><!--/.sidebar-nav -->
  </div>
  
  <div class="span9 content project">
    <div class="pull-right"><?=$project_links?></div>
    <div><h1><?=$project_title?></h1></div>
    <div><?=$project_authors?></div>
    <hr />
    <?php if(isset($project_summary)) {?>
      <div>
      <h3 id="summary">Summary:</h3>
      <?=$project_summary?>
      </div>
      <hr />
    <?php } ?>
    <?php if(isset($project_features)) {?>
      <div>
      <h3 id="features">Features:</h3>
      <?=$project_features?>
      </div>
      <hr />
    <?php } ?>
    <?php if(isset($project_media)) {?>
      <div>
      <h3 id="media">Media:</h3>
      <?=$project_media?>
      </div>
      <hr />
    <?php } ?>
    <?php if(isset($project_details)) {?>
      <div>
      <h3 id="details">Details:</h3>
      <?=$project_details?>
      </div>
      <hr />
    <?php } ?>
    <?php if(isset($project_bugs)) {?>
      <div>
      <h3 id="bugs">Bugs:</h3>
      <?=$project_bugs?>
      </div>
      <hr />
    <?php } ?>
    <?php if(isset($project_technologies)) {?>
      <div>
      <h3 id="technologies">Technologies:</h3>
      <?=$project_technologies?>
      </div>
      <hr />
    <?php } ?>
  </div>
</div>
