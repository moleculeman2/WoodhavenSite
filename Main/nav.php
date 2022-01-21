<div id='nav'>
	<div id="logo-bar">
		<div id="top-left-info" style="">
    		<ul>
    			<li>Telephone number: 888-888-8888</li>
    			<li>Address: 123 Oak Place, UT 84108</li>
    		</ul>
		</div>
		<div>
			<img id="top-logo" src="img/logo-temp.png" onload="setNavOffset()">
		</div>
		<div id="top-right-info">
			<a href="www.google.com">Book Appointment</a>
		</div>
	</div>
	<?php 
	   echo "<a ".((basename($_SERVER['PHP_SELF']) == 'catalog.php') ? "class='active' " : "")." href='catalog.php'>Products</a>";
	   if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) echo "<a ".
	       ((basename($_SERVER['PHP_SELF']) == 'index.php') ? "class='active' " : "")." href='index.php'>Login</a>";
	   if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) echo "<a href='logout.php'>Logout</a>";
	   if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) echo "<a ".
	       ((basename($_SERVER['PHP_SELF']) == 'create-account.php') ? "class='active' " : "")." href='create-account.php'>Create Account</a>";
	   if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) echo "<a ".
	       ((basename($_SERVER['PHP_SELF']) == 'cart.php') ? "class='active' " : "")." href='cart.php'>Cart</a>";
	?>
</div>
