<div class="row">
  <div class="span2">
    <ul class="nav nav-list"><!--affix-->
      <?php foreach ($project_menu as $link) {?>
          <li><a href="#<?=$link?>"><i class="icon-chevron-right"></i><?=ucfirst($link)?></a></li>
      <?php } ?>
    </ul>
  </div>
   
  <div class="span10 project">
    <div class="pull-right"><?=$project_links?></div>
    <div><h1><?=$project_title?></h1></div>
    <?php if(isset($project_technologies)) {?>
      <?php foreach($project_technologies as $technology) {?>
        <span class="label label-inverse"><?=trim($technology)?></span>
      <? } ?>
    <?php } ?>
    <?php if(isset($project_authors)) {?>
      <div id="authors" name="authors">
      <?=$project_authors?>
      </div>
    <?php } ?>
    <?php if(isset($project_summary)) {?>
      <div>
        <a id="summary" name="summary"></a>
        <div class="divider"><hr /></div>
        <h2>Summary:</h2>
        <?=$project_summary?>
      </div>
    <?php } ?>
    <?php if(isset($project_features)) {?>
      <div>
        <a id="features" name="features"></a>
        <div class="divider"><hr /></div>
        <h2>Features:</h2>
        <?=$project_features?>
      </div>
    <?php } ?>
    <?php if(isset($project_details)) {?>
      <div>
        <a id="details" name="details"></a>
        <div class="divider"><hr /></div>
        <h2>Details:</h2>
        <?=$project_details?>
      </div>
    <?php } ?>
    <?php if(isset($project_bugs)) {?>
      <div>
        <a id="bugs" name="bugs"></a>
        <div class="divider"><hr /></div>
        <h2>Bugs:</h2>
        <?=$project_bugs?>
      </div>
    <?php } ?>
    <?php if(isset($project_media)) {?>
      <div>
        <a id="media" name="media"></a>
        <div class="divider"><hr /></div>
        <h2>Media:</h2>
        <?=$project_media?>
      </div>
      <div class="divider"><hr /></div>
    <?php } ?>
  </div>
</div>
