<?php

echo "<link rel='stylesheet' type='text/css' href='facialRecognition.css'>\n";

echo "<h1>Facial Analysis Research</h1>";
include_once 'header.php';

if ($loggedin) echo <<<_END
<div id = "body">
		<h2>About Us</h2>
				<div id = "bodyText">
					<p id = "bodyPara">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
						 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
						 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
						 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
					</p>
				</div>
		<h2>The Team</h2>
				<div id = "teamText">
					<h3>Owen Bishop</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
					<h3>Nick Gent</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
					<h3>Alex Tsang</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
					<h3>Jhan Alarifi</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
				</div>
	</div>

	
	<div id = "footer" >
		<h3>Contact Details</h3>
			<p id = footerText> 
				Email: owen.bishop32@gmail.com <br>
				Telephone: 07768149819
			</p>
	</div>
_END;

else { echo <<<_END
<div id = "body">
		<h2>About Us</h2>
				<div id = "bodyText">
					<p id = "bodyPara">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
						 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
						 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
						 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
						abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
						 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
						 in culpa qui officia deserunt mollit anim id est laborum."
					</p>
				</div>
		<h2>The Team</h2>
				<div id = "teamText">
					<h3>Owen Bishop</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
					<h3>Nick Gent</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
					<h3>Alex Tsang</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
					<h3>Jhan Alarifi</h3>
						<img src="H:/Documents/Project/projProto/images/inserthere.jgp">
				</div>
	</div>

	
	<div id = "footer" >
		<h3>Contact Details</h3>
			<p id = footerText> 
				Email: owen.bishop32@gmail.com <br>
				Telephone: 07768149819
			</p>
	</div>
	
_END;
}
?>