<?php
/**
 * $data is of the form:
 * [{"link" => "<link>", "title" => "<title>", "body" => "<body> [formatted in html]"}]
 */
function generateTabs($data){
	?>
	<div id="sidebar" >
		<ul id="sidebar_ul">
	<?php
	if(!isset($_GET['t'])){
		$_GET['t'] = $data[0]['link'];
	}
	$body = $data[0]['body'];
	foreach($data as $tab){
	?>
	<li class="<?php 
		if($_GET['t'] === $tab['link']){
			echo 'on_sidebar';
			$body = $tab['body'];
		}else{
			echo 'off_sidebar';
		}
		?>">
		<a href="?<?php echo 't=' . $tab['link']; ?>"><?php echo $tab['title']; ?></a>
	</li>
	<?php
	}
	?>
		</ul>
	</div>
	<div id="page_content">
	<?php
		echo $body;
	?>
	</div>
	<?php
}
?>