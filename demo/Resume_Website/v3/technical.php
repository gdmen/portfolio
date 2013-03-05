<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Copyright 2010 Gary Menezes -->

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="design and content by Gary Menezes" />
		<title>Technical - Gary Menezes</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	</head>

	<body>
	
		<div id="wrapper">
    
			<div class="content" id="main">
			
				<div id="header" class="site_wide">
					<img src="images/signature.png" alt="gmenezes" id="menu_signature"/>
					<table id="menu_links">
						<tr>
							<td><a class="off_menu" href="index.php"><img src="images/index.png" /></a></td>
							<td><a class="off_menu" href="education.php"><img src="images/education.png"/></a></td>
							<td><a class="off_menu" href="employment.php"><img src="images/employment.png"/></a></td>
							<td><a class="off_menu" href="projects.php"><img src="images/projects.png"/></a></td>
							<td><a class="on_menu" href="technical.php"><img src="images/technical.png"/></a></td>
						</tr>
						<tr>
							<td><a class="off_menu" href="index.php">[home]</a></td>
							<td><a class="off_menu" href="education.php">[education]</a></td>
							<td><a class="off_menu" href="employment.php">[employment]</a></td>
							<td><a class="off_menu" href="projects.php">[projects]</a></td>
							<td><a class="on_menu" href="technical.php">[technical]</a></td>
						</tr>
					</table>
				</div>
				
				<?php
					include_once('tab_generator.php');
					$data = array(array('link' => '',
									    'title' => 'technical skills',
									    'body' => '<p><span class="content_emphasis">Languages</span></p>
													<p>Java, C/C++, Python, X(HTML), CSS, Javascript, PHP, MySQL, some OpenGL and ActionScript 3</p>

													<p><span class="content_emphasis">Software</span></p>
													<p>Eclipse, Qt, Microsoft Visual Studio, Microsoft Expression Design, SVN/Mercurial/Git, Adobe Illustrator/Photoshop CS5, Google App Engine</p>

													<p><span class="content_emphasis">Operating Systems</span></p>
													<p>Windows & Linux (Ubuntu)</p>')
							);
					generateTabs($data);
				?>
			</div>
		</div>
			
		<?php include('footer.php'); ?>

	</body>

</html>