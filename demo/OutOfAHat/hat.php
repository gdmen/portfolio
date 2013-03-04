<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Out Of A Hat</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
	
	<script type="text/javascript">
	// Array Remove - By John Resig (MIT Licensed)
	Array.prototype.remove = function(from, to) {
	  var rest = this.slice((to || from) + 1 || this.length);
	  this.length = from < 0 ? this.length + from : from;
	  return this.push.apply(this, rest);
	};
	
	var items = localStorage['items'].split(',');
	items = $.map(items, function(element) { return $.trim(element);});
	var currentItem = 0;
	function getThing(){
		$("#popup").empty();
		var text = "No Things Left";
		var buttons =  '<div id="buttondiv"><button type="button" class="submit" id="gohome" onclick="window.location = \'index.php\';">Make New Things</button></div>';
		if(items.length > 0){
			currentItem = Math.floor(Math.random() * items.length);
			text = items[currentItem];
			buttons = '<div id="buttondiv"><button type="button" class="submit" id="putbackitem" onclick="hideThing();">Put thing back</button><button type="button" class="submit" id="deleteitem" onclick="deleteThing();hideThing();">Dispose of thing</button></div>';
		}
		$("#popup").append('<div id="popuptext">' + text + '</div>' + buttons);
		$("#popup").show('bounce');
	}
	function hideThing(){
		$("#popup").hide('puff');
	}
	function deleteThing(){
		items.remove(currentItem);
	}
	</script>
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
					<li><button type="button" class="submit small_submit" id="gohome" onclick="window.location = 'index.php';">Go Home</button></li>
				</ul>
			</nav>
			
			<div align="center">
				<div id="container">
					<!-- subtitle content -->
					<h2 id="no_margin">
						<button type="button" class="submit" id="getitem" onclick="getThing();">Get A Thing</button>
					</h2>
					
					<!-- Main section -->
					<div align="center">
						<section id="main" align="center">
							<img id="hat" src="hat.png" />
							<div id="popup">No Items</div>
						</section>
						<br/>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>

</html>