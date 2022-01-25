
<div id='nav'>
	<div id="logo-bar">
		<div class='top-box' id="top-left-info">
    		<ul>
                <li>Email: admin@woodhavenatmillcreek.org</li>
    			<li>Phone: 801-251-6767</li>
    			<li>1398 E Luck Ln, Millcreek, UT 84106</li>
    		</ul>
		</div>
		<div class='top-box' >
			<h1 id="top-logo">Woodhaven at Millcreek<br><br>Psychotherapy Services</h1>
		</div>
		<div class='top-box' id="top-right-info">
			<a href="www.google.com">Book Appointment</a>
		</div>
	</div>


    <div id="links">
        <?php
            echo "<a ".((basename($_SERVER['PHP_SELF']) == 'index.php') ? "class='active' " : "")." href='index.php'>Home</a>";
            echo "<a ".((basename($_SERVER['PHP_SELF']) == 'about.php') ? "class='active' " : "")." href='about.php'>About</a>";
            echo "<div class='dropdown'>
                    <a ".((basename($_SERVER['PHP_SELF']) == 'therapists.php') ? "class='active' " : "")." href='therapists.php'>Therapists</a>
                    <div class='dropdown-content'>
                        <a href='kathy.php'>Kathy Wickersham</a>
                        <a href='eric.php'>Eric Stander</a>
                    </div>
                </div>";
            echo "<a ".((basename($_SERVER['PHP_SELF']) == 'services.php') ? "class='active' " : "")." href='services.php'>Services</a>";
        echo"<div class='dropdown'>
                <a ".((basename($_SERVER['PHP_SELF']) == 'resources.php') ? "class='active' " : "")." href='resources.php'>Resources</a>
                <div class='dropdown-content'>
                    <a href='act.php'>ACT</a>
                    <a href='mindfulness.php'>Mindfulness</a>
                    <a href='articles.php'>Articles</a>
                </div>
            </div>";
        ?>
    </div>
</div>




