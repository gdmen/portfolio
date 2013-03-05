<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Copyright 2010 Gary Menezes -->

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="design and content by Gary Menezes" />
		<title>Employment - Gary Menezes</title>
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
							<td><a class="on_menu" href="employment.php"><img src="images/employment.png"/></a></td>
							<td><a class="off_menu" href="projects.php"><img src="images/projects.png"/></a></td>
							<td><a class="off_menu" href="technical.php"><img src="images/technical.png"/></a></td>
						</tr>
						<tr>
							<td><a class="off_menu" href="index.php">[home]</a></td>
							<td><a class="off_menu" href="education.php">[education]</a></td>
							<td><a class="on_menu" href="employment.php">[employment]</a></td>
							<td><a class="off_menu" href="projects.php">[projects]</a></td>
							<td><a class="off_menu" href="technical.php">[technical]</a></td>
						</tr>
					</table>
				</div>
				
				<?php
					include_once('tab_generator.php');
					$data = array(array('link' => 'intro',
									    'title' => 'employment',
									    'body' => '<p><span class="content_emphasis">Employment</span></p>
													<p>A chronological listing of employment with most recent at top.</p>'),
								  array('link' => '121ta',
										'title' => 'cis 121 ta',
									    'body' => '<p><span class="content_emphasis">CIS 121 TA at the University of Pennsylvania</span>
													<br />Spring 2012</p>
													<p>Duties included holding recitations and office hours and writing and grading homeworks.</p>
													<p>I TAed <a href="http://www.seas.upenn.edu/~cis121">CIS 121</a>, taught by Julia Stoyanovich.</p>'),
								  array('link' => 'amazon',
										'title' => 'amazon',
									    'body' => '<p><span class="content_emphasis">Amazon Software Engineering Intern</span>
													<br />Summer 2011</p>
													<p>Designed and developed a prototype Java service and website widget for Amazon’s ‘Your Account’ page.</p>'),
								  array('link' => 'pal',
										'title' => 'pennapps labs',
									    'body' => '<p><span class="content_emphasis">PennApps Labs Programmer</span>
													<br />Fall 2010</p>
													<p>PennApps Labs had recently taken over development and maintenance of several UPenn web applications. I worked primarily on <a href="http://pennua.org/textbook">Penn Book Bazaar</a>.</p>'),
								  array('link' => 'nbw',
										'title' => 'bicycle mechanic',
									    'body' => '<p><span class="content_emphasis">Neighborhood Bike Works</span>
													<br />Fall 2010 - Fall 2011</p>
													<p>I helped kids in the program build and fix bikes. I am now reasonably competent at (older) bike repair.</p>
													<p>I also helped run practices twice a week for Neighborhood Bike Works\' youth racing team.</p>
													<p><a href="http://www.neighborhoodbikeworks.org">Neighborhood Bike Works</a> "is a nonprofit educational organization in Philadelphia that seeks to increase opportunities for urban youth through bicycling and to promote cycling as an environmentally friendly means of transportation."</p>'),
								  array('link' => '110ta',
										'title' => 'cis 110 ta',
									    'body' => '<p><span class="content_emphasis">CIS 110 TA at the University of Pennsylvania</span>
													<br />Fall 2010</p>
													<p>Duties included holding recitations and office hours, and grading.</p>
													<p>I TAed <a href="http://www.seas.upenn.edu/~cis110">CIS 110</a>, taught by Jean Griffin.</p>'),
								  array('link' => '110mentor',
										'title' => 'cis 110 mentor',
									    'body' => '<p><span class="content_emphasis">CIS 110 Mentor at the University of Pennsylvania</span>
													<br />Spring 2010</p>
													<p>A Mentor\'s resposibilities are a subset of a TA\'s. Mentors help in recitations and sometimes hold office hours.</p>
													<p>I Mentored <a href="http://www.seas.upenn.edu/~cis110">CIS 110</a>, taught by Jean Griffin.</p>
													<p>What the students say:</p>
													<blockquote>"I think Gary was the most squared away in my section. He really knew his shit. Always."</blockquote>
													<blockquote>"Helpful, patient, always follows up and finds out answers he doesn\'t already know"</blockquote>
													<blockquote>"Great at making you really understand the material - doesn\'t just give you the answer"</blockquote>
													<blockquote>"Smart and helpful, takes him like 2 secs to find an error"</blockquote>
													<blockquote>"Took care to explain all the concepts in a way we could understand."</blockquote>'),
								  array('link' => 'RIT',
										'title' => 'rit internship',
									    'body' => '<p><span class="content_emphasis">Summer Internship at the Rochester Institute of Technology</span>
													<br />Summer 2008</p>
													<p>Assisted in the modification of <a href="http://www.simri.org">SIMRI</a>, an existing MRI simulator written in C, for use on Rensselaer’s <a href="http://en.wikipedia.org/wiki/Blue_Gene">Blue Gene</a> supercomputer in Albany.</p>
													<p>Updated <a href="http://www.cis.rit.edu/research/biomedical">website</a> content for the Biomedical and Materials Multimodal Imaging Laboratory.</p>
													<p>Processed MRI and PET images with artificial lesions for use in an eye tracking experiment.</p>
													<p>I used this internship as my high school <a href="http://sites.google.com/a/webstercsd.org/garymenezes2008">senior project [terrifyingly bad website warning]</a>.
													</p>')
							);
					generateTabs($data);
				?>
			</div>
		</div>
			
		<?php include('footer.php'); ?>

	</body>

</html>