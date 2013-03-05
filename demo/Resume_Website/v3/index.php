<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Copyright 2010 Gary Menezes -->

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="design and content by Gary Menezes" />
		<title>Home - Gary Menezes</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	</head>

	<body>
	
		<div id="wrapper">
    
			<div class="content" id="main">
				<div id="header" class="site_wide">
					<img src="images/signature.png" alt="gmenezes" id="menu_signature"/>
					<table id="menu_links">
						<tr>
							<td><a class="on_menu" href="index.php"><img src="images/index.png" /></a></td>
							<td><a class="off_menu" href="education.php"><img src="images/education.png"/></a></td>
							<td><a class="off_menu" href="employment.php"><img src="images/employment.png"/></a></td>
							<td><a class="off_menu" href="projects.php"><img src="images/projects.png"/></a></td>
							<td><a class="off_menu" href="technical.php"><img src="images/technical.png"/></a></td>
						</tr>
						<tr>
							<td><a id="test" class="on_menu" href="index.php">[home]</a></td>
							<td><a class="off_menu" href="education.php">[education]</a></td>
							<td><a class="off_menu" href="employment.php">[employment]</a></td>
							<td><a class="off_menu" href="projects.php">[projects]</a></td>
							<td><a class="off_menu" href="technical.php">[technical]</a></td>
						</tr>
					</table>
				</div>
				
				<?php
					include_once('tab_generator.php');
					$data = array(array('link' => 'intro',
									    'title' => 'welcome',
									    'body' => '<p><span class="content_emphasis">Hello World, </span></p>
													<p>I\'m a fourth year undergraduate at the University of Pennsylvania, majoring in <a href=\"http://www.cis.upenn.edu/ugrad/CSCIDegree.htm\">Computer and Information Science</a>.</p>
													<p>I built this website from scratch. If you find any problems, please inform me!</p>
													<p>If you feel like being exceptionally helpful, read about this site (under projects) and send me an email with your impression of the site.</p>
													<p>&nbsp; &nbsp; Gary Menezes</p>'),
								  array('link' => 'contact',
										'title' => 'contact',
									    'body' => '<p>The best way to contact me is by email (see footer).</p>')
							);
					generateTabs($data);
				?>
			</div>
		</div>
			
		<?php include('footer.php'); ?>

	</body>

</html>