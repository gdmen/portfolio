<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Out Of A Hat</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Ruda' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
</head>

<body>
	
	<div id="site-bottom-bar" class="fixed-position">
		<div id="site-bottom-bar-frame">
			<div id="site-bottom-bar-content">
 
				<a id="menu-root" href="##">menu</a>
 
				<div id="menu">
						<a href="##">Here is a menu item</a>
						<a href="##">Here is a menu item</a>
						<a href="##">Here is a menu item</a>
						<a href="##">Here is a menu item</a>
						<a href="##">Here is a menu item</a>
						<a href="##">Here is a menu item</a>
				</div>
				
				<!-- Footer -->
				<footer>
					&copy; 2012 Isabel Fan, Catherine Hu, Gary Menezes, Josh Wilson
				</footer>
			</div>
		</div>
	</div>
	
	<!-- done with bar -->
	<div id="site-body-container">
		<div id="site-body-content">
			<nav>
				<ul>
				</ul>
			</nav>
			
			<div align="center">
				<div id="container">
					<!-- header -->
					<h1>
					Out of a Hat
					</h1>
					
					<!-- subtitle content -->
					<h2>
					Put things in a hat. Get them out.
					</h2>
					
					<!-- Main section -->
					<div align="center">
						<section id="main" align="center">
							<form id="party" action="hat.php" method="POST">
							
								<fieldset id="inputs">
									<textarea id="items" name="name" placeholder="Enter a comma separated list of things" required></textarea>
								</fieldset>
								
							</form>
							<input type="submit" class="submit" id="hatme" value="Hat Me" onClick="localStorage['items']=$('#items').val(); window.location = 'hat.php';">
						</section>
						<br/>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>

</html>