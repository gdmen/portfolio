<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Copyright 2010 Gary Menezes -->

<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en" >

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="design and content by Gary Menezes" />
		<title>Projects - Gary Menezes</title>
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
							<td><a class="on_menu" href="projects.php"><img src="images/projects.png"/></a></td>
							<td><a class="off_menu" href="technical.php"><img src="images/technical.png"/></a></td>
						</tr>
						<tr>
							<td><a class="off_menu" href="index.php">[home]</a></td>
							<td><a class="off_menu" href="education.php">[education]</a></td>
							<td><a class="off_menu" href="employment.php">[employment]</a></td>
							<td><a class="on_menu" href="projects.php">[projects]</a></td>
							<td><a class="off_menu" href="technical.php">[technical]</a></td>
						</tr>
					</table>
				</div>
				
				
				<?php
					include_once('tab_generator.php');
					$data = array(array('link' => 'intro',
									    'title' => 'projects',
									    'body' => '<p><span class="content_emphasis">Coding Projects</span></p>
													<p>This is a listing of my assigned and personal programming projects. They are chronologically ordered with the most recent project at the top. Authorship is noted at the bottom of each page. Before downloading available source code, please read the <a href="projects.php?t=copyright">copyright notice</a>.</p>'),
								  array('link' => 'copyright',
										'title' => 'copyright notice',
									    'body' => '<p><span class="content_emphasis">Copyright Notice</span>
													<p>You can download the source code for some of these projects.</p>
                          <br />
                          <p>If there are multiple authors:</p>
                          <p>You may:</p>
													<ol>
														<li>Use this code for non-commercial, educational, and personal purposes.</li>
														<li>Redistribute this code <i>as is</i> along with included copyright notices.</li>
													</ol>
													<p>You may <strong>not</strong>:</p>
													<ol>
														<li>Use this code for any commercial purpose.</li>
														<li>Create any derivative works for redistribution.</li>
													</ol>
                          <br />
                          <p>If I am the sole author, the project is avaiable for download under the following (modified MIT) license:</p>
													<p>Copyright (C) <script language="JavaScript">document.write(new Date().getFullYear());</script> Gary Menezes</p>
                          <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
                          <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
                          <br />
                          <p>Specific projects may (on that project page) have less stringent, superseding, licensing terms</p>'),
								   array('link' => 'advancewars',
										'title' => 'advance wars',
									    'body' => '<p><span class="content_emphasis">Advance Wars</span>
													<br /><a href="downloads/aw_spec.pdf"><span class="content_small">[project spec]</span></a></p>
													<p>
														This application is a PC clone of the mobile game "Advance Wars". Advance Wars is a two player
														strategy game. Each player starts with several buildings. On a given turn, a player can use the
														income from buildings to buy units. These units are used to capture enemy buildings. A player
														wins by capturing their opponent\'s headquarters, a special building that each player has one of.
														We built the UI for this game using ClanLib Game SDK, an OpenGL wrapper library that is "a
														streamlined API" with a "primary focus on games". We chose this library since it seems to be
														well documented.
													</p>
													<p>
													<object width="480" height="385"><param name="movie" value="https://www.youtube-nocookie.com/v/BErzD5M2xnQ?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube-nocookie.com/v/BErzD5M2xnQ?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
													</p>
													<br />
													<p>Authors: Gary Menezes, Charles Kong
													</p>'),
								  array('link' => 'outofahat',
										'title' => 'out of a hat',
									    'body' => '<p><span class="content_emphasis">Out Of A Hat</span></p>
													<p>For <a href="http://teams.2011f.pennapps.com/">pennapps, spring 2012</a>, my team\'s initial project faceplanted, so, for the final 3 hours, the two of us who were awake threw together a glorified random number generator: <a href="http://www.git.to/outofahat">Out Of A Hat</a>.</p>
													<p>
													<object width="480" height="385"><param name="movie" value="https://www.youtube-nocookie.com/v/heG-2sAuBOA?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube-nocookie.com/v/heG-2sAuBOA?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
													</p>
													<br />
													<p>Authors: Gary Menezes, Catherine Hu, Josh Wilson, Isabel Fan
													</p>'),
								  array('link' => 'moody',
										'title' => 'moody',
									    'body' => '<p><span class="content_emphasis">Moody</span></p>
													<p>For <a href="http://teams.2011f.pennapps.com/">pennapps, fall 2011</a>, a 48 hour hackathon at UPenn, my team wrote <a href="http://dl.dropbox.com/u/49153/Moody.crx">Moody [download]</a>.</p>
													<p>We won the \'Dude They Totally Should Have Won a Prize\' Prize (an IPad).</p>
													<p>
													<object width="480" height="385"><param name="movie" value="https://www.youtube-nocookie.com/v/mxhbPI4eeXQ?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube-nocookie.com/v/mxhbPI4eeXQ?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
													</p>
													<br />
													<p>Authors: Gary Menezes, Ryan Gormley, Eliot Kaplan, Sam Appelbaum
													</p>'),
								  array('link' => 'decider',
										'title' => 'decider',
									    'body' => '<p><span class="content_emphasis">Decider</span></p>
													<p>For <a href="http://pennapps.com/">pennapps</a>, a 48 hour hackathon at UPenn, my team wrote <a href="content/decider.pdf">Decider</a>.</p>
													<p>We placed third.</p>
													<img src="content/decider.png" alt="[image has not loaded]" class="full_project"/>
													<p>
													<object width="480" height="385"><param name="movie" value="https://www.youtube-nocookie.com/v/9U5HyAXS2ow?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube-nocookie.com/v/9U5HyAXS2ow?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
													</p>
													<br />
													<p>Authors: Gary Menezes, Ryan Menezes, Lu Chen, Matthew Croop
													</p>'),
								  array('link' => 'exercise',
										'title' => 'exercise log',
									    'body' => '<p><span class="content_emphasis">Exercise Log</span></p>
													<p>During an afternoon hack session, my brother and I created an exercise log in python, html/css, and javascript on Google\'s <a href="http://code.google.com/appengine">App Engine</a>.</p>
													<p>Our app can be accessed at <a href="http://exercise-log.appspot.com">http://exercise-log.appspot.com</a> and requires a google account to log in.</p>
													<p>Possible features to add:</p>
														<ol><li>Display empty graphs when no data has been input.</li>
															<li>The graphs probably won\'t react well to missing days or a large time span of data.</li>
															<li>More options for viewing data.</li>
														</ol>
													<p>We wrote this mainly for ourselves and plan to address these issues as they arise in our use of this app. Edit: We haven\'t used this at all. Nor have we been exercising regularly D:</p>
													<p>Screenshot of my account (with one day logged):</p>
													<img src="content/exercise_log.png" alt="[image has not loaded]" class="full_project"/>
													<br /><br /><br />
													<p>Authors: Gary Menezes, Ryan Menezes
													</p>'),
								  array('link' => 'piano',
										'title' => 'flash piano',
									    'body' => '<p><span class="content_emphasis">Flash Piano</span>
													<br /><a href="downloads/piano v1.0.zip"><span class="content_small">[source code]</span></a></p>
													<p>I used this one day project to learn ActionScript. I started by synthesizing notes using the sound class, but it sounded more like a cheap xylophone than a piano. The current version uses mp3 files.</p>
													<p>I only have sound files for a single octave, but the code is structured such that adding another octave can be done with a single method call.</p>
													<p>Problems to fix:</p>
														<ol><li>Add keyboard control.</li>
															<li>Make a full standard piano - find the sound files to do so.</li>
															<li>Slight sound lag.</li>
														</ol>
													<p>Click or click and drag:</p>
													<p>
													<object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="45%">
													<param name="movie" value="content/piano/piano.swf"/>
													<param name="quality" value="high"/>
													<embed src="content/piano/piano.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="45%">
													</embed>
													</object>
													<br /><br />
													</p>
													<p>Author: Gary Menezes
													</p>'),
								  array('link' => 'voxels',
										'title' => 'voxel renderer',
									    'body' => '<p><span class="content_emphasis">Volumetric Renderer</span>
													<br /><a href="downloads/Volumetric Renderer.zip"><span class="content_small">[source code]</span></a></p>
													<p>A volumetric renderer written in C++ that populates a voxel buffer with user selected primitives and renders with a ray march.
													It uses Ken Perlin\'s noise generation functions, <a href="http://www.lonesock.net/soil.html">SOIL</a>, and Ogre Math.</p>
													<p>[sphere]</p>
													<img src="content/volumetric_renderer/sphere.png" alt="[image has not loaded]" class="half_project"/>
													<br /><br />
													<p>[two clouds with the same parameters]</p>
													<img src="content/volumetric_renderer/cloud.png" alt="[image has not loaded]" class="half_project"/>
													<img src="content/volumetric_renderer/cloud2.png" alt="[image has not loaded]" class="half_project"/>
													<br /><br />
													<p>[cloud and pyroclastic (upper right)]</p>
													<img src="content/volumetric_renderer/pyroclastic.png" alt="[image has not loaded]" class="half_project"/>
													<br /><br /><br />
													<p>Author: Gary Menezes
													</p>'),
								  array('link' => 'this',
										'title' => 'this site',
									    'body' => '<p><span class="content_emphasis">Resume Website</span></p>
													<p>Update 3/5/2012: Translated this set of pages to php. Much nicer than the javascript hidden/shown divs.</p>
													<p>This site was a week-long project built as I learned (x)html, css, javascript, and Microsoft Expression Design (for the images).
													I created 100% of this site - all xhtml, css, javascript, and images!</p>
													<p>I\'ve tested this site in Firefox, IE8, and Chrome in 1440x990 and 1024x768 screen resolutions.</p>
													<p>The most annoying challenge was figuring out the javascript to do the switches (display on/off) between content when selections are made in the sidebar.</p>
													<p>Problems to fix:</p>
													<ol><li>The side menu doesn\'t work at all without javascript enabled.</li>
														<li>I\'ve had trouble making a comprehensive site map because inner pages are just divs switched with javascript.</li>
														<li>The main menu and sidebars use javascript to handle mousehover image changes - I\'ve been told this should be done with css.</li>
														<li>Half of the main menu images\' activated counterparts aren\'t quite the same size because of Expression Design\'s exporting.</li>
													</ol>
													<p>No other implementation flaws that I\'m aware of, just maybe design issues.</p>
													<p>I\'m still not sure I want to remove javascript in favor of css as I\'m not convinced it would make the site more usable. I certainly need to make the site usable to some degree without javascript (as it is, the submenu is not navigable without javascript).</p>
													<p>This is the third iteration of this site, the first one is <a href="../v1">here</a> and the second is <a href="../v2">here</a>.</p>
													<br />
													<p>Author: Gary Menezes
													</p>'),
								  array('link' => 'rubiks',
										'title' => 'rubiks cube',
									    'body' => '<p><span class="content_emphasis">CIS 192 Final Project</span>
													<br /><a href="downloads/pyRubiks v1.0.zip"><span class="content_small">[source code]</span></a></p>
													<p>This project is available under the <a href="http://www.gnu.org/licenses/gpl.html"><span class="content_small">GNU General Public License</span></a>.</p>
													<p>A 3D rubik\'s cube implemented in python using PyOpenGL, NumPy, and wxPython.
													You can jumble the cube and then solve it while enjoying the awesomely animated rotations!</p>
													<p>Features:</p>
													<ol>
														<li>Move selected face (also rotates cube to maintain view of selected face)</li>
														<li>Rotate the row/column containing the selected face</li>
														<li>Jumble cube</li>
														<li>Reset Cube</li>
													</ol>
													<p>The following video contains three \'games.\' The first game demonstrates selection movement, rotation, and solvability. The transition to the second game demonstrates the reset function. The second game demonstrates a single jumble and solve. The third game has multiple jumbles (for those who can solve a rubik\'s cube better than I can!).</p>
													<p>The screen capture program (CamStudio) significantly slowed the game, but it wasn\'t that fast to begin with. I think python was not made for this!</p>
													<p>
														<object width="480" height="385"><param name="movie" value="https://www.youtube-nocookie.com/v/ZEW-hNTeqeg?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube-nocookie.com/v/ZEW-hNTeqeg?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
													</p>
													<br />
													<p>Authors: Gary Menezes, Patrick Yeyoon, Samuel Appelbaum.
													</p>'),
								  array('link' => 'chess',
										'title' => 'java chess',
									    'body' => '<p><span class="content_emphasis">AP Computer Science Final Project</span>
													<br /><a href="downloads/GChess v1.0.zip"><span class="content_small">[source code]</span></a>
													<a href="downloads/GChess.jar"><span class="content_small">[executable jar]</span></a></p>
													<p>A chess game implemented in Java using the Swing toolkit/AWT. It took me about 30 hours over the course of a week.</p>
													<p>Features:</p>
													<ol><li>Highlight possible moves (toggle-able)</li>
														<li>Corny sound effects and animated gifs</li>
														<li>Taken pieces display</li>
														<li>Move notation display</li>
														<li>Undo Move</li>
													</ol>
													<p>This program prevents illegal moves and has proper castling and en passant. My original project proposition included an AI, but it soon became apparent that would be impractical for a week long project.</p>
													<p>I wrote the GUI myself (i.e. no Netbeans).</p>
													<p>The code and executable jar available for this project are as shown in the following video, but without the images, sounds, and a few interface elements. When I wrote this, I didn\'t think to properly keep track of image and sound sources (they were all free, I just can\'t attribute some of them).</p>
													<p>Only one bug that I know of - it is possible to continue a finished game by checkmating, choosing exit in the game over window, choosing no in the exit verification window, undoing a move, and continuing.</p>
													<p>
														<object width="480" height="385"><param name="movie" value="https://www.youtube-nocookie.com/v/Ytpb35VO4gI?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube-nocookie.com/v/Ytpb35VO4gI?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
													</p>
													<br />
													<p>Author: Gary Menezes
													</p>')
							);
					generateTabs($data);
				?>
			</div>
		</div>
			
		<?php include('footer.php'); ?>

	</body>

</html>
