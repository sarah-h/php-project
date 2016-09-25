<link rel="stylesheet" href="../../php-menu/stylesheet.css">

<?php
$curpage = basename ($_SERVER['PHP_SELF']);
?>

<div id='cssmenu'>
	<ul>
		<li <?php if($curpage == 'index.php') {echo 'class="active"'; } ?>><a href="../../php-menu/index.php" >Home</a></li>
		<li <?php if($curpage == 'stuff.php') {echo 'class="active"'; } ?>><a href="../../php-menu/stuff.php" >Stuff</a></li>
		<li <?php if($curpage == 'more-stuff.php') {echo 'class="active"'; } ?>><a href="../../php-menu/more-stuff.php" >More Stuff</a></li>
		<li <?php if($curpage == 'cool-stuff.php') {echo 'class="active"'; } ?>><a href="../../php-menu/cool-stuff.php" >Cool Stuff</a></li>
		<li <?php if($curpage == 'contact.php') {echo 'class="active"'; } ?>><a href="../../php-menu/details.php" >Details</a></li>
	</ul>
</div>