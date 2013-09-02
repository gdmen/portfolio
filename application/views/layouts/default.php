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
        <div id="header">
          <div class="container">
            <div class="row">
              <div class="span12 content text-center">
                <div>
                  <h3><a class="brand" href="<?=base_url()?>">Gary Menezes</a></h3>
                </div>
                <div>
                  <a class="header-subtext" href="mailto:gmenezes@seas.upenn.edu">gmenezes@seas.upenn.edu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="navbar navbar-top">
          <div class="navbar-inner">
            <ul class="nav">
              <li <?=active($page,1)?>><a href="<?=base_url()?>"><h4>Home</h4></a></li>
              <li <?=active($page,2)?>><a href="<?=base_url()?>projects"><h4>Projects</h4></a></li>
              <li <?=active($page,4)?>><a href="<?=base_url()?>blog"><h4>Blog</h4></a></li>
            </ul>
          </div>
        </div>
        
        <div class="container">
          <?=$content_for_layout?>
        </div>
      </div>
    </div><!--/non-footer -->
    
    <footer class="footer">
      <div class="container">
        <div class="social-media">
            <ul class="thumbnails">
              <li><a href="http://www.github.com/gdmen"><i class="icon-github-sign"></i></a></li>
              <li><a href="http://lnkd.in/dmeQNq"><i class="icon-linkedin-sign"></i></a></li>
              <li><a href="mailto:gmenezes@seas.upenn.edu"><i class="icon-envelope"></i></a></li>
              <li><a href="http://www.facebook.com/gary.menezes"><i class="icon-facebook-sign"></i></a></li>
              <li><a href="https://plus.google.com/110541355401835851033"><i class="icon-google-plus-sign"></i></a></li>
            </ul>
        </div>
      </div>
    </footer>
    <?=$js_for_layout?>
    <script type="text/javascript">
	    $(document).ready(function() {
	      if ($(".fancybox")[0]){
		      $(".fancybox").fancybox(
		        {
		          nextEffect : 'none',
		          prevEffect : 'none'
		        }
	        );
        }
	    });
    </script>
  </body>
</html>
