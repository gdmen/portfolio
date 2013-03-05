<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Copyright 2010 Gary Menezes -->

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="design and content by Gary Menezes" />
		<title>Education - Gary Menezes</title>
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
							<td><a class="on_menu" href="education.php"><img src="images/education.png"/></a></td>
							<td><a class="off_menu" href="employment.php"><img src="images/employment.png"/></a></td>
							<td><a class="off_menu" href="projects.php"><img src="images/projects.png"/></a></td>
							<td><a class="off_menu" href="technical.php"><img src="images/technical.png"/></a></td>
						</tr>
						<tr>
							<td><a class="off_menu" href="index.php">[home]</a></td>
							<td><a class="on_menu" href="education.php">[education]</a></td>
							<td><a class="off_menu" href="employment.php">[employment]</a></td>
							<td><a class="off_menu" href="projects.php">[projects]</a></td>
							<td><a class="off_menu" href="technical.php">[technical]</a></td>
						</tr>
					</table>
				</div>
				
				<?php
					include_once('tab_generator.php');
					$data = array(array('link' => 'intro',
									    'title' => 'education',
									    'body' => '<p><span class="content_emphasis">University of Pennsylvania</span></p>
													<p>Candidate for Bachelor of Science in Engineering, May 2013 <br />
													<b>Major:</b> Computer and Information Science <br />
													<b>Cumulative GPA:</b> 3.31 <br />
													<a href="downloads/gmenezes - Unofficial Transcript and GPA.pdf">Unofficial Transcript</a>
													</p>
													
													<p><span class="content_emphasis">Webster Schroeder High School</span></p>
													<p>Regents Diploma with Advanced Designation, June 2009 <br />
													<b>Cumulative GPA:</b> 94.611
													</p>'),
								  array('link' => '2012A',
										'title' => 'spring 2012',
									    'body' => '<p><span class="content_emphasis_minor">CIS 500: Software Foundations</span></p>
													<p><span class="content_emphasis_minor">CIS 521: Fundamentals of Artificial Intelligence</span></p>
													<p><span class="content_emphasis_minor">ECON 013: Strategic Reasoning and Game Theory</span></p>
													<p><span class="content_emphasis_minor">MATH 313: Computational Linear Algebra</span></p>
													<p><span class="content_emphasis_minor">PHYS 151: Physics Principles II</span></p>'),
								  array('link' => '2011C',
										'title' => 'fall 2011',
									    'body' => '<p><span class="content_emphasis_minor">CIS 190: C++ Programming</span></p>
													<p><span class="content_emphasis_minor">CIS 380: Computer Operating Systems</span></p>
													<p><span class="content_emphasis_minor">CIS 550: Database and Informations Systems</span></p>
													<p><span class="content_emphasis_minor">FNAR 123: Drawing I</span></p>
													<p><span class="content_emphasis_minor">HIST 021: US History 1865-Present</span></p>'),
								  array('link' => '2011A',
										'title' => 'spring 2011',
									    'body' => '<p><span class="content_emphasis_minor">CIS 555: Internet and Web Systems</span></p>
													<p><span class="content_emphasis_minor">CIS 320: Introduction to Algorithms</span></p>
													<p><span class="content_emphasis_minor">CIS 371: Computer Organization and Design</span></p>
													<p><span class="content_emphasis_minor">ENM 321: Engineering Statistics</span></p>
													<p><span class="content_emphasis_minor">FNAR 264: Digital Design Foundations</span></p>'),
								  array('link' => '2010C',
										'title' => 'fall 2010',
									    'body' => '<p><span class="content_emphasis_minor">CIS 262: Automata, Computability, and Complexity</span></p>
													<p><span class="content_emphasis_minor">CIS 560: Computer Graphics</span></p>
													<p><span class="content_emphasis_minor">CSE 350: Software Design/Engineering</span></p>
													<p><span class="content_emphasis_minor">MATH 240: Calculus III</span></p>
													<p><span class="content_emphasis_minor">PHYS 150: Principles of Physics I: Mechanics and Wave Motion</span></p>'),
								  array('link' => '2010A',
										'title' => 'spring 2010',
									    'body' => '<p><span class="content_emphasis_minor">CIS 121: Data Structures and Algorithms in Java</span></p>
													<p><span class="content_emphasis_minor">CIS 192: Python Programming</span></p>
													<p><span class="content_emphasis_minor">CIS 277: Intro to Computer Graphics Techniques in C++</span></p>
													<p><span class="content_emphasis_minor">HIST 020: History of the United States to 1865</span></p>
													<p><span class="content_emphasis_minor">MATH 114: Calculus II</span></p>'),
								  array('link' => '2009C',
										'title' => 'fall 2009',
									    'body' => '<p><span class="content_emphasis_minor">CIS 120: Programming Languages and Techniques</span></p>
													<p><span class="content_emphasis_minor">CIS 160: Mathematical Foundations of Computer Science</span></p>
													<p><span class="content_emphasis_minor">CIS 240: Introduction to Computer Systems</span></p>
													<p><span class="content_emphasis_minor">MATH 104: Calculus I</span></p>
													<p><span class="content_emphasis_minor">WRIT 073: Writing Seminar: Terrorism and Rights</span></p>')
							);
					generateTabs($data);
				?>
					
				
				<div id="page_content">
				
				
					<div id="education_intro" class="on_content">
						<br />
						
						<br />
						
					</div>
          
					<div id="spring2011" class="off_content">
						<br />
						
						
					</div>
          
					<div id="fall2010" class="off_content">
						<br />
						
						
					</div>
					
					<div id="spring2010" class="off_content">
						<br />
						
						
					</div>
					
				
					
					
				</div>
				<!-- page content here -->
			</div>
		</div>
			
		<?php include('footer.php'); ?>

	</body>

</html>