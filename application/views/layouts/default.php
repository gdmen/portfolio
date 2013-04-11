<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?=$title_for_layout?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?=$css_for_layout?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="non-footer">
    
      <div id="content">
        <div id="header-background">
          <div class="container">
            <div class="row">
              <div class="span12 content">
                <a class="brand" href="<?=base_url()?>">gmenezes</a>
                HEADER STUFF<br />
                HEADER STUFF<br />
                HEADER STUFF<br />
                HEADER STUFF
              </div>
            </div>
          </div>
        </div>
          
        <div class="navbar navbar-top">
          <div class="navbar-inner">
              <ul class="nav">
                <li <?=active($page,1)?>><a href="<?=base_url()?>">Home</a></li>
                <li <?=active($page,2)?>><a href="<?=base_url()?>blog">Blog</a></li>
                <li <?=active($page,3)?>><a href="<?=base_url()?>projects">Projects</a></li>
              </ul>
          </div>
        </div>
        
        <div class="container">
          <?=$content_for_layout?>
        </div>
      </div>
    </div><!--/wrap -->
    
    <footer class="footer">
      <div class="container">
        FOOTER STUFF<br />
        FOOTER STUFF<br />
        FOOTER STUFF<br />
        FOOTER STUFF
      </div>
    </footer>
    <?=$js_for_layout?>
    
  </body>
</html>
